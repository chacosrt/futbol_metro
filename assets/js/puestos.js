//////////////////////////////////////////////////////////////////////////////////
//SECCION PARA MODALS
//////////////////////////////////////////////////////////////////////////////////
/* ver formato de oslicitud */
function verformato(idPuestover){
  
  var idpuesto = idPuestover;
  data        = new FormData(),
  data.append('idpuesto', idpuesto);
  // AJAX
  $.ajax({
    url: 'rh/verformatosolicituda',
    type: 'post',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,

  }).done(function(res) {
    
    if(res.status === 200) {
      document.location.href = 'rh/verformatosolicitudRea'

    } 
    
    
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
  })
}


/* modal para eliminar */
$("#eliminar").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idPuesto").val(recipient);
});

/* modal para aceptar el puesto solicitado por el area */
$("#aceptar").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idPuesto").val(recipient);
});

/* para el modal de comentsarios antes de aceptar la solictud de puestos */
$("#comentarios").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idPuesto").val(recipient);
});

/* modal para editar */
$("#editar").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var valor = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idPuesto").val(valor);

  data        = new FormData($('.edisolicitud').get(0))
    
  var wrapper = $('.foreditasolipuesto');
  
  //data.push(['valor',valor]);
  
  $.ajax({
    url: 'rh/infoeditaelemento',
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
      cargamosAreasEdi();
      cargamosUbicacionEdi();
      cargamosempleEdi();
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
    

});

/* modal de asignacion de evaluacion */
$("#asignarevaluaciones").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idPuesto").val(recipient);

  data        = new FormData($('.evaluacionesasigna').get(0));

  $.ajax({
    url: 'rh/evaselecsd',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data: data,
    
    /* con esta linea mostramos el cargador de los formularios */
    beforeSend: function() {  }

  }).done(function(res) {
    cargoeva();

  }).fail(function(err) {

  }).always(function() {
    
  })
});

/* cargo la evaluaciones para asignar */
function cargoeva() {
  /* seleccionamos el div en que vamos a modificar los valores */
  var wrapper = $('.selectevalauciones');

  $.ajax({
    url: 'rh/careva',
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


/* funciones para cargar catalogos en la edicion */
function cargamosAreasEdi() {
  /* seleccionamos el div en que vamos a modificar los valores */
  var wrapper = $('.catareaEdi');

  $.ajax({
    url: 'rh/carareaEdi',
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
function cargamosUbicacionEdi() {
  /* seleccionamos el div en que vamos a modificar los valores */
  var wrapper = $('.catubiunoEdi');

  $.ajax({
    url: 'rh/carubicacionEdi',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    
    /* con esta linea mostramos el cargador de los formularios */
    beforeSend: function() { wrapper.waitMe();  }

  }).done(function(res) {
    
    wrapper.html(res.data);
    
   
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');

  }).always(function() {
    wrapper.waitMe('hide');
  })
}
function cargamosempleEdi() {
  /* seleccionamos el div en que vamos a modificar los valores */
  var wrapper = $('.catempleEdi');

  $.ajax({
    url: 'rh/carempleEdi',
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

/* para ver la seccion de prospectos */
function verprospectos(idPuestover){
  
  var idpuesto = idPuestover;
  data        = new FormData(),
  data.append('idpuesto', idpuesto);
  // AJAX
  $.ajax({
    url: 'rh/verprospectos',
    type: 'post',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,

  }).done(function(res) {
    
    if(res.status === 200) {
      document.location.href = 'rh/verprospectosRe'

    } 
    
    
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
  })
}

/* para ver la seccion de prospectos en administrador*/
function verprospectosadmin(idPuestover){
  
  var idpuesto = idPuestover;
  data        = new FormData(),
  data.append('idpuesto', idpuesto);
  // AJAX
  $.ajax({
    url: 'rh/verprospectosAdmin',
    type: 'post',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,

  }).done(function(res) {
    
    if(res.status === 200) {
      document.location.href = 'rh/verprospectosReAdmin'

    } 
    
    
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
  })
}
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
  //seccion para la solicitud de pueswtos en admin

  /* cargamos los puestos que no han sido aceptados */
  cargopuestosin();
  function cargopuestosin() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.puestosin');

    $.ajax({
      url: 'rh/cargopuessin',
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
  /* Cargamos el concentrado de puesto */
  cargopuestoscon();
  function cargopuestoscon() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.concentradopuesto');

    $.ajax({
      url: 'rh/cargopuescon',
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
  /* SECCION DE CATALOGO */
  /* cargamos los modulos de area y ubicacion */
  cargamosAreas();
  function cargamosAreas() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.catarea');

    $.ajax({
      url: 'rh/cararea',
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
  
  cargamosUbicacion();
  function cargamosUbicacion() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.catubiuno');

    $.ajax({
      url: 'rh/carubicacion',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      
      /* con esta linea mostramos el cargador de los formularios */
      beforeSend: function() { wrapper.waitMe();  }

    }).done(function(res) {
      
      wrapper.html(res.data);
      
     
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
      wrapper.html('');

    }).always(function() {
      wrapper.waitMe('hide');
    })
  }

  cargamosemple();
  function cargamosemple() {
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.catemple');

    $.ajax({
      url: 'rh/caremple',
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

  /* para aceptar el puesto solicitado por el area */
  $('body').on('submit', '.aceptarpuesto', acepto);
  function acepto(event) {
    event.preventDefault();

    var form    = $('.aceptarpuesto');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'rh/aceptopuesto',
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
        $('#aceptar').modal('hide');
        cargopuestosin();

      } 
      
      else { toastr.error(res.msg, '¡Upss!'); }
      
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }

  /* para aceptar el puesto solicitado por el area */
  $('body').on('submit', '.agregocoment', comenadmin);
  function comenadmin(event) {
    event.preventDefault();

    var form    = $('.agregocoment');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'rh/comentarioadmin',
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
        $('#comentarios').modal('hide');
        cargopuestosin();

      } 
      
      else { toastr.error(res.msg, '¡Upss!'); }
      
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }
  

  /* eliminamos el elemento */
  $('body').on('submit', '.eliminarelemento', elielemento);
  function elielemento(event) {
    event.preventDefault();

    var form    = $('.eliminarelemento');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'rh/eliminoElemento',
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
        cargosolipue();

      } 
      
      else { toastr.error(res.msg, '¡Upss!'); }
      
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }

  /* editamos el elemento */
  $('body').on('submit', '.edisolicitud', edielemento);
  function edielemento(event) {
    event.preventDefault();

    var form    = $('.edisolicitud');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'rh/editoElemento',
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
        $('#editar').modal('hide');
        cargosolipue();

      } 
      
      else { toastr.error(res.msg, '¡Upss!'); }
      
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
    })
  }

  /* agregamos evaluaciones al puesto */
  $('body').on('submit', '.evaluacionesasigna', asievalu);
  function asievalu(event) {
    event.preventDefault();

    var form    = $('.evaluacionesasigna');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'rh/agregoevaluacion',
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
        $('#asignarevaluaciones').modal('hide');
        cargopuestoscon();

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