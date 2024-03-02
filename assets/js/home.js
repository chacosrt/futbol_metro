$(document).ready(function() {  
  

  toastr.options = { "closeButton": true, "debug": false, "newestOnTop": true, "progressBar": true, "positionClass": "toast-top-full-width", "preventDuplicates": true, "onclick": null,  "showDuration": "200", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut"}


  // Agregar un movimiento

  $('.ingresosis').on('submit', bee_add_movement);

  async function bee_add_movement(event) {

    //con esot le deciamos al sistema que no haga la opcion predefinida del formulario

    event.preventDefault();

    //console.log("hola")

    var form    = $('.ingresosis'),

    usuario        = $('#usuario').val(),

    pass = $('#pass').val();

    data = new FormData(form.get(0))
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

    var headers = {
      'Content-Type': 'application/x-www-form-urlencoded', // Tipo de contenido de la solicitud
      'Access-Control-Allow-Origin': "*"
    };
  
    console.log(data)
    
    // Realiza la solicitud POST usando Axios
    return await axios.post('http://18.220.123.92:8020/janus/sentry',data,{ headers: headers})
    .then(function (response) {
        // Maneja la respuesta exitosa
        console.log(response);
        
        if(response.status === 200) {      
          
          const decoded = response.data;
          
          console.log(decoded)
          sessionStorage.setItem('usuario', decoded["nombre"]);
          sessionStorage.setItem('email', decoded["email"]);
          sessionStorage.setItem('roles', decoded["roles"]);

          form.trigger('reset');/* reiniciamos el formulario */
          console.log("hola",sessionStorage.getItem("usuario"));
          window.location='dash/';
           
          

            

        } 
        else { toastr.error(response.msg, '¡Upss!'); }
    })
    .catch(function (error) {
        // Maneja errores
        toastr.error('Favor validar las credenciales de acceso'); 

        form.trigger('reset');/* reiniciamos el formulario */
    });


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


  



  

});