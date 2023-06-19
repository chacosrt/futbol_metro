<?php 

class avisosController extends Controller {
  function __construct(){ }

  /* funcion que entra por default */
  function index(){ 
  
    $_SESSION['paraArchivo'] = NULL;
    $_SESSION['paraArchivo'] = "avisos";
    if($_SESSION['idUsuario'] != NULL){ View::render('index');  }
    else{ View::render('portada'); }
  
  }

  /* funcion para cargar los avisos */
  function cargoavisos(){
    try {
      $movements          = new avisosModel;
      $movs               = $movements->concentradoavisos();
      /* regresamos la informacion */
      $data = get_module('tblavisos', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* cargamos empleados par aelnuevo aviso */
  function cargoempelado(){
    try {
      $movements          = new avisosModel;
      $movs               = $movements->listaemplead();
      /* regresamos la informacion */
      $data = get_module('selectejecutivoavisos', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }   
  }

  /* guaradamos un nuevo aviso */
  function nuevoaviso(){
    try {
      $movements          = new avisosModel;

      $movements->titulo = $_POST['titulo'];
      $movements->mensaje = $_POST['mensaje'];
      $movements->dirigido= $_POST['dirigido'];
      $movements->tipo= $_POST['tipo'];
      
      /* para log de acciones */
      $movements->idAccion = 20;
      
      /* agregamos la imagen a la bd */
      if(!$movements->nuevomensaje()) {  json_output(json_build(400, null, 'Hubo error al editar el elemento'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se ha agregado su elemento'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* funcion para elminar el aviso */
  function eliaviso(){
    try {
      $movements          = new avisosModel;

      $movements->idAviso = $_POST['idAviso'];
      
      /* para log de acciones */
      $movements->idAccion = 21;
      
      /* agregamos la imagen a la bd */
      if(!$movements->eliminomensaje()) {  json_output(json_build(400, null, 'Hubo error al eliminar el elemento'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se elimino su elemento'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

}