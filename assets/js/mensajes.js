/* para eliminar el fondo */
$("#eliminar").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idMensaje").val(recipient);
  
});

/* para publicar el mensaje */
$("#publicar").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idMensaje").val(recipient);
  
});

/* para ocultar el mensaje */
$("#ocultar").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idMensaje").val(recipient);
  
});




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

  /* obtenemos el concentrado de los mensajes */
  cargamensaje();
  function cargamensaje() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.tblmensajes');

    $.ajax({
      url: 'rh/cargamensa',
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

  /* Agregamos el nuevo mensaje */
  $('.nuevomensja').on('submit', nuevomensj);
  function nuevomensj(event) {
    event.preventDefault();
    var form    = $('.nuevomensja'),
    data        = new FormData($('.nuevomensja').get(0))
    // AJAX
    $.ajax({
      url: 'rh/nuemensaj',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      beforeSend: function() { form.waitMe(); }
    }).done(function(res) {
      /* cuando se hace bien el movimiento */
      if(res.status === 200) { 
        toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
        form.trigger('reset'); /* reiniciamos el formulario */
        $('#nuevomensaje').modal('hide');
        cargamensaje();
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }

  /* eliminar mensaje */
  $('.eliminarelemento').on('submit', elimino);
  function elimino(event) {
    event.preventDefault();
    var form    = $('.eliminarelemento'),
    data        = new FormData(form.get(0))

    // AJAX
    $.ajax({
      url: 'rh/eliminomensj',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      beforeSend: function() {
        form.waitMe();
      }
    }).done(function(res) {
      /* cuando se hace bien el movimiento */
      if(res.status === 200) { 
        toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
        form.trigger('reset');/* reiniciamos el formulario */
        $('#eliminar').modal('hide');
        cargamensaje();
        
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
      $('#eliminar').modal('hide');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  
  /* publicamos mensaje */
  $('.publicarmen').on('submit', pubmen);
  function pubmen(event) {
    event.preventDefault();
    var form    = $('.publicarmen'),
    data        = new FormData(form.get(0))

    // AJAX
    $.ajax({
      url: 'rh/publicamos',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      beforeSend: function() {
        form.waitMe();
      }
    }).done(function(res) {
      /* cuando se hace bien el movimiento */
      if(res.status === 200) { 
        toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
        form.trigger('reset');/* reiniciamos el formulario */
        $('#publicar').modal('hide');
        cargamensaje();
        
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
      $('#publicar').modal('hide');
    }).always(function() {
      form.waitMe('hide');
    })
  }
   
  /* desactivamos el mensje */
  $('.desctivomen').on('submit', desmens);
  function desmens(event) {
    event.preventDefault();
    var form    = $('.desctivomen'),
    data        = new FormData(form.get(0))

    // AJAX
    $.ajax({
      url: 'rh/ocultomensaje',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      beforeSend: function() {
        form.waitMe();
      }
    }).done(function(res) {
      /* cuando se hace bien el movimiento */
      if(res.status === 200) { 
        toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
        form.trigger('reset');/* reiniciamos el formulario */
        $('#ocultar').modal('hide');
        cargamensaje();
        
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
      $('#ocultar').modal('hide');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  
  
  
});