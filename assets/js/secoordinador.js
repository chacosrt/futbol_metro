/* para enviar al seguimiento */
function seguidetal(iduestudio){

  $("#idEstudioRef").val(iduestudio);
  
  data        = new FormData($('.referncia').get(0))
    
  $.ajax({
    url: 'estudios/seguimiento',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data: data,
    
    /* con esta linea mostramos el cargador de los formularios */

  }).done(function(res) {
    
    document.location.href = 'estudios/seguimientoVer'

  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');

  })
}

/* para ver la informacion del estudio */
$("#verinformacion").on("show.bs.modal", function(event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var valor = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idEstudio").val(valor);

  data        = new FormData($('.verinfoestudio').get(0))
    
  var wrapper = $('.estudioformver');
  
  //data.push(['valor',valor]);
  
  $.ajax({
    url: 'estudios/verinfoasigna',
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
  cargoasignados();
  function cargoasignados() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.asignados');

    $.ajax({
      url: 'estudios/cargoasignadocoo',
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


  /* caragmos los estudios terminados */
  cargoterminados();
  function cargoterminados() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.terminados');

    $.ajax({
      url: 'estudios/cargoterminadosejectu',
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

   /* estudios cancelados */
   cargocancelados();
   function cargocancelados() {
     /* seleccionamos el div en que vamos a modificar los valores */
     var wrapper = $('.cancelado');
 
     $.ajax({
       url: 'estudios/cargocanCon',
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