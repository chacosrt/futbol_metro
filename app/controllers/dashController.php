<?php 



class dashController extends Controller {

    function __construct(){ }



    /* funcio para salir del sistema */
 
    function salir(){  
 
      session_destroy();
  
      json_output(json_build(200));

      echo "sesion cerrada";
 
    }
 
 
 
   /* funcion que entra por default */
 
   function index(){ 
 
    #print_r($_SESSION);      
    View::render('dash'); 
   }
 
}
