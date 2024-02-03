

$(document).ready(async function() {  

  $(".usuario").text(sessionStorage.getItem('usuario'));
  $(".roles").text(sessionStorage.getItem('roles'));
  $(".bienvenido").text('Bienvenido '+sessionStorage.getItem('usuario'));

  if (sessionStorage.getItem('usuario') == null) {        

    window.location="../home";
   
  } 

  console.log("jquery-on")
  $('select').select2({
    closeOnSelect: false,
    tokenSeparators: [',']
  });

  // Verificar si el modal está abierto o cerrado
  function modalEstaAbierto() {
    return $('#showModal').hasClass('show'); // 'show' es la clase de Bootstrap para modal abierto
  }

  // Ejemplo de uso:
  if (!modalEstaAbierto()) {
      console.log('El modal está abierto.');
  } else {
      console.log('El modal está cerrado.');
      
  }

  $('.close-modal').on('click', reset_form);

  function reset_form(event) {
      $('.miTorneo')[0].reset();
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

  ///********************************************************************************************************** */
  $('#dias').on('change', select_dias);

  function select_dias(event) {

    console.log($( this ).val())

    // Obtener los valores seleccionados en un arreglo
    var valoresSeleccionados =$( this ).val();

    // Convertir los valores a texto y mostrarlos en el div
    var textoConvertido = "";
    for (var i = 0; i < valoresSeleccionados.length; i++) {
        var valor = valoresSeleccionados[i];
        var textoOpcion = $("#dias option[value='" + valor + "']").text();
        textoConvertido += textoOpcion + ",";
    }

    // Eliminar la última coma y espacio
    textoConvertido = textoConvertido.slice(0, -1);
    $("#dias_text").val(textoConvertido)
    console.log(textoConvertido)
  }  

  //*************************************************************************************************************** */
  $('#horarios').on('change', select_horarios);

  function select_horarios(event) {

    console.log($( this ).val())

    // Obtener los valores seleccionados en un arreglo
    var valoresSeleccionados =$( this ).val();

    // Convertir los valores a texto y mostrarlos en el div
    var textoConvertido = "";
    for (var i = 0; i < valoresSeleccionados.length; i++) {
        var valor = valoresSeleccionados[i];
        var textoOpcion = $("#horarios option[value='" + valor + "']").text();
        textoConvertido += textoOpcion + ",";
    }

    // Eliminar la última coma y espacio
    textoConvertido = textoConvertido.slice(0, -1);
    $("#horarios_text").val(textoConvertido)
    console.log(textoConvertido.replace(' ',''))
  }  

  //************************************************************************************************************************* */
  $('.miTorneo').on('submit', guarda_torneo);

  async function guarda_torneo(event) {
    event.preventDefault();
    var token = await get_token();
    //console.log(token)
    var headers = {
      'Content-Type': 'application/json', // Tipo de contenido de la solicitud
      'Authorization': 'Bearer ' + token, // Token de autorización, ajusta según tus necesidades
      'Access-Control-Allow-Origin': "*"
    };

    // Obtener los datos del formulario
    var formData = new FormData($("#miTorneo")[0]);

    // Crea un objeto vacío para almacenar los datos
    const formDataObject = {};

    // Itera sobre cada par clave/valor en FormData y agrega al objeto
    formData.forEach((value, key) => {
        formDataObject[key] = value;
    });
    
    var base64Image = $('#companylogo-img').attr('src');
     
    var data_torneo = {
      nombre_torneo: formDataObject["nombre"],
      temporada: formDataObject["temporada"],
      modalidad: formDataObject["modalidad"],
      lugar: formDataObject["lugar"],
      dias: formDataObject["dias_text"],
      horarios: formDataObject["horarios_text"],
      fecha_inicio: formDataObject["fecha_inicio"],
      fecha_fin: formDataObject["fecha_fin"],
      categoria: formDataObject["categoria"],
      img: '<img id="'+formDataObject["nombre"].replace(" ","_")+'" src="'+base64Image+'" alt="" class="avatar-xxs rounded-circle image_src object-cover">'
    };

    
    id = $('#id-edit').val();
    console.log(id)
    if (id != ''){
      var alpha_id = await alpha(id);
      url = 'http://18.119.102.18:8030/torneos' + '/' + alpha_id;
      title = 'Tu torneo se edito con exito';
    }else{
      url = 'http://18.119.102.18:8030/torneos/';
      title = 'Tu torneo se creo con exito';
    }
    
    // Realiza la solicitud POST usando Axios
    return await axios.post(url,data_torneo,{headers:headers})
    .then(async function (response) {
        // Maneja la respuesta exitosa
        
        //console.log(response.data["access_token"]);
        if(response.status == 201) {
          
          console.log(response.status)
          // Llamar a la función AJAX para obtener nuevos datos (reemplaza esto con tu lógica)
          var nuevosDatos = await get_torneos();

          // Limpiar los datos existentes en la tabla
          miTabla.clear();

          // Agregar nuevos datos a la tabla
          miTabla.rows.add(nuevosDatos);

          // Volver a dibujar la tabla
          miTabla.draw();

          $('#showModal').modal('hide');
          $('.miTorneo')[0].reset();
          $('select').select2();
          $('#companylogo-img').attr('src', '../assets/images/users/multi-user.jpg').show();
          if (!modalEstaAbierto()) {
            Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: title,
              showConfirmButton: false,
              timer: 1500
            });
          }
          
        }
    })
    .catch(function (error) {
        // Maneja errores
        console.error(error);
    }); 

  }

    //************************************************************************************************************************* */
    $('#delete-record').on('click', elimina_torneo);

    async function elimina_torneo(event) {
  
      event.preventDefault();
      
      var token = await get_token();
      console.log(token)
      var header = {
        'Content-Type': 'application/json', // Tipo de contenido de la solicitud
        'Authorization': 'Bearer ' + token, // Token de autorización, ajusta según tus necesidades
        'Access-Control-Allow-Origin': "*"
      };
  
      // Obtener los datos del formulario
      var val = $('#idTorneo').val();
      
      console.log(val);

      var alpha_id = await alpha(val);
  
      // Realiza la solicitud POST usando Axios
      return await axios.post('http://18.119.102.18:8030/torneos/' + alpha_id +'/delete',{id:alpha_id},{headers:header})
      .then(async function (response) {
          // Maneja la respuesta exitosa
          
          //console.log(response.data["access_token"]);
          if(response.status == 202) {
            
            console.log(response.status)
            // Llamar a la función AJAX para obtener nuevos datos (reemplaza esto con tu lógica)
            var nuevosDatos = await get_torneos();

            // Limpiar los datos existentes en la tabla
            miTabla.clear();

            // Agregar nuevos datos a la tabla
            miTabla.rows.add(nuevosDatos);

            // Volver a dibujar la tabla
            miTabla.draw();

            $('#deleteRecordModal').modal('hide');
            $('.miTorneo')[0].reset();
            
          }
      })
      .catch(function (error) {
          // Maneja errores
          console.error(error);
      }); 
  
  
    }

  /************************************************************************************************************ */
/*    $('.edit-item-btn').on('click', obtengo_torneo);
    async function obtengo_torneo(event){

      var value = $('#id-edit').val();
      var id_alpha = await alpha(value)
      console.log(value);
      $.ajax({
  
        url: 'obtengoTorneo' + '/' + value,
  
        type: 'POST',
  
        data: value,
  
        processData: false,  // Evitar el procesamiento de datos
        
        contentType: false, 
  
        success: function(res) {
  
          
          if(res.status === 200) {  
            
            console.log(res);
  
          }
           
        }
      }); 
    }  */
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
  return await axios.get('http://18.119.102.18:8030/admin/'+id+'/alpha_id',{headers:headers})
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
  return await axios.post('http://18.220.123.92:8020/janus/badge', data_token)
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
  return await axios.get('http://18.119.102.18:8030/torneos_list/',{ headers: headers })
  .then(function (response) {
      // Maneja la respuesta exitosa
      //console.log(response.data);
      var datos =response.data;
      console.log(datos);
      return datos;
  })
  .catch(function (error) {
      // Maneja errores
      console.error(error);
  });

}

//************************************************************************************************************************* */
var miTabla = $('#torneosTable').DataTable({

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
    search: 'Filtrado de _TOTAL_ registros',
    // Otros textos personalizados aquí
    paginate: {
      next: 'Siguiente', // Texto para el botón Next
      previous: 'Anterior' // Texto para el botón Previous
    }
  },

  ajax: async function(data, callback, settings) {
    // Obtener los datos mediante la función
    var datos = await get_torneos();
    console.log(datos)
    // Simular un pequeño retardo para simular la asincronía de una solicitud real
    setTimeout(function() {
        // Llamar a la función de retorno de llamada con los datos obtenidos
        callback({
            data: datos
        });
    }, 200);
  },

  columns: [
      { data: 'img', },
      { data: 'nombre_torneo' },
      { data: 'lugar' },
      { data: 'temporada' },
      { data: 'modalidad' },
      { data: 'dias' },
      { data: 'horarios' },
      { data: 'fecha_inicio' },
      { data: 'fecha_fin' },
      { data: 'categoria' },
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
    $('#torneosTable_filter').hide();
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
      $('#idTorneo').val(datosFila);
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
      $('#form-title').text('Editar Torneo')
      var datosFila = $(this).data('fila');
      $('#id-edit').val(datosFila);
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
      return await axios.get('http://18.119.102.18:8030/torneos/'+id_alpha+'/id',{ headers: headers })
      .then(function (response) {
          // Maneja la respuesta exitosa
          //console.log(response.data);
          var datos =response.data;
          id_img = datos.nombre_torneo.replace(' ','_');
          
          src_img = $("#"+id_img).attr('src');
          console.log(datos.dias);

          $('#companylogo-img').attr('src',src_img);
          $("#nombre").val(datos.nombre_torneo)
          $("#lugar").val(datos.lugar)
          $("#temporada").val(datos.temporada)
          $("#modalidad").val(datos.modalidad)
          $("#fecha_inicio").val(datos.fecha_inicio)
          $("#fecha_fin").val(datos.fecha_fin)
          $("#categoria").val(datos.categoria)
        
          $("#dias").val(datos.dias_select).select2();
          $("#horarios").val(datos.horarios_select).select2();
          $("#dias_text").val(datos.dias);
          $("#horarios_text").val(datos.horas);
          console.log(datos);
          return datos;
      })
      .catch(function (error) {
          // Maneja errores
          console.error(error);
      });
   
    }); 

  }

 
});
