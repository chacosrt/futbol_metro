$(document).ready(function() { 

    console.log("jquery-on")

    if (sessionStorage.getItem('usuario') == null) {
        console.log ("no hay sesion")
    }else{
        console.log ('hola',sessionStorage)

    }
    
    $(".usuario").text(sessionStorage.getItem('usuario'));
    $(".roles").text(sessionStorage.getItem('roles'));
    $(".bienvenido").text('Bienvenido '+sessionStorage.getItem('usuario'));
    $("#overlay").hide();
    if (sessionStorage.getItem('usuario') == null) {        

        window.location="../home";
       
    } 
})