<?php 

class clientesController extends Controller {
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
    $_SESSION['paraArchivo'] = "clientes";
    if($_SESSION['idUsuario'] != NULL){ View::render('index');  }
    else{ View::render('portada'); }
  
  }

  /* funcion para cargar las preguntas frecuentas */
  function cargoempesa(){  
    try {
      $movements          = new clientesModel;
      $movs               = $movements->cargoempresa();
      /* regresamos la informacion */
      $data = get_module('selectempresas', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* funcion para cargar los coodinacodres */
  function cargoempresacat(){
    try {
      $movements          = new clientesModel;
      $movs               = $movements->cargoempre();
      /* regresamos la informacion */
      $data = get_module('tblempresass', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* cargamos lo clientes */
  function cargocliente(){
    try {
      $movements          = new clientesModel;
      $movs               = $movements->concelcientes();
      /* regresamos la informacion */
      $data = get_module('tblclientess', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  
  /* funcion para agregar nuevo ticket por parte del usuario */
  function nuevamepresa(){
    try {
      $movements          = new clientesModel;

      $movements->nombre = $_POST['nombre'];
      $movements->direccion= $_POST['direccion'];
      $movements->telefono= $_POST['telefono'];
      $movements->correo= $_POST['correo'];
      $movements->contacto= $_POST['contacto'];
      $movements->paginaWeb= $_POST['paginaWeb'];
      $movements->comentarios= $_POST['comentarios'];
      
      /* para log de acciones */
      $movements->idAccion = 6;
      /* guardamos el archivo en el repositorio */
      $nombre_archivo_1 = $_FILES['archivo']['name'];
      $directorio_1 = $_SERVER['DOCUMENT_ROOT']."/appMidas/assets/contenedor/empresas/".basename($nombre_archivo_1);
      $movements->archivo = $nombre_archivo_1;
      move_uploaded_file($_FILES['archivo']['tmp_name'], $directorio_1);
      
      /* agregamos la imagen a la bd */
      if(!$movements->nuevamepresa()) {  json_output(json_build(400, null, 'Hubo error al crear el elemento'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se ha creado su elemento'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* funcion para nueva empresa */
  function nuevocliente(){
    try {
      $movements          = new clientesModel;

      $movements->idEmpresa = $_POST['idEmpresa'];
      $movements->nombre= $_POST['nombre'];
      $movements->correo= $_POST['correo'];
      $movements->telefono= $_POST['telefono'];
      $movements->celular= $_POST['celular'];
      $movements->comentarios= $_POST['comentarios'];
      
      /* para log de acciones */
      $movements->idAccion = 9;
      
      /* agregamos la imagen a la bd */
      if(!$movements->nuevocliente()) {  json_output(json_build(400, null, 'Hubo error al crear el elemento'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se ha creado su elemento'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  
  /* funcion para eliminar elñ analista */
  function eliempresa(){
    try {
      $movements          = new clientesModel;
      $movements->idEmpresa = $_POST['idEmpresa'];
      $movements->archivo = $_POST['archivo'];

       /* eliminamos la imagen del cliente */
       $arboor = $_POST['archivo'];
       $archivoBorro = $_SERVER['DOCUMENT_ROOT']."/appMidas/assets/contenedor/empresas/".basename($arboor);
       unlink($archivoBorro);

      /* para log de acciones */
      $movements->idAccion = 8;
            
      /* agregamos la imagen a la bd */
      if(!$movements->eliminoempresa()) {  json_output(json_build(400, null, 'Hubo error al eliminar el elemento'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se ha eliminado su elemento'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
    
  }
  /* function para obtener la informacion para edicion el elemento */
  function obtengoinfo(){
    try {
      $movements          = new clientesModel;
      $movements->idEmpresa = $_POST['idEmpresa'];
      $movs               = $movements->infoedita();
      /* regresamos la informacion */
      $data = get_module('formediempresa', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
    
  }
  function obtengoinfoclien(){
    try {
      $movements          = new clientesModel;
      $movements->idEmpCliente = $_POST['idEmpCliente'];
      $movs               = $movements->infoeditacli();
      /* regresamos la informacion */
      $data = get_module('formedieclien', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
    
  }

  /* function para editar los analistas */
  function editamosinfaciosn(){
    try {
      $movements          = new clientesModel;

      $verifico = $_POST['archivoedi'];

      if($verifico != ''){
        $movements->archivo = $verifico;
      }else{
        $movements->archivo = $_FILES['archivo']['name'];
      }
      $movements->idEmpresa = $_POST['idEmpresa'];
      $movements->nombre = $_POST['nombre'];
      $movements->direccion= $_POST['direccion'];
      $movements->telefono= $_POST['telefono'];
      $movements->correo= $_POST['correo'];
      $movements->contacto= $_POST['contacto'];
      $movements->paginaWeb= $_POST['paginaWeb'];
      $movements->comentarios= $_POST['comentarios'];
      
      /* para log de acciones */
      $movements->idAccion = 7;
      if($verifico != ''){
        $movements->archivo = $verifico;  
      }else{
        /* guardamos el archivo en el repositorio */
        $nombre_archivo_1 = $_FILES['archivo']['name'];
        $directorio_1 = $_SERVER['DOCUMENT_ROOT']."/appMidas/assets/contenedor/empresas/".basename($nombre_archivo_1);
        $movements->archivo = $nombre_archivo_1;
        move_uploaded_file($_FILES['archivo']['tmp_name'], $directorio_1);
      }
      
      /* agregamos la imagen a la bd */
      if(!$movements->editoempresas()) {  json_output(json_build(400, null, 'Hubo error al editar el elemento'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se ha edita el elemento'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* eliminamos el cliente */
  function eliminarCliente(){
    try {
      $movements          = new clientesModel;
      $movements->idEmpCliente = $_POST['idEmpCliente'];

      /* para log de acciones */
      $movements->idAccion = 11;
            
      /* agregamos la imagen a la bd */
      if(!$movements->eliminoecliente()) {  json_output(json_build(400, null, 'Hubo error al eliminar el elemento'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se ha eliminado su elemento'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
    
  }

  /* funcion para editar clientes */
  function editoclientss(){
    try {
      $movements          = new clientesModel;

      $movements->idEmpCliente = $_POST['idEmpCliente'];
      $movements->nombre = $_POST['nombre'];
      $movements->correo= $_POST['correo'];
      $movements->telefono= $_POST['telefono'];
      $movements->celular= $_POST['celular'];
      $movements->comentarios= $_POST['comentarios'];
      
      /* agregamos la imagen a la bd */
      if(!$movements->editoclien()) {  json_output(json_build(400, null, 'Hubo error al editar el elemento'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se ha edita el elemento'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  
  /* funcion para dar de alta usuario en el sistema */
  function alatacorreo(){
    try {
      $movements          = new clientesModel;
      /* obtenemos las varaibles */      
      $movements->idEmpCliente = $_POST['idEmpCliente'];
      $movements->correo = $_POST['correo'];
      $correoenvio = $_POST['correo'];

      /* creamos el usuario */
      $result = explode('@',$_POST['correo']);
      $movements->usuario = $result[0];
      $usuariocorreo = $result[0];

      /* creamos la clave */
      $calvefinal = "#".$result[0]."_20.";
      $movements->clave = codiClave($calvefinal);

      /* obtenemos la informacion del usuario para crearlo en la tabla de usuarios */
      $datos = $movements->obtengoInfoParausuario();
      /*echo $datos[0]['nombre'];
      echo $datos[0]['idEmpCliente'];*/
      $movements->nombre = $datos[0]['nombre'];
      $movements->idCliente = $datos[0]['idEmpCliente']; //este valor se cambio dependiendo que tipo de usuario se de de alta
     
            
      /* creamos el nuevo usuario */
      $movements->idAccion = 17;
      $movements->nuevousuariosistema();
      $movements->movisis();

      /* cambiamos el valor en la tabla de analista */
      $movements->cambiosisttabla();
      json_output(json_build(200, null, 'Se ha creado  el acceso al sistema'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }


  }

  /* function para dar de baja el usuario en el sistema */
  function bajasistema(){
    try {
      $movements          = new clientesModel;
      $movements->idEmpCliente = $_POST['idEmpCliente'];
      $movements->sistema = "";
      /* para log de acciones */
      $movements->idAccion = 19;
            
      /* agregamos la imagen a la bd */
      if(!$movements->bajadesistema()) {  json_output(json_build(400, null, 'Hubo error al eliminar el usuario'));  }
      $movements->movisis();
      $movements->cambiosisttablados();
      json_output(json_build(200, null, 'Se ha eliminado el acceso al sistema'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }
  /////////////////////////////////////////////////////////////////////////


 
  

  
}