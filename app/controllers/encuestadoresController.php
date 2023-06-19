<?php 

class encuestadoresController extends Controller {
  function __construct(){ }

  /* funcion que entra por default */
  function index(){ 
  
    $_SESSION['paraArchivo'] = NULL;
    $_SESSION['paraArchivo'] = "encuestadores";
    if($_SESSION['idUsuario'] != NULL){ View::render('index');  }
    else{ View::render('portada'); }
  
  }

  /* funcion para cargar los avisos */
  function cargoencuestador(){
    try {
      $movements          = new encuestadoresModel;
      $movs               = $movements->concentrencuestadores();
      /* regresamos la informacion */
      $data = get_module('tblencuestadores', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  

  /* guaradamos un nuevo aviso */
  function nuevoencun(){
    try {
      $movements          = new encuestadoresModel;

      $movements->fechaRegistro = $_POST['fechaRegistro'];
      $movements->encuestador = $_POST['encuestador'];
      $movements->ciudad= $_POST['ciudad'];
      $movements->estado= $_POST['estado'];
      $movements->correo= $_POST['correo'];
      $movements->telefono= $_POST['telefono'];
      $movements->pago= $_POST['pago'];
      $movements->cuenta= $_POST['cuenta'];
      $movements->banco= $_POST['banco'];
      $movements->comentarios= $_POST['comentarios'];
     
      /* para log de acciones */
      $movements->idAccion = 1;
      
      /* agregamos la imagen a la bd */
      if(!$movements->nuencuestador()) {  json_output(json_build(400, null, 'Hubo error al agregar el elemento'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se ha agregado su elemento'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* funcion para elminar el aviso */
  function eliencuestador(){
    try {
      $movements          = new encuestadoresModel;

      $movements->idEncuestadores = $_POST['idEncuestadores'];
      
      /* para log de acciones */
      $movements->idAccion = 3;
      
      /* agregamos la imagen a la bd */
      if(!$movements->eliencues()) {  json_output(json_build(400, null, 'Hubo error al eliminar el elemento'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se elimino su elemento'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* obtenemos informacion para editar*/
  function obtengoinfo(){
    try {
      $movements          = new encuestadoresModel;
      $movements->idEncuestadores = $_POST['idEncuestadores'];
      $movs               = $movements->infoedita();
      /* regresamos la informacion */
      $data = get_module('formediencuestador', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
    
  }

  /* editamos la informacion */
  function editencu(){
    try {
      $movements          = new encuestadoresModel;

      $movements->idEncuestadores = $_POST['idEncuestadores'];
      $movements->fechaRegistro = $_POST['fechaRegistro'];
      $movements->encuestador = $_POST['encuestador'];
      $movements->ciudad= $_POST['ciudad'];
      $movements->estado= $_POST['estado'];
      $movements->correo= $_POST['correo'];
      $movements->telefono= $_POST['telefono'];
      $movements->pago= $_POST['pago'];
      $movements->cuenta= $_POST['cuenta'];
      $movements->banco= $_POST['banco'];
      $movements->comentarios= $_POST['comentarios'];
      
      /* para log de acciones */
      $movements->idAccion = 2;
      
      /* agregamos la imagen a la bd */
      if(!$movements->ediencues()) {  json_output(json_build(400, null, 'Hubo error al eliminar el elemento'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se elimino su elemento'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* funcion para dar de alta usuario en el sistema */
  function alatacorreo(){
    try {
      $movements          = new encuestadoresModel;
      /* obtenemos las varaibles */      
      $movements->idEncuestadores = $_POST['idEncuestadores'];
      $movements->correo = $_POST['correo'];

      /* creamos el usuario */
      $result = explode('@',$_POST['correo']);
      $movements->usuario = $result[0];
      $usuariocorreo = $result[0];

      /* creamos la clave */
      $calvefinal = "#".$result[0]."_20.";
      $movements->clave        = codiClave($calvefinal);

      /* obtenemos la informacion del usuario para crearlo en la tabla de usuarios */
      $datos = $movements->obtengoInfoParausuario();
      $movements->nombre = $datos[0]['nombre'];
      $movements->apePaterno = $datos[0]['apePaterno'];
      $movements->apeMaterno = $datos[0]['apeMaterno'];
      $movements->idAnalista = $datos[0]['idAnalista']; //este valor se cambio dependiendo que tipo de usuario se de de alta
            
      /* creamos el nuevo usuario */
      $movements->idAccion = 17;
      $movements->nuevousuariosistema();
      $movements->movisis();

      /* cambiamos el valor en la tabla de analista */
      $movements->cambiosisttabla();

     
      /* regresamos mensaje */
      json_output(json_build(200, null, 'Se ha creado el usuario en el sistema'));

    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }



  }

  /* function para dar de baja el usuario en el sistema */
  function bajasistema(){
    try {
      $movements          = new encuestadoresModel;
      $movements->idEncuestadores = $_POST['idEncuestadores'];

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
}