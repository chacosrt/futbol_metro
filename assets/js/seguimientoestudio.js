/* SECCION DE MODALS */
/* eliminamos documento */
$("#eDocu").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idDocumentacion").val(recipient);
});

/* eliminamos familiar */
$("#eliEstru").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idEstructura").val(recipient);
});

/* editamos el familiar */
$("#ediestruc").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idEstructuraed").val(recipient);
 

  data        = new FormData($('.editaestrr').get(0))
    
  var wrapper = $('.campoeditaestruc');
  
  //data.push(['valor',valor]);
  
  $.ajax({
    url: 'estudios/obtenemosinfoeditaestruc',
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

/* editamos el la situacuib */
$("#editositudu").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idSituacionedi").val(recipient);
 

  data        = new FormData($('.edidisituacion').get(0))
    
  var wrapper = $('.camposeditasitus');
  
  //data.push(['valor',valor]);
  
  $.ajax({
    url: 'estudios/obtenemosinfoeditaSituacion',
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

/* editamos la referencia personal */
$("#editaRper").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idRefePersonalesedi").val(recipient);
 

  data        = new FormData($('.editarefeoperd').get(0))
    
  var wrapper = $('.editarefeper');
  
  //data.push(['valor',valor]);
  
  $.ajax({
    url: 'estudios/obtenemosrefper',
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




/* '''''''''''''''''''''''''''''''' */

/* eliminamos situacion */
$("#eliSituFa").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idSituacion").val(recipient);
});

/* eliminamos referencia personal */
$("#eliRper").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idRefePersonales").val(recipient);
});

$("#elirefelab").on("show.bs.modal", function(event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idRefeLaborales").val(recipient);
});


/* eliminar foto */
$("#eliimg").on("show.bs.modal", function(event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idFotos").val(recipient);
});

/* eliminar foto */
$("#elimperiorod").on("show.bs.modal", function(event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idPeriodo").val(recipient);
});

/* eliminar salida */
$("#elisalida").on("show.bs.modal", function(event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idDespido").val(recipient);
});

/* elimianr dia de capcaidad */
$("#eliincapa").on("show.bs.modal", function(event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idIncapacidad").val(recipient);
});

/* elicredito */
$("#elicredit").on("show.bs.modal", function(event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idCredito").val(recipient);
});

/* editamos entecedentes laborales */
/* modal para editar */
$("#editarantecedentes").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var valor = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idRefeLaborales").val(valor);

  data        = new FormData($('.editarefelaboral').get(0))
    
  var wrapper = $('.campoedita');
  
  //data.push(['valor',valor]);
  
  $.ajax({
    url: 'estudios/refelaborainfo',
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

/* ewditamos creditos */
$("#editocredito").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var valor = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idCredito").val(valor);

  data        = new FormData($('.editacredito').get(0))
    
  var wrapper = $('.formaparaediutarcresdito');

  
  $.ajax({
    url: 'estudios/editarinfocredi',
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

/* eliminamos beneficiario */
$("#elibene").on("show.bs.modal", function(event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idBeneficiario").val(recipient);
});

/* editamos beneficiarios */
$("#editabenefi").on("show.bs.modal", function(event) {
        
  var button = $(event.relatedTarget); // Button that triggered the modal
  var valor = button.data("unoo");
  var modal = $(this);
  modal.find(".modal-body #idBeneficiario").val(valor);

  data        = new FormData($('.editarbenfi').get(0))
    
  var wrapper = $('.campoeditabe');
  
  //data.push(['valor',valor]);
  
  $.ajax({
    url: 'estudios/beneinfoed',
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

/* FUCNIONES  */
/* seccion para mostar los campos */
function ventanas(iden){

  switch (iden) {
    case 1:
      /* mostramos seccion y ocultamos las que no */
      $('.campoUno').css("display", "block");
      $('.campoDos').css("display", "none");
      $('.campoTres').css("display", "none");
      $('.campoCuatro').css("display", "none");
      $('.campoCinco').css("display", "none");
      $('.campoSeis').css("display", "none");
      $('.campoSiete').css("display", "none");
      $('.campoOcho').css("display", "none");
      $('.campoNueve').css("display", "none");
      $('.campoDiez').css("display", "none");
      $('.campoOnce').css("display", "none");
      $('.campoDoce').css("display", "none");
      $('.campoTrece').css("display", "none");
      $('.campoCatorce').css("display", "none");
      $('.campoQuince').css("display", "none");
      $('.campoDiezsieis').css("display", "none");
      $('.campoDiezsiete').css("display", "none");
      $('.campoDiezocho').css("display", "none");
      $('.campoDieznueve').css("display", "none");
      $('.campoVeinte').css("display", "none");
      $('.campoVeinteuno').css("display", "none");
      $('.campoVeintedos').css("display", "none");
      $('.campoVeintetres').css("display", "none");
      $('.campoVeintecuatro').css("display", "none");
      $('.campoVeintecinco').css("display", "none");
      $('.campoVeinteseis').css("display", "none");
      /* invocamos funciones dependiendo de la seccion */
      cargocampounoDos();
      
    break;
    case 2:
      /* mostramos seccion y ocultamos las que no */
      $('.campoUno').css("display", "none");
      $('.campoDos').css("display", "block");
      $('.campoTres').css("display", "none");
      $('.campoCuatro').css("display", "none");
      $('.campoCinco').css("display", "none");
      $('.campoSeis').css("display", "none");
      $('.campoSiete').css("display", "none");
      $('.campoOcho').css("display", "none");
      $('.campoNueve').css("display", "none");
      $('.campoDiez').css("display", "none");
      $('.campoOnce').css("display", "none");
      $('.campoDoce').css("display", "none");
      $('.campoTrece').css("display", "none");
      $('.campoCatorce').css("display", "none");
      $('.campoQuince').css("display", "none");
      $('.campoDiezsieis').css("display", "none");
      $('.campoDiezsiete').css("display", "none");
      $('.campoDiezocho').css("display", "none");
      $('.campoDieznueve').css("display", "none");
      $('.campoVeinte').css("display", "none");
      $('.campoVeinteuno').css("display", "none");
      $('.campoVeintedos').css("display", "none");
      $('.campoVeintetres').css("display", "none");
      $('.campoVeintecuatro').css("display", "none");
      $('.campoVeintecinco').css("display", "none");
      $('.campoVeinteseis').css("display", "none");
      /* invocamos funciones dependiendo de la seccion */
      cargocampodos();
      
    break;
    case 3:
      /* mostramos seccion y ocultamos las que no */
      $('.campoUno').css("display", "none");
      $('.campoDos').css("display", "none");
      $('.campoTres').css("display", "block");
      $('.campoCuatro').css("display", "none");
      $('.campoCinco').css("display", "none");
      $('.campoSeis').css("display", "none");
      $('.campoSiete').css("display", "none");
      $('.campoOcho').css("display", "none");
      $('.campoNueve').css("display", "none");
      $('.campoDiez').css("display", "none");
      $('.campoOnce').css("display", "none");
      $('.campoDoce').css("display", "none");
      $('.campoTrece').css("display", "none");
      $('.campoCatorce').css("display", "none");
      $('.campoQuince').css("display", "none");
      $('.campoDiezsieis').css("display", "none");
      $('.campoDiezsiete').css("display", "none");
      $('.campoDiezocho').css("display", "none");
      $('.campoDieznueve').css("display", "none");
      $('.campoVeinte').css("display", "none");
      $('.campoVeinteuno').css("display", "none");
      $('.campoVeintedos').css("display", "none");
      $('.campoVeintetres').css("display", "none");
      $('.campoVeintecuatro').css("display", "none");
      $('.campoVeintecinco').css("display", "none");
      $('.campoVeinteseis').css("display", "none");
      /* invocamos funciones dependiendo de la seccion */
      cargocampotres();
      
    break;
    case 4:
      /* mostramos seccion y ocultamos las que no */
      $('.campoUno').css("display", "none");
      $('.campoDos').css("display", "none");
      $('.campoTres').css("display", "none");
      $('.campoCuatro').css("display", "block");
      $('.campoCinco').css("display", "none");
      $('.campoSeis').css("display", "none");
      $('.campoSiete').css("display", "none");
      $('.campoOcho').css("display", "none");
      $('.campoNueve').css("display", "none");
      $('.campoDiez').css("display", "none");
      $('.campoOnce').css("display", "none");
      $('.campoDoce').css("display", "none");
      $('.campoTrece').css("display", "none");
      $('.campoCatorce').css("display", "none");
      $('.campoQuince').css("display", "none");
      $('.campoDiezsieis').css("display", "none");
      $('.campoDiezsiete').css("display", "none");
      $('.campoDiezocho').css("display", "none");
      $('.campoDieznueve').css("display", "none");
      $('.campoVeinte').css("display", "none");
      $('.campoVeinteuno').css("display", "none");
      $('.campoVeintedos').css("display", "none");
      $('.campoVeintetres').css("display", "none");
      $('.campoVeintecuatro').css("display", "none");
      $('.campoVeintecinco').css("display", "none");
      $('.campoVeinteseis').css("display", "none");
      /* invocamos funciones dependiendo de la seccion */
      cargocampocuatro();
    break;
    case 5:
      /* mostramos seccion y ocultamos las que no */
      $('.campoUno').css("display", "none");
      $('.campoDos').css("display", "none");
      $('.campoTres').css("display", "none");
      $('.campoCuatro').css("display", "none");
      $('.campoCinco').css("display", "block");
      $('.campoSeis').css("display", "none");
      $('.campoSiete').css("display", "none");
      $('.campoOcho').css("display", "none");
      $('.campoNueve').css("display", "none");
      $('.campoDiez').css("display", "none");
      $('.campoOnce').css("display", "none");
      $('.campoDoce').css("display", "none");
      $('.campoTrece').css("display", "none");
      $('.campoCatorce').css("display", "none");
      $('.campoQuince').css("display", "none");
      $('.campoDiezsieis').css("display", "none");
      $('.campoDiezsiete').css("display", "none");
      $('.campoDiezocho').css("display", "none");
      $('.campoDieznueve').css("display", "none");
      $('.campoVeinte').css("display", "none");
      $('.campoVeinteuno').css("display", "none");
      $('.campoVeintedos').css("display", "none");
      $('.campoVeintetres').css("display", "none");
      $('.campoVeintecuatro').css("display", "none");
      $('.campoVeintecinco').css("display", "none");
      $('.campoVeinteseis').css("display", "none");
      /* invocamos funciones dependiendo de la seccion */
      cargocampocinco();
    break;
    case 6:
      /* mostramos seccion y ocultamos las que no */
      $('.campoUno').css("display", "none");
      $('.campoDos').css("display", "none");
      $('.campoTres').css("display", "none");
      $('.campoCuatro').css("display", "none");
      $('.campoCinco').css("display", "none");
      $('.campoSeis').css("display", "block");
      $('.campoSiete').css("display", "none");
      $('.campoOcho').css("display", "none");
      $('.campoNueve').css("display", "none");
      $('.campoDiez').css("display", "none");
      $('.campoOnce').css("display", "none");
      $('.campoDoce').css("display", "none");
      $('.campoTrece').css("display", "none");
      $('.campoCatorce').css("display", "none");
      $('.campoQuince').css("display", "none");
      $('.campoDiezsieis').css("display", "none");
      $('.campoDiezsiete').css("display", "none");
      $('.campoDiezocho').css("display", "none");
      $('.campoDieznueve').css("display", "none");
      $('.campoVeinte').css("display", "none");
      $('.campoVeinteuno').css("display", "none");
      $('.campoVeintedos').css("display", "none");
      $('.campoVeintetres').css("display", "none");
      $('.campoVeintecuatro').css("display", "none");
      $('.campoVeintecinco').css("display", "none");
      $('.campoVeinteseis').css("display", "none");
      /* invocamos funciones dependiendo de la seccion */
      cargocamposeis();
    break;
    case 7:
      /* mostramos seccion y ocultamos las que no */
      $('.campoUno').css("display", "none");
      $('.campoDos').css("display", "none");
      $('.campoTres').css("display", "none");
      $('.campoCuatro').css("display", "none");
      $('.campoCinco').css("display", "none");
      $('.campoSeis').css("display", "none");
      $('.campoSiete').css("display", "block");
      $('.campoOcho').css("display", "none");
      $('.campoNueve').css("display", "none");
      $('.campoDiez').css("display", "none");
      $('.campoOnce').css("display", "none");
      $('.campoDoce').css("display", "none");
      $('.campoTrece').css("display", "none");
      $('.campoCatorce').css("display", "none");
      $('.campoQuince').css("display", "none");
      $('.campoDiezsieis').css("display", "none");
      $('.campoDiezsiete').css("display", "none");
      $('.campoDiezocho').css("display", "none");
      $('.campoDieznueve').css("display", "none");
      $('.campoVeinte').css("display", "none");
      $('.campoVeinteuno').css("display", "none");
      $('.campoVeintedos').css("display", "none");
      $('.campoVeintetres').css("display", "none");
      $('.campoVeintecuatro').css("display", "none");
      $('.campoVeintecinco').css("display", "none");
      $('.campoVeinteseis').css("display", "none");
      /* invocamos funciones dependiendo de la seccion */
      cargocamposiete();
    break;
    case 8:
      /* mostramos seccion y ocultamos las que no */
      $('.campoUno').css("display", "none");
      $('.campoDos').css("display", "none");
      $('.campoTres').css("display", "none");
      $('.campoCuatro').css("display", "none");
      $('.campoCinco').css("display", "none");
      $('.campoSeis').css("display", "none");
      $('.campoSiete').css("display", "none");
      $('.campoOcho').css("display", "block");
      $('.campoNueve').css("display", "none");
      $('.campoDiez').css("display", "none");
      $('.campoOnce').css("display", "none");
      $('.campoDoce').css("display", "none");
      $('.campoTrece').css("display", "none");
      $('.campoCatorce').css("display", "none");
      $('.campoQuince').css("display", "none");
      $('.campoDiezsieis').css("display", "none");
      $('.campoDiezsiete').css("display", "none");
      $('.campoDiezocho').css("display", "none");
      $('.campoDieznueve').css("display", "none");
      $('.campoVeinte').css("display", "none");
      $('.campoVeinteuno').css("display", "none");
      $('.campoVeintedos').css("display", "none");
      $('.campoVeintetres').css("display", "none");
      $('.campoVeintecuatro').css("display", "none");
      $('.campoVeintecinco').css("display", "none");
      $('.campoVeinteseis').css("display", "none");
      /* invocamos funciones dependiendo de la seccion */
      cargocampoOcho();
    break;
    case 9:
      /* mostramos seccion y ocultamos las que no */
      $('.campoUno').css("display", "none");
      $('.campoDos').css("display", "none");
      $('.campoTres').css("display", "none");
      $('.campoCuatro').css("display", "none");
      $('.campoCinco').css("display", "none");
      $('.campoSeis').css("display", "none");
      $('.campoSiete').css("display", "none");
      $('.campoOcho').css("display", "none");
      $('.campoNueve').css("display", "block");
      $('.campoDiez').css("display", "none");
      $('.campoOnce').css("display", "none");
      $('.campoDoce').css("display", "none");
      $('.campoTrece').css("display", "none");
      $('.campoCatorce').css("display", "none");
      $('.campoQuince').css("display", "none");
      $('.campoDiezsieis').css("display", "none");
      $('.campoDiezsiete').css("display", "none");
      $('.campoDiezocho').css("display", "none");
      $('.campoDieznueve').css("display", "none");
      $('.campoVeinte').css("display", "none");
      $('.campoVeinteuno').css("display", "none");
      $('.campoVeintedos').css("display", "none");
      $('.campoVeintetres').css("display", "none");
      $('.campoVeintecuatro').css("display", "none");
      $('.campoVeintecinco').css("display", "none");
      $('.campoVeinteseis').css("display", "none");
      /* invocamos funciones dependiendo de la seccion */
      cargocamponueve();
    break;
    case 10:
      /* mostramos seccion y ocultamos las que no */
      $('.campoUno').css("display", "none");
      $('.campoDos').css("display", "none");
      $('.campoTres').css("display", "none");
      $('.campoCuatro').css("display", "none");
      $('.campoCinco').css("display", "none");
      $('.campoSeis').css("display", "none");
      $('.campoSiete').css("display", "none");
      $('.campoOcho').css("display", "none");
      $('.campoNueve').css("display", "none");
      $('.campoDiez').css("display", "block");
      $('.campoOnce').css("display", "none");
      $('.campoDoce').css("display", "none");
      $('.campoTrece').css("display", "none");
      $('.campoCatorce').css("display", "none");
      $('.campoQuince').css("display", "none");
      $('.campoDiezsieis').css("display", "none");
      $('.campoDiezsiete').css("display", "none");
      $('.campoDiezocho').css("display", "none");
      $('.campoDieznueve').css("display", "none");
      $('.campoVeinte').css("display", "none");
      $('.campoVeinteuno').css("display", "none");
      $('.campoVeintedos').css("display", "none");
      $('.campoVeintetres').css("display", "none");
      $('.campoVeintecuatro').css("display", "none");
      $('.campoVeintecinco').css("display", "none");
      $('.campoVeinteseis').css("display", "none");
      /* invocamos funciones dependiendo de la seccion */
      cargocampodiez();
    break;
    case 11:
      /* mostramos seccion y ocultamos las que no */
      $('.campoUno').css("display", "none");
      $('.campoDos').css("display", "none");
      $('.campoTres').css("display", "none");
      $('.campoCuatro').css("display", "none");
      $('.campoCinco').css("display", "none");
      $('.campoSeis').css("display", "none");
      $('.campoSiete').css("display", "none");
      $('.campoOcho').css("display", "none");
      $('.campoNueve').css("display", "none");
      $('.campoDiez').css("display", "none");
      $('.campoOnce').css("display", "block");
      $('.campoDoce').css("display", "none");
      $('.campoTrece').css("display", "none");
      $('.campoCatorce').css("display", "none");
      $('.campoQuince').css("display", "none");
      $('.campoDiezsieis').css("display", "none");
      $('.campoDiezsiete').css("display", "none");
      $('.campoDiezocho').css("display", "none");
      $('.campoDieznueve').css("display", "none");
      $('.campoVeinte').css("display", "none");
      $('.campoVeinteuno').css("display", "none");
      $('.campoVeintedos').css("display", "none");
      $('.campoVeintetres').css("display", "none");
      $('.campoVeintecuatro').css("display", "none");
      $('.campoVeintecinco').css("display", "none");
      $('.campoVeinteseis').css("display", "none");
      /* invocamos funciones dependiendo de la seccion */
      cargocampoonce();
    break;
    case 12:
      /* mostramos seccion y ocultamos las que no */
      $('.campoUno').css("display", "none");
      $('.campoDos').css("display", "none");
      $('.campoTres').css("display", "none");
      $('.campoCuatro').css("display", "none");
      $('.campoCinco').css("display", "none");
      $('.campoSeis').css("display", "none");
      $('.campoSiete').css("display", "none");
      $('.campoOcho').css("display", "none");
      $('.campoNueve').css("display", "none");
      $('.campoDiez').css("display", "none");
      $('.campoOnce').css("display", "none");
      $('.campoDoce').css("display", "block");
      $('.campoTrece').css("display", "none");
      $('.campoCatorce').css("display", "none");
      $('.campoQuince').css("display", "none");
      $('.campoDiezsieis').css("display", "none");
      $('.campoDiezsiete').css("display", "none");
      $('.campoDiezocho').css("display", "none");
      $('.campoDieznueve').css("display", "none");
      $('.campoVeinte').css("display", "none");
      $('.campoVeinteuno').css("display", "none");
      $('.campoVeintedos').css("display", "none");
      $('.campoVeintetres').css("display", "none");
      $('.campoVeintecuatro').css("display", "none");
      $('.campoVeintecinco').css("display", "none");
      $('.campoVeinteseis').css("display", "none");
      /* invocamos funciones dependiendo de la seccion */
      cargocampodoce();
    break;
    case 13:
      /* mostramos seccion y ocultamos las que no */
      $('.campoUno').css("display", "none");
      $('.campoDos').css("display", "none");
      $('.campoTres').css("display", "none");
      $('.campoCuatro').css("display", "none");
      $('.campoCinco').css("display", "none");
      $('.campoSeis').css("display", "none");
      $('.campoSiete').css("display", "none");
      $('.campoOcho').css("display", "none");
      $('.campoNueve').css("display", "none");
      $('.campoDiez').css("display", "none");
      $('.campoOnce').css("display", "none");
      $('.campoDoce').css("display", "none");
      $('.campoTrece').css("display", "block");
      $('.campoCatorce').css("display", "none");
      $('.campoQuince').css("display", "none");
      $('.campoDiezsieis').css("display", "none");
      $('.campoDiezsiete').css("display", "none");
      $('.campoDiezocho').css("display", "none");
      $('.campoDieznueve').css("display", "none");
      $('.campoVeinte').css("display", "none");
      $('.campoVeinteuno').css("display", "none");
      $('.campoVeintedos').css("display", "none");
      $('.campoVeintetres').css("display", "none");
      $('.campoVeintecuatro').css("display", "none");
      $('.campoVeintecinco').css("display", "none");
      $('.campoVeinteseis').css("display", "none");
      /* invocamos funciones dependiendo de la seccion */
      cargocampotrece();
    break;
    case 14:
      /* mostramos seccion y ocultamos las que no */
      $('.campoUno').css("display", "none");
      $('.campoDos').css("display", "none");
      $('.campoTres').css("display", "none");
      $('.campoCuatro').css("display", "none");
      $('.campoCinco').css("display", "none");
      $('.campoSeis').css("display", "none");
      $('.campoSiete').css("display", "none");
      $('.campoOcho').css("display", "none");
      $('.campoNueve').css("display", "none");
      $('.campoDiez').css("display", "none");
      $('.campoOnce').css("display", "none");
      $('.campoDoce').css("display", "none");
      $('.campoTrece').css("display", "none");
      $('.campoCatorce').css("display", "block");
      $('.campoQuince').css("display", "none");
      $('.campoDiezsieis').css("display", "none");
      $('.campoDiezsiete').css("display", "none");
      $('.campoDiezocho').css("display", "none");
      $('.campoDieznueve').css("display", "none");
      $('.campoVeinte').css("display", "none");
      $('.campoVeinteuno').css("display", "none");
      $('.campoVeintedos').css("display", "none");
      $('.campoVeintetres').css("display", "none");
      $('.campoVeintecuatro').css("display", "none");
      $('.campoVeintecinco').css("display", "none");
      $('.campoVeinteseis').css("display", "none");
      /* invocamos funciones dependiendo de la seccion */
      cargocampocatorce();
    break;
    case 15:
      /* mostramos seccion y ocultamos las que no */
      $('.campoUno').css("display", "none");
      $('.campoDos').css("display", "none");
      $('.campoTres').css("display", "none");
      $('.campoCuatro').css("display", "none");
      $('.campoCinco').css("display", "none");
      $('.campoSeis').css("display", "none");
      $('.campoSiete').css("display", "none");
      $('.campoOcho').css("display", "none");
      $('.campoNueve').css("display", "none");
      $('.campoDiez').css("display", "none");
      $('.campoOnce').css("display", "none");
      $('.campoDoce').css("display", "none");
      $('.campoTrece').css("display", "none");
      $('.campoCatorce').css("display", "none");
      $('.campoQuince').css("display", "block");
      $('.campoDiezsieis').css("display", "none");
      $('.campoDiezsiete').css("display", "none");
      $('.campoDiezocho').css("display", "none");
      $('.campoDieznueve').css("display", "none");
      $('.campoVeinte').css("display", "none");
      $('.campoVeinteuno').css("display", "none");
      $('.campoVeintedos').css("display", "none");
      $('.campoVeintetres').css("display", "none");
      $('.campoVeintecuatro').css("display", "none");
      $('.campoVeintecinco').css("display", "none");
      $('.campoVeinteseis').css("display", "none");
      /* invocamos funciones dependiendo de la seccion */
      cargocampoquince();
    break;
    case 16:
      /* mostramos seccion y ocultamos las que no */
      $('.campoUno').css("display", "none");
      $('.campoDos').css("display", "none");
      $('.campoTres').css("display", "none");
      $('.campoCuatro').css("display", "none");
      $('.campoCinco').css("display", "none");
      $('.campoSeis').css("display", "none");
      $('.campoSiete').css("display", "none");
      $('.campoOcho').css("display", "none");
      $('.campoNueve').css("display", "none");
      $('.campoDiez').css("display", "none");
      $('.campoOnce').css("display", "none");
      $('.campoDoce').css("display", "none");
      $('.campoTrece').css("display", "none");
      $('.campoCatorce').css("display", "none");
      $('.campoQuince').css("display", "none");
      $('.campoDiezsieis').css("display", "block");
      $('.campoDiezsiete').css("display", "none");
      $('.campoDiezocho').css("display", "none");
      $('.campoDieznueve').css("display", "none");
      $('.campoVeinte').css("display", "none");
      $('.campoVeinteuno').css("display", "none");
      $('.campoVeintedos').css("display", "none");
      $('.campoVeintetres').css("display", "none");
      $('.campoVeintecuatro').css("display", "none");
      $('.campoVeintecinco').css("display", "none");
      $('.campoVeinteseis').css("display", "none");
      /* invocamos funciones dependiendo de la seccion */
      cargocampodiezseis();

    break;
    case 17:
      /* mostramos seccion y ocultamos las que no */
      $('.campoUno').css("display", "none");
      $('.campoDos').css("display", "none");
      $('.campoTres').css("display", "none");
      $('.campoCuatro').css("display", "none");
      $('.campoCinco').css("display", "none");
      $('.campoSeis').css("display", "none");
      $('.campoSiete').css("display", "none");
      $('.campoOcho').css("display", "none");
      $('.campoNueve').css("display", "none");
      $('.campoDiez').css("display", "none");
      $('.campoOnce').css("display", "none");
      $('.campoDoce').css("display", "none");
      $('.campoTrece').css("display", "none");
      $('.campoCatorce').css("display", "none");
      $('.campoQuince').css("display", "none");
      $('.campoDiezsieis').css("display", "none");
      $('.campoDiezsiete').css("display", "block");
      $('.campoDiezocho').css("display", "none");
      $('.campoDieznueve').css("display", "none");
      $('.campoVeinte').css("display", "none");
      $('.campoVeinteuno').css("display", "none");
      $('.campoVeintedos').css("display", "none");
      $('.campoVeintetres').css("display", "none");
      $('.campoVeintecuatro').css("display", "none");
      $('.campoVeintecinco').css("display", "none");
      $('.campoVeinteseis').css("display", "none");
      /* invocamos funciones dependiendo de la seccion */
      cargocampodiezsiete();
    break;
    case 18:
      /* mostramos seccion y ocultamos las que no */
      $('.campoUno').css("display", "none");
      $('.campoDos').css("display", "none");
      $('.campoTres').css("display", "none");
      $('.campoCuatro').css("display", "none");
      $('.campoCinco').css("display", "none");
      $('.campoSeis').css("display", "none");
      $('.campoSiete').css("display", "none");
      $('.campoOcho').css("display", "none");
      $('.campoNueve').css("display", "none");
      $('.campoDiez').css("display", "none");
      $('.campoOnce').css("display", "none");
      $('.campoDoce').css("display", "none");
      $('.campoTrece').css("display", "none");
      $('.campoCatorce').css("display", "none");
      $('.campoQuince').css("display", "none");
      $('.campoDiezsieis').css("display", "none");
      $('.campoDiezsiete').css("display", "none");
      $('.campoDiezocho').css("display", "block");
      $('.campoDieznueve').css("display", "none");
      $('.campoVeinte').css("display", "none");
      $('.campoVeinteuno').css("display", "none");
      $('.campoVeintedos').css("display", "none");
      $('.campoVeintetres').css("display", "none");
      $('.campoVeintecuatro').css("display", "none");
      $('.campoVeintecinco').css("display", "none");
      $('.campoVeinteseis').css("display", "none");
      /* invocamos funciones dependiendo de la seccion */
      cargocampodiezocho();
    break;
    case 19:
      /* mostramos seccion y ocultamos las que no */
      $('.campoUno').css("display", "none");
      $('.campoDos').css("display", "none");
      $('.campoTres').css("display", "none");
      $('.campoCuatro').css("display", "none");
      $('.campoCinco').css("display", "none");
      $('.campoSeis').css("display", "none");
      $('.campoSiete').css("display", "none");
      $('.campoOcho').css("display", "none");
      $('.campoNueve').css("display", "none");
      $('.campoDiez').css("display", "none");
      $('.campoOnce').css("display", "none");
      $('.campoDoce').css("display", "none");
      $('.campoTrece').css("display", "none");
      $('.campoCatorce').css("display", "none");
      $('.campoQuince').css("display", "none");
      $('.campoDiezsieis').css("display", "none");
      $('.campoDiezsiete').css("display", "none");
      $('.campoDiezocho').css("display", "none");
      $('.campoDieznueve').css("display", "block");
      $('.campoVeinte').css("display", "none");
      $('.campoVeinteuno').css("display", "none");
      $('.campoVeintedos').css("display", "none");
      $('.campoVeintetres').css("display", "none");
      $('.campoVeintecuatro').css("display", "none");
      $('.campoVeintecinco').css("display", "none");
      $('.campoVeinteseis').css("display", "none");
      /* invocamos funciones dependiendo de la seccion */
      cargocampodieznueve();
    break;
    case 20:
      /* mostramos seccion y ocultamos las que no */
      $('.campoUno').css("display", "none");
      $('.campoDos').css("display", "none");
      $('.campoTres').css("display", "none");
      $('.campoCuatro').css("display", "none");
      $('.campoCinco').css("display", "none");
      $('.campoSeis').css("display", "none");
      $('.campoSiete').css("display", "none");
      $('.campoOcho').css("display", "none");
      $('.campoNueve').css("display", "none");
      $('.campoDiez').css("display", "none");
      $('.campoOnce').css("display", "none");
      $('.campoDoce').css("display", "none");
      $('.campoTrece').css("display", "none");
      $('.campoCatorce').css("display", "none");
      $('.campoQuince').css("display", "none");
      $('.campoDiezsieis').css("display", "none");
      $('.campoDiezsiete').css("display", "none");
      $('.campoDiezocho').css("display", "none");
      $('.campoDieznueve').css("display", "none");
      $('.campoVeinte').css("display", "block");
      $('.campoVeinteuno').css("display", "none");
      $('.campoVeintedos').css("display", "none");
      $('.campoVeintetres').css("display", "none");
      $('.campoVeintecuatro').css("display", "none");
      $('.campoVeintecinco').css("display", "none");
      $('.campoVeinteseis').css("display", "none");
      /* invocamos funciones dependiendo de la seccion */
      cargocampoveinte();
    break;
    case 21:
      /* mostramos seccion y ocultamos las que no */
      $('.campoUno').css("display", "none");
      $('.campoDos').css("display", "none");
      $('.campoTres').css("display", "none");
      $('.campoCuatro').css("display", "none");
      $('.campoCinco').css("display", "none");
      $('.campoSeis').css("display", "none");
      $('.campoSiete').css("display", "none");
      $('.campoOcho').css("display", "none");
      $('.campoNueve').css("display", "none");
      $('.campoDiez').css("display", "none");
      $('.campoOnce').css("display", "none");
      $('.campoDoce').css("display", "none");
      $('.campoTrece').css("display", "none");
      $('.campoCatorce').css("display", "none");
      $('.campoQuince').css("display", "none");
      $('.campoDiezsieis').css("display", "none");
      $('.campoDiezsiete').css("display", "none");
      $('.campoDiezocho').css("display", "none");
      $('.campoDieznueve').css("display", "none");
      $('.campoVeinte').css("display", "none");
      $('.campoVeinteuno').css("display", "block");
      $('.campoVeintedos').css("display", "none");
      $('.campoVeintetres').css("display", "none");
      $('.campoVeintecuatro').css("display", "none");
      $('.campoVeintecinco').css("display", "none");
      $('.campoVeinteseis').css("display", "none");
      /* invocamos funciones dependiendo de la seccion */
      cargocampoveinteuno();
    break;
    case 22:
      /* mostramos seccion y ocultamos las que no */
      $('.campoUno').css("display", "none");
      $('.campoDos').css("display", "none");
      $('.campoTres').css("display", "none");
      $('.campoCuatro').css("display", "none");
      $('.campoCinco').css("display", "none");
      $('.campoSeis').css("display", "none");
      $('.campoSiete').css("display", "none");
      $('.campoOcho').css("display", "none");
      $('.campoNueve').css("display", "none");
      $('.campoDiez').css("display", "none");
      $('.campoOnce').css("display", "none");
      $('.campoDoce').css("display", "none");
      $('.campoTrece').css("display", "none");
      $('.campoCatorce').css("display", "none");
      $('.campoQuince').css("display", "none");
      $('.campoDiezsieis').css("display", "none");
      $('.campoDiezsiete').css("display", "none");
      $('.campoDiezocho').css("display", "none");
      $('.campoDieznueve').css("display", "none");
      $('.campoVeinte').css("display", "none");
      $('.campoVeinteuno').css("display", "none");
      $('.campoVeintedos').css("display", "block");
      $('.campoVeintetres').css("display", "none");
      $('.campoVeintecuatro').css("display", "none");
      $('.campoVeintecinco').css("display", "none");
      $('.campoVeinteseis').css("display", "none");
      /* invocamos funciones dependiendo de la seccion */
      cargocampoveintedos();
    break;
    case 23:
      /* mostramos seccion y ocultamos las que no */
      $('.campoUno').css("display", "none");
      $('.campoDos').css("display", "none");
      $('.campoTres').css("display", "none");
      $('.campoCuatro').css("display", "none");
      $('.campoCinco').css("display", "none");
      $('.campoSeis').css("display", "none");
      $('.campoSiete').css("display", "none");
      $('.campoOcho').css("display", "none");
      $('.campoNueve').css("display", "none");
      $('.campoDiez').css("display", "none");
      $('.campoOnce').css("display", "none");
      $('.campoDoce').css("display", "none");
      $('.campoTrece').css("display", "none");
      $('.campoCatorce').css("display", "none");
      $('.campoQuince').css("display", "none");
      $('.campoDiezsieis').css("display", "none");
      $('.campoDiezsiete').css("display", "none");
      $('.campoDiezocho').css("display", "none");
      $('.campoDieznueve').css("display", "none");
      $('.campoVeinte').css("display", "none");
      $('.campoVeinteuno').css("display", "none");
      $('.campoVeintedos').css("display", "none");
      $('.campoVeintetres').css("display", "block");
      $('.campoVeintecuatro').css("display", "none");
      $('.campoVeintecinco').css("display", "none");
      $('.campoVeinteseis').css("display", "none");
      /* invocamos funciones dependiendo de la seccion */
      cargocampoveintetres();
    break;
    case 24:
      /* mostramos seccion y ocultamos las que no */
      $('.campoUno').css("display", "none");
      $('.campoDos').css("display", "none");
      $('.campoTres').css("display", "none");
      $('.campoCuatro').css("display", "none");
      $('.campoCinco').css("display", "none");
      $('.campoSeis').css("display", "none");
      $('.campoSiete').css("display", "none");
      $('.campoOcho').css("display", "none");
      $('.campoNueve').css("display", "none");
      $('.campoDiez').css("display", "none");
      $('.campoOnce').css("display", "none");
      $('.campoDoce').css("display", "none");
      $('.campoTrece').css("display", "none");
      $('.campoCatorce').css("display", "none");
      $('.campoQuince').css("display", "none");
      $('.campoDiezsieis').css("display", "none");
      $('.campoDiezsiete').css("display", "none");
      $('.campoDiezocho').css("display", "none");
      $('.campoDieznueve').css("display", "none");
      $('.campoVeinte').css("display", "none");
      $('.campoVeinteuno').css("display", "none");
      $('.campoVeintedos').css("display", "none");
      $('.campoVeintetres').css("display", "none");
      $('.campoVeintecuatro').css("display", "block");
      $('.campoVeintecinco').css("display", "none");
      $('.campoVeinteseis').css("display", "none");
      /* invocamos funciones dependiendo de la seccion */
      cargocampoveintecuatro();
    break;
    case 25:
      /* mostramos seccion y ocultamos las que no */
      $('.campoUno').css("display", "none");
      $('.campoDos').css("display", "none");
      $('.campoTres').css("display", "none");
      $('.campoCuatro').css("display", "none");
      $('.campoCinco').css("display", "none");
      $('.campoSeis').css("display", "none");
      $('.campoSiete').css("display", "none");
      $('.campoOcho').css("display", "none");
      $('.campoNueve').css("display", "none");
      $('.campoDiez').css("display", "none");
      $('.campoOnce').css("display", "none");
      $('.campoDoce').css("display", "none");
      $('.campoTrece').css("display", "none");
      $('.campoCatorce').css("display", "none");
      $('.campoQuince').css("display", "none");
      $('.campoDiezsieis').css("display", "none");
      $('.campoDiezsiete').css("display", "none");
      $('.campoDiezocho').css("display", "none");
      $('.campoDieznueve').css("display", "none");
      $('.campoVeinte').css("display", "none");
      $('.campoVeinteuno').css("display", "none");
      $('.campoVeintedos').css("display", "none");
      $('.campoVeintetres').css("display", "none");
      $('.campoVeintecuatro').css("display", "none");
      $('.campoVeintecinco').css("display", "block");
      $('.campoVeinteseis').css("display", "none");
      /* invocamos funciones dependiendo de la seccion */
      cargocampoveintecinco();
    break;
    case 26:
      /* mostramos seccion y ocultamos las que no */
      $('.campoUno').css("display", "none");
      $('.campoDos').css("display", "none");
      $('.campoTres').css("display", "none");
      $('.campoCuatro').css("display", "none");
      $('.campoCinco').css("display", "none");
      $('.campoSeis').css("display", "none");
      $('.campoSiete').css("display", "none");
      $('.campoOcho').css("display", "none");
      $('.campoNueve').css("display", "none");
      $('.campoDiez').css("display", "none");
      $('.campoOnce').css("display", "none");
      $('.campoDoce').css("display", "none");
      $('.campoTrece').css("display", "none");
      $('.campoCatorce').css("display", "none");
      $('.campoQuince').css("display", "none");
      $('.campoDiezsieis').css("display", "none");
      $('.campoDiezsiete').css("display", "none");
      $('.campoDiezocho').css("display", "none");
      $('.campoDieznueve').css("display", "none");
      $('.campoVeinte').css("display", "none");
      $('.campoVeinteuno').css("display", "none");
      $('.campoVeintedos').css("display", "none");
      $('.campoVeintetres').css("display", "none");
      $('.campoVeintecuatro').css("display", "none");
      $('.campoVeintecinco').css("display", "none");
      $('.campoVeinteseis').css("display", "block");
      /* invocamos funciones dependiendo de la seccion */
      cargocampoveinteseis();
    break;
    default:
      console.log('Lo lamentamos, por el momento no disponemos de ' + iden + '.');
    
    
  }

}

/* funcnion para cargar cuando botons */
function cargocampounoDos(){
  data        = new FormData($('.foreferencia').get(0))
  /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
  var wrapper = $('.camdatos');
  $.ajax({
    url: 'estudios/infocampouno',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,
  }).done(function(res) {
     wrapper.html(res.data); 
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');
  }).always(function() {
    wrapper.waitMe('hide');
  })

}
/* funcion para cargar modulo dos */
function cargocampodos(){
  data        = new FormData($('.foreferencia').get(0))
  /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
  var wrapper = $('.camdomicilio');
  $.ajax({
    url: 'estudios/infocampodos',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,
  }).done(function(res) {
     wrapper.html(res.data); 
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');
  }).always(function() {
    wrapper.waitMe('hide');
  })

}

/* funcion para cargar modulo tres */
function cargocampotres(){
  data        = new FormData($('.foreferencia').get(0))
  /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
  var wrapper = $('.campodocumentacion');
  $.ajax({
    url: 'estudios/infocampotres',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,
  }).done(function(res) {
     wrapper.html(res.data); 
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');
  }).always(function() {
    wrapper.waitMe('hide');
  })

}

/* funcion para cargar modulo cuatro */
function cargocampocuatro(){
    data        = new FormData($('.foreferencia').get(0))
    /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
    var wrapper = $('.campofamilaires');
    $.ajax({
      url: 'estudios/infocampocuatro',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
    }).done(function(res) {
       wrapper.html(res.data); 
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
      wrapper.html('');
    }).always(function() {
      wrapper.waitMe('hide');
    })
  
}

/* funcion para cargar el modulo cinco */
function cargocampocinco(){
  data        = new FormData($('.foreferencia').get(0))
  /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
  var wrapper = $('.camporedes');
  $.ajax({
    url: 'estudios/infocampocinco',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,
  }).done(function(res) {
     wrapper.html(res.data); 
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');
  }).always(function() {
    wrapper.waitMe('hide');
  })
  
}

/* funcion cargo modulo seis */
function cargocamposeis(){
  data        = new FormData($('.foreferencia').get(0))
  /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
  var wrapper = $('.campoconducta');
  $.ajax({
    url: 'estudios/infocamposeis',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,
  }).done(function(res) {
     wrapper.html(res.data); 
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');
  }).always(function() {
    wrapper.waitMe('hide');
  })
  
}

/* funcino cargo modulo siete */
function cargocamposiete(){
  data        = new FormData($('.foreferencia').get(0))
  /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
  var wrapper = $('.camposituacion');
  $.ajax({
    url: 'estudios/infocamposiete',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,
  }).done(function(res) {
     wrapper.html(res.data); 
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');
  }).always(function() {
    wrapper.waitMe('hide');
  })
  
}

/* functino cargo ocho */
function cargocampoOcho(){
  data        = new FormData($('.foreferencia').get(0))
  /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
  var wrapper = $('.campodeudas');
  $.ajax({
    url: 'estudios/infocampoocho',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,
  }).done(function(res) {
     wrapper.html(res.data); 
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');
  }).always(function() {
    wrapper.waitMe('hide');
  })
  
}

/* funcion cargo nueve */
function cargocamponueve(){
  data        = new FormData($('.formentorno').get(0))
  /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
  var wrapper = $('.campoentorno');
  $.ajax({
    url: 'estudios/infocamponueve',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,
  }).done(function(res) {
     wrapper.html(res.data); 
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');
  }).always(function() {
    wrapper.waitMe('hide');
  })
  
}

/* funcion cargo diez */
function cargocampodiez(){
  data        = new FormData($('.formentorno').get(0))
  /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
  var wrapper = $('.camporefpersonal');
  $.ajax({
    url: 'estudios/infocampodiez',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,
  }).done(function(res) {
     wrapper.html(res.data); 
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');
  }).always(function() {
    wrapper.waitMe('hide');
  })
  
}


/* funcion cargo once */
function cargocampoonce(){
  data        = new FormData($('.foreferencia').get(0))
  /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
  var wrapper = $('.capolaboral');
  $.ajax({
    url: 'estudios/infocampoonce',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,
  }).done(function(res) {
     wrapper.html(res.data); 
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');
  }).always(function() {
    wrapper.waitMe('hide');
  })
}

/* cargo campo doce */
function cargocampodoce(){
  data        = new FormData($('.foreferencia').get(0))
  /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
  var wrapper = $('.campofotos');
  $.ajax({
    url: 'estudios/infocampodoce',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,
  }).done(function(res) {
     wrapper.html(res.data); 
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');
  }).always(function() {
    wrapper.waitMe('hide');
  })
  
}

/* cargo campo trece */
function cargocampotrece(){
  data        = new FormData($('.foreferencia').get(0))
  /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
  var wrapper = $('.canmposalud');
  $.ajax({
    url: 'estudios/infocampotrece',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,
  }).done(function(res) {
     wrapper.html(res.data); 
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');
  }).always(function() {
    wrapper.waitMe('hide');
  })
  
}

/* cargo catorce */
function cargocampocatorce(){
  data        = new FormData($('.foreferencia').get(0))
  /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
  var wrapper = $('.camporesumen');
  $.ajax({
    url: 'estudios/infocampocatroce',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,
  }).done(function(res) {
     wrapper.html(res.data); 
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');
  }).always(function() {
    wrapper.waitMe('hide');
  })
  
}

/* cargo quince */
function cargocampoquince(){
  data        = new FormData($('.foreferencia').get(0))
  /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
  var wrapper = $('.camporhobby');
  $.ajax({
    url: 'estudios/infocampoquince',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,
  }).done(function(res) {
     wrapper.html(res.data); 
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');
  }).always(function() {
    wrapper.waitMe('hide');
  })
  
}


/* cargo diezseis */
function cargocampodiezseis(){
  data        = new FormData($('.foreferencia').get(0))
  /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
  var wrapper = $('.camporbeneficiarios');
  $.ajax({
    url: 'estudios/infocampodiezseis',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,
  }).done(function(res) {
     wrapper.html(res.data); 
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');
  }).always(function() {
    wrapper.waitMe('hide');
  })
  
}

/* cargo diezsiete */
function cargocampodiezsiete(){
  data        = new FormData($('.foreferencia').get(0))
  /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
  var wrapper = $('.campoacdemico');
  $.ajax({
    url: 'estudios/infordiessiete',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,
  }).done(function(res) {
     wrapper.html(res.data); 
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');
  }).always(function() {
    wrapper.waitMe('hide');
  })
  
}

/* cargo diezocho */
function cargocampodiezocho(){
  data        = new FormData($('.foreferencia').get(0))
  /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
  var wrapper = $('.campoaperiodos');
  $.ajax({
    url: 'estudios/infordiesocho',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,
  }).done(function(res) {
     wrapper.html(res.data); 
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');
  }).always(function() {
    wrapper.waitMe('hide');
  })
  
}

/* cargo dieznueve */
function cargocampodieznueve(){
  data        = new FormData($('.foreferencia').get(0))
  /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
  var wrapper = $('.campohislaborial');
  $.ajax({
    url: 'estudios/infordiesnueve',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,
  }).done(function(res) {
     wrapper.html(res.data); 
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');
  }).always(function() {
    wrapper.waitMe('hide');
  })
  
}

/* cargo veinte */
function cargocampoveinte(){
  data        = new FormData($('.foreferencia').get(0))
  /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
  var wrapper = $('.camposdespidos');
  $.ajax({
    url: 'estudios/inforveinte',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,
  }).done(function(res) {
     wrapper.html(res.data); 
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');
  }).always(function() {
    wrapper.waitMe('hide');
  })
  
}

/* veinte uno */
function cargocampoveinteuno(){
  data        = new FormData($('.foreferencia').get(0))
  /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
  var wrapper = $('.camposdias');
  $.ajax({
    url: 'estudios/inforveinteuno',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,
  }).done(function(res) {
     wrapper.html(res.data); 
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');
  }).always(function() {
    wrapper.waitMe('hide');
  })
  
}

/* veinte dos */
function cargocampoveintedos(){
  data        = new FormData($('.foreferencia').get(0))
  /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
  var wrapper = $('.camposproemple');
  $.ajax({
    url: 'estudios/inforveintedos',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,
  }).done(function(res) {
     wrapper.html(res.data); 
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');
  }).always(function() {
    wrapper.waitMe('hide');
  })
  
}

/* veinte tres */
function cargocampoveintetres(){
  data        = new FormData($('.foreferencia').get(0))
  /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
  var wrapper = $('.camposInfolab');
  $.ajax({
    url: 'estudios/inforveintetres',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,
  }).done(function(res) {
     wrapper.html(res.data); 
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');
  }).always(function() {
    wrapper.waitMe('hide');
  })
  
}

/* veinte cuatro */
function cargocampoveintecuatro(){
  data        = new FormData($('.foreferencia').get(0))
  /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
  var wrapper = $('.camposcreditos');
  $.ajax({
    url: 'estudios/inforveintecuatro',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,
  }).done(function(res) {
     wrapper.html(res.data); 
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');
  }).always(function() {
    wrapper.waitMe('hide');
  })
  
}

/* veinte cinco */
function cargocampoveintecinco(){
  data        = new FormData($('.foreferencia').get(0))
  /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
  var wrapper = $('.camposinfona');
  $.ajax({
    url: 'estudios/inforveintecinco',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,
  }).done(function(res) {
     wrapper.html(res.data); 
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');
  }).always(function() {
    wrapper.waitMe('hide');
  })
  
}

/* veinte seis */
function cargocampoveinteseis(){
  data        = new FormData($('.foreferencia').get(0))
  /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
  var wrapper = $('.camposermedi');
  $.ajax({
    url: 'estudios/camposermedi',
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    cache: false,
    data : data,
  }).done(function(res) {
     wrapper.html(res.data); 
  }).fail(function(err) {
    toastr.error('Hubo un error en la petición', '¡Upss!');
    wrapper.html('');
  }).always(function() {
    wrapper.waitMe('hide');
  })
  
}


$(document).ready(function() {
  /* funcion para tabla */
  $(function () {
    $('#example1').DataTable()
    $('#example6').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      pageLength: 25,
    responsive: true,
      dom:'Bfrtilp',
      language: {
    processing:     "Procesando...",
    search:         "Buscar:",
    lengthMenu:     "Mostrar: _MENU_ elementos",
    info:           "Mostrando _START_ a _END_ de _TOTAL_ resultados",
    infoEmpty:      "Elemento 0 de 0 elementos encontrados",
    infoFiltered:   "(elementos filtrado _MAX_ de elementos maximos )",
    infoPostFix:    "",
    loadingRecords: "Cambios en Curso...",
    zeroRecords:    "No se encuentran elementos.",
    emptyTable:     "Tabla no disponible",
    paginate: {
      first:      "Adelante",
      previous:   "Anterior",
      next:       "Siguiente",
      last:       "Atrás"
        }
      },
      buttons: [
        {
          extend: 'excelHtml5',
          text: '<i class="fa fa-file-excel-o"></i>',
          titleAttr: 'Esportar a excel',
        },
        {
          extend: 'pdfHtml5',
          text: '<i class="fa fa-file-pdf-o"></i>',
          titleAttr: 'Esportar a excel',

        },
        {
            extend: 'print',
            text: '<i class="fa fa-print"></i>',
            autoPrint: false
        }
      ]
    })
  });

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
  cargoinfoinicial();
  function cargoinfoinicial() {

    data        = new FormData($('.foreferencia').get(0))
    
    /* seleccionamos el div en que vamos a modificar los valores */
    var wrapper = $('.editaformuin');

    $.ajax({
      url: 'estudios/Infoinicial',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
      
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
  }

  /* editamos la primera parte de la informacion */
  $('.editoegui').on('submit', editoinfo);
  function editoinfo(event) {
    event.preventDefault();
    $(this).find(':submit').attr('disabled', 'disabled');
    var form    = $('.editoegui');
    
    data        = new FormData(form.get(0))
  
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
        cargoinfoinicial();
        $(this).find(':submit').removeAttr("disabled");
        
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
      $(this).find(':submit').removeAttr("disabled");
    })
  }

  /* vargamos la primera seccion de infomacion */
  cargocampouno();
  function cargocampouno(){
    data        = new FormData($('.foreferencia').get(0))
    /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
    var wrapper = $('.camdatos');
    $.ajax({
      url: 'estudios/infocampouno',
      type: 'POST',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data,
    }).done(function(res) {
       wrapper.html(res.data); 
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
      wrapper.html('');
    }).always(function() {
      wrapper.waitMe('hide');
    })

  }

  /* agregamos la info de la primera seccion */
  $('.formdatosgeneral').on('submit', camagreUno);
  function camagreUno(event) {
    event.preventDefault();
    $(this).find(':submit').attr('disabled', 'disabled');
    var form    = $('.formdatosgeneral'),

    data        = new FormData(form.get(0))
    
    // AJAX
    $.ajax({
      url: 'estudios/campouno',
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

        toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
        //$("input[type='submit']").click(function() {   $(this).attr("disabled", false);  }); 
        $(this).find(':submit').removeAttr("disabled");
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
      $(this).find(':submit').removeAttr("disabled");
    })
  }

  /* acion de formulario de seccion dos */
  /* agregamos la info de la primera seccion */
  $('.fodomiciliogen').on('submit', secciondostotal);
  function secciondostotal(event) {

    event.preventDefault();
    $(this).find(':submit').attr('disabled', 'disabled');
    var form    = $('.fodomiciliogen');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'estudios/campodostotal',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data
    
    }).done(function(res) {

        toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
        cargocampodos();
        $(this).find(':submit').removeAttr("disabled");
        
    }).fail(function(err) {
        toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
      $(this).find(':submit').removeAttr("disabled");
    })
    
  }

  /* funcion para agregar el documento */
  $('.nuevodocumento').on('submit', nuedoc);
  function nuedoc(event) {

    event.preventDefault();
    $(this).find(':submit').attr('disabled', 'disabled');
    var form    = $('.nuevodocumento');
    data        = new FormData(form.get(0));
    /* validamos el tipo de archivo */
    var archivo = $("#archivo").val();
    var extensiones = archivo.substring(archivo.lastIndexOf("."));

    if(extensiones != ".jpg" && extensiones != ".png" && extensiones != ".pdf" && extensiones != ".docx" && extensiones != ".doc" && extensiones != ".csv"&& extensiones != ".xlsx" && extensiones != ".xls")
    {
        alert("El archivo de tipo " + extensiones + "no es válido");
        $('#btnsolic').attr("disabled", false);
    }else{
        // AJAX
        $.ajax({
          url: 'estudios/agregodocumne',
          type: 'post',
          dataType: 'json',
          contentType: false,
          processData: false,
          cache: false,
          data : data
        
        }).done(function(res) {

            toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
            form.trigger('reset');/* reiniciamos el formulario */
            $('#nuevodocumentos').modal('hide');
            cargocampotres();
            $(this).find(':submit').removeAttr("disabled");

        }).fail(function(err) {
          toastr.error('Hubo un error en la petición', '¡Upss!');
        }).always(function() {
          form.waitMe('hide');
          $(this).find(':submit').removeAttr("disabled");
        })
        
      }
  }

  /* eliminamos documento */
  $('.eliminamosdocu').on('submit', elidoc);
  function elidoc(event) {

    event.preventDefault();
    $(this).find(':submit').attr('disabled', 'disabled');
    var form    = $('.eliminamosdocu');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'estudios/eliminamosdoc',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data
    
    }).done(function(res) {

        toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
        form.trigger('reset');/* reiniciamos el formulario */
        $('#eDocu').modal('hide');
        cargocampotres();
        $(this).find(':submit').removeAttr("disabled");

    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
      $(this).find(':submit').removeAttr("disabled");
    })
    
  }

  /* agregamos un nuevo familiar */
  $('.agregarfamiliar').on('submit', nuefami);
  function nuefami(event) {

    event.preventDefault();
    var form    = $('.agregarfamiliar');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'estudios/agregofamiliar',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data
    
    }).done(function(res) {

        toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
        form.trigger('reset');/* reiniciamos el formulario */
        $('#nfamili').modal('hide');
        cargocampocuatro();

    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
      $(this).find(':submit').removeAttr("disabled");
    })
    
  }

  /* eliminamos familiar */
  $('.eliminafamiliar').on('submit', elifami);
  function elifami(event) {

    event.preventDefault();
    $(this).find(':submit').attr('disabled', 'disabled');
    var form    = $('.eliminafamiliar');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'estudios/eliminamosfamos',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data
    
    }).done(function(res) {

        toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
        form.trigger('reset');/* reiniciamos el formulario */
        $('#eliEstru').modal('hide');
        cargocampocuatro();
        $(this).find(':submit').removeAttr("disabled");

    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
      $(this).find(':submit').removeAttr("disabled");
    })
    
  }

  /* agregar redes sociales */
  $('.fomruredes').on('submit', agregarrede);
  function agregarrede(event) {

    event.preventDefault();
    $(this).find(':submit').attr('disabled', 'disabled');
    var form    = $('.fomruredes');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'estudios/agregarredes',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data
    
    }).done(function(res) {

        toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
        cargocampocinco();
        $(this).find(':submit').removeAttr("disabled");

    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
      $(this).find(':submit').removeAttr("disabled");
    })
    
  }

  /* informacino del campo conducta */
  $('.formconducta').on('submit', agregarconduca);
  function agregarconduca(event) {

    event.preventDefault();
    $(this).find(':submit').attr('disabled', 'disabled');
    var form    = $('.formconducta');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'estudios/agregoconduta',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data
    
    }).done(function(res) {

        toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
        cargocamposeis();
        $(this).find(':submit').removeAttr("disabled");

    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
      $(this).find(':submit').removeAttr("disabled");
    })
    
  }
  
  /* agregamos campo siete */
  $('.agregosituacion').on('submit', agregosituacn);
  function agregosituacn(event) {

    event.preventDefault();
    
    var form    = $('.agregosituacion');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'estudios/agregosituacion',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data
    
    }).done(function(res) {

        toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
        form.trigger('reset');/* reiniciamos el formulario */
        $('#miembro').modal('hide');
        cargocamposiete();
        

    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
      $(this).find(':submit').removeAttr("disabled");
    })
    
  }

  /* eliminamos la situacion */
  $('.eliminosituaicon').on('submit', elistu);
  function elistu(event) {

    event.preventDefault();
    $(this).find(':submit').attr('disabled', 'disabled');
    var form    = $('.eliminosituaicon');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'estudios/eliminamossiete',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data
    
    }).done(function(res) {

        toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
        form.trigger('reset');/* reiniciamos el formulario */
        $('#eliSituFa').modal('hide');
        cargocamposiete();
        $(this).find(':submit').removeAttr("disabled");

    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
      $(this).find(':submit').removeAttr("disabled");
    })
    
  }
  
  /* agregamos deuda */
  $('.formdeudas').on('submit', agregodeuda);
  function agregodeuda(event) {

    event.preventDefault();
    $(this).find(':submit').attr('disabled', 'disabled');
    var form    = $('.formdeudas');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'estudios/agregodeuda',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data
    
    }).done(function(res) {

        toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
        cargocampoOcho();
        $(this).find(':submit').removeAttr("disabled");

    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
      $(this).find(':submit').removeAttr("disabled");
    })
    
  }

  /* agregamos la situacion */
  $('.formentorno').on('submit', agregaresntorno);
  function agregaresntorno(event) {

    event.preventDefault();
    $(this).find(':submit').attr('disabled', 'disabled');
    var form    = $('.formentorno');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'estudios/agregoentorno',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data
    
    }).done(function(res) {

        toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
        cargocamponueve();
        $(this).find(':submit').removeAttr("disabled");

    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
      $(this).find(':submit').removeAttr("disabled");
    })
    
  }

  /* agregamos referncia personal */
  $('.nuevareferenciaperson').on('submit', agregamosrefernbci);
  function agregamosrefernbci(event) {

    event.preventDefault();
    var form    = $('.nuevareferenciaperson');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'estudios/agregorefperfe',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data
    
    }).done(function(res) {

        toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
        form.trigger('reset');/* reiniciamos el formulario */
        $('#refePer').modal('hide');
        
        cargocampodiez();

    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
      $(this).find(':submit').removeAttr("disabled");
    })
    
  }

  /* eliminamos refencia perosnal */
  $('.eliminorefpersonal').on('submit', elirefpers);
  function elirefpers(event) {

    event.preventDefault();
    $(this).find(':submit').attr('disabled', 'disabled');
    var form    = $('.eliminorefpersonal');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'estudios/elirefpersonal',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data
    
    }).done(function(res) {

        toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
        form.trigger('reset');/* reiniciamos el formulario */
        $('#eliRper').modal('hide');
        cargocampodiez();
        $(this).find(':submit').removeAttr("disabled");

    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
      $(this).find(':submit').removeAttr("disabled");
    })
    
  }

  /* agregamos referencias laborales */
  $('.agregarrefeenvialab').on('submit', agrefreflab);
  function agrefreflab(event) {

    event.preventDefault();
    $(this).find(':submit').attr('disabled', 'disabled');
    var form    = $('.agregarrefeenvialab');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'estudios/agregoreflabor',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data
    
    }).done(function(res) {

        toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
        form.trigger('reset');/* reiniciamos el formulario */
        $('#anteslabo').modal('hide');
        cargocampoonce();
        $(this).find(':submit').removeAttr("disabled");

     }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
      $(this).find(':submit').removeAttr("disabled");
    })
    
  }
  
  /* eliminamos refencia laborales */
  $('.eliminorelaf').on('submit', elireflab);
  function elireflab(event) {

    event.preventDefault();
    $(this).find(':submit').attr('disabled', 'disabled');
    var form    = $('.eliminorelaf');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'estudios/elireflaboral',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data
    
    }).done(function(res) {

        toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
        form.trigger('reset');/* reiniciamos el formulario */
        $('#elirefelab').modal('hide');
        cargocampoonce();
        $(this).find(':submit').removeAttr("disabled");

    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
      $(this).find(':submit').removeAttr("disabled");
    })
    
  }

   /* agregamos referencias laborales */
   $('.agregofoto').on('submit', agregofot);
   function agregofot(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.agregofoto');
     data        = new FormData(form.get(0));
      /* validamos el tipo de archivo */
      /* var archivo = $("#archivo").val();
      var extensiones = archivo.substring(archivo.lastIndexOf("."));

      if(extensiones != ".jpg" && extensiones != ".png" && extensiones != ".pdf" && extensiones != ".docx" && extensiones != ".doc" && extensiones != ".csv"&& extensiones != ".xlsx" && extensiones != ".xls")
      {
          alert("El archivo de tipo " + extensiones + "no es válido");
          $('#btnsolic').attr("disabled", false);
      }else{ */

        // AJAX
        $.ajax({
          url: 'estudios/agregofoto',
          type: 'post',
          dataType: 'json',
          contentType: false,
          processData: false,
          cache: false,
          data : data
        
        }).done(function(res) {
    
            toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
            form.trigger('reset');/* reiniciamos el formulario */
            $('#nuevaFoto').modal('hide');
            cargocampodoce();
            $(this).find(':submit').removeAttr("disabled");
    
          }).fail(function(err) {
          toastr.error('Hubo un error en la petición', '¡Upss!');
        }).always(function() {
          form.waitMe('hide');
          $(this).find(':submit').removeAttr("disabled");
        })
        
      //}
   }

   /* eliminamos imagnes */
  $('.elifoto').on('submit', eliimg);
  function eliimg(event) {

    event.preventDefault();
    $(this).find(':submit').attr('disabled', 'disabled');
    var form    = $('.elifoto');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'estudios/eliminoimgan',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data
    
    }).done(function(res) {

        toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
        form.trigger('reset');/* reiniciamos el formulario */
        $('#eliimg').modal('hide');
        cargocampodoce();
        $(this).find(':submit').removeAttr("disabled");

    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
      $(this).find(':submit').removeAttr("disabled");
    })
    
  }

  /* informacion de salud */
  $('.fomrsalud').on('submit', agregosaludd);
   function agregosaludd(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.fomrsalud');
     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/inforagregasalud',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
 
         toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
         cargocampotrece();
         $(this).find(':submit').removeAttr("disabled");
 
      }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
       $(this).find(':submit').removeAttr("disabled");
     })
     
   }
  
   /* agregamos el resumen */
   $('.formresumen').on('submit', agreginforesumen);
   function agreginforesumen(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.formresumen');
     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/inforagregaresumen',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
 
         toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
         cargocampocatorce();
         $(this).find(':submit').removeAttr("disabled");
 
      }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
       $(this).find(':submit').removeAttr("disabled");
     })
     
   }

   /* cancelamos el estudio */
   $('.cancelamosestudio').on('submit', cancelaestu);
   function cancelaestu(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.cancelamosestudio');
     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/cancelamosestudio',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
 
         toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
         form.trigger('reset');/* reiniciamos el formulario */
        $('#canestudio').modal('hide');
        cargocampouno();
        $(this).find(':submit').removeAttr("disabled");
 
      }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
       $(this).find(':submit').removeAttr("disabled");
     })
     
   }
   
   /* cargamos los encuestadores */
   cargamosencuestadores();
    function cargamosencuestadores(){
      data        = new FormData($('.foreferencia').get(0))
      /* seleccionamos el div en que vamos a modificar los valores formcampouno*/
      var wrapper = $('.listaencuestadores');
      $.ajax({
        url: 'estudios/listaencue',
        type: 'POST',
        dataType: 'json',
        contentType: false,
        processData: false,
        cache: false,
        data : data,
      }).done(function(res) {
        wrapper.html(res.data); 
      }).fail(function(err) {
        toastr.error('Hubo un error en la petición', '¡Upss!');
        wrapper.html('');
      }).always(function() {
        wrapper.waitMe('hide');
      })

    }

    /* Aasignamos el estudio */
    $('.asignamosencuestador').on('submit', asignencues);
   function asignencues(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.asignamosencuestador');
     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/asignaencuesta',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
 
         toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
         form.trigger('reset');/* reiniciamos el formulario */
        $('#asiEncu').modal('hide');
        cargoinfoinicial();
        $(this).find(':submit').removeAttr("disabled");
        
 
      }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
       $(this).find(':submit').removeAttr("disabled");
     })
     
   }

   /* Aterminar estudio */
   $('.terminarestudio').on('submit', terestu);
   function terestu(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.terminarestudio');
     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/terminarestud',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
 
         toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
         form.trigger('reset');/* reiniciamos el formulario */
        $('#terminarEstu').modal('hide');
        $(this).find(':submit').removeAttr("disabled");
        
 
      }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
       $(this).find(':submit').removeAttr("disabled");
     })
     
   }

   /* cambiamos el estatus del  estudio */
   $('.cambioestaestu').on('submit', cambioestatu);
   function cambioestatu(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.cambioestaestu');
     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/cambiosestatus',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
 
         toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
         form.trigger('reset');/* reiniciamos el formulario */
        $('#cambioEstatus').modal('hide');
        $(this).find(':submit').removeAttr("disabled");
 
      }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
       $(this).find(':submit').removeAttr("disabled");
     })
     
   }

   /* cancelar estudio */
   $('.cancelamosestudio').on('submit', canceestudioeje);
   function canceestudioeje(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.cancelamosestudio');
     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/canestudi',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
 
         toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
         form.trigger('reset');/* reiniciamos el formulario */
        $('#cencelaestudio').modal('hide');
        $(this).find(':submit').removeAttr("disabled");
 
      }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
       $(this).find(':submit').removeAttr("disabled");
     })
     
   }

   /* ocultamos o mostramos la documentacion del reporte */
    
    $('.oculmostradoc').on('submit', ocumos);
   function ocumos(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.oculmostradoc');
     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/ocumostradocuscon',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
 
         toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
        $('#acdesdocumento').modal('hide');
        $(this).find(':submit').removeAttr("disabled");
        
 
      }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
       $(this).find(':submit').removeAttr("disabled");
     })
     
   }
   
   /* agregamos hobby */
   $('.formhobby').on('submit', agregohobby);
   function agregohobby(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.formhobby');
     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/inforagreghobby',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
 
         toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
         cargocampoquince();
         $(this).find(':submit').removeAttr("disabled");
 
      }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
       $(this).find(':submit').removeAttr("disabled");
     })
     
   }
  
   /* agregamos cbeneficiario */
   $('.beneformulario').on('submit', agregobenefici);
   function agregobenefici(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.beneformulario');
     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/beneficiamub',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
 
         toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
         form.trigger('reset');/* reiniciamos el formulario */
         $('#agregarbeneficiario').modal('hide');
         cargocampodiezseis();
         $(this).find(':submit').removeAttr("disabled");
 
      }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
       $(this).find(':submit').removeAttr("disabled");
     })
     
   }

   $('.benenivelacademico').on('submit', agregonivel);
   function agregonivel(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.benenivelacademico');
     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/agregonivelaca',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
 
         toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
         cargocampodiezsiete();
         $(this).find(':submit').removeAttr("disabled");
 
      }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
       $(this).find(':submit').removeAttr("disabled");
     })
     
   }

   $('.nuevoperiodo').on('submit', agregarperio);
   function agregarperio(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.nuevoperiodo');
     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/agregoperiodo',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
 
         toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
         form.trigger('reset');/* reiniciamos el formulario */
         $('#agregoperiodo').modal('hide');
         cargocampodiezocho();
         $(this).find(':submit').removeAttr("disabled");
 
      }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
       $(this).find(':submit').removeAttr("disabled");
     })
     
   }


   $('.eliminoperiodo').on('submit', eliperio);
  function eliperio(event) {

    event.preventDefault();
    $(this).find(':submit').attr('disabled', 'disabled');
    var form    = $('.eliminoperiodo');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'estudios/elimiperido',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data
    
    }).done(function(res) {

        toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
        form.trigger('reset');/* reiniciamos el formulario */
        $('#elimperiorod').modal('hide');
        cargocampodiezocho();
        $(this).find(':submit').removeAttr("disabled");

    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
      $(this).find(':submit').removeAttr("disabled");
    })
    
  }
   
  $('.nuevohistolano').on('submit', movimientoshis);
   function movimientoshis(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.nuevohistolano');
     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/agregomovhist',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
 
         toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
         cargocampodieznueve();
         $(this).find(':submit').removeAttr("disabled");
 
      }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
       $(this).find(':submit').removeAttr("disabled");
     })
     
   }

   $('.nuevosalida').on('submit', agregosalida);
   function agregosalida(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.nuevosalida');
     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/agregosalida',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
 
         toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
         form.trigger('reset');/* reiniciamos el formulario */
        $('#agregodespido').modal('hide');
         cargocampoveinte();
         $(this).find(':submit').removeAttr("disabled");
 
      }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
       $(this).find(':submit').removeAttr("disabled");
     })
     
   }

   $('.elimsalida').on('submit', elisali);
  function elisali(event) {

    event.preventDefault();
    $(this).find(':submit').attr('disabled', 'disabled');
    var form    = $('.elimsalida');
    data        = new FormData(form.get(0));

    // AJAX
    $.ajax({
      url: 'estudios/elimisalida',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data : data
    
    }).done(function(res) {

        toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
        form.trigger('reset');/* reiniciamos el formulario */
        $('#elisalida').modal('hide');
        cargocampoveinte();
        $(this).find(':submit').removeAttr("disabled");

    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
      $(this).find(':submit').removeAttr("disabled");
    })
    
  }

  $('.nuevaincap').on('submit', agregosincapa);
   function agregosincapa(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.nuevaincap');
     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/agregoincapa',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
 
         toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
         form.trigger('reset');/* reiniciamos el formulario */
        $('#agregoincapa').modal('hide');
        cargocampoveinteuno();
        $(this).find(':submit').removeAttr("disabled");
 
      }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
       $(this).find(':submit').removeAttr("disabled");
     })
     
   }
  
   $('.eliincapa').on('submit', elcapa);
   function elcapa(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.eliincapa');
     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/elimiincapa',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
 
         toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
         form.trigger('reset');/* reiniciamos el formulario */
         $('#eliincapa').modal('hide');
         cargocampoveinteuno();
         $(this).find(':submit').removeAttr("disabled");
 
     }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
       $(this).find(':submit').removeAttr("disabled");
     })
     
   }

   $('.movimientoproblemas').on('submit', movpro);
   function movpro(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.movimientoproblemas');
     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/agregproblm',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
 
         toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
         cargocampoveintedos();
         $(this).find(':submit').removeAttr("disabled");
 
      }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
       $(this).find(':submit').removeAttr("disabled");
     })
     
   }
  
   $('.moviinfgolabo').on('submit', movinfolabno);
   function movinfolabno(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.moviinfgolabo');
     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/agreginfolabo',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
 
         toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
         cargocampoveintetres();
         $(this).find(':submit').removeAttr("disabled");
 
      }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
       $(this).find(':submit').removeAttr("disabled");
     })
     
   }

   $('.nuevocredito').on('submit', agregocredi);
   function agregocredi(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.nuevocredito');
     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/agregocret',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
 
         toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
         form.trigger('reset');/* reiniciamos el formulario */
        $('#agregocredi').modal('hide');
        cargocampoveintecuatro();
        $(this).find(':submit').removeAttr("disabled");
 
      }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
       $(this).find(':submit').removeAttr("disabled");
     })
     
   }

   $('.elicredito').on('submit', elicret);
   function elicret(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.elicredito');
     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/elicre',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
 
         toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
         form.trigger('reset');/* reiniciamos el formulario */
        $('#elicredit').modal('hide');
        cargocampoveintecuatro();
        $(this).find(':submit').removeAttr("disabled");
 
      }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
       $(this).find(':submit').removeAttr("disabled");
     })
     
   }

   $('.movimientoinfonavit').on('submit', moviinfo);
   function moviinfo(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.movimientoinfonavit');
     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/agreginfonav',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
 
         toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
         cargocampoveintecinco();
         $(this).find(':submit').removeAttr("disabled");
 
      }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
       $(this).find(':submit').removeAttr("disabled");
     })
     
   }

   $('.agregarserviiomedico').on('submit', movimentossermideico);
   function movimentossermideico(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.agregarserviiomedico');
     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/agregomoviservicim',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
 
         toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
         cargocampoveinteseis();
         $(this).find(':submit').removeAttr("disabled");
 
      }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
       $(this).find(':submit').removeAttr("disabled");
     })
     
   }

   /* editamos referencias laborales */
   $('.editarefelaboral').on('submit', editarefelaboral);
   function editarefelaboral(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.editarefelaboral');
     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/editreflaboral',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
 
         toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
         $('#editarantecedentes').modal('hide');
         cargocampoonce();
         $(this).find(':submit').removeAttr("disabled");
 
      }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
       $(this).find(':submit').removeAttr("disabled");
     })
     
   }
   

   /* editar infromacion de credito */
   $('.editacredito').on('submit', editacredito);
   function editacredito(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.editacredito');
     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/editacredi',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
 
         toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
         $('#editocredito').modal('hide');
         cargocampoveintecuatro();
         $(this).find(':submit').removeAttr("disabled");
 
      }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
       $(this).find(':submit').removeAttr("disabled");
     })
     
   }

   /* eliminamos el beneficiario */
   $('.elibeneficia').on('submit', elibeneficia);
   function elibeneficia(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.elibeneficia');
     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/elibenificia',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
 
         toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
         form.trigger('reset');/* reiniciamos el formulario */
        $('#elibene').modal('hide');
        cargocampodiezseis();
        $(this).find(':submit').removeAttr("disabled");
 
      }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
       $(this).find(':submit').removeAttr("disabled");
     })
     
   }

   /* editamos beneficiario */
   $('.editarbenfi').on('submit', editarbenfi);
   function editarbenfi(event) {
 
     event.preventDefault();
     $(this).find(':submit').attr('disabled', 'disabled');
     var form    = $('.editarbenfi');
     data        = new FormData(form.get(0));
 
     // AJAX
     $.ajax({
       url: 'estudios/editabenef',
       type: 'post',
       dataType: 'json',
       contentType: false,
       processData: false,
       cache: false,
       data : data
     
     }).done(function(res) {
 
         toastr.success(res.msg, '¡Bien!'); /* mndamos el mensaje */
         $('#editabenefi').modal('hide');
         cargocampodiezseis();
         $(this).find(':submit').removeAttr("disabled");
 
      }).fail(function(err) {
       toastr.error('Hubo un error en la petición', '¡Upss!');
     }).always(function() {
       form.waitMe('hide');
       $(this).find(':submit').removeAttr("disabled");
     })
     
   }

   /* editamos la estructura */
  $('.editaestrr').on('submit', editoinfoestru);
  function editoinfoestru(event) {
    event.preventDefault();
    $(this).find(':submit').attr('disabled', 'disabled');
    var form    = $('.editaestrr');
    
    data        = new FormData(form.get(0))
  
    // AJAX
    $.ajax({
      url: 'estudios/editoestreuct',
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
        cargocampocuatro()
        $('#ediestruc').modal('hide');
        
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
      $(this).find(':submit').removeAttr("disabled");
    })
  }

  /* editamos la situacion */
  $('.edidisituacion').on('submit', editositusdu);
  function editositusdu(event) {
    event.preventDefault();
    $(this).find(':submit').attr('disabled', 'disabled');
    var form    = $('.edidisituacion');
    
    data        = new FormData(form.get(0))
  
    // AJAX
    $.ajax({
      url: 'estudios/editoSituacion',
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
        cargocamposiete()
        $('#editositudu').modal('hide');
        
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
      $(this).find(':submit').removeAttr("disabled");
    })
  }
   
   
   /* editamos la referencia personal */
   $('.editarefeoperd').on('submit', editorefperenfer);
  function editorefperenfer(event) {
    event.preventDefault();
    $(this).find(':submit').attr('disabled', 'disabled');
    var form    = $('.editarefeoperd');
    
    data        = new FormData(form.get(0))
  
    // AJAX
    $.ajax({
      url: 'estudios/editorefeperd',
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
        cargocampodiez()
        $('#editaRper').modal('hide');
        
      } 

      else { toastr.error(res.msg, '¡Upss!'); }
    }).fail(function(err) {
      toastr.error('Hubo un error en la petición', '¡Upss!');
    }).always(function() {
      form.waitMe('hide');
      $(this).find(':submit').removeAttr("disabled");
    })
  }
   
   
   
  
  
   
    

  

  
  
  
  

  
  
});
