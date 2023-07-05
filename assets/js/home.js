$(document).ready(function() {  

  

  toastr.options = { "closeButton": true, "debug": false, "newestOnTop": true, "progressBar": true, "positionClass": "toast-top-full-width", "preventDuplicates": true, "onclick": null,  "showDuration": "200", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut"}


  // Agregar un movimiento

  $('.ingresosis').on('submit', bee_add_movement);

  function bee_add_movement(event) {

    //con esot le deciamos al sistema que no haga la opcion predefinida del formulario

    event.preventDefault();

    //console.log("hola")

    var form    = $('.ingresosis'),

    data        = new FormData(form.get(0)),

    usuario        = $('#usuario').val(),

    pass = $('#pass').val();


    // Validamos el usuario 

    if(usuario === '' ) {

      toastr.error('Ingresa un usuario válido', '¡Datos Invalidos!');

      return;

    }



    // Validamos la clave

    if(pass === '' ) {

      toastr.error('Ingresa una clave valida', '¡Datos Invalidos!');

      return;

    }



    // peticion

    $.ajax({

      url: 'home/ingresoSiysd',

      type: 'post',

      dataType: 'json',

      contentType: false,

      processData: false,

      cache: false,

      data : data,

      /* mostramos el cargador del formulario en caso de que tarde en cargar */

      beforeSend: function() { form.waitMe(); },


    }).done(function(res) {


      console.log(res)
      /* cuando se hace bien el movimiento */

      if(res.status === 200) { 

       

          form.trigger('reset');/* reiniciamos el formulario */

          window.location='dash/'; 

        

      } 



      else { toastr.error(res.msg, '¡Upss!'); }

    

    /* en caso de que alla error */

    })

    .fail(function(err) { 

      toastr.error('Favor validar las credenciales de acceso'); 

      form.trigger('reset');/* reiniciamos el formulario */

    })



    /*Esto siempre se pone para ocultar el cargador de formulario   */

    .always(function() { form.waitMe('hide'); })



  }



  /* recuperamos la clave */

  $('.recuperar').on('submit', recuperoCredenciales);

  function recuperoCredenciales(event) {

    //con esot le deciamos al sistema que no haga la opcion predefinida del formulario

    event.preventDefault();



    var form    = $('.recuperar'),

    data        = new FormData(form.get(0)),

    usuario        = $('#correo').val();

    

    // Validamos el usuario 

    if(usuario === '' ) {

      toastr.error('Ingresa un correo', '¡Datos Invalidos!');

      return;

    }



    // peticion

    $.ajax({

      url: 'home/recuperaClave',

      type: 'post',

      dataType: 'json',

      contentType: false,

      processData: false,

      cache: false,

      data : data,

      /* mostramos el cargador del formulario en caso de que tarde en cargar */

      beforeSend: function() { form.waitMe(); }



    }).done(function(res) {

      /* cuando se hace bien el movimiento */

      if(res.status === 200) { 

        form.trigger('reset');/* reiniciamos el formulario */

        toastr.success('Se enviaron las credenciales al correo ingresado', '¡Recuperación exitosa!');

        return;

        

      } 

      else { toastr.error(res.msg, '¡Upss!'); }

    

    /* en caso de que alla error */

    })

    .fail(function(err) { 

      toastr.error('El correo no coincide con el sistema'); 

      form.trigger('reset');/* reiniciamos el formulario */

    })



    /*Esto siempre se pone para ocultar el cargador de formulario   */

    .always(function() { form.waitMe('hide'); })



  }


  /* cerrar sesion */

  $('#btnSalidar').on('click', salgosistema);/* con eso hacemos que solo funcione el boton que se seleccione */

  function salgosistema(event) {

    $.ajax({

      url: 'home/salir',

      type: 'post',

      dataType: 'json',

      contentType: false,

      processData: false,

      cache: false,



    }).done(function(res) { if(res.status === 200) { window.location='home';  } })

    .fail(function(err) { toastr.error('Hubo un error en la petición', '¡Upss!'); })

  };
 

  



  

});