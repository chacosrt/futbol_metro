/* eliminamos el analista */
$("#eliminar").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idAviso").val(recipient);
});


/* cargamos catalogos para edicion */
function cargoclientesEdi(){
  /* seleccionamos el div en que vamos a modificar los valores */
  var wrapper = $('.selectclioenteedi');

  $.ajax({
    url: 'analista/cargoclient',
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

/* cargamos los coordinadores */
function cargocoordinaedi(){
  /* seleccionamos el div en que vamos a modificar los valores */
  var wrapper = $('.selectcoordinadoresedi');

  $.ajax({
    url: 'analista/cargocordi',
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



$(document).ready(function() {

  /* opciones generales del toaster */
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

  /* obtenemos el concentrado de acceso */
  cargoavisos();
  function cargoavisos() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.tablaavisos');

    $.ajax({
      url: 'avisos/cargoavisos',
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

  /* cargamos los suauriops para avisos */
  cargoempelado();
  function cargoempelado(){
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.dirijidoselect');

    $.ajax({
      url: 'avisos/cargoempelado',
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

  /* nuevo aviso */
  $('.nuevoaviso').on('submit', nuevoavi);
  function nuevoavi(event) {
    event.preventDefault();
    var form    = $('.nuevoaviso'),

    data        = new FormData(form.get(0))
  
    // AJAX
    $.ajax({
      url: 'avisos/nuevoaviso',
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
        $('#nuevo').modal('hide');
        cargoavisos();
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }

  /* eliminamos el analista */
  $('.eliaviso').on('submit', eliavis);
  function eliavis(event) {
    event.preventDefault();
    var form    = $('.eliaviso'),

    data        = new FormData(form.get(0))
  
    // AJAX
    $.ajax({
      url: 'avisos/eliaviso',
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
        cargoavisos();
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }

  
});