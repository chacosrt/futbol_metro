$(document).ready(function() { 

    
    $(".usuario").text(sessionStorage.getItem('usuario'));
    $(".roles").text(sessionStorage.getItem('roles'));
    $(".bienvenido").text('Bienvenido '+sessionStorage.getItem('usuario'));

    if (sessionStorage.getItem('usuario') == null) {        

        window.location="../home";
       
    } 
})