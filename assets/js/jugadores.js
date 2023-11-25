

$(document).ready(function() {  

    console.log("jquery-on")
  
    obtiene_torneos();
  
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
        $('.miEquipo')[0].reset();
        $('select').select2();
        $('#companylogo-img').attr('src', '../assets/images/users/multi-user.jpg').show();
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
    $('.miEquipo').on('submit', guarda_equipo);
  
    function guarda_equipo(event) {
  
      event.preventDefault();
      id = $('#id-edit').val();
      console.log(id)
      if (id != ''){
        url = 'editaEquipo' + '/' + id;
        title = 'Tu equipo se edito con exito';
      }else{
        url = 'guardaEquipo';
        title = 'Tu equipo se creo con exito';
      }
  
      // Obtener los datos del formulario
      var formData = new FormData($("#miEquipo")[0]);
      
      console.log(formData);
  
      $.ajax({
  
        url: url,
  
        type: 'POST',
  
        data: formData,
  
        processData: false,  // Evitar el procesamiento de datos
        
        contentType: false, 
  
        success: function(res) {
  
          console.log(res);
          if(res.status === 200) {
  
            miTabla.ajax.reload();
            $('#showModal').modal('hide');
            $('.miEquipo')[0].reset();
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
           
        }
      }); 
  
  
    }
  
    //************************************************************************************************************************* */
    $('#delete-record').on('click', elimina_equipo);
  
    function elimina_equipo(event) {
  
      event.preventDefault();
  
      // Obtener los datos del formulario
      var val = $('#idEquipo').val();
      
      console.log(val);
  
      $.ajax({
  
        url: 'eliminaEquipo' + '/' + val,
  
        type: 'POST',
  
        data: val,
  
        processData: false,  // Evitar el procesamiento de datos
        
        contentType: false, 
  
        success: function(res) {
  
          console.log(res);
          if(res.status === 200) {
  
            miTabla.ajax.reload();
            $('#deleteRecordModal').modal('hide');
            $('.miEquipo')[0].reset();
  
          }
            
        }
      }); 
  
  
    }
  
    
    //************************************************************************************************************************* */
  
    function obtiene_torneos() {
  
  
      $.ajax({
  
        url: '../torneos/obtengoinfo',
  
        type: 'GET',
  
        processData: false,  // Evitar el procesamiento de datos
        
        contentType: false, 
  
        success: function(res) {
  
          var objetoJSON = $.parseJSON(res);
  
          console.log(objetoJSON[0]);
  
          $.each(objetoJSON, function(index, valor) {
  
            var select = $("#liga");
            var nuevaOpcion = $("<option></option>")
                .text(valor[1])
                .val(valor[0]);
            select.append(nuevaOpcion);
            console.log(valor);
          });
         
            
        }
      }); 
  
  
    }
  
    /************************************************************************************************************ */
     /*  $('.edit-item-btn').on('click', obtengo_torneo);
      function obtengo_torneo(event){
  
        var value = $('#id-edit').val();
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
      } */
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
      search: 'Filtrado de _TOTAL_ registros',
      // Otros textos personalizados aquí
      paginate: {
        next: 'Siguiente', // Texto para el botón Next
        previous: 'Anterior' // Texto para el botón Previous
      }
    },
  
    ajax: {
      url: 'obtengoinfo', // URL del script PHP para obtener los datos
      dataSrc: '' // Dejar en blanco para que DataTables entienda la estructura de los datos
    },
    columns: [
        { data: 'img_equipo', },
        { data: 'nombre' },
        { data: 'nombre_torneo' },
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
                            '<a class="edit-item-btn" href="#showModal" data-bs-toggle="modal" data-fila="' + row[0] + '"><i class="ri-pencil-fill align-bottom text-muted" ></i></a>'+
                        '</li>'+
                        '<li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Delete">'+
                            '<a class="remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal" data-fila="' + row[0] + '">'+
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
  
      miTabla.on('click', '.edit-item-btn', function() {
        // Obtener los datos de la fila correspondiente
        var datosFila = $(this).data('fila');
        $('#id-edit').val(datosFila);
  
        $.ajax({
    
          url: 'obtengoEquipo' + '/' + datosFila,
    
          type: 'POST',
    
          data: datosFila,
  
          dataType: 'json',
    
          processData: false,  // Evitar el procesamiento de datos
          
          contentType: false, 
    
          success: function(res) {
    
            datos = res[0];
            id_img = datos[1].replace(' ','_');
            
            src_img = $("#"+id_img).attr('src');
            console.log(datos);
  
            $('#companylogo-img').attr('src',src_img);
            $("#nombre").val(datos[1])
            $("#liga").val(datos[2]).select2();
            $("#delegado").val(datos[3]);
           /*  $.each(dias, function(index, value) {
              $('#resultado').append('<li>' + value + '</li>');
            }); */
  
          }
        }); 
     
      }); 
  
    }
  
   
  });