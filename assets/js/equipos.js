

$(document).ready(function() {  

  $(".usuario").text(sessionStorage.getItem('usuario'));
  $(".roles").text(sessionStorage.getItem('roles'));
  $(".bienvenido").text('Bienvenido '+sessionStorage.getItem('usuario'));
  $("#overlay").show();

  var table = $('#equiposTable').DataTable(); 
  table.column(2).search("Primera Fuerza").draw();

  if (sessionStorage.getItem('usuario') == null) {        

    window.location="../home";
   
  } 

  console.log("jquery-on")

  get_torneos();

  $('select').select2({
    closeOnSelect: false,
    tokenSeparators: [',']
  });

  // Verificar si el modal está abierto o cerrado
  function modalEstaAbierto() {
    return $('#showModal').hasClass('show'); // 'show' es la clase de Bootstrap para modal abierto
  }

  // Ejemplo de uso:
  $('#showModal').on('hidden.bs.modal', function (e) {
    // Aquí puedes ejecutar la acción que desees al cerrar el modal
    reset_form();
    console.log("modal cerrado")
  });
  $('.close-modal').on('click', reset_form);

  function reset_form(event) {
      $('.miEquipo')[0].reset();
      $('select').select2();
      $('#companylogo-img').attr('src', '../assets/images/users/multi-user.jpg').show();
      $("#form-title").text('Nuevo Torneo');
  }

  //*********************************************************************************************************** */

  $('#company-logo-input').change(function() {
    var archivo = this.files[0];
    console.log("imagen seleccionada")
    if (archivo) {
        var lector = new FileReader();

        lector.onload = function(e) {
            $('#companylogo-img')
                .attr('src', e.target.result)
                .show();
        }

        lector.readAsDataURL(archivo);
    } else {
        $('#companylogo-img').hide();
    }
  });

  //************************************************************************************************************************* */
  $('.miEquipo').on('submit', guarda_equipo);

  async function guarda_equipo(event) {

    event.preventDefault();
    $("#overlay").show();
    var token = await get_token();
    //console.log(token)
    var headers = {
      'Content-Type': 'application/json', // Tipo de contenido de la solicitud
      'Authorization': 'Bearer ' + token, // Token de autorización, ajusta según tus necesidades
      'Access-Control-Allow-Origin': "*"
    };

    // Obtener los datos del formulario
    var formData = new FormData($("#miEquipo")[0]);
    
    console.log(formData);

    // Crea un objeto vacío para almacenar los datos
    const formDataObject = {};

    // Itera sobre cada par clave/valor en FormData y agrega al objeto
    formData.forEach((value, key) => {
        formDataObject[key] = value;
    });
    
    var base64Image = $('#companylogo-img').attr('src');
     
    var data_equipo = {
      nombre: formDataObject["nombre"],
      liga: formDataObject["liga"],
      delegado: formDataObject["delegado"],
      estatus: formDataObject["estatus"],
      img_equipo: '<img id="'+formDataObject["nombre"].replace(" ","_")+'" src="'+base64Image+'" alt="" class="avatar-xxs rounded-circle image_src object-cover">'
    };

    
    id = $('#id-edit').val();
    console.log(id)
    if (id != ''){
      var alpha_id = await alpha(id);
      url = 'http://62.72.27.188:8020/equipos' + '/' + alpha_id;
      text = 'Tu equipo se edito correctamente';
    }else{
      url = 'http://62.72.27.188:8020/equipos/';
      text = 'Tu equipo se creo correctamente';
    }
    
    // Realiza la solicitud POST usando Axios
    return await axios.post(url,data_equipo,{headers:headers})
    .then(async function (response) {
        // Maneja la respuesta exitosa
        
        //console.log(response.data["access_token"]);
        if(response.status == 201) {
          
          console.log(response.status)
          // Llamar a la función AJAX para obtener nuevos datos (reemplaza esto con tu lógica)
          var nuevosDatos = await get_equipos();

          // Limpiar los datos existentes en la tabla
          miTabla.clear();

          // Agregar nuevos datos a la tabla
          miTabla.rows.add(nuevosDatos);

          // Volver a dibujar la tabla
          miTabla.draw();

          $('#showModal').modal('hide');
          $('.miEquipo')[0].reset();
          $('select').select2();
          $('#companylogo-img').attr('src', '../assets/images/users/multi-user.jpg').show();
          $("#overlay").hide();
          // Esperar 2 segundos (2000 milisegundos) antes de ejecutar la acción
          setTimeout(function () {
            // Acción que se ejecutará después de esperar 2 segundos
            if (!modalEstaAbierto()) {
            
              Swal.fire({
                
                position: 'center',
                icon: 'success',
                title: '!Exito¡',
                text: text,
                showConfirmButton: false,
                timer: 1500
              });
            }
          }, 500);
          
        }
    })
    .catch(function (error) {
        // Maneja errores
        console.error(error);
    }); 


  }

  //************************************************************************************************************************* */
  $('#delete-record').on('click', elimina_equipo);

  async function elimina_equipo(event) {

    event.preventDefault();
    $("#overlay").show();
    // Obtener los datos del formulario
    var token = await get_token();
      console.log(token)
      var header = {
        'Content-Type': 'application/json', // Tipo de contenido de la solicitud
        'Authorization': 'Bearer ' + token, // Token de autorización, ajusta según tus necesidades
        'Access-Control-Allow-Origin': "*"
      };
  
      // Obtener los datos del formulario
      var val = $('#idEquipo').val();
      
      console.log(val);

      var alpha_id = await alpha(val);
  
      // Realiza la solicitud POST usando Axios
      return await axios.post('http://62.72.27.188:8020/equipos/' + alpha_id +'/delete',{id:alpha_id},{headers:header})
      .then(async function (response) {
          // Maneja la respuesta exitosa
          
          //console.log(response.data["access_token"]);
          if(response.status == 202) {
            
            console.log(response.status)
            // Llamar a la función AJAX para obtener nuevos datos (reemplaza esto con tu lógica)
            var nuevosDatos = await get_equipos();

            // Limpiar los datos existentes en la tabla
            miTabla.clear();

            // Agregar nuevos datos a la tabla
            miTabla.rows.add(nuevosDatos);

            // Volver a dibujar la tabla
            miTabla.draw();

            $('#deleteRecordModal').modal('hide');
            $('.miEquipo')[0].reset();
            $("#overlay").hide();
            // Esperar 2 segundos (2000 milisegundos) antes de ejecutar la acción
            setTimeout(function () {
              // Acción que se ejecutará después de esperar 2 segundos
              if (!modalEstaAbierto()) {
              
                Swal.fire({
                  
                  position: 'center',
                  icon: 'success',
                  title: '!Exito¡',
                  text: 'El equipo se elimino correctamente',
                  showConfirmButton: false,
                  timer: 1500
                });
              }
            }, 500);
            
          }
      })
      .catch(function (error) {
          // Maneja errores
          console.error(error);
      });


  }

  

  /************************************************************************************************************************** */

  async function get_torneos(){
    //debugger
    var token = await get_token();
    //console.log(token)
    var headers = {
      'Content-Type': 'application/json', // Tipo de contenido de la solicitud
      'Authorization': 'Bearer ' + token, // Token de autorización, ajusta según tus necesidades
      'Access-Control-Allow-Origin': "*"
    };
    // Realiza la solicitud POST usando Axios
    return await axios.get('http://62.72.27.188:8020/torneos_list/',{ headers: headers })
    .then(function (response) {
        // Maneja la respuesta exitosa
        //console.log(response.data);
        var datos =response.data;
        $.each(datos, function(index, valor) {
          //console.log(index,valor)
          var select = $("#liga");
          var nuevaOpcion = $("<option></option>")
              .text(valor.nombre_torneo)
              .val(valor.id);
          select.append(nuevaOpcion);

          var select2 = $("#liga-filtro");
          var nuevaOpcion2 = $("<option></option>")
              .text(valor.nombre_torneo)
              .val(valor.nombre_torneo);
          select2.append(nuevaOpcion2);
          //console.log(valor); 
        });
    })
    .catch(function (error) {
        // Maneja errores
        console.error(error);
    });

  }

  //*********************************************************************************************************** */

  // Obtener las opciones de "Show entries" del DataTable
  var opcionesLength = miTabla.settings()[0].aLengthMenu;
  console.log(opcionesLength)
  // Agregar las opciones al elemento select personalizado
  var select = $('#numeroRegistros');
  opcionesLength.forEach(function(opcion) {
      select.append($('<option>', {
          value: opcion,
          text: opcion
      }));
  });

});

/************************************************************************************************************************** */

async function alpha(id){

  var token = await get_token();

  var headers = {
    'Content-Type': 'application/json', // Tipo de contenido de la solicitud
    'Authorization': 'Bearer ' + token, // Token de autorización, ajusta según tus necesidades
    'Access-Control-Allow-Origin': "*"
  };

  // Realiza la solicitud POST usando Axios
  return await axios.get('http://62.72.27.188:8020/admin/'+id+'/alpha_id',{headers:headers})
  .then(function (response) {
      // Maneja la respuesta exitosa
      //console.log(response.data["access_token"]);
      var token_resp = response.data["alpha_id"]
      
      return token_resp;
  })
  .catch(function (error) {
      // Maneja errores
      console.error(error);
  });

}

/************************************************************************************************************************** */

async function get_token(){

  var data_token = {
    sub: sessionStorage.getItem('email'),
    ttl: 43200,
    aud: "roni.dinossolutions.com",
    roles: sessionStorage.getItem('roles'),
    scope: "*"
  };

  //console.log(data_token.aud)

  // Realiza la solicitud POST usando Axios
  return await axios.post('http://janus.dinossolutions.com/badge', data_token)
  .then(function (response) {
      // Maneja la respuesta exitosa
      //console.log(response.data["access_token"]);
      var token_resp = response.data["access_token"]
      
      return token_resp;
  })
  .catch(function (error) {
      // Maneja errores
      console.error(error);
  });

}

/************************************************************************************************************************** */

async function get_equipos(){
  //debugger
  var token = await get_token();
  //console.log(token)
  var headers = {
    'Content-Type': 'application/json', // Tipo de contenido de la solicitud
    'Authorization': 'Bearer ' + token, // Token de autorización, ajusta según tus necesidades
    'Access-Control-Allow-Origin': "*"
  };
  // Realiza la solicitud POST usando Axios
  return await axios.get('http://62.72.27.188:8020/equipos_list/',{ headers: headers })
  .then(function (response) {
      // Maneja la respuesta exitosa
      //console.log(response.data);
      var datos =response.data;
  
      return datos;
  })
  .catch(function (error) {
      // Maneja errores
      console.error(error);
  });

}

//************************************************************************************************************************* */
var miTabla = $('#equiposTable').DataTable({

  searching: true,
  lengthChange: false,
  select:false,
  paging: true,
  dom: 'Bfrtip',
  buttons: [
    'copy', 'csv', 'excel', 'pdfHtml5', 'print',
    {
      extend: 'pdfHtml5',
      customize: function(doc) {
          // Configura las fuentes aquí
          doc.defaultStyle.font = 'Roboto'; // Utiliza la fuente Roboto
      }
  },
  ],
  language: {
    emptyTable: "No hay datos disponibles en la tabla",
    // Personalizar el texto "Showing [inicio] to [fin] of [total] entries"
    info: 'Mostrando _START_ a _END_ de _TOTAL_ registros',
    // Personalizar el texto "Filtering [n] entries"
    search: '(Filtrado de _TOTAL_ registros)',
    // Otros textos personalizados aquí
    paginate: {
      next: 'Siguiente', // Texto para el botón Next
      previous: 'Anterior' // Texto para el botón Previous
    }
  },

  ajax: async function(data, callback, settings) {
    // Obtener los datos mediante la función
    var datos = await get_equipos();
    //console.log(datos)
    // Simular un pequeño retardo para simular la asincronía de una solicitud real
    setTimeout(function() {
        // Llamar a la función de retorno de llamada con los datos obtenidos
        $("#overlay").hide();
        callback({
            data: datos
        });
    }, 200);
  },
  columnDefs: [
    {
        targets: 'text-center', // Clase CSS para centrar texto
        className: 'text-center', // Aplicar la clase CSS
        
    },
    // Agrega más objetos columnDefs según sea necesario
  ],
  columns: [
      { data: 'img_equipo', },
      { data: 'nombre' },
      { data: 'liga_equipo.nombre_torneo' },
      { data: 'delegado' },
      { data: 'estatus',
        render: function(data, type, row) {
          let status, className;
          switch (Number(data)) {
              case 1:
                status    = 'Activo';
                
              break;

              case 2:
                status    = 'Baja';
                
              break;
          }

          return status;
        }
      },
      {
        data: null,
        render: function(data, type, row) {
            // Generar HTML para los botones de acción
            return  '<ul class="list-inline gap-2 mb-0 text-center">'+                                                                
                     /* ' <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">'+
                          '<a href="javascript:void(0);" class="view-item-btn"><i class="ri-eye-fill align-bottom text-muted"></i></a>'+
                     ' </li>'+ */
                     ' <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">'+
                          '<a class="edit-item-btn" href="#showModal" data-bs-toggle="modal" data-fila="' + row.id + '"><i class="ri-pencil-fill align-bottom text-muted" ></i></a>'+
                      '</li>'+
                      '<li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Delete">'+
                          '<a class="remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal" data-fila="' + row.id + '">'+
                             ' <i class="ri-delete-bin-fill align-bottom text-muted"></i>'+
                         ' </a>'+
                      '</li>'+
                    '</ul>';
        }
    }
  ],

  columnDefs: [
    {
        targets: '_all',
        createdCell: function(td, cellData, rowData, row, col) {
          
            // Agregar atributos personalizados (por ejemplo, 'data-mi-atributo') a las celdas de las columnas
            $(td).addClass('text-center');
        }
    }
  ],

  lengthMenu: [5,10,15], // Opciones para "Show entries"
  pageLength: 5, // Cantidad de registros por página por defecto
  
  initComplete: function () {
    
    var select = $('#numeroRegistros');
    //$('td').addClass("text-center");
    //$('ul').addClass("text-center");
    $('#equiposTable_filter').hide();
    //miTabla.column(0).visible(false);
    $('.dt-buttons').hide();
    //$('.dataTables_paginate').hide();
    // Configurar evento para actualizar el número de registros por página al cambiar el select
    select.on('change', function() {
        var value = $(this).val();
        miTabla.page.len(value).draw();
        $(this).hide();
    });

    $('#tableSearch').on('keyup', function() {
      miTabla.search($(this).val()).draw();
    });

    miTabla.on('click', '.remove-item-btn', function() {
      // Obtener los datos de la fila correspondiente
      var datosFila = $(this).data('fila');
      $('#idEquipo').val(datosFila);
      console.log(datosFila);
   
    }); 

    $('#tabla_pdf').click(function() {
      miTabla.button('.buttons-pdf').trigger();
    });

    $('#tabla_excel').click(function() {
      miTabla.button('.buttons-excel').trigger();
    });

    $('#tabla_print').click(function() {
      miTabla.button('.buttons-print').trigger();
    });

    miTabla.on('click', '.edit-item-btn', async function() {
      // Obtener los datos de la fila correspondiente
      var datosFila = $(this).data('fila');
      $('#id-edit').val(datosFila);
      $('#form-title').text('Editar Torneo');
      var id_alpha = await alpha(datosFila)
      console.log(datosFila);

      var token = await get_token();
      //console.log(token)
      var headers = {
        'Content-Type': 'application/json', // Tipo de contenido de la solicitud
        'Authorization': 'Bearer ' + token, // Token de autorización, ajusta según tus necesidades
        'Access-Control-Allow-Origin': "*"
      };
      // Realiza la solicitud POST usando Axios
      return await axios.get('http://62.72.27.188:8020/equipos/'+id_alpha+'/id',{ headers: headers })
      .then(function (response) {
          // Maneja la respuesta exitosa
          //console.log(response.data);
          var datos =response.data;
          id_img = datos.nombre.replace(' ','_');
          
          src_img = $("#"+id_img).attr('src');
          //console.log(datos);

          $('#companylogo-img').attr('src',src_img);
          $("#nombre").val(datos.nombre)
          $("#liga").val(datos.liga).select2();
          $("#estatus").val(datos.estatus).select2();
          $("#delegado").val(datos.delegado)
          
          //console.log(datos);
          return datos;
      })
      .catch(function (error) {
          // Maneja errores
          console.error(error);
      });

    
   
    }); 

    // Escuchar cambios en el select
    $('#liga-filtro').on('change', function() {
      var filtro = $(this).val();
      //console.log(filtro)
      // Limpiar filtro actual
      miTabla.search('').columns().search('').draw();
      $(this).select2('close');
      //console.log(miTabla.column(1).data())
      // Aplicar nuevo filtro si no es "todos"
      if (filtro !== 'todos') {
          miTabla.column(2).search(filtro).draw();
          $(this).focus();
      }
    });

  }

 
});