/* para los datatable */
$(function () {
  $('#example1').DataTable()
  $('#example2').DataTable({ 'paging' : true,'lengthChange': false,'searching'   : false, 'ordering'    : true, 'info'        : true, 'autoWidth'   : false })
})

/* dar de baja el usuario */
$("#darbaja").on("show.bs.modal", function(event) {
        
    var button = $(event.relatedTarget); // Button that triggered the modal
    var recipient = button.data("unoo");
    var modal = $(this);
    modal.find(".modal-body #idUsuarioBaj").val(recipient);
});

/* dar de lata el usuario */
$("#daralta").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idPruebaAlta").val(recipient);
});

/* para eliminar el fondo */
$("#eliminar").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var dos = button.data("dos");
  var modal = $(this);
  modal.find(".modal-body #idPruebaEli").val(recipient);
  modal.find(".modal-body #archivoEli").val(dos);
  
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

  /* obtenemos el concentrado de acceso */
  cargaImg();
  function cargaImg() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.tblimg');

    $.ajax({
      url: 'portada/cargaImg',
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

  /* funcion para agregar nueva imagen */
  $('.nuevaImgpor').on('submit', nuevoporta);
  function nuevoporta(event) {
    event.preventDefault();
    var form    = $('.nuevaImgpor'),
    data        = new FormData($('.nuevaImgpor').get(0))
    // AJAX
    $.ajax({
      url: 'portada/nuimportada',
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
        $('#nuevaImagen').modal('hide');
        cargaImg();
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  
  /* para dar de baja el fondo */
  $('.bajafondo').on('submit', bajafondo);
  function bajafondo(event) {
    event.preventDefault();
    var form    = $('.bajafondo'),

    data        = new FormData(form.get(0))
  
    // AJAX
    $.ajax({
      url: 'portada/bajaportada',
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
        $('#darbaja').modal('hide');
        cargaImg();
        
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  
  /* dar de alta el usuario */
  $('.altafondo').on('submit', altafon);
  function altafon(event) {
    event.preventDefault();
    var form    = $('.altafondo'),
    data        = new FormData(form.get(0))

    // AJAX
    $.ajax({
      url: 'portada/altaPortada',
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
        $('#daralta').modal('hide');
        cargaImg();
        
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }

   
  /* eliminar fondo */
  $('.eliminarFondo').on('submit', elifondo);
  function elifondo(event) {
    event.preventDefault();
    var form    = $('.eliminarFondo'),
    data        = new FormData(form.get(0))

    // AJAX
    $.ajax({
      url: 'portada/eliportada',
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
        cargaImg();
        
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
      $('#eliminar').modal('hide');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  
  
});