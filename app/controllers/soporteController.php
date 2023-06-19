<?php 

class soporteController extends Controller {
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
    $_SESSION['paraArchivo'] = "soporte";
    if($_SESSION['idUsuario'] != NULL){ View::render('index');  }
    else{ View::render('portada'); }
  
  }

  /* funcion para cargar las preguntas frecuentas */
  function cargaPreguntas(){  
    try {
      $movements          = new soporteModel;
      $movs               = $movements->concentradoPreguntas();
      /* regresamos la informacion */
      $data = get_module('preguntasFrecuentes', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /////////////////////////////////////////////////////////////////////////
  /* funcion para cargar el historial de preguntas frecuentes */
  function cargaHist(){  
    try {
      $movements          = new soporteModel;
      $movs               = $movements->concentradoHistorial();
      /* regresamos la informacion */
      $data = get_module('tblhistorialsoporte', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /////////////////////////////////////////////////////////////////////////
  /* funcion para ver las respuestas en el modal */
  function verrespuestas(){
    try {
      $movements          = new soporteModel;
      $movements->idSoporte = $_POST['idensop'];
      $movs               = $movements->verrespuestas();
      

      /* regresamos la informacion */
      $data = get_module('respuestassoporte', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /////////////////////////////////////////////////////////////////////////
  /* funcion para cargal el ticket en caso de que exista */
  function cargatick(){
    try {
      $movements          = new soporteModel;
      $movs               = $movements->infoticket();
      /* regresamos la informacion */
      $data = get_module('soporte', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  /////////////////////////////////////////////////////////////////////////

  /////////////////////////////////////////////////////////////////////////
  /* funcion para cargar las respuestas dentro del ticket abierto  */
  function resticketabierto(){
    try {
      $movements          = new soporteModel;
      $movements->idSoporte = $_POST['idSoporteResa'];
      
      $movs               = $movements->restiabierto();
      /* regresamos la informacion */
      $data = get_module('resticketabuerto', ['movements' => $movs]);
      
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  /////////////////////////////////////////////////////////////////////////

  /* funcion para cuando el usuario contesta un ticket abierto */
  function contestaUsuario(){
    try {
      $movements          = new soporteModel;
      $movements->idSoporte = $_POST['idSoporte'];
      $movements->respuesta = $_POST['mensjae'];
      /* para log de acciones */
      $movements->idAccion = 14; 
      if(!$movements->contestaUsu()) {  json_output(json_build(400, null, 'Hubo error al agregar una respuesta al ticket'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se ha agregado correctamente su respuesta, en breve atenderemos su solicitud'));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }
  /////////////////////////////////////////////////////////////////////////

  /* funcion para eliminar el ticket */
  function eliminaTir(){
    try {
      $movements          = new soporteModel;
      $movements->idSoporte = $_POST['idSoporteCan'];
       /* para log de acciones */
       $movements->idAccion = 15; 
      if(!$movements->eliminausua()) {  json_output(json_build(400, null, 'Hubo error al eliminar el ticket de soporte'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se elimino su ticket de soporte'));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }
  /////////////////////////////////////////////////////////////////////////

  /* function para terminar el ticke */
  function terminatic(){
    try {
      $movements          = new soporteModel;
      $movements->idSoporte = $_POST['idSoporteTer'];
      $movements->calificacion = $_POST['estrellas'];
      /* para log de acciones */
      $movements->idAccion = 16; 
      if(!$movements->termitic()) {  json_output(json_build(400, null, 'Hubo error al terminar el ticket de soporte'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Ha dado por concluido el ticket'));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }
  /////////////////////////////////////////////////////////////////////////
  
  /* funcion para agregar nuevo ticket por parte del usuario */
  function creanuevosoporte(){
    try {
      $movements          = new soporteModel;
      $movements->archivo = $_FILES['archivo']['name'];
      $movements->titulo = $_POST['titulo'];
      $movements->descripcion = $_POST['descripcion'];
      /* para log de acciones */
      $movements->idAccion = 13;
      /* guardamos el archivo en el repositorio */
      $nombre_archivo_1 = $_FILES['archivo']['name'];
      $directorio_1 = $_SERVER['DOCUMENT_ROOT']."/appMidas/assets/contenedor/soporte/".basename($nombre_archivo_1);
      
      move_uploaded_file($_FILES['archivo']['tmp_name'], $directorio_1);
      
      /* agregamos la imagen a la bd */
      if(!$movements->nuevosoporteusuario()) {  json_output(json_build(400, null, 'Hubo error al crear el ticket'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se ha creado su ticket, en breve atenderemos su solicitud'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  /////////////////////////////////////////////////////////////////////////

  /* funcion para abrir soporte administrador */
  function admin(){ 
  
    $_SESSION['paraArchivo'] = NULL;
    $_SESSION['paraArchivo'] = "soporteAdmin";
    if($_SESSION['idUsuario'] != NULL){ View::render('admin');  }
    else{ View::render('portada'); }
  }
  /////////////////////////////////////////////////////////////////////////
  
  /////////////////////////////////////////////////////////////////////////
  /* FUNCIONES PARA LA PARTE ADMINISTRATIVA */
  /////////////////////////////////////////////////////////////////////////
  
  /* carga de la tabla de soporte vivos */
  function soporteadminCon(){
    try {
      $movements          = new soporteModel;
      $movs               = $movements->soportesadmin();
      /* regresamos la informacion */
      $data = get_module('tblsoporteadmin', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }
  /////////////////////////////////////////////////////////////////////////

  /* carga de preguntas frecuentes para administrador */
  function preguntasadmin(){
    try {
      $movements          = new soporteModel;
      $movs               = $movements->faqadmin();
      /* regresamos la informacion */
      $data = get_module('tblsoportepreguntasadmin', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }
  /////////////////////////////////////////////////////////////////////////

  /* carga el historial de todos los soportes */
  function historialAdmin(){
    try {
      $movements          = new soporteModel;
      $movs               = $movements->historialadmin();
      /* regresamos la informacion */
      $data = get_module('tblhistorialsoporteadmin', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }
  /////////////////////////////////////////////////////////////////////////

  /* funcion para que conteste el administrador */
  function contestaadmin(){
    try {
      $movements          = new soporteModel;
      $movements->idSoporte = $_POST['idSoporteRes'];
      $movements->respuesta = $_POST['menadmin'];
      /* para log de acciones */
      $movements->idAccion = 17;
      if(!$movements->contestaAdmin()) {  json_output(json_build(400, null, 'Hubo error al agregar una respuesta al ticket'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se ha agregado correctamente su respuesta, en breve atenderemos su solicitud'));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }
  /////////////////////////////////////////////////////////////////////////

  /* funcion para eliminar el ticket */
  function elimiadmin(){
    try {
      $movements          = new soporteModel;
      $movements->idSoporte = $_POST['idSoporteCan'];
      /* para log de acciones */
      $movements->idAccion = 18;
      if(!$movements->eliadmin()) {  json_output(json_build(400, null, 'Hubo error al eliminar el ticket de soporte'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se elimino su ticket de soporte'));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }
  /////////////////////////////////////////////////////////////////////////

  /* function para terminar el ticke */
  function terminaticadmin(){
    try {
      $movements          = new soporteModel;
      $movements->idSoporte = $_POST['idSoporteTer'];
      /* para log de acciones */
      $movements->idAccion = 19;
      if(!$movements->termiticadmin()) {  json_output(json_build(400, null, 'Hubo error al terminar el ticket de soporte'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Ha dado por concluido el ticket'));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }
  /////////////////////////////////////////////////////////////////////////
  
  /* funcion para agregar nuevo ticket por parte del usuario */
  function crearnuevapregufre(){
    try {
      $movements          = new soporteModel;
      $movements->pregunta = $_POST['pregunta'];
      $movements->respuesta = $_POST['respuesta'];
      /* para log de acciones */
      $movements->idAccion = 20;
      /* agregamos la imagen a la bd */
      if(!$movements->nuevaprefre()) {  json_output(json_build(400, null, 'Hubo error al crear el ticket'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se ha creado su ticket, en breve atenderemos su solicitud'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
   /////////////////////////////////////////////////////////////////////////

  /* function para terminar el ticke */
  function eliprefrecuente(){
    try {
      $movements          = new soporteModel;
      $movements->idPregunta = $_POST['idPreguntaTe'];
      /* para log de acciones */
      $movements->idAccion = 22;
      if(!$movements->eliprfrecu()) {  json_output(json_build(400, null, 'Hubo error al eliminar la pregunta frecuente'));  }
      $movements->movisis();

      json_output(json_build(200, null, 'Se ha eliminado la pregunta frecuente'));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

 
  

  
}