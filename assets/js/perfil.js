$(function () {
  $('#example1').DataTable()
  $('#example2').DataTable({ 'paging' : true,'lengthChange': false,'searching'   : false, 'ordering'    : true, 'info'        : true, 'autoWidth'   : false })
});
//////////////////////////////////////////////////////////////////////////////////
//SECCION PARA MODALS
//////////////////////////////////////////////////////////////////////////////////

/* SECCION DE SOLICITUD DE VACACIONES */
/* function para mostrar el input de fecha final */
function fechaini(){ document.getElementById('fechaTermino').disabled = false; }
/* par ala edicion */
function fechainiEdi(){  document.getElementById('fechaTerminoEdi').disabled = false; }
/* function para obtener los dias que solicita con las fechas del formulario */
function obtengoDias(){
  var fechaini = new Date(document.getElementById('fechaInicio').value);
  var fechafin = new Date(document.getElementById('fechaTermino').value);

  console.log("fecha de inicio:"+fechaini);
  console.log("fecha te termino;"+fechafin);

  var diasdif= fechafin.getTime()-fechaini.getTime();
  var contdias = Math.round(diasdif/(1000*60*60*24));

  console.log("dias entre fechas:"+contdias);

  var diasDispo = document.getElementById('diasreal').value;

  if(contdias <= diasDispo){
      document.getElementById("dias").value = contdias;
      document.getElementById("diasMuestra").value = contdias;
  }else{
      toastr.error('Los dias solicitados sobre pasan los dias que tiene disponibles', '¡Upss!');
      document.getElementById("fechaInicioEdi").value = "";
      document.getElementById("fechaTerminoEdi").value = "";
      document.getElementById('fechaTerminoEdi').disabled = true;
  }

}
/* para la edicion */
function obtengoDiasEdi(){
  var fechaini = new Date(document.getElementById('fechaInicioEdi').value);
  var fechafin = new Date(document.getElementById('fechaTerminoEdi').value);

  console.log("fecha de inicio:"+fechaini);
  console.log("fecha te termino;"+fechafin);

  var diasdif= fechafin.getTime()-fechaini.getTime();
  var contdias = Math.round(diasdif/(1000*60*60*24));

  console.log("dias entre fechas:"+contdias);

  var diasDispo = document.getElementById('diasreal').value;

  if(contdias <= diasDispo){
      document.getElementById("diasEdi").value = contdias;
      document.getElementById("diasMuestraEdi").value = contdias;
  }else{
      toastr.error('Los dias solicitados sobre pasan los dias que tiene disponibles', '¡Upss!');
      document.getElementById("fechaInicioEdi").value = "";
      document.getElementById("fechaTerminoEdi").value = "";
      document.getElementById('fechaTerminoEdi').disabled = true;
  }

}
/* para ver el formato de solicitud de vacaciones */
function verformato(idVacaciones){
  
  var idVacaciones = idVacaciones;
  data        = new FormData(),
  data.append('idVacaciones', idVacaciones);
  // AJAX
  $.ajax({
    url: 'rh/verformatosolivaca',
    type: 'post',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,

  }).done(function(res) {
    
    if(res.status === 200) {
      document.location.href = 'rh/verformatosolivacados'

    } 
    
    
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
  })
}
/* para editar la solicitud de vacaciones */
$("#editasolivaca").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var valor = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idVacaciones").val(valor);

  data        = new FormData($('.edisolicitovaca').get(0))
    
  var wrapper = $('.foeredisolivaca');
  
  //data.push(['valor',valor]);
  
  $.ajax({
    url: 'rh/infoedisolivaca',
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
/* modal para eliminar la solicitud de vacaciones*/
$("#elisolivaca").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idVacaciones").val(recipient);
});


/* SECCION DE SOLICITUD DE PERSMISOAS */
/* obtenemos la informacion para editar la infgormacion de solicitud de permisos */
$("#editopermiso").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var valor = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idPermiso").val(valor);

  data        = new FormData($('.soliperm').get(0));
    
  var wrapper = $('.formedipermiso');
  
  $.ajax({
    url: 'rh/inforeditapermi',
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
/* eliminar la solicitud de permiso */
$("#elipermiso").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idPermiso").val(recipient);
});
/* agregamos justificante de permiso */
$("#justificante").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idPermiso").val(recipient);
});
/* vemos el formato de solicito de permiso */
function verformatoper(idPermiso){
  
  var idPermiso = idPermiso;
  data        = new FormData(),
  data.append('idPermiso', idPermiso);
  // AJAX
  $.ajax({
    url: 'rh/verforsoliper',
    type: 'post',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,

  }).done(function(res) {
    
    if(res.status === 200) {
      document.location.href = 'rh/verforsoliperdos'

    } 
    
    
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
  })
}

/* SECCION PARA SOLICITUD DE SALIDA */
/* edicion de solicitud de salida */
$("#editarsalida").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var valor = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idSalidas").val(valor);

  data        = new FormData($('.edisolisalida').get(0));
    
  var wrapper = $('.formedisali');
  
  $.ajax({
    url: 'rh/infoedisalida',
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
/* eliminamos la solicitud de salida */
$("#eliminarsalida").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idSalidas").val(recipient);
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
  //seccion para el perfil del usuario

  /* cargamos los puestos que no han sido aceptados */
  cargamosinfoperfil();
  function cargamosinfoperfil() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.infoperfil');

    $.ajax({
      url: 'rh/cargoinfoper',
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

  /* cargamos informacion general del perfil */
  cargamoinfo();
  function cargamoinfo() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.inforcompleta');

    $.ajax({
      url: 'rh/cargoinfocompleta',
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

  /* cargamos la informacion del puesto */
  cargamosinfopues();
  function cargamosinfopues(){
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.infopuesto');

    $.ajax({
      url: 'rh/cargopuestoperfil',
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

  /* cargamos los años que tiene el usuario para la solicitud */
  cargamosantiguedad();
  function cargamosantiguedad(){
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.feingreso');
    var wrapperdos = $('.antigue');
    var wrappertres = $('.diasxano');

    var wrappera = $('.feingresoEdi');
    var wrapperaa = $('.antigueEdi');
    var wrapperaaa = $('.diasxanoEdi');
    
    $.ajax({
      url: 'rh/obtengofechaingresoantigu',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      
      /* con esta linea mostramos el cargador de los formularios */
      beforeSend: function() { wrapper.waitMe();  }

    }).done(function(res) {
            
      var valor = res.data;
      var cadena = valor.split(",");

      /* guardamos en input los dias asignados por antiguedad */
      $("#diasporano").val(cadena[0]);
      $("#diasporanoEdi").val(cadena[0]);
      /* ponemos la antiguedad que tiene el usuario */
      wrapper.html(cadena[2]);
      wrapperdos.html(cadena[1]);
      wrappertres.html(cadena[0]);

      wrappera.html(cadena[2]);
      wrapperaa.html(cadena[1]);
      wrapperaaa.html(cadena[0]);
     

    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
      wrapper.html('');

    }).always(function() {
      wrapper.waitMe('hide');
    })
  }

  /* cargamos los dias que tiene el usuario para vaciones para la solicitud */
  diasvacassolit();
  function diasvacassolit(){
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.disiposoli');
    var wrapperdos = $('.diasrealespasa');
    var wrappertres = $('.disiposoliEdi');
    var wrappercuatro = $('.diasrealespasaEdi');

    $.ajax({
      url: 'rh/obtengodiasyasolici',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      
      /* con esta linea mostramos el cargador de los formularios */
      beforeSend: function() { wrapper.waitMe();  }

    }).done(function(res) {
    
      var valor = res.data;
      var diasSolicitado = valor[0]['total'];
      var diasxano = $("#diasporano").val();
      var diasreales = diasxano - diasSolicitado;

      /* mostramos los dias que ya solicito */
      $("#diasdispo").val(diasSolicitado);
      $("#diasdispoEdi").val(diasSolicitado);
      wrapper.html(diasSolicitado);
      wrappertres.html(diasSolicitado);
      /* mostramos los dias reales con lo que contamos */
      $("#diasreal").val(diasreales);
      $("#diasrealEdi").val(diasreales);
      wrapperdos.html(diasreales);
      wrappercuatro.html(diasreales);

      /* sdi no cuenta con dias para solicitar no permito guardar la informacion */
      if(diasreales == 0){ $('#idbtnguar').attr("disabled", true); }
      
      

    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
      wrapper.html('');

    }).always(function() {
      wrapper.waitMe('hide');
    })
  }

  /* cartgamos el concentrado de solicitud de vaciones */
  cargosolivaca();
  function cargosolivaca() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.infosolivac');

    $.ajax({
      url: 'rh/cargosolivac',
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

  /* cargamos la seccion de manos y ojos */
  cargomanoojo();
  function cargomanoojo() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.infomanos');

    $.ajax({
      url: 'rh/cargomanoojo',
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

  /* cargamos la seccion de capacitacion */
  cargocapa();
  function cargocapa(){
    
     /* seleccionamos el div en que vamos a modificar los valores */
     var wrapper = $('.infocapacitacion');

     $.ajax({
       url: 'rh/cargocapa',
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

  /* cargamos el concentrado de los permisos */
  cargopermisos();
  function cargopermisos(){
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.infopermi');

    $.ajax({
      url: 'rh/cargopermi',
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

 /* cargamos el condcentrado de salidas */
 cargosalida();
 function cargosalida(){
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.infosalida');

    $.ajax({
      url: 'rh/cargosalida',
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

  
  /* SECCION PARA LA SOLICITUD DE VACACIONES */
  /* generamos la nueva ubicacion */
  $('body').on('submit', '.nuevasoli', nuevoelemento);
  function nuevoelemento(event) {
    event.preventDefault();

    var form    = $('.nuevasoli');
    data        = new FormData(form.get(0));

    nombre = $('#nombre').val();
    causa = $('#causa').val();
    idArea = $('#idArea').val();
    justificacion = $('#justificacion').val();
    idUbicacion = $('#idUbicacion').val();
    horario = $('#horario').val();
    noVacantes = $('#noVacantes').val();
    ttipo = $('#ttipo').val();
    descripcionTemporal = $('#descripcionTemporal').val();
    supervisa = $('#supervisa').val();
    noSupervisa = $('#noSupervisa').val();
    idJefeInmediato = $('#idJefeInmediato').val();
    estudios = $('#estudios').val();
    actividades = $('#actividades').val();
    conocimientos = $('#conocimientos').val();
    experiencia = $('#experiencia').val();
    habilidades = $('#habilidades').val();
    rangoEdad = $('#rangoEdad').val();
    tsexo = $('#tsexo').val();
    estadoCivil = $('#estadoCivil').val();
    idPromocion = $('#idPromocion').val();
    fechaDeceada = $('#fechaDeceada').val();
    sueldo = $('#sueldo').val();
    beneficios = $('#beneficios').val();
    Mcomputo = $('#Mcomputo').val();
    Macceso = $('#Macceso').val();
    Mtelfijo = $('#Mtelfijo').val();
    Mproteccion = $('#Mproteccion').val();
    Mmovil = $('#Mmovil').val();
    Mllamadas = $('#Mllamadas').val();
    Msilla = $('#Msilla').val();
    Mescritorio = $('#Mescritorio').val();
    correoInst = $('#correoInst').val();

    // Validacion campo form
    if(nombre === '' ) {
      toastr.error('Ingresa un nombre ', '¡Upss!');
      return;
    }
    if(causa === '' ) {
      toastr.error('Ingresa una causa', '¡Upss!');
      return;
    }
    if(justificacion === '' ) {
      toastr.error('Ingresa una justificación', '¡Upss!');
      return;
    }
    if(idUbicacion === '' ) {
      toastr.error('Selecciona una ubicación', '¡Upss!');
      return;
    }
    if(idArea === '' ) {
      toastr.error('Selecciona una área', '¡Upss!');
      return;
    }
    if(horario === '' ) {
      toastr.error('Ingresa un horario', '¡Upss!');
      return;
    }
    if(noVacantes === '' ) {
      toastr.error('Ingresa el numero de vacantes', '¡Upss!');
      return;
    }
    if(ttipo === '' ) {
      toastr.error('Ingresa un tipo', '¡Upss!');
      return;
    }
    if(descripcionTemporal === '' ) {
      toastr.error('Ingresa una descripcion temporal', '¡Upss!');
      return;
    }
    if(supervisa === '' ) {
      toastr.error('Ingresa si supervisa', '¡Upss!');
      return;
    }
    if(noSupervisa === '' ) {
      toastr.error('Ingresa el numero de personas que supervisa', '¡Upss!');
      return;
    }
    if(idJefeInmediato === '' ) {
      toastr.error('Selecciona un jefe inmediato', '¡Upss!');
      return;
    }
    if(estudios === '' ) {
      toastr.error('Selecciona un grado de estudios', '¡Upss!');
      return;
    }
    if(actividades === '' ) {
      toastr.error('Ingresa actividades del puesto', '¡Upss!');
      return;
    }
    if(conocimientos === '' ) {
      toastr.error('Ingresa conocimientos para el puesto', '¡Upss!');
      return;
    }
    if(experiencia === '' ) {
      toastr.error('Ingresa la experiencia para el puesto', '¡Upss!');
      return;
    }
    if(habilidades === '' ) {
      toastr.error('Ingresa las habilidaddes para el puesto', '¡Upss!');
      return;
    }
    if(rangoEdad === '' ) {
      toastr.error('Ingresa un rango de edad', '¡Upss!');
      return;
    }
    if(tsexo === '' ) {
      toastr.error('Elige un sexo', '¡Upss!');
      return;
    }
    if(estadoCivil === '' ) {
      toastr.error('Selecciona un estado civil', '¡Upss!');
      return;
    }
    if(fechaDeceada === '' ) {
      toastr.error('Ingresa una fecha deceada para su ingreso', '¡Upss!');
      return;
    }
    if(sueldo === '' ) {
      toastr.error('Ingresa el sueldo del puesto', '¡Upss!');
      return;
    }


    // AJAX
    $.ajax({
      url: 'rh/nuevasolicitudpuestoa',
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
        $('#nuevasolipues').modal('hide');
        cargosolipue();

      } 
      
      else { toastr.error(res.msg, '¡Upss!'); }
      
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  /* guardamos la solicitud de vacaciones */
  $('body').on('submit', '.solicitovaca', nuevasolivaca);
  function nuevasolivaca(event) {
    event.preventDefault();

    var form    = $('.solicitovaca');
    data        = new FormData(form.get(0));

    fechaSolicitud = $('#fechaSolicitud').val();
    fechaInicio = $('#fechaInicio').val();
    fechaTermino = $('#fechaTermino').val();
    diaPresenta = $('#diaPresenta').val();
    fechaPago = $('#fechaPago').val();

    // Validacion campo form
    if(fechaSolicitud === '' ) {
      toastr.error('Ingresa la fecha de solicitud ', '¡Upss!');
      return;
    }
    if(fechaInicio === '' ) {
      toastr.error('Ingresa una fecha de inicio', '¡Upss!');
      return;
    }
    if(fechaTermino === '' ) {
      toastr.error('Ingresa una fecha de finalizacion', '¡Upss!');
      return;
    }
    if(diaPresenta === '' ) {
      toastr.error('Selecciona el dia en que regresa a trabajar', '¡Upss!');
      return;
    }
    if(fechaPago === '' ) {
      toastr.error('Selecciona la fecha de pago de la prima', '¡Upss!');
      return;
    }
    

    // AJAX
    $.ajax({
      url: 'rh/nuevasolivaca',
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
        $('#solivaca').modal('hide');
        cargosolivaca();

      } 
      
      else { toastr.error(res.msg, '¡Upss!'); }
      
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  /* editamos la solicitud de vacaciones */
  $('body').on('submit', '.edisolicitovaca', edosolivaca);
  function edosolivaca(event) {
    event.preventDefault();

    var form    = $('.edisolicitovaca');
    data        = new FormData(form.get(0));

    fechaSolicitud = $('#fechaSolicitudEdi').val();
    fechaInicio = $('#fechaInicioEdi').val();
    fechaTermino = $('#fechaTerminoEdi').val();
    diaPresenta = $('#diaPresentaEdi').val();
    fechaPago = $('#fechaPagoEdi').val();

    // Validacion campo form
    if(fechaSolicitud === '' ) {
      toastr.error('Ingresa la fecha de solicitud ', '¡Upss!');
      return;
    }
    if(fechaInicio === '' ) {
      toastr.error('Ingresa una fecha de inicio', '¡Upss!');
      return;
    }
    if(fechaTermino === '' ) {
      toastr.error('Ingresa una fecha de finalizacion', '¡Upss!');
      return;
    }
    if(diaPresenta === '' ) {
      toastr.error('Selecciona el dia en que regresa a trabajar', '¡Upss!');
      return;
    }
    if(fechaPago === '' ) {
      toastr.error('Selecciona la fecha de pago de la prima', '¡Upss!');
      return;
    }
    

    // AJAX
    $.ajax({
      url: 'rh/edisolivac',
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
        $('#editasolivaca').modal('hide');
        cargosolivaca();

      } 
      
      else { toastr.error(res.msg, '¡Upss!'); }
      
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  /* eliminamos la solicitud de vacaciones */
  $('body').on('submit', '.eliminarelemento', elisolivac);
  function elisolivac(event) {
    event.preventDefault();

    var form    = $('.eliminarelemento');
    data        = new FormData(form.get(0));
    
    // AJAX
    $.ajax({
      url: 'rh/elisolivac',
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
        $('#elisolivaca').modal('hide');
        cargosolivaca();

      } 
      
      else { toastr.error(res.msg, '¡Upss!'); }
      
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  //////////////////////////////////////////////////////////////////////////////////

  /* SECCION PARA LA SOLICITUD DE PERMISOS */
  /* solicitamos un nuevo permiso en el perfil */
  $('body').on('submit', '.solicitopermiso', solipermi);
  function solipermi(event) {
    event.preventDefault();

    var form    = $('.solicitopermiso');
    data        = new FormData(form.get(0));
    
    // AJAX
    $.ajax({
      url: 'rh/nuevopermiso',
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
        $('#solipermiso').modal('hide');
        cargopermisos();

      } 
      
      else { toastr.error(res.msg, '¡Upss!'); }
      
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  /* editamos la informacion de la solicitud de permiso */
  $('body').on('submit', '.soliperm', edipe);
  function edipe(event) {
    event.preventDefault();

    var form    = $('.soliperm');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'rh/edisoliper',
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
        $('#editopermiso').modal('hide');
        cargopermisos();

      } 
      
      else { toastr.error(res.msg, '¡Upss!'); }
      
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  /* eliminamos el permiso */
  $('body').on('submit', '.elimiper', elimper);
  function elimper(event) {
    event.preventDefault();

    var form    = $('.elimiper');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'rh/eliminopermi',
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
        $('#elipermiso').modal('hide');
        cargopermisos();

      } 
      
      else { toastr.error(res.msg, '¡Upss!'); }
      
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  /* agregamos el justificante del permiso */
  $('body').on('submit', '.agregarjustificante', agrejus);
  function agrejus(event) {
    event.preventDefault();

    var form    = $('.agregarjustificante');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'rh/agrejus',
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
        $('#justificante').modal('hide');
        cargopermisos();

      } 
      
      else { toastr.error(res.msg, '¡Upss!'); }
      
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  
  //////////////////////////////////////////////////////////////////////////////////

  /* SECCION PARA LA SOLICITUD DE SALIDA */
  /* agregamos una nueva solicitud de salida */
  $('body').on('submit', '.solisalida', agregasali);
  function agregasali(event) {
    event.preventDefault();

    var form    = $('.solisalida');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'rh/agresalid',
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
        $('#solisalida').modal('hide');
        cargosalida();

      } 
      
      else { toastr.error(res.msg, '¡Upss!'); }
      
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  /* editamos la solicitud de salida */

/* agregamos una nueva solicitud de salida */
  $('body').on('submit', '.edisolisalida', edsalida);
  function edsalida(event) {
    event.preventDefault();

    var form    = $('.edisolisalida');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'rh/editasali',
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
        $('#editarsalida').modal('hide');
        cargosalida();

      } 
      
      else { toastr.error(res.msg, '¡Upss!'); }
      
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  /* eliminamos la solicitud de salida */
  $('body').on('submit', '.elisalida', elisali);
  function elisali(event) {
    event.preventDefault();

    var form    = $('.elisalida');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'rh/elisali',
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
        $('#eliminarsalida').modal('hide');
        cargosalida();

      } 
      
      else { toastr.error(res.msg, '¡Upss!'); }
      
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  
  

  
});