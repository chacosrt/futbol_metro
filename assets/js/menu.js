
//////////////////////////////////////////////////////////////////////////////////
//SECCION PARA MODALS
//////////////////////////////////////////////////////////////////////////////////
/* modal para eliminar */
$("#eliminar").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var dos = button.data("dos");
  var modal = $(this);
  modal.find(".modal-body #idMenu").val(recipient);
  modal.find(".modal-body #dato").val(dos);
});

/* dar de baja la seccion */
$("#darbaja").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idMenu").val(recipient);
});

/* dar de alta seccion */
$("#daralta").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idMenu").val(recipient);
});



//////////////////////////////////////////////////////////////////////////////////

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

  //////////////////////////////////////////////////////////////////////////////////
  //SECCION DE FUNCIONES Y CARGAS
  //////////////////////////////////////////////////////////////////////////////////

  //////////////////////////////////////////////////////////////////////////////////
  /* SECCION DE CATALOGO */

  /* cargamos el concentrado de la secciones */
  cargamosmenus();
  function cargamosmenus() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.tblmenus');

    $.ajax({
      url: 'menu/concenmenu',
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

  /* cargamos las opciones de padres  */
  cargamospadres();
  function cargamospadres() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.veopadre');

    $.ajax({
      url: 'menu/carpa',
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

  /* cargamos las opciones de hijos */
  cargamoshijos();
  function cargamoshijos(){
     /* seleccionamos el div en que vamos a modificar los valores */
     var wrapper = $('.veohijo');

     $.ajax({
       url: 'menu/carhi',
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

  //////////////////////////////////////////////////////////////////////////////////
  //SECCION PARA EL ENVIO DE FORMULARIO Y/O ELEMENTOS
  //////////////////////////////////////////////////////////////////////////////////

  /* SECCION PARA LA SOLICITUD DE PUESTO */
  /* generamos la nueva seccion */
  $('body').on('submit', '.nuevasolici', nuevasescc);
  function nuevasescc(event) {
    event.preventDefault();

    var form    = $('.nuevasolici');
    data        = new FormData(form.get(0));

    nombre = $('#nombre').val();
    dato = $('#dato').val();
    padre = $('#padre').val();
    hijo = $('#hijo').val();
    icono = $('#icono').val();

    // Validacion campo form
    if(nombre === '' ) {
      toastr.error('Ingresa un nombre ', '¡Upss!');
      return;
    }
    if(dato === '' ) {
      toastr.error('Favor de ingresar el nombre corto', '¡Upss!');
      return;
    }
    if(icono === '' ) {
      toastr.error('Favor de seleccionar un icono', '¡Upss!');
      return;
    }
    if(hijo != '' && hijo === ''){
      toastr.error('Para seleccionar un hijo tiene que tener una seccion padre', '¡Upss!');
      return;
    }

    // AJAX
    $.ajax({
      url: 'menu/nuevasecci',
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
        $('#nuevaseccion').modal('hide');
        cargamosmenus();
        cargamospadres();
        cargamoshijos();

      } 
      
      else { toastr.error(res.msg, '¡Upss!'); }
      
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }

  /* eliminamos la seccion */
  $('body').on('submit', '.eliminarelemento', elimenu);
  function elimenu(event) {
    event.preventDefault();

    var form    = $('.eliminarelemento');
    data        = new FormData(form.get(0));

   
    // AJAX
    $.ajax({
      url: 'menu/elisecc',
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
        $('#eliminar').modal('hide');
        cargamosmenus();

      } 
      
      else { toastr.error(res.msg, '¡Upss!'); }
      
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  
  /* dar de baja seccion */
  $('body').on('submit', '.darbaja', darbaja);
  function darbaja(event) {
    event.preventDefault();

    var form    = $('.darbaja');
    data        = new FormData(form.get(0));

   
    // AJAX
    $.ajax({
      url: 'menu/baja',
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
        $('#darbaja').modal('hide');
        cargamosmenus();

      } 
      
      else { toastr.error(res.msg, '¡Upss!'); }
      
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }

  /* damos de alta una seccion */
  $('body').on('submit', '.daralta', daralt);
  function daralt(event) {
    event.preventDefault();

    var form    = $('.daralta');
    data        = new FormData(form.get(0));

   
    // AJAX
    $.ajax({
      url: 'menu/alta',
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
        $('#daralta').modal('hide');
        cargamosmenus();

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