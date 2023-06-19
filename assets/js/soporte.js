/* para los datatable */
$(function () {
  $('#example1').DataTable()
  $('#example2').DataTable({ 'paging' : true,'lengthChange': false,'searching'   : false, 'ordering'    : true, 'info'        : true, 'autoWidth'   : false })
})

/* para ver las respuestas del historial en el modal */
$("#respuesta").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var valor = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idensop").val(valor);
  data        = new FormData($('.forverres').get(0))
    
  var wrapper = $('.resver');
  
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
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idSoporteCan").val(recipient);
});

/* modal para terminar el ticket */
$("#terminartic").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("dos");
  var modal = $(this);
  modal.find(".modal-body #idSoporteTer").val(recipient);
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
       url: 'soporte/cargatick',
       type: 'POST',
       dataType: 'json',
       cache: false,
       
       /* con esta linea mostramos el cargador de los formularios */
       beforeSend: function() { 
         wrapper.waitMe(); 
         
       }
 
     }).done(function(res) {
       
       if(res.status === 200) { 
         wrapper.html(res.data); 
         resabierta();
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
      url: 'soporte/cargaHist',
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

  /* cargamos el historial de tickets */
  CargaPreguntas();
  function CargaPreguntas() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.tfrecuentes');

    $.ajax({
      url: 'soporte/cargaPreguntas',
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
  //////////////////////////////////////////////////////////////////////////////////

  /* cargamos las respuestas del ticket abierto */
  function resabierta(){
    /* seleccionamos el div en que vamos a modificar los valores */
    var form = $('.formiddeteccion');
    data     = new FormData(form.get(0));
    var wrapper = $('.respuesabierta');

    $.ajax({
      url: 'soporte/resticketabierto',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data: data,
      
      /* con esta linea mostramos el cargador de los formularios */
      beforeSend: function() { wrapper.waitMe(); }

    }).done(function(res) {
      
      if(res.status === 200) { wrapper.html(res.data); } 
      
      else { 
        toastr.error(res.msg, '¡Upss!');
        wrapper.html('');
      }

    })
    
    .fail(function(err) { 
      toastr.error('Hubo un error en la petición', '¡Upss!');
      wrapper.html('');

    })
    .always(function() { wrapper.waitMe('hide'); })

  }
  //////////////////////////////////////////////////////////////////////////////////

  /* responde el ticket EL USUARIO */
  $('body').on('submit', '.respondeMensajeUsuario', responUsu);
  function responUsu(event) {
    event.preventDefault();

    var form    = $('.respondeMensajeUsuario');
    data        = new FormData(form.get(0));
    description = $('input[name="mensjae"]', form).val();

    // Validar description
    if(description === '' ) {
      toastr.error('Ingresa una respuesta por favor', '¡Upss!');
      return;
    }

    // AJAX
    $.ajax({
      url: 'soporte/contestaUsuario',
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
        resabierta();
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
  $('body').on('submit', '.cancelarti', eliminati);
  function eliminati(event) {
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
      url: 'soporte/terminatic',
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
  
  /* agreghamos un nuevo ticket de usuario */
  $('body').on('submit', '.nuevotic', nuevoSoporte);
  function nuevoSoporte(event) {
    event.preventDefault();

    var form    = $('.nuevotic');
    data        = new FormData(form.get(0));

    descripcion = $('input[name="descripcion"]', form).val();
    titulo = $('input[name="titulo"]', form).val();

    // Validar description
    if(descripcion === '' ) {
      toastr.error('Favor de ingresar una descripción de su ticket', '¡Upss!');
      return;
    }
    if(titulo === '' ) {
      toastr.error('Ingrese un titulo por favor', '¡Upss!');
      return;
    }


    // AJAX
    $.ajax({
      url: 'soporte/creanuevosoporte',
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
        $('#nuevoticket').modal('hide');
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

  
  
  

  
});