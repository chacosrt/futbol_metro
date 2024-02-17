

//////////////////////////////////////////////////////////////////////////////////



$(document).ready(function() {
  

  $(".usuario").text(sessionStorage.getItem('usuario'));
    $(".roles").text(sessionStorage.getItem('roles'));
    $(".bienvenido").text('Bienvenido '+sessionStorage.getItem('usuario'));


  $('#regresoInicio').on('click', regresar);

  function regresar(event) {
    $("#overlay").show();

    window.location='dash/'; 

  }  

  $('#link-partidos').on('click', spinner);

  function spinner(event) {
    $("#overlay").show();   

  } 

  $('.salir').on('click', salgosistema);

  
  function salgosistema() {

    sessionStorage.clear();

    if (sessionStorage.getItem('usuario') == null) {        

      window.location="../home";
     
    } 

  }

});