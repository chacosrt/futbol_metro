$(document).ready(async function() {  

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
        $('.miPartido')[0].reset();
        $('select').select2();
        $('#companylogo-img').attr('src', '../assets/images/users/multi-user.jpg').show();
        $('#delegado').attr("checked", false);
        $("#form-title").text('Nuevo Jugador');

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
    $('.select_form').on('change', function() {
      
      $(this).select2('close');
      //console.log(miTabla.column(1).data())
      // Aplicar nuevo filtro si no es "todos"
      //get_torneos();
    });
  
  //************************************************************************************************************************* */
  

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
    return await axios.get('https://apis.dinossolutions.com/roni/admin/'+id+'/alpha_id',{headers:headers})
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
    return await axios.post('https://apis.dinossolutions.com/janus/badge', data_token)
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
    return await axios.get('https://apis.dinossolutions.com/roni/torneos_list/',{ headers: headers })
    .then(function (response) {
        // Maneja la respuesta exitosa
        //console.log(response.data);
        var select = $("#liga");
        var select2 = $("#liga-filtro");
        var datos =response.data;
        select.empty();
        select2.empty();
        $.each(datos, function(index, valor) {
          //console.log(index,valor)
          
          var nuevaOpcion = $("<option></option>")
              .text(valor.nombre_torneo)
              .val(valor.id);
          select.append(nuevaOpcion);

          
          var nuevaOpcion2 = $("<option></option>")
              .text(valor.nombre_torneo)
              .val(valor.id);
          select2.append(nuevaOpcion2);

        });
        var id = $("#liga").val()
        //get_jornadas(id);
        //get_equipos(id); 
        return datos
        //select.select2();
    })
    .catch(function (error) {
        // Maneja errores
        console.error(error);
    });

  } 


  /************************************************************************************************************************** */

  async function get_posiciones(id){
    
    var token = await get_token();    

    if(id == null){

        var torneos = await get_torneos();

        id = torneos[0].id

        var temporada = torneos[0].temporada
        
        $('.temp-titulo').text(' ('+temporada+')')
    }

    var alpha_id = await alpha(id);
    //console.log(token)
    var headers = {
      'Content-Type': 'application/json', // Tipo de contenido de la solicitud
      'Authorization': 'Bearer ' + token, // Token de autorización, ajusta según tus necesidades
      'Access-Control-Allow-Origin': "*"
    };

    // Realiza la solicitud POST usando Axios
    return await axios.get('https://apis.dinossolutions.com/roni/posiciones/'+alpha_id+'/list',{ headers: headers })
    .then(function (response) {
        // Maneja la respuesta exitosa
        console.log(response.status);
        
        var datos =response.data;

        var temporada = datos[0].temporada
        
        $('.temp-titulo').text(' ('+temporada+')')
    
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
  var miTabla = $('#partidosTable').DataTable({
  
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
      var id =  null
      var datos = await get_posiciones(id);
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
    
        { data: null,
          render: function (data, type, row, meta) {
            return meta.row + 1; // Devuelve el número de fila + 1 como número consecutivo
            }
        },
        { data: null,
            render: function(data, type, row) {
                // Generar HTML para los botones de acción
                return  row.equipo_tabla.img_equipo+' '+row.equipo_tabla.nombre;
            } 
        },
        { data: 'juegos_jugados'},
        { data: 'juegos_ganados' },
        { data: 'juegos_empatados' },
        { data: 'juegos_perdidos' },
        { data: 'goles_favor'},
        { data: 'goles_contra'},        
        { data: 'diferencia_goles'},
        { data: 'puntos' },           
        //{
        //  data: null,
        //  render: function(data, type, row) {
        //      // Generar HTML para los botones de acción
        //      return  '<ul class="list-inline gap-2 mb-0 text-center">'+                                                                
        //               /* ' <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">'+
        //                    '<a href="javascript:void(0);" class="view-item-btn"><i class="ri-eye-fill align-bottom text-muted"></i></a>'+
        //               ' </li>'+ */
        //               ' <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">'+
        //                    '<a class="edit-item-btn" href="#showModal" data-bs-toggle="modal" data-fila="' + row.id + '"><i class="ri-pencil-fill align-bottom text-muted" ></i></a>'+
        //                '</li>'+
        //                '<li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Delete">'+
        //                    '<a class="remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal" data-fila="' + row.id + '">'+
        //                       ' <i class="ri-delete-bin-fill align-bottom text-muted"></i>'+
        //                   ' </a>'+
        //                '</li>'+
        //              '</ul>';
        //  }
        //}
    ],
  
    columnDefs: [
      {
          targets: '_all',
          createdCell: function(td, cellData, rowData, row, col) {
              if (col == 1){
                $(td).addClass('text-left');
              }else{
                $(td).addClass('text-center');
              }
              // Agregar atributos personalizados (por ejemplo, 'data-mi-atributo') a las celdas de las columnas
              
          }
      }
    ],
  
    lengthMenu: [5,10,15], // Opciones para "Show entries"
    pageLength: 10, // Cantidad de registros por página por defecto

    drawCallback: function (settings) {
      var api = this.api();
      var $table = $(api.table().node());
      
      if ($table.hasClass('cards')) {

         // Create an array of labels containing all table headers
         var labels = [];
         $('thead th', $table).each(function () {
            labels.push($(this).text());
         });

         // Add data-label attribute to each cell
         $('tbody tr', $table).each(function () {
            $(this).find('td').each(function (column) {
               $(this).attr('data-label', labels[column]);
            });
         });

         var max = 0;
         $('tbody tr', $table).each(function () {
            max = Math.max($(this).height(), max);
         }).height(max);

      } else {
         // Remove data-label attribute from each cell
         $('tbody td', $table).each(function () {
            $(this).removeAttr('data-label');
         });

         $('tbody tr', $table).each(function () {
            $(this).height('auto');
         });
      }
   },
    
    initComplete: function () {   
      
      var select = $('#numeroRegistros');
      //$('td').addClass("text-center");
      //$('ul').addClass("text-center");
      $('#partidosTable_filter').hide();
      //miTabla.column(0).visible(false);
      $('.dt-buttons').hide();
      //$('.dataTables_paginate').hide();
      // Configurar evento para actualizar el número de registros por página al cambiar el select
      select.on('change', function() {
          var value = $(this).val();
          miTabla.page.len(value).draw();
          $(this).hide();
      });

      //miTabla.column(5).search($('#liga-filtro option:selected').text()).column(3).search($('#jornada-filtro').val()).draw();
      $('.liga-titulo').text($('#liga-filtro option:selected').text())
      
  
      $('#tableSearch').on('keyup', function() {
        miTabla.search($(this).val()).draw();
      });
  
      miTabla.on('click', '.remove-item-btn', function() {
        // Obtener los datos de la fila correspondiente
        var datosFila = $(this).data('fila');
        $('#idPartido').val(datosFila);
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

      $('#cv').click(function(e, dt, node) {
        $(miTabla.table().node()).toggleClass('cards');
               $('.fa', node).toggleClass(['fa-table', 'fa-id-badge']);

               miTabla.draw('page');
      });
  
      $('#liga-filtro').on('change', async function() {
        var filtro = $('#liga-filtro option:selected').text();
        $('.liga-titulo').text($('#liga-filtro option:selected').text())
        console.log(filtro)
        // Limpiar filtro actual
        //miTabla.search('').columns().search('').draw();
        $(this).select2('close');
        $("#overlay").show();
        //console.log(miTabla.column(1).data())
        // Aplicar nuevo filtro si no es "todos"        

        id = $('#liga-filtro option:selected').val()
        console.log(id)
        var nuevosDatos = await get_posiciones(id);

        // Limpiar los datos existentes en la tabla
        miTabla.clear();

        // Agregar nuevos datos a la tabla
        miTabla.rows.add(nuevosDatos);

        // Volver a dibujar la tabla
        miTabla.draw();
        $("#overlay").hide();
    
      });

      /* $('#jornada-filtro').on('change', function() {
        var filtro = $('#liga-filtro option:selected').text();
        $('.liga-titulo').text($('#liga-filtro option:selected').text())
        console.log(filtro)
        // Limpiar filtro actual
        miTabla.search('').columns().search('').draw();
        $(this).select2('close');
        //console.log(miTabla.column(1).data())
        // Aplicar nuevo filtro si no es "todos"
        if (filtro !== 'todos') {
            
            miTabla.column(5).search(filtro).column(3).search($('#jornada-filtro').val()).draw();
            $(this).focus();
            miTabla.order([3, 'desc']).draw();
            var temporada = miTabla.cell(0, 9).data();
            var jornada = $('#jornada-filtro').val();
            $('.temp-titulo').text('Jornada '+jornada + ' ('+temporada+')')
            
        }
      }); */
  
    }

    
  
   
  });