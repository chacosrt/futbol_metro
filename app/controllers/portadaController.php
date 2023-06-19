<?php 

class portadaController extends Controller {
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
    $_SESSION['paraArchivo'] = "portada";
    if($_SESSION['idUsuario'] != NULL){ View::render('index');  }
    else{ View::render('portada'); }
  
  }

  /* funcion para agregar uan nueva portada */
  function nuimportada(){
    try {
      $movements          = new portadaModel;
      $movements->archivo = $_FILES['archivo']['name'];
       /* para log de acciones */
       $movements->idAccion = 3; 

      /* guardamos el archivo en el repositorio */
      $nombre_archivo_1 = $_FILES['archivo']['name'];
      $directorio_1 = $_SERVER['DOCUMENT_ROOT']."/appMidas/assets/contenedor/portada/".basename($nombre_archivo_1);
      
      if(move_uploaded_file($_FILES['archivo']['tmp_name'], $directorio_1)){
        
        /* agregamos la imagen a la bd */
        if(!$movements->nuimport()) {  json_output(json_build(400, null, 'Hubo error al dar de baja el usuario'));  }
        $movements->movisis();
        json_output(json_build(200, null, 'Se ha cargado la nueva imagen de portada'));

      }

      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }


  /* funcion para cargar la tabla */
  function cargaImg(){  
    try {
      $movements          = new portadaModel;
      $movs               = $movements->concetradoImg();
      /* regresamos la informacion */
      $data = get_module('tblPortada', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* para dar de baja usuario */
  function bajaportada(){
    try {
      $movements          = new portadaModel;
      $movements->idPortada = $_POST['idUsuarioBaj'];
      
      /* para log de acciones */
      $movements->idAccion = 6;

      if(!$movements->darbaja()) {  json_output(json_build(400, null, 'Hubo error al dar de baja el fondo'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'La portada se ha dado de baja'));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* dar de alta el usuario */
  function altaPortada(){
    try {
      $movements          = new portadaModel;
      $movements->idPortada = $_POST['idPruebaAlta'];
      /* para log de acciones */
      $movements->idAccion = 5;

      /* ante de dar de alta pasamos todos los registros a baja */
      if($movements->bajatodofond()) {  
        
        if(!$movements->daralta()) {  json_output(json_build(400, null, 'Hubo error al dar de activar el fondo'));  }
        $movements->movisis();
        json_output(json_build(200, null, 'Fondo activado'));

      }

      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  
  /* funcion para eliminar la portada */
  function eliportada(){
    try {
      $movements          = new portadaModel;

      $movements->idPortada = $_POST['idPruebaEli'];
      $archivoelii = $_POST['archivoEli'];
      /* para log de acciones */
      $movements->idAccion = 4;

      /* eliminamos el fondo */
      $archivoBorro = $_SERVER['DOCUMENT_ROOT']."/appMidas/assets/contenedor/portada/".$archivoelii;
      unlink($archivoBorro);
  
      /* agregamos la imagen a la bd */

      if(!$movements->eliminarportadsa()) {  json_output(json_build(400, null, 'Hubo error al dar de baja el usuario'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se elimino el archivo'));
     
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  
 

  
}