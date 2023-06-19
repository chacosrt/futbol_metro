

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
  cargoUno();
  function cargoUno() {

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.camposUno');

    $.ajax({
      url: 'estudios/cargounoGen',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      
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
  }

  cargoDos();
  function cargoDos() {

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.camposDos');

    $.ajax({
      url: 'estudios/cargodosGen',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      
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
  }

  cargoTres();
  function cargoTres() {

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.campoTres');

    $.ajax({
      url: 'estudios/cargotresGen',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      
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
  }

  cargoCuatro();
  function cargoCuatro() {

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.campoCuatro');

    $.ajax({
      url: 'estudios/cargocuatroGen',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      
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
  }

  cargocinco();
  function cargocinco() {

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.campoCinco');

    $.ajax({
      url: 'estudios/cargocincoGen',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      
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
  }

  cargoseis();
  function cargoseis() {

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.campoSeis');

    $.ajax({
      url: 'estudios/cargoseisGen',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      
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
  }

  cargosiete();
  function cargosiete() {

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.campoSiete');

    $.ajax({
      url: 'estudios/cargosieteGen',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      
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
  }


  cargoOcho();
  function cargoOcho() {

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.campoOcho');

    $.ajax({
      url: 'estudios/cargoOchoGen',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      
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
  }

  cargonueve();
  function cargonueve() {

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.camponueve');

    $.ajax({
      url: 'estudios/cargonueveGen',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      
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
  }

  cargodiez();
  function cargodiez() {

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.campodiez');

    $.ajax({
      url: 'estudios/cargodiezGen',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      
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
  }

  cargoonce();
  function cargoonce() {

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.campoonce');

    $.ajax({
      url: 'estudios/cargoonceGen',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      
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
  }

  cargodoce();
  function cargodoce() {

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.campodoce');

    $.ajax({
      url: 'estudios/cargodoceGen',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      
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
  }

  cargotrece();
  function cargotrece() {

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.campotrece');

    $.ajax({
      url: 'estudios/cargotreceGen',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      
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
  }

  cargocatorce();
  function cargocatorce() {

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.campocatorce');

    $.ajax({
      url: 'estudios/cargocatorceGen',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      
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
  }

  cargoquince();
  function cargoquince() {

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.campoquince');

    $.ajax({
      url: 'estudios/cargoquinceGen',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      
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
  }

  cargodiezseis();
  function cargodiezseis() {

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.campodiezseis');

    $.ajax({
      url: 'estudios/cargodiezseisGen',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      
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
  }

  cargodiezsiete();
  function cargodiezsiete() {

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.campodiezsiete');

    $.ajax({
      url: 'estudios/cargodiezsieteGen',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      
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
  }

  cargodiezocho();
  function cargodiezocho() {

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.campodiezocho');

    $.ajax({
      url: 'estudios/cargodiezochoGen',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      
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
  }

  cargodieznueve();
  function cargodieznueve() {

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.campodieznueve');

    $.ajax({
      url: 'estudios/cargodieznueveGen',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      
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
  }

  cargoveinte();
  function cargoveinte() {

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.campoveinte');

    $.ajax({
      url: 'estudios/cargoveinteGen',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      
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
  }

  cargoveinteuno();
  function cargoveinteuno() {

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.campoveinteuno');

    $.ajax({
      url: 'estudios/cargoveinteunoGen',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      
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
  }

  cargoveinteunoo();
  function cargoveinteunoo() {

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.campoveinteunoo');

    $.ajax({
      url: 'estudios/cargoveinteunoGeno',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      
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
  }

  cargoveinteunooo();
  function cargoveinteunooo() {

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.campoveinteunooo');

    $.ajax({
      url: 'estudios/cargoveinteunoGenoo',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      
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
  }

  /* nuevos campos */
  cargonuevo();
  function cargonuevo(){

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.campoNuevo');

    $.ajax({
      url: 'estudios/cargonuevo',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,

    }).done(function(res) {
       wrapper.html(res.data); 
       
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
      wrapper.html('');

    })

  }

  cargonuevoDos();
  function cargonuevoDos(){

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.campoNuevoDos');

    $.ajax({
      url: 'estudios/cargonuevoDos',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,

    }).done(function(res) {
       wrapper.html(res.data); 
       
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
      wrapper.html('');

    })

  }

  cargonuevoTres();
  function cargonuevoTres(){

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.campoNuevoTres');

    $.ajax({
      url: 'estudios/cargonuevoTres',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,

    }).done(function(res) {
       wrapper.html(res.data); 
       
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
      wrapper.html('');

    })

  }

  cargonuevoCuatro();
  function cargonuevoCuatro(){

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.campoNuevoCuatro');

    $.ajax({
      url: 'estudios/cargonuevoCuatro',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,

    }).done(function(res) {
       wrapper.html(res.data); 
       
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
      wrapper.html('');

    })

  }

  cargonuevoCinco();
  function cargonuevoCinco(){

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.campoNuevoCinco');

    $.ajax({
      url: 'estudios/cargonuevoCinco',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,

    }).done(function(res) {
       wrapper.html(res.data); 
       
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
      wrapper.html('');

    })

  }

  cargonuevoSeis();
  function cargonuevoSeis(){

    data        = new FormData($('.referencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.campoNuevoSeis');

    $.ajax({
      url: 'estudios/cargonuevoSeis',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,

    }).done(function(res) {
       wrapper.html(res.data); 
       
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
      wrapper.html('');

    })

  }


  


  
  

 
   
  
  
   
    

  

  
  
  
  

  
  
});
