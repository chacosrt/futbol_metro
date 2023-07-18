$('select').selectpicker();

$(document).ready(function() {  

  $('#regresoInicio').on('click', regresar);

  function regresar(event) {

    window.location='dash/'; 

  }  

  $('.salir').on('click', salgosistema);

  
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


  };

});