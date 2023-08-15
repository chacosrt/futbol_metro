<?php 



class torneosController extends Controller {

  function __construct(){ }



   /* funcio para salir del sistema */

   function salir(){ 

    $_SESSION = array();

    session_destroy();

    json_output(json_build(200));

  }



  /* funcion que entra por default */

  function index(){ 

  

    if($_SESSION['id'] != NULL){ 

      $torneos = new torneosModel;

      $lista_torneos = $torneos->listaTorneos();
      
      View::render('torneos',['lista' => $lista_torneos]);     
      
      
      
    }else{ 
      header('Location: '.DEFAULT_CONTROLLER);
    }

  

  }


  /* funcion para guardar los torneos */

  function guardaTorneo(){

    try {

      /* print_r($_POST);

      print_r($_FILES); */

      $torneos = new torneosModel;

      $torneos->nombre = $_POST['nombre'];

      $torneos->lugar= $_POST['lugar'];

      $torneos->temporada= $_POST['temporada'];

      $torneos->modalidad= $_POST['modalidad'];

      $torneos->dias= trim($_POST['dias_text']);

      $torneos->horarios= trim($_POST['horarios_text']);

      $torneos->fecha_inicio= $_POST['fecha_inicio'];

      $torneos->fecha_fin= $_POST['fecha_fin'];

      $torneos->categoria= $_POST['categoria'];

      $torneos->creado_por =  $_SESSION["email"];

      $torneos->creado_el = date('Y-m-d H:i:s');

      $torneos->modificado_por =  $_SESSION["email"];

      $torneos->modificado_el = date('Y-m-d H:i:s');


      /* guardamos el archivo en el repositorio */

      $nombre_archivo_1 = "principal";
      $carpeta = str_replace(" ", "_", $_POST['nombre']);
      $nombreCarpeta = "assets/images/img_torneos/".$carpeta;
      #print_r($nombreCarpeta);
      if (!is_dir($nombreCarpeta)) {
        // Crear la carpeta con permisos 0777 (puedes ajustar los permisos según tus necesidades)
        if (mkdir($nombreCarpeta, 0777,true)) {

          $directorio_1 = $nombreCarpeta."/".$nombre_archivo_1.".png";

          move_uploaded_file($_FILES['company-logo-input']['tmp_name'], $directorio_1);

          $torneos->archivo= $directorio_1;
          
        } 
      } else {

        $directorio_1 = $nombreCarpeta."/".$nombre_archivo_1.".png";

        move_uploaded_file($_FILES['company-logo-input']['tmp_name'], $directorio_1);

        $torneos->archivo='<img src="'.IMAGES.'img_torneos/'.$carpeta.'/'.$nombre_archivo_1.'.png" alt="" class="avatar-xxs rounded-circle image_src object-cover">' ;
        
      }


      /* agregamos la imagen a la bd */

      if(!$torneos->guardar_torneo()) {  json_output(json_build(400, null, 'Hubo error al crear el torneo'));  }

      json_output(json_build(200, null, 'Se ha creado su torneo'));

      

    }

    /* esto es para mostrar el error */

    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

/* funcion para editar los torneos */
  function editaTorneo($id){

    try {

      /* print_r($_POST);*/

      /* print_r($_FILES); */ 

      $torneos = new torneosModel;

      $torneos->id = $id;

      $torneos->nombre = $_POST['nombre'];

      $torneos->lugar= $_POST['lugar'];

      $torneos->temporada= $_POST['temporada'];

      $torneos->modalidad= $_POST['modalidad'];

      $torneos->dias= trim($_POST['dias_text']);

      $torneos->horarios= trim($_POST['horarios_text']);

      $torneos->fecha_inicio= $_POST['fecha_inicio'];

      $torneos->fecha_fin= $_POST['fecha_fin'];

      $torneos->categoria= $_POST['categoria'];

      $torneos->modificado_por =  $_SESSION["email"];

      $torneos->modificado_el = date('Y-m-d H:i:s');


      /* guardamos el archivo en el repositorio */

      $nombre_archivo_1 = "principal";
      $carpeta = str_replace(" ", "_", $_POST['nombre']);
      $nombreCarpeta = "assets/images/img_torneos/".$carpeta;
      #print_r($nombreCarpeta);
      if (!is_dir($nombreCarpeta)) {
        // Crear la carpeta con permisos 0777 (puedes ajustar los permisos según tus necesidades)
        if (mkdir($nombreCarpeta, 0777,true)) {

          $directorio_1 = $nombreCarpeta."/".$nombre_archivo_1.".png";

          move_uploaded_file($_FILES['company-logo-input']['tmp_name'], $directorio_1);

          $torneos->archivo= '<img id="'.$carpeta.'" src="'.IMAGES.'img_torneos/'.$carpeta.'/'.$nombre_archivo_1.'.png" alt="" class="avatar-xxs rounded-circle image_src object-cover">' ;
          
        } 
      } else {

        $directorio_1 = $nombreCarpeta."/".$nombre_archivo_1.".png";

        if ($_FILES['company-logo-input']['size'] > 0){

          move_uploaded_file($_FILES['company-logo-input']['tmp_name'], $directorio_1);

        }        

        $torneos->archivo='<img id="'.$carpeta.'" src="'.IMAGES.'img_torneos/'.$carpeta.'/'.$nombre_archivo_1.'.png" alt="" class="avatar-xxs rounded-circle image_src object-cover">' ;
        
      }


      /* agregamos la imagen a la bd */

      if(!$torneos->edita_torneo()) {  json_output(json_build(400, null, 'Hubo error al editar el torneo'));  }

      json_output(json_build(200, null, 'Se ha editado su torneo'));

      

    }

    /* esto es para mostrar el error */

    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* funcion para eliminar el torneo */

  function eliminaTorneo($id){

    try {

      $torneo          = new torneosModel;

      $torneo->id = $id;          

      /* agregamos la imagen a la bd */

      if(!$torneo->elimina_torneo()) {  json_output(json_build(400, null, 'Hubo error al eliminar el torneo'));  }

      $torneo->elimina_torneo();

      json_output(json_build(200, null, 'Se ha eliminado el torneo'));

      

    }

    /* esto es para mostrar el error */

    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

    

  }



  /* function para obtener la informacion para edicion el elemento */

  function obtengoinfo(){

    try {

      $torneos = new torneosModel;

      $lista_torneos = $torneos->listaTorneos();

      echo json_encode($lista_torneos);

    }

    /* esto es para mostrar el error */

    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

    

  }



  function obtengoTorneo($id){

    try {

      $torneos = new torneosModel;

      $torneos->id = $id;

      $torneo_row = $torneos->obtengo_torneo();

      echo json_encode($torneo_row);

    }

    /* esto es para mostrar el error */

    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /////////////////////////////////////////////////////////////////////////





 

  



  

}