<?php 

class usuariosController extends Controller {
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
    $_SESSION['paraArchivo'] = "usuarios";
    if($_SESSION['idUsuario'] != NULL){ View::render('index');  }
    else{ View::render('regreso'); }
  
  }


  /* funcion para cargar la tabla */
  function cargaUsuarios(){  
    try {
      $movements          = new usuariosModel;
      $movs               = $movements->concetradoUsuarios();
      /* regresamos la informacion */
      $data = get_module('tblUsuarios', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* para dar de baja usuario */
  function bajadeusu(){
    try {
      $movements          = new usuariosModel;
      $movements->idUsuario = $_POST['idUsuarioBaj'];
      /* para log de acciones */
      $movements->idAccion = 105; 
      if(!$movements->darbaja()) {  json_output(json_build(400, null, 'Hubo error al dar de baja el usuario'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Usuario dado de baja'));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* dar de alta el usuario */
  function altaUsu(){
    try {
      $movements          = new usuariosModel;
      $movements->idUsuario = $_POST['idUsuarioAlta'];
      /* para log de acciones */
      $movements->idAccion = 106;
      if(!$movements->daralta()) {  json_output(json_build(400, null, 'Hubo error al dar de alta el usuario'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Usuario dado de alta'));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* primer paso para ver los permisos */
  function verpermisos(){
    $_SESSION['idUsuario'] = NULL;
    $_SESSION['idUsuario'] = $_POST['idUsuario'];

    $_SESSION['nombreCom'] = NULL;
    $_SESSION['nombreCom'] = $_POST['nombreCom'];

    json_output(json_build(200, null, 'Se ha realizado la edicion de la solicitud de puesto'));
  }
  /* segunda parte para permisos */
  function verpermisofinmal(){

    $_SESSION['paraArchivo'] = NULL;
    $_SESSION['paraArchivo'] = "usuariosPermisos";
    
    if($_SESSION['idUsuario'] != NULL){ View::render('permisos');  }
    else{ View::render('regreso'); }

  }
  
  /* consultamos todas las seccion de menus agregados */
  function muestrosecciones(){
    try {
      $movements          = new usuariosModel;
      $movs               = $movements->concemudlo();
      /* regresamos la informacion */
      $data = get_module('modulosmenu', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  } 

  /* selecciona y habilita seccion  */
  function seleseccion(){
    try {
      $movements          = new usuariosModel;
      /* variables para guardar y consultar */
      $movements->idUsuario = $_POST['idUsuario'];
      $movements->dato = $_POST['dato'];
      $movements->padre = $_POST['dato'];
      $movements->nombre = $_POST['nombre'];
      $movements->icono = $_POST['icono'];
      $movements->idMenu = $_POST['idMenu'];
      //print_r ($movements->datod);
      /* guardamos la seleccion de seccion */
      $movs= $movements->obtengosubmou();
      /* regresamos la informacion */
      $data = get_module('submodulosmenu', ['movements' => $movs]);

      if($movsuno = $movements->selSecc()){
        
        
          json_output(json_build(200, $data));
        
      }

      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* seleccion de submenus del area seleccionada */
  function selecsubsecci(){
    try {
      $movements          = new usuariosModel;
      /* variables para guardar y consultar */
      $movements->idUsuario = ($_POST['idUsuario']);
      $movements->idMenu = $_POST['idMenu'];
      $movements->nombre = $_POST['dato'];
      $movements->padre = $_POST['padre'];
      $movements->dato = $_POST['dato'];
      $movements->icono = $_POST['icono'];
      $movements->administrador = ($_POST['administrador'] == '')? '0' : $_POST['administrador'] ;
      $movements->consulta =  ($_POST['consulta'] == '')? '0' : $_POST['consulta'] ;
      $movements->agregar = ($_POST['agregar'] == '')? '0' : $_POST['agregar'];
      $movements->editar = ($_POST['editar'] == '')? '0' : $_POST['editar'] ;
      $movements->eliminar = ($_POST['eliminar'] == '')? '0' : $_POST['eliminar'] ;
      $movements->exportar = ($_POST['exportar'] == '')? '0' : $_POST['exportar'];
      $movements->especiales = ($_POST['especiales'] == '')? '0' : $_POST['especiales'] ;

      
      if(!$movements->nuevosubmen()) {  json_output(json_build(400, null, 'Hubo un error al seleccionar el submenu'));  }
      else{json_output(json_build(200, null, 'Se ha configurado las opciones del submenu'));}

      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* edicion de seleccion de submenu */
  function selecsubsecciEdi(){
    try {
      $movements          = new usuariosModel;
      /* variables para guardar y consultar */
      $movements->idPermiso = ($_POST['idPermiso']);
      $movements->idUsuario = ($_POST['idUsuario']);
      $movements->idMenu = $_POST['idMenu'];
      $movements->nombre = $_POST['dato'];
      $movements->padre = $_POST['padre'];
      $movements->dato = $_POST['dato'];
      $movements->icono = $_POST['icono'];
      $movements->administrador = ($_POST['administrador'] == '')? '0' : $_POST['administrador'] ;
      $movements->consulta =  ($_POST['consulta'] == '')? '0' : $_POST['consulta'] ;
      $movements->agregar = ($_POST['agregar'] == '')? '0' : $_POST['agregar'];
      $movements->editar = ($_POST['editar'] == '')? '0' : $_POST['editar'] ;
      $movements->eliminar = ($_POST['eliminar'] == '')? '0' : $_POST['eliminar'] ;
      $movements->exportar = ($_POST['exportar'] == '')? '0' : $_POST['exportar'];
      $movements->especiales = ($_POST['especiales'] == '')? '0' : $_POST['especiales'] ;

      
      if(!$movements->nuevosubmenedi()) {  json_output(json_build(400, null, 'Hubo un error al seleccionar el submenu'));  }
      else{json_output(json_build(200, null, 'Se ha editado la selección de submenu'));}

      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* quitamos la seccion seleccionada con todo y las secciones seleccionadas */
  function desseleseccion(){
    try {
      $movements          = new usuariosModel;
      /* variables para guardar y consultar */
      $movements->idUsuario = $_POST['idUsuario'];
      $movements->dato = $_POST['dato'];
      $movements->padre = $_POST['dato'];
      $movements->nombre = $_POST['nombre'];
      $movements->icono = $_POST['icono'];
      $movements->idMenu = $_POST['idMenu'];

      /* eliminamos la seccion */
      if(!$movements->desselSecc()) {  json_output(json_build(400, null, 'Hubo un error al quitar la seleccion de sección'));  }

      else{
        /* eliminamos las subsecciones  */
        $movements->desselSeccSub();
        json_output(json_build(200, null, 'Se ha eliminado la sección y submodulos, del usuario'));}

      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* verificamos que seccion tiene activo el usuario seleccionado */
  function seccionactivas(){
    try {
      $movements          = new usuariosModel;
      $movements->idUsuario = $_POST['idUsuario'];
      $movs               = $movements->secseleccionadas();
      /* regresamos la informacion */
      $data = $movs;
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  
  /* consultamos las submodulos seleccionado del usuario  */
  function activosub(){
    try {
      $movements          = new usuariosModel;
      /* variables para guardar y consultar */
      $movements->idUsuario = $_POST['idUsuario'];
      $movements->padre = $_POST['padre'];
      
      /* guardamos la seleccion de seccion */
      $movs= $movements->secobtengosubmou();
      /* regresamos la informacion */
      $data = $movs;
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* para consulta submenu para activar */
  function seleseccionacti(){
    try {
      $movements          = new usuariosModel;
      /* variables para guardar y consultar */
      $movements->idUsuario = $_POST['idUsuario'];
      $movements->dato = $_POST['dato'];
      $movements->padre = $_POST['dato'];
      $movements->nombre = $_POST['nombre'];
      $movements->icono = $_POST['icono'];
      $movements->idMenu = $_POST['idMenu'];
      //print_r ($movements->datod);
      /* guardamos la seleccion de seccion */
      $movs= $movements->obtengosubmou();
      /* regresamos la informacion */
      $data = get_module('submodulosmenu', ['movements' => $movs]);

      json_output(json_build(200, $data));


      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }
  
}