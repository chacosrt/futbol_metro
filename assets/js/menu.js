

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

function salgosistema() {

  $.ajax({

    url: 'home/salir',

    type: 'POST',

    dataType: 'html',

    contentType: false,

    processData: false,

    cache: false,



  }).done(function(res) { 
    console.log(res)
    if(res.status === 200) {
       console.log("funcion completa");
       window.location='home/';  
      } 
    }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!'); 
      })

};





//////////////////////////////////////////////////////////////////////////////////



$(document).ready(function() {

  $('#regresoInicio').on('click', regresar);

  function regresar(event) {

    window.location='dash/'; 

  }  

});