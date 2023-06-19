/* eliminamos el analista */
$("#eliminarEmpresa").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var dos = button.data("dos");
  var modal = $(this);
  modal.find(".modal-body #idEmpresa").val(recipient);
  modal.find(".modal-body #archivo").val(dos);
});

$("#eliminarCliente").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idEmpCliente").val(recipient);
  
});

/* modal para editar */
$("#editarempresa").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var valor = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idEmpresa").val(valor);

  data        = new FormData($('.editoempreseeee').get(0))
    
  var wrapper = $('.editoelemnto');
  
  //data.push(['valor',valor]);
  
  $.ajax({
    url: 'clientes/obtengoinfo',
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
    } 
    

  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');

  }).always(function() {
    wrapper.waitMe('hide');
  })
    

});

$("#editarCliente").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var valor = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idEmpCliente").val(valor);

  data        = new FormData($('.editoclientess').get(0))
    
  var wrapper = $('.formaeditaclien');
  
  //data.push(['valor',valor]);
  
  $.ajax({
    url: 'clientes/obtengoinfoclien',
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
    url: 'clientes/cargoempesa',
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
    modal.find(".modal-body #idEmpCliente").val(recipient);
    modal.find(".modal-body #correo").val(dos);
});

/* baja en el sistema */
$("#bajasistema").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idEmpCliente").val(recipient);
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
  cargoempresa();
  function cargoempresa() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.listaempresa');

    $.ajax({
      url: 'clientes/cargoempesa',
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
  cargoempresas()
  function cargoempresas(){
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.conceempresa');

    $.ajax({
      url: 'clientes/cargoempresacat',
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
    var wrapper = $('.concecliente');

    $.ajax({
      url: 'clientes/cargocliente',
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
  $('.nuevamepresa').on('submit', nuevem);
  function nuevem(event) {
    event.preventDefault();
    var form    = $('.nuevamepresa'),

    data        = new FormData(form.get(0))
  
    // AJAX
    $.ajax({
      url: 'clientes/nuevamepresa',
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
        $('#nuevaEmpresa').modal('hide');
        cargoempresas();
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }

  /* generamos nuevo elemento */
  $('.nuevoclient').on('submit', nuevecli);
  function nuevecli(event) {
    event.preventDefault();
    var form    = $('.nuevoclient'),

    data        = new FormData(form.get(0))
  
    // AJAX
    $.ajax({
      url: 'clientes/nuevocliente',
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
        $('#nuevoCliente').modal('hide');
        cargoclientes();
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }

  /* eliminamos el analista */
  $('.eliminoempresa').on('submit', eliempresa);
  function eliempresa(event) {
    event.preventDefault();
    var form    = $('.eliminoempresa'),

    data        = new FormData(form.get(0))
  
    // AJAX
    $.ajax({
      url: 'clientes/eliempresa',
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
        $('#eliminarEmpresa').modal('hide');
        cargoempresas();
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }

  /* editamos la informacion */
  $('.editoempreseeee').on('submit', edielmenn);
  function edielmenn(event) {
    event.preventDefault();
    var form    = $('.editoempreseeee'),

    data        = new FormData(form.get(0))
  
    // AJAX
    $.ajax({
      url: 'clientes/editamosinfaciosn',
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
        $('#editarempresa').modal('hide');
        cargoempresas();
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }

  $('.editoclientess').on('submit', editoclien);
  function editoclien(event) {
    event.preventDefault();
    var form    = $('.editoclientess'),

    data        = new FormData(form.get(0))
  
    // AJAX
    $.ajax({
      url: 'clientes/editoclientss',
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
        $('#editarCliente').modal('hide');
        cargoclientes();
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  
  /* eliminamos el clienbte */
  $('.eliminocliente').on('submit', elclien);
  function elclien(event) {
    event.preventDefault();
    var form    = $('.eliminocliente'),

    data        = new FormData(form.get(0))
  
    // AJAX
    $.ajax({
      url: 'clientes/eliminarCliente',
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
        $('#eliminarCliente').modal('hide');
        cargoclientes();
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
      url: 'clientes/alatacorreo',
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
      
      
        toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
        form.trigger('reset');/* reiniciamos el formulario */
        $('#altasistema').modal('hide');
        cargoclientes();
      
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
      url: 'clientes/bajasistema',
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
        cargoclientes();
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  
  
});