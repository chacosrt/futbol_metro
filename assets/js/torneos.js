

$(document).ready(function() {  

  console.log("jquery-on")

  $('select').select2({
    closeOnSelect: false
  });
  $('#dias').on('change', regresar);

  function regresar(event) {

    console.log($( this ).val())

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
