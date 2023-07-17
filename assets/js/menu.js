

//////////////////////////////////////////////////////////////////////////////////

//SECCION PARA MODALS

//////////////////////////////////////////////////////////////////////////////////

/* modal para eliminar */

$("#eliminar").on("show.bs.modal", function(event) {

        

  var button = $(event.relatedTarget); // Button that triggered the modal

  var recipient = button.data("unoo");

  var dos = button.data("dos");

  var modal = $(this);

  modal.find(".modal-body #idMenu").val(recipient);

  modal.find(".modal-body #dato").val(dos);

});



/* dar de baja la seccion */

$("#darbaja").on("show.bs.modal", function(event) {

        

  var button = $(event.relatedTarget); // Button that triggered the modal

  var recipient = button.data("unoo");

  var modal = $(this);

  modal.find(".modal-body #idMenu").val(recipient);

});



/* dar de alta seccion */

$("#daralta").on("show.bs.modal", function(event) {

        

  var button = $(event.relatedTarget); // Button that triggered the modal

  var recipient = button.data("unoo");

  var modal = $(this);

  modal.find(".modal-body #idMenu").val(recipient);

});


/* con eso hacemos que solo funcione el boton que se seleccione */






//////////////////////////////////////////////////////////////////////////////////



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