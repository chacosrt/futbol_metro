<?php 

class logController extends Controller {
  function __construct(){ }

   /* funcio para salir del sistema */
   function salir(){ 
    $_SESSION = array();
    session_destroy();
    json_output(json_build(200));
  }

  /* funcion que entra por default */
  function index(){ 
  
    $_SESSION['paraArchivo'] = NULL;
    $_SESSION['paraArchivo'] = "log";
    if($_SESSION['idUsuario'] != NULL){ View::render('index');  }
    else{ View::render('regreso'); }
  
  }


  /* modulo de historial de acceso al sistema */
  function acceso(){ 
  
    $_SESSION['paraArchivo'] = NULL;
    $_SESSION['paraArchivo'] = "logacceso";
    if($_SESSION['idUsuario'] != NULL){ View::render('acceso');  }
    else{ View::render('regreso'); }
  
  }

  /* funcion para cargar la tabla */
  function cargaHistorial(){  
    try {
      $movements          = new logModel;
      $movs               = $movements->concentradoHistorial();
      /* regresamos la informacion */
      $data = get_module('tblHistoAcceso', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* modulo para el historial de activiades en el sistema */
  function actividades(){ 
  
    $_SESSION['paraArchivo'] = NULL;
    $_SESSION['paraArchivo'] = "logactividades";
    if($_SESSION['idUsuario'] != NULL){ View::render('actividades');  }
    else{ View::render('regreso'); }
  
  }

  /* cargamos tabla de log de activiadades */
  function cargaHistorialActi(){  
    try {
      $movements          = new logModel;
      $movs               = $movements->concentradoHistorialAct();
      /* regresamos la informacion */
      $data = get_module('tblHistoactividades', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  

  
}