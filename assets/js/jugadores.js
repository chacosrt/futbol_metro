

$(document).ready(function() {  

    console.log("jquery-on")

    $("#overlay").show();
    $(".usuario").text(sessionStorage.getItem('usuario'));
    $(".roles").text(sessionStorage.getItem('roles'));
    $(".bienvenido").text('Bienvenido '+sessionStorage.getItem('usuario'));
    

    get_torneos();

    if (sessionStorage.getItem('usuario') == null) {        

      window.location="../home";
     
    } 
  
    $('select').select2({
      closeOnSelect: false,
      tokenSeparators: [',']
    });
  
    // Verificar si el modal está abierto o cerrado
    function modalEstaAbierto() {
      return $('#showModal').hasClass('show'); // 'show' es la clase de Bootstrap para modal abierto
    }
  
    // Ejemplo de uso:
    // Ejemplo de uso:
    $('#showModal').on('hidden.bs.modal', function (e) {
      // Aquí puedes ejecutar la acción que desees al cerrar el modal
      reset_form();
      console.log("modal cerrado")
    });
  
    $('.close-modal').on('click', reset_form);
  
    function reset_form(event) {
        $('.newJugador')[0].reset();
        $('select').select2();
        $('#companylogo-img').attr('src', '../assets/images/users/multi-user.jpg').show();
        $('#delegado').attr("checked", false);
        $("#form-title").text('Nuevo Jugador');

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
  
  
 //*************************************************************************************************************** */
    $('#delegado').on('change', select_horarios);
  
    function select_horarios(event) {
  
      estado = $( this )[0].checked
      console.log('Checkbox está ' + (estado ? 'activado' : 'desactivado'));
      console.log(estado);
  
    }  

 //*************************************************************************************************************** */
    // Escuchar cambios en el select
    $('#liga').on('change', function() {
      
      $(this).select2('close');
      console.log($(this).val())
      //console.log(miTabla.column(1).data())
      // Aplicar nuevo filtro si no es "todos"
      get_equipos($(this).val());
      //$(this).select2();
    });

  //*************************************************************************************************************** */
    // Escuchar cambios en el select
    $('#equipo').on('change', function() {
      
      $(this).select2('close');
      //console.log(miTabla.column(1).data())
      // Aplicar nuevo filtro si no es "todos"
      //get_torneos();
    });
  
  //************************************************************************************************************************* */
  $('.newJugador').on('submit', guarda_jugador);

  async function guarda_jugador(event) {

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
    var formData = new FormData($("#newJugador")[0]);
    
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
      ap_p: formDataObject["app"],
      ap_m: formDataObject["apm"],
      edad: formDataObject["edad"],
      liga: parseInt(formDataObject["liga"]),
      equipo: parseInt(formDataObject["equipo"]),
      expediente: formDataObject["exp"],
      seccional: formDataObject["sec"],
      direccion: formDataObject["direccion"],
      telefono: formDataObject["tel"],
      delegado: $( "#delegado" )[0].checked,
      estatus: formDataObject["estatus"],
      img: '<img id="'+formDataObject["nombre"].replace(" ","_")+'" src="'+base64Image+'" alt="" class="avatar-xxs rounded-circle image_src object-cover">'
    };

    
    id = $('#id-edit').val();
    console.log(id)
    if (id != ''){
      var alpha_id = await alpha(id);
      url = 'http://18.119.102.18:8030/jugadores' + '/' + alpha_id;
      text = 'El jugador se edito correctamente';
    }else{
      url = 'http://18.119.102.18:8030/jugadores/';
      text = 'El jugador se registro correctamente';
    }
    
    // Realiza la solicitud POST usando Axios
    return await axios.post(url,data_equipo,{headers:headers})
    .then(async function (response) {
        // Maneja la respuesta exitosa
        
        //console.log(response.data["access_token"]);
        if(response.status == 201) {
          
          console.log(response.status)
          // Llamar a la función AJAX para obtener nuevos datos (reemplaza esto con tu lógica)
          var nuevosDatos = await get_jugadores();

          // Limpiar los datos existentes en la tabla
          miTabla.clear();

          // Agregar nuevos datos a la tabla
          miTabla.rows.add(nuevosDatos);

          // Volver a dibujar la tabla
          miTabla.draw();

          $('#showModal').modal('hide');
          $('.newJugador')[0].reset();
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
        var val = $('#idJugador').val();
        
        console.log(val);
  
        var alpha_id = await alpha(val);
    
        // Realiza la solicitud POST usando Axios
        return await axios.post('http://18.119.102.18:8030/jugadores/' + alpha_id +'/delete',{id:alpha_id},{headers:header})
        .then(async function (response) {
            // Maneja la respuesta exitosa
            
            //console.log(response.data["access_token"]);
            if(response.status == 202) {
              
              console.log(response.status)
              // Llamar a la función AJAX para obtener nuevos datos (reemplaza esto con tu lógica)
              var nuevosDatos = await get_jugadores();
  
              // Limpiar los datos existentes en la tabla
              miTabla.clear();
  
              // Agregar nuevos datos a la tabla
              miTabla.rows.add(nuevosDatos);
  
              // Volver a dibujar la tabla
              miTabla.draw();
  
              $('#deleteRecordModal').modal('hide');
              $('.newJugador')[0].reset();
              $("#overlay").hide();
              // Esperar 2 segundos (2000 milisegundos) antes de ejecutar la acción
              setTimeout(function () {
                // Acción que se ejecutará después de esperar 2 segundos
                if (!modalEstaAbierto()) {
                
                  Swal.fire({
                    
                    position: 'center',
                    icon: 'success',
                    title: '!Exito¡',
                    text: 'El jugador se elimino correctamente',
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
    return await axios.get('http://18.119.102.18:8030/torneos_list/',{ headers: headers })
    .then(function (response) {
        // Maneja la respuesta exitosa
        //console.log(response.data);
        var select = $("#liga");
        var datos =response.data;
        select.innerHTML = "";
        $.each(datos, function(index, valor) {
          //console.log(index,valor)
          
          var nuevaOpcion = $("<option></option>")
              .text(valor.nombre_torneo)
              .val(valor.id);
          select.append(nuevaOpcion);

          var select2 = $("#liga-filtro");
          var nuevaOpcion2 = $("<option></option>")
              .text(valor.nombre_torneo)
              .val(valor.nombre_torneo);
          select2.append(nuevaOpcion2);

        });
        var id = $("#liga").val()
        get_equipos(id); 
        //select.select2();
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

  async function get_equipos(id){
    //debugger
    var token = await get_token();

    var alpha_id = await alpha(id);
    //console.log(token)
    var headers = {
      'Content-Type': 'application/json', // Tipo de contenido de la solicitud
      'Authorization': 'Bearer ' + token, // Token de autorización, ajusta según tus necesidades
      'Access-Control-Allow-Origin': "*"
    };
    // Realiza la solicitud POST usando Axios
    return await axios.get('http://18.119.102.18:8030/equipos/'+alpha_id+'/id_torneo',{ headers: headers })
    .then(function (response) {
      var datos =response.data;
      var select = $("#equipo");
      select.empty();
      $.each(datos, function(index, valor) {
        //console.log(index,valor)
        
        var nuevaOpcion = $("<option></option>")
            .text(valor.nombre)
            .val(valor.id);
        select.append(nuevaOpcion);

        var select2 = $("#liga-filtro");
        var nuevaOpcion2 = $("<option></option>")
            .text(valor.nombre_torneo)
            .val(valor.nombre_torneo);
        select2.append(nuevaOpcion2);
        //console.log(valor); 
      });
      //select.select2();
    })
    .catch(function (error) {
        // Maneja errores
        console.error(error);
    });

  }

  /************************************************************************************************************************** */

  async function get_jugadores(){
    
    var token = await get_token();
    //console.log(token)
    var headers = {
      'Content-Type': 'application/json', // Tipo de contenido de la solicitud
      'Authorization': 'Bearer ' + token, // Token de autorización, ajusta según tus necesidades
      'Access-Control-Allow-Origin': "*"
    };

    // Realiza la solicitud POST usando Axios
    return await axios.get('http://18.119.102.18:8030/jugadores_list/',{ headers: headers })
    .then(function (response) {
        // Maneja la respuesta exitosa
        console.log(response.status);
        
        var datos =response.data;
    
        return datos;
    })
    .catch(function (error) {
        // Maneja errores
        console.error(error);
        var datos =[];
        return datos;
    });

  }
  
  //************************************************************************************************************************* */
  var miTabla = $('#jugadoresTable').DataTable({
  
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
      var datos = await get_jugadores();
      $("#overlay").show();
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
        { data: 'img'},
        { data: 'nombre_completo' },
        { data: 'edad' },
        { data: 'equipo_jugador.liga_equipo.nombre_torneo' },
        { data: 'equipo_jugador.nombre' },
        /* { data: 'dorsal' }, */
        { data: 'expediente' },
        { data: 'seccional' },
        { data: 'direccion' },
        { data: 'telefono' },
        { data: 'delegado',
          render: function(data, type, row) {
            let status, className;
            switch (data) {
                case true:
                  status    = 'Si';
                  
                break;
  
                case false:
                  status    = 'No';
                  
                break;
            }
  
            return status;
          }
        },
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
      $('#jugadoresTable_filter').hide();
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
        $('#idJugador').val(datosFila);
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
        // Obtener los datos de la fila correspondiente
        var datosFila = $(this).data('fila');
        $('#id-edit').val(datosFila);
        $('#form-title').text('Editar Jugador');
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
        return await axios.get('http://18.119.102.18:8030/jugadores/'+id_alpha+'/id',{ headers: headers })
        .then(async function (response) {
            // Maneja la respuesta exitosa
            //console.log(response.data);
            var datos =response.data;
            id_img = datos.nombre.replace(' ','_');
            
            src_img = $("#"+id_img).attr('src');
            //console.log(datos);

            $('#companylogo-img').attr('src',src_img);
            $("#nombre").val(datos.nombre)
            $("#app").val(datos.ap_p)
            $("#apm").val(datos.ap_m)
            $("#edad").val(datos.edad)
            $("#exp").val(datos.expediente)
            $("#sec").val(datos.seccional)
            $("#direccion").val(datos.direccion)
            $("#tel").val(datos.telefono)
            $("#liga").val(datos.liga).select2();
          
            var equipos = await get_equipos(datos.liga);
            $("#equipo").val(datos.equipo).select2();
            $("#estatus").val(datos.estatus).select2();

            if(datos.delegado == true){
              $("#delegado").attr("checked", true);
            }else{
              $("#delegado").attr("checked", false);
            }
            
            
            //console.log(datos);
            return datos;
        })
        .catch(function (error) {
            // Maneja errores
            console.error(error);
        });

     
      }); 
  
    }
  
   
  });

