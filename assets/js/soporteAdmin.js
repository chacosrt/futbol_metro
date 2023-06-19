/* para los datatable */
$(function () {
  $('#example1').DataTable()
  $('#example2').DataTable({ 'paging' : true,'lengthChange': false,'searching'   : false, 'ordering'    : true, 'info'        : true, 'autoWidth'   : false })
})

/* reponde al admin */
$("#respuestaadmin").on("show.bs.modal", function(event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("uno");
  var modal = $(this);
  modal.find(".modal-body #idSoporteRes").val(recipient);
});

/* para ver las respuestas del historial en el modal */
$("#respuesta1").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var valor = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idensop").val(valor);
  data        = new FormData($('.forverres1').get(0))
    
  var wrapper = $('.resver1');
  
  //data.push(['valor',valor]);
  
  $.ajax({
    url: 'soporte/verrespuestas',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data: data,
    
    /* con esta linea mostramos el cargador de los formularios */
    beforeSend: function() { wrapper.waitMe(); }

  }).done(function(res) {
    
    if(res.status === 200) {  wrapper.html(res.data); } 
    
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
});

$("#respuesta2").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var valor = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idensop").val(valor);
  data        = new FormData($('.forverres2').get(0))
    
  var wrapper = $('.resver2');
  
  //data.push(['valor',valor]);
  
  $.ajax({
    url: 'soporte/verrespuestas',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data: data,
    
    /* con esta linea mostramos el cargador de los formularios */
    beforeSend: function() { wrapper.waitMe(); }

  }).done(function(res) {
    
    if(res.status === 200) {  wrapper.html(res.data); } 
    
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
});

/* dar de lata el usuario */
$("#daralta").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idPruebaAlta").val(recipient);
});

/* modal para cancelar el ticket */
$("#cancelar").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("dos");
  var modal = $(this);
  modal.find(".modal-body #idSoporteCan").val(recipient);
});

/* modal para terminar el ticket */
$("#terminartic").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("tres");
  var modal = $(this);
  modal.find(".modal-body #idSoporteTer").val(recipient);
});

/* modal para eliminar la pregunta frecuente*/
$("#elipregun").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("cuatro");
  var modal = $(this);
  modal.find(".modal-body #idPreguntaTe").val(recipient);
});



$(document).ready(function() {
  /* opciones generales del toaster */
  toastr.options = { "closeButton": true, "debug": false, "newestOnTop": true, "progressBar": true, "positionClass": "toast-bottom-full-width", "preventDuplicates": true, "onclick": null,  "showDuration": "200", "hideDuration": "1000", "timeOut": "2000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut"}
  
   /* cargamos el modulo de preguntas frecuentas */
   cargaTickt();
   function cargaTickt() {
     /* seleccionamos el div en que vamos a modificar los valores */
     var wrapper = $('.tsoporte');
 
     $.ajax({
      url: 'soporte/soporteadminCon',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
  
       
       /* con esta linea mostramos el cargador de los formularios */
       beforeSend: function() { wrapper.waitMe();  }
 
     }).done(function(res) {
       
       if(res.status === 200) {  wrapper.html(res.data); } 
       
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

   //////////////////////////////////////////////////////////////////////////////////
  /* cargamos el historial de tickets */
  CargaPreguntas();
  function CargaPreguntas() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.tfrecuentes');

    $.ajax({
      url: 'soporte/preguntasadmin',
      type: 'POST',
      dataType: 'json',
      cache: false,
      
      /* con esta linea mostramos el cargador de los formularios */
      beforeSend: function() { wrapper.waitMe(); }

    }).done(function(res) {
      
      if(res.status === 200) { 
        wrapper.html(res.data); 
        /* cargamos las respuestas del ticket abierto */
        
      } 
      
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

  
  /////////////////////////////////////////////////////////////////////////////////
  /* cargamos el modulo del ticket */
  cargahistorial();
  function cargahistorial() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.thistorial');

    $.ajax({
      url: 'soporte/historialAdmin',
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
  //////////////////////////////////////////////////////////////////////////////////

  //////////////////////////////////////////////////////////////////////////////////

  /* responde el ticket EL USUARIO */
  $('body').on('submit', '.respondeMensajeAdmin', responadmin);
  function responadmin(event) {
    event.preventDefault();

    var form    = $('.respondeMensajeAdmin');
    data        = new FormData(form.get(0));
    resspuestadmin = $('#menadmin').val();
    
    // Validar description
    if(resspuestadmin === '' ) {
      toastr.error('Ingresa una respuesta por favor', '¡Upss!');
      return;
    }

    // AJAX
    $.ajax({
      url: 'soporte/contestaadmin',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,

      beforeSend: function() { form.waitMe(); }

    }).done(function(res) {
      
      if(res.status === 200) {
        toastr.success(res.msg, '¡Bien!');
        form.trigger('reset');
        $('#respuestaadmin').modal('hide');
      } 
      
      else { toastr.error(res.msg, '¡Upss!'); }
      
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  //////////////////////////////////////////////////////////////////////////////////

  /* el usuario cancela el ticket */
  $('body').on('submit', '.cancelarti', eliminatiadmin);
  function eliminatiadmin(event) {
    event.preventDefault();

    var form    = $('.cancelarti');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'soporte/eliminaTir',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,

      beforeSend: function() { form.waitMe(); }

    }).done(function(res) {
      
      if(res.status === 200) {
        toastr.success(res.msg, '¡Bien!');
        $('#cancelar').modal('hide');
        cargaTickt();
      } 
      
      else { toastr.error(res.msg, '¡Upss!'); }
      
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  //////////////////////////////////////////////////////////////////////////////////

  /* el usuario cancela el ticket */
  $('body').on('submit', '.terminaTic', terminatic);
  function terminatic(event) {
    event.preventDefault();

    var form    = $('.terminaTic');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'soporte/terminaticadmin',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,

      beforeSend: function() { form.waitMe(); }

    }).done(function(res) {
      
      if(res.status === 200) {
        toastr.success(res.msg, '¡Bien!');
        $('#terminartic').modal('hide');
        cargaTickt();
        cargahistorial();
      } 
      
      else { toastr.error(res.msg, '¡Upss!'); }
      
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  //////////////////////////////////////////////////////////////////////////////////
  
  /* agreghamos una nueva pregunta frecuente*/
  $('body').on('submit', '.nuevapre', nuevaprefre);
  function nuevaprefre(event) {
    event.preventDefault();

    var form    = $('.nuevapre');
    data        = new FormData(form.get(0));

    pregunta = $('input[name="pregunta"]', form).val();
    respuesta = $('input[name="respuesta"]', form).val();

    // Validar description
    if(pregunta === '' ) {
      toastr.error('Favor de ingresar una pregunta', '¡Upss!');
      return;
    }
    if(respuesta === '' ) {
      toastr.error('Ingrese uan respuesta a la pregunta', '¡Upss!');
      return;
    }


    // AJAX
    $.ajax({
      url: 'soporte/crearnuevapregufre',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,

      beforeSend: function() { form.waitMe(); }

    }).done(function(res) {
      
      if(res.status === 200) {
        toastr.success(res.msg, '¡Bien!');
        $('#nuevapregunta').modal('hide');
        CargaPreguntas();
      } 
      
      else { toastr.error(res.msg, '¡Upss!'); }
      
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  //////////////////////////////////////////////////////////////////////////////////

  /* el usuario cancela el ticket */
  $('body').on('submit', '.eliprefre', eliprfr);
  function eliprfr(event) {
    event.preventDefault();

    var form    = $('.eliprefre');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'soporte/eliprefrecuente',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,

      beforeSend: function() { form.waitMe(); }

    }).done(function(res) {
      
      if(res.status === 200) {
        toastr.success(res.msg, '¡Bien!');
        $('#elipregun').modal('hide');
        CargaPreguntas();
      } 
      
      else { toastr.error(res.msg, '¡Upss!'); }
      
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  //////////////////////////////////////////////////////////////////////////////////

  
  
  

  
});