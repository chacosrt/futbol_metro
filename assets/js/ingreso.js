$(document).ready(function() {

  // Agregar un movimiento
  $('.ingresar').on('submit', bee_add_movement);
  function bee_add_movement(event) {
    //con esot le deciamos al sistema que no haga la opcion predefinida del formulario
    event.preventDefault();

    var form    = $('.ingresar'),
    hook        = 'bee_hook',
    action      = 'consultaIngreso',
    data        = new FormData(form.get(0)),
    usuario        = $('#usuario').val(),
    clave = $('#clave').val();

    //alert(clave);

    data.append('hook', hook);
    data.append('action', action);
    
    // Validamos el usuario 
    if(usuario === '' ) {
      toastr.error('Ingresa un usuario válido', '¡Datos Invalidos!');
      return;
    }

    // Validamos la clave
    if(clave === '' ) {
      toastr.error('Ingresa una clave valida', '¡Datos Invalidos!');
      return;
    }

    // peticion
    $.ajax({
      url: 'ingreso/consultaingreso',
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
        /* redireccionamos al dashboard */
        window.location='panel/'; 
        
      } 
      else { toastr.error(res.msg, '¡Upss!'); }
    
    /* en caso de que alla error */
    })
    .fail(function(err) { 
      toastr.error('Favor validar las credenciales de acceso', '¡Upss!'); 
      form.trigger('reset');/* reiniciamos el formulario */
    })

    /*Esto siempre se pone para ocultar el cargador de formulario   */
    .always(function() { form.waitMe('hide'); })

  }

  

  
});