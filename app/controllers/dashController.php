<?php 



class dashController extends Controller {

    function __construct(){ }



    /* funcio para salir del sistema */
 
    function salir(){ 
 
     $_SESSION = array();
 
     session_destroy();
 
     json_output(json_build(200));
 
   }
 
 
 
   /* funcion que entra por default */
 
   function index(){ 
 
    
     if($_SESSION['id'] != NULL){ View::render('dash');  }
 
     else{ View::render('home'); }
 
   
 
   }
 
}
