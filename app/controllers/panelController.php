<?php 

class panelController extends Controller {
  function __construct(){ }

  
  function index(){ 
  
    $_SESSION['paraArchivo'] = NULL;
    $_SESSION['paraArchivo'] = "panel";
    if($_SESSION['idUsuario'] != NULL){ View::render('index');  }
    else{ View::render('regreso'); }
  
  }
  
  /* funcio para salir del sistema */
  function salir(){ 
    $_SESSION = array();
    session_destroy();
    json_output(json_build(200));
  }

  /* para regresar al panel de inicio */
  function inicio(){ View::render('index'); }
  
  /* funciones para la seccion de logs en el sistema */
  function entrada(){  
    /* obtenemos la informacion del log de acceso */
    try {
      $movements          = new panelModel;
      $movs               = $movements->logAcceso();
      $data = ['movements' => $movs];
      View::render('entrada',$data); 
    } 
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* funcion para la seccion de log de actividades */
  function actividades(){  

    /* obtenemos la informacion del log de acceso */
    try {
      $movements          = new panelModel;
      $movs               = $movements->logAcciones();
      $data = ['movements' => $movs];
      View::render('actividades',$data); 
    } 
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* funcion para mostrar la seccion de avisos */
  function avisos(){ 
     /* obtenemos la informacion del log de acceso */
     try {
      $movements          = new panelModel;
      $movs               = $movements->concentradoAvisos();
      $data = ['movements' => $movs];
      View::render('avisos',$data); 
    } 
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
    
    
  }
  
  /* terminados */
  function numterminados(){
    try {
      $movements          = new panelModel;
      $movements->idUsuario = $_SESSION['idUsuario'];
      $movs               = $movements->numeroterminados();
      $data = $movs;
      json_output(json_build(200, $data));
      
    } 
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* solicitados */
  function numsolicitados(){
    try {
      $movements          = new panelModel;
      $movements->idUsuario = $_SESSION['idUsuario'];
      $movs               = $movements->numerosolicitados();
      $data = $movs;
      json_output(json_build(200, $data));
      
    } 
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* proeso */
  function numproceso(){
    try {
      $movements          = new panelModel;
      $movements->idUsuario = $_SESSION['idUsuario'];
      $movs               = $movements->numerosproceso();
      $data = $movs;
      json_output(json_build(200, $data));
      
    } 
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }


  /* cancelado */
  function numcancelado(){
    try {
      $movements          = new panelModel;
      $movements->idUsuario = $_SESSION['idUsuario'];
      $movs               = $movements->numerocancelados();
      $data = $movs;
      json_output(json_build(200, $data));
      
    } 
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  



}