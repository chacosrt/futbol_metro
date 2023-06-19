
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


 $(document).ready(function() {
  
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

  /* terminados */
  cargoTerminados();
  function cargoTerminados() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.numterminado');

    $.ajax({
      url: 'panel/numterminados',
      type: 'POST',
      dataType: 'json',
      cache: false,
      beforeSend: function() { wrapper.waitMe(); }
    }).done(function(res) {

      $.each(res.data, function( index, value ) {
        var identidicador = value.total;
        wrapper.html(identidicador);
      });
      

    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
      wrapper.html('');

    }).always(function() {
      wrapper.waitMe('hide');
    })
  }

  /* solicitados */
  cargosolicitado();
  function cargosolicitado() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.numsolicitados');

    $.ajax({
      url: 'panel/numsolicitados',
      type: 'POST',
      dataType: 'json',
      cache: false,
      beforeSend: function() { wrapper.waitMe(); }
    }).done(function(res) {

      $.each(res.data, function( index, value ) {
        var identidicador = value.total;
        wrapper.html(identidicador);
      });
      

    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
      wrapper.html('');

    }).always(function() {
      wrapper.waitMe('hide');
    })
  }

  /* proceso */
  cargoproceso();
  function cargoproceso() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.numproceso');

    $.ajax({
      url: 'panel/numproceso',
      type: 'POST',
      dataType: 'json',
      cache: false,
      beforeSend: function() { wrapper.waitMe(); }
    }).done(function(res) {

      $.each(res.data, function( index, value ) {
        var identidicador = value.total;
        wrapper.html(identidicador);
      });
      

    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
      wrapper.html('');

    }).always(function() {
      wrapper.waitMe('hide');
    })
  }

  /* cancelado */
  cargocancelados();
  function cargocancelados() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.numcancelados');

    $.ajax({
      url: 'panel/numcancelado',
      type: 'POST',
      dataType: 'json',
      cache: false,
      beforeSend: function() { wrapper.waitMe(); }
    }).done(function(res) {

      $.each(res.data, function( index, value ) {
        var identidicador = value.total;
        wrapper.html(identidicador);
      });
      

    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
      wrapper.html('');

    }).always(function() {
      wrapper.waitMe('hide');
    })
  }

  /* buscamos el estudio desde la portada */
  $('.buscadorPortada').on('submit', buscamos);
   function buscamos(event) {

    var wrapper = $('.resultadoBusqu');    
 
     event.preventDefault();
     var form    = $('.buscadorPortada');

     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/busqeudaportada',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
        
        $('#veoresul').css("display", "block");
        wrapper.html(res.data);
 
      }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
     })
     
   }

  

    
});