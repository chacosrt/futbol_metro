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

/* modal para editar */
$("#editar").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var valor = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idEstudio").val(valor);

  data        = new FormData($('.editarestudio').get(0))
    
  var wrapper = $('.estudioform');

  $.ajax({
    url: 'estudios/obtengodatosedi',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data: data,
    
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
    

});

/* eliminamos el analista */
$("#eliminar").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idEstudio").val(recipient);
});

/* para la asignacion de ejecutivos */
$("#asignar").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idEstudio").val(recipient);
    

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
  cargosinasignar();
  function cargosinasignar() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.sinasignar');

    $.ajax({
      url: 'estudios/cargosinasignarCon',
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

  /* cargamos los estudios en proceso */
  cargoproceso();
  function cargoproceso() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.proceso');

    $.ajax({
      url: 'estudios/cargoprocesoCon',
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

  /* genamos nuevo analista */
  $('.nuevasolicitud').on('submit', nuevasoli);
  function nuevasoli(event) {
    event.preventDefault();
    var form    = $('.nuevasolicitud'),

    data        = new FormData(form.get(0))
    var archivo = $("#archivo").val();
      var extensiones = archivo.substring(archivo.lastIndexOf("."));

      if(extensiones != ".jpg" && extensiones != ".png" && extensiones != ".pdf" && extensiones != ".docx" && extensiones != ".doc" && extensiones != ".csv"&& extensiones != ".xlsx" && extensiones != ".xls")
      {
          alert("El archivo de tipo " + extensiones + "no es válido");
          $('#btnsolic').attr("disabled", false);
      }else{

          // AJAX
          $.ajax({
            url: 'estudios/nuevoestudio',
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
              $('#nuevo').modal('hide');
              cargopendientes();
            } 

            else { toastr.error(res.msg, '¡Upss!'); }
          }).fail(function(err) {
            toastr.error('Hubo un error en la petición', '¡Upss!');
          }).always(function() {
            form.waitMe('hide');
          })
        }
      }

  /* eliminamos el analista */
  $('.eliminoetudio').on('submit', eliminaestu);
  function eliminaestu(event) {
    event.preventDefault();
    var form    = $('.eliminoetudio'),

    data        = new FormData(form.get(0))
  
    // AJAX
    $.ajax({
      url: 'estudios/eliminaestudio',
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
        cargosinasignar();
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }

  /* editar estudio */
  $('.editarestudio').on('submit', editoestudio);
  function editoestudio(event) {
    event.preventDefault();
    var form    = $('.editarestudio'),

    data        = new FormData(form.get(0))
    var archivo = $("#archivo").val();
      var extensiones = archivo.substring(archivo.lastIndexOf("."));

      if(extensiones != ".jpg" && extensiones != ".png" && extensiones != ".pdf" && extensiones != ".docx" && extensiones != ".doc" && extensiones != ".csv"&& extensiones != ".xlsx" && extensiones != ".xls")
      {
          alert("El archivo de tipo " + extensiones + "no es válido");
          $('#btnsolic').attr("disabled", false);
      }else{
        // AJAX
        $.ajax({
          url: 'estudios/editoestudio',
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
            $('#editar').modal('hide');
            cargosinasignar();
          } 

          else { toastr.error(res.msg, '¡Upss!'); }
        }).fail(function(err) {
          toastr.error('Hubo un error en la petición', '¡Upss!');
        }).always(function() {
          form.waitMe('hide');
        })
      }
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

  /* cargo la lista de clientes para la creacion de estudio */
  cargoclientes();
  function cargoclientes(){
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.listacleinte');

    $.ajax({
      url: 'estudios/cargocliente',
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
  
  cargoejecu();
  function cargoejecu(){
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.listaempleados');

    $.ajax({
      url: 'estudios/cargoejecuti',
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
  
  /* nuevasolicitud para estudio por ejecutivo */
  $('.nuevasolicitudejectuvio').on('submit', nuevasoliejec);
  function nuevasoliejec(event) {
    event.preventDefault();
    var form    = $('.nuevasolicitudejectuvio'),

    data        = new FormData(form.get(0))
    var archivo = $("#archivo").val();
      var extensiones = archivo.substring(archivo.lastIndexOf("."));

      if(extensiones != ".jpg" && extensiones != ".png" && extensiones != ".pdf" && extensiones != ".docx" && extensiones != ".doc" && extensiones != ".csv"&& extensiones != ".xlsx" && extensiones != ".xls")
      {
          alert("El archivo de tipo " + extensiones + "no es válido");
          $('#btnsolic').attr("disabled", false);
      }else{
        // AJAX
        $.ajax({
          url: 'estudios/nuevoestudioejec',
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
            $('#nuevo').modal('hide');
            cargosinasignar();
          } 

          else { toastr.error(res.msg, '¡Upss!'); }
        }).fail(function(err) {
          toastr.error('Hubo un error en la petición', '¡Upss!');
        }).always(function() {
          form.waitMe('hide');
        })
      }
  }
  
  /* signamos un ejecutivo al estudio */
  $('.asignarejectu').on('submit', asignnaaa);
  function asignnaaa(event) {
    event.preventDefault();
    var form    = $('.asignarejectu'),

    data        = new FormData(form.get(0))
  
    // AJAX
    $.ajax({
      url: 'estudios/asignaejectui',
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
        $('#asignar').modal('hide');
        cargosinasignar();
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  
  /* //////////////////////////////////////////////////////////////////////////////////// */
  const MAXIMO_TAMANIO_BYTES = 3000000; // 1MB = 1 millÃ³n de bytes
  // Obtener referencia al elemento
  const $miInput = document.querySelector("#archivo");

  $miInput.addEventListener("change", function () {
    // si no hay archivos, regresamos
    if (this.files.length <= 0) return;

    // Validamos el primer archivo Ãºnicamente
    const archivo = this.files[0];
    if (archivo.size > MAXIMO_TAMANIO_BYTES) {
      const tamanioEnMb = MAXIMO_TAMANIO_BYTES / 1000000;
      alert(`El tamaño maximo es ${tamanioEnMb} MB`);
      // Limpiar
      $miInput.value = "";
    } 
  });
/* /////////////////////////////////////////////////////////////////////// */
 
  
  
});