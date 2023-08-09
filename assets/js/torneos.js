

$(document).ready(function() {  

  console.log("jquery-on")

  $('select').select2({
    closeOnSelect: false,
    tokenSeparators: [',', ' ']
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
        textoConvertido += textoOpcion + ", ";
    }

    // Eliminar la última coma y espacio
    textoConvertido = textoConvertido.slice(0, -2);
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
        textoConvertido += textoOpcion + ", ";
    }

    // Eliminar la última coma y espacio
    textoConvertido = textoConvertido.slice(0, -2);
    $("#horarios_text").val(textoConvertido)
    console.log(textoConvertido)
  }  

 //************************************************************************************************************************ */
  $('#tableSearch').on('keyup', function() {
    $('#torneosTable').miTabla.search($(this).val()).draw();
  });


//************************************************************************************************************************* */
  $('.miTorneo').on('submit', guarda_torneo);

  function guarda_torneo(event) {

    event.preventDefault();

    // Obtener los datos del formulario
    var formData = new FormData($("#miTorneo")[0]);
    
    console.log(formData);

    $.ajax({

      url: 'guardaTorneo',

      type: 'POST',

      data: formData,

      processData: false,  // Evitar el procesamiento de datos
      
      contentType: false, 

      success: function(res) {

        console.log(res);
        if(res.status === 200) {

          miTabla.ajax.reload(null, false);
          $('#showModal').modal('hide');
          $('.miTorneo')[0].reset();

        }
         
      }
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

//************************************************************************************************************************* */
var miTabla = $('#torneosTable').DataTable({

  searching: false,
  lengthChange: false,
  select:false,

  ajax: {
    url: 'obtengoinfo', // URL del script PHP para obtener los datos
    dataSrc: '' // Dejar en blanco para que DataTables entienda la estructura de los datos
  },
  columns: [
      { data: 'img' },
      { data: 'nombre_torneo' },
      { data: 'lugar' },
      { data: 'temporada' },
      { data: 'modalidad' },
      { data: 'dias' },
      { data: 'horarios' },
      { data: 'fecha_inicio' },
      { data: 'fecha_fin' },
      { data: 'categoria' },
  ],

  lengthMenu: [5,10,15], // Opciones para "Show entries"
  pageLength: 5, // Cantidad de registros por página por defecto
  initComplete: function () {
    
    var select = $('#numeroRegistros');
    $('td').addClass("text-center");
    // Configurar evento para actualizar el número de registros por página al cambiar el select
    select.on('change', function() {
        var value = $(this).val();
        miTabla.page.len(value).draw();
    });
  }

 
});
