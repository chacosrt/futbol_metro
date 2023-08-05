

$(document).ready(function() {  

  console.log("jquery-on")

  $('select').select2({
    closeOnSelect: false,
    tokenSeparators: [',', ' ']
  });

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
    $("#dias_text").val(textoConvertido.text())

  }  

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
    $("#horarios_text").val(textoConvertido.text())

  }  

  var miTabla = $('#torneosTable').DataTable({

    searching: false,
    lengthMenu: false,

    columnDefs: [
      {
          targets: [0], // Índice de la columna que deseas ocultar (comienza en 0)
          visible: false, // Ocultar la columna
          
      }
    ]
  });

  $('#tableSearch').on('keyup', function() {
    $('#torneosTable').miTabla.search($(this).val()).draw();
  });

/*   $('.salir').on('click', salgosistema);

  
  function salgosistema() {

    $.ajax({

      url: 'salir',

      type: 'POST',

      dataType: 'html',

      contentType: false,

      processData: false,

      cache: false,

      success: function(data) {

        console.log(data);
        window.location= '../home';  
         
      }
    });


  }; */


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

});
