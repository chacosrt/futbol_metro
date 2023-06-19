



$(document).ready(function() {
  toastr.options = { "closeButton": true, "debug": false, "newestOnTop": true, "progressBar": true, "positionClass": "toast-bottom-full-width", "preventDuplicates": true, "onclick": null,  "showDuration": "200", "hideDuration": "1000", "timeOut": "2000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut"}
  
  /* boton de salida */
  $('#btnSalidar').on('click', salgosistema);/* con eso hacemos que solo funcione el boton que se seleccione */
  function salgosistema(event) {
    $.ajax({
      url: 'salir/salgo',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,

    }).done(function(res) { if(res.status === 200) { window.location='index.php';  } })
    .fail(function(err) { toastr.error('Hubo un error en la petición', '¡Upss!'); })
  };

   /* SECCION PARA FORMATO DE RECLUTAMIENTO */

  /* obtenemos el concentrado de los formatos de recluitamiento */
  cargodocvi();
  function cargodocvi() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.listadoc');

    $.ajax({
      url: 'rh/cargovistadocrh',
      type: 'POST',
      dataType: 'json',
      cache: false,
      
      /* con esta linea mostramos el cargador de los formularios */
      beforeSend: function() { wrapper.waitMe(); }

    }).done(function(res) {
      
      if(res.status === 200) { wrapper.html(res.data); } 
      
      else { 
        toastr.error(res.msg, '¡Upss!');
        wrapper.html('');
      }

    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
      wrapper.html('');

    }).always(function() {
      wrapper.waitMe('hide');
    })
  }
 
 

  
  
});