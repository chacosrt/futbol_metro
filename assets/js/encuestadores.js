/* eliminamos el analista */
$("#eliminar").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idEncuestadores").val(recipient);
});

/* modal para editar */
$("#ediElemen").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var valor = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idEncuestadores").val(valor);

  data        = new FormData($('.editarencuestador').get(0))
    
  var wrapper = $('.formencuestado');
  
  //data.push(['valor',valor]);
  
  $.ajax({
    url: 'encuestadores/obtengoinfo',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data: data,
    
    /* con esta linea mostramos el cargador de los formularios */
    beforeSend: function() { wrapper.waitMe(); }

  }).done(function(res) {
    
    
      wrapper.html(res.data); 
    
    

  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');

  }).always(function() {
    wrapper.waitMe('hide');
  })
    

});

/* dalata en el sistema */
$("#altasistema").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var dos = button.data("dos");
  var modal = $(this);
  modal.find(".modal-body #idEncuestadores").val(recipient);
  modal.find(".modal-body #correo").val(dos);
});

/* baja en el sistema */
$("#bajasistema").on("show.bs.modal", function(event) {
      
var button = $(event.relatedTarget); // Button that triggered the modal
var recipient = button.data("unoo");
var modal = $(this);
modal.find(".modal-body #idEncuestadores").val(recipient);
});



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
  cargoencuestadores();
  function cargoencuestadores() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.tblencuestadores');

    $.ajax({
      url: 'encuestadores/cargoencuestador',
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
  $('.nuevoencuestador').on('submit', nuevoencu);
  function nuevoencu(event) {
    event.preventDefault();
    var form    = $('.nuevoencuestador'),

    data        = new FormData(form.get(0))
  
    // AJAX
    $.ajax({
      url: 'encuestadores/nuevoencun',
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
        cargoencuestadores();
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }

  /* eliminamos el analista */
  $('.eliencuestado').on('submit', eliencus);
  function eliencus(event) {
    event.preventDefault();
    var form    = $('.eliencuestado'),

    data        = new FormData(form.get(0))
  
    // AJAX
    $.ajax({
      url: 'encuestadores/eliencuestador',
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
        cargoencuestadores();
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }

  /* edito elemento */
  $('.editarencuestador').on('submit', editencu);
  function editencu(event) {
    event.preventDefault();
    var form    = $('.editarencuestador'),

    data        = new FormData(form.get(0))
  
    // AJAX
    $.ajax({
      url: 'encuestadores/editencu',
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
        $('#ediElemen').modal('hide');
        cargoencuestadores();
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }

  /* para dar de baja un usuario */
  $('.altasistema').on('submit', altasis);
  function altasis(event) {
    event.preventDefault();
    var form    = $('.altasistema'),

    data        = new FormData(form.get(0))
  
    // AJAX
    $.ajax({
      url: 'encuestadores/alatacorreo',
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
        $('#altasistema').modal('hide');
        cargoencuestadores();
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  
  /* dar de alta el usuario */
  $('.bajausuario').on('submit', bajasist);
  function bajasist(event) {
    event.preventDefault();
    var form    = $('.bajausuario'),
    data        = new FormData(form.get(0))

    // AJAX
    $.ajax({
      url: 'encuestadores/bajasistema',
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
        $('#bajasistema').modal('hide');
        cargoencuestadores();
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  

  
});