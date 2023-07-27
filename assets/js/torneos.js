

$(document).ready(function() {  

  console.log("jquery-on")

  $('select').select2({
    closeOnSelect: false
  });
  $('#dias').on('change', regresar);

  function regresar(event) {

    console.log($( this ).val())

  }  

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


  $('.form-torneo').on('submit', guarda_torneo);

  function guarda_torneo(event) {

    event.preventDefault();

    // Obtener los datos del formulario
    const datosFormulario = $(this).serialize();
    
    console.log(datosFormulario);

    $.ajax({

      url: 'guardaTorneo',

      type: 'POST',

      data: datosFormulario,

      cache: false,

      success: function(data) {

        console.log(data);
         
      }
    }); 


  }

});
