/* eliminamos el analista */
$("#eliminar").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idAnalista").val(recipient);
});

/* modal para editar */
$("#editar").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var valor = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idAnalista").val(valor);

  data        = new FormData($('.editoelem').get(0))
    
  var wrapper = $('.editoelemnto');
  
  //data.push(['valor',valor]);
  
  $.ajax({
    url: 'analista/obtengoinfo',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data: data,
    
    /* con esta linea mostramos el cargador de los formularios */
    beforeSend: function() { wrapper.waitMe(); }

  }).done(function(res) {
    
    if(res.status === 200) {  
      wrapper.html(res.data); 
      cargoclientesEdi();
      cargocoordinaedi();
      
    } 
    

  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');

  }).always(function() {
    wrapper.waitMe('hide');
  })
    

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


/* dalata en el sistema */
$("#altasistema").on("show.bs.modal", function(event) {
        
    var button = $(event.relatedTarget); // Button that triggered the modal
    var recipient = button.data("unoo");
    var dos = button.data("dos");
    var modal = $(this);
    modal.find(".modal-body #idAnalista").val(recipient);
    modal.find(".modal-body #correo").val(dos);
});

/* baja en el sistema */
$("#bajasistema").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idAnalista").val(recipient);
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
  cargoanalista();
  function cargoanalista() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.tblAnalistas');

    $.ajax({
      url: 'analista/cargoanalista',
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
  cargocoordina()
  function cargocoordina(){
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.selectcoordinadores');

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

  /* cargamos los cliente */
  cargoclientes();
  function cargoclientes(){
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.selectclioente');

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

  /* genamos nuevo analista */
  $('.nuevoanalista').on('submit', nuevoana);
  function nuevoana(event) {
    event.preventDefault();
    var form    = $('.nuevoanalista'),

    data        = new FormData(form.get(0))
  
    // AJAX
    $.ajax({
      url: 'analista/nuevoanalista',
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
        cargoanalista();
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }

  /* eliminamos el analista */
  $('.eliana').on('submit', elianan);
  function elianan(event) {
    event.preventDefault();
    var form    = $('.eliana'),

    data        = new FormData(form.get(0))
  
    // AJAX
    $.ajax({
      url: 'analista/elianalis',
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
        cargoanalista();
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }

  /* editamos la informacion */
  $('.editoelem').on('submit', edielmenn);
  function edielmenn(event) {
    event.preventDefault();
    var form    = $('.editoelem'),

    data        = new FormData(form.get(0))
  
    // AJAX
    $.ajax({
      url: 'analista/editamosinf',
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
        $('#editar').modal('hide');
        cargoanalista();
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
      url: 'analista/alatacorreo',
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
        cargoanalista();
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
      url: 'analista/bajasistema',
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
        cargoanalista();
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  
  
});