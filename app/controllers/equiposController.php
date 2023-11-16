<?php 



class equiposController extends Controller {

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
      
      View::render('equipos',['lista' => $lista_torneos]);     
      
      
      
    }else{ 
      header('Location: '.DEFAULT_CONTROLLER);
    }

  

  }


  /* funcion para guardar los torneos */

  function guardaEquipo(){

    try {

      /* print_r($_POST);

      print_r($_FILES); */

      $equipos = new equiposModel;

      $equipos->nombre = $_POST['nombre'];

      $equipos->liga= $_POST['liga'];

      $equipos->delegado= $_POST['delegado'];

      $equipos->estatus= $_POST['estatus'];

      $equipos->creado_por =  $_SESSION["email"];

      $equipos->creado_el = date('Y-m-d H:i:s');

      $equipos->modificado_por =  $_SESSION["email"];

      $equipos->modificado_el = date('Y-m-d H:i:s');


      /* guardamos el archivo en el repositorio */

      $nombre_archivo_1 = "principal";
      $carpeta = str_replace(" ", "_", $_POST['nombre']);
      $nombreCarpeta = "assets/images/img_equipos/".$carpeta;
      #print_r($nombreCarpeta);
      if (!is_dir($nombreCarpeta)) {
        // Crear la carpeta con permisos 0777 (puedes ajustar los permisos según tus necesidades)
        if (mkdir($nombreCarpeta, 0777,true)) {

          $directorio_1 = $nombreCarpeta."/".$nombre_archivo_1.".png";

          move_uploaded_file($_FILES['company-logo-input']['tmp_name'], $directorio_1);

          $equipos->archivo= $directorio_1;
          
        } 
      } else {

        $directorio_1 = $nombreCarpeta."/".$nombre_archivo_1.".png";

        move_uploaded_file($_FILES['company-logo-input']['tmp_name'], $directorio_1);

        $equipos->archivo='<img id="'.$carpeta.'" src="'.IMAGES.'img_equipos/'.$carpeta.'/'.$nombre_archivo_1.'.png" alt="" class="avatar-xxs rounded-circle image_src object-cover">' ;
        
      }


      /* agregamos la imagen a la bd */

      if(!$equipos->guardar_equipo()) {  json_output(json_build(400, null, 'Hubo error al crear el torneo'));  }

      json_output(json_build(200, null, 'Se ha creado su torneo'));

      

    }

    /* esto es para mostrar el error */

    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

/* funcion para editar los torneos */
  function editaEquipo($id){

    try {

      /* print_r($_POST); */

      /* print_r($_FILES); */ 

      $equipos = new equiposModel;

      $equipos->nombre = $_POST['nombre'];

      $equipos->liga= $_POST['liga'];

      $equipos->delegado= $_POST['delegado'];

      $equipos->estatus= $_POST['estatus'];

      $equipos->id = $id;

      $equipos->modificado_por =  $_SESSION["email"];

      $equipos->modificado_el = date('Y-m-d H:i:s');


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

          $equipos->archivo= '<img id="'.$carpeta.'" src="'.IMAGES.'img_equipos/'.$carpeta.'/'.$nombre_archivo_1.'.png" alt="" class="avatar-xxs rounded-circle image_src object-cover">' ;
          
        } 
      } else {

        $directorio_1 = $nombreCarpeta."/".$nombre_archivo_1.".png";

        if ($_FILES['company-logo-input']['size'] > 0){

          move_uploaded_file($_FILES['company-logo-input']['tmp_name'], $directorio_1);

        }        

        $equipos->archivo='<img id="'.$carpeta.'" src="'.IMAGES.'img_equipos/'.$carpeta.'/'.$nombre_archivo_1.'.png" alt="" class="avatar-xxs rounded-circle image_src object-cover">' ;
        
      }


      /* agregamos la imagen a la bd */

      if(!$equipos->edita_equipo()) {  json_output(json_build(400, null, 'Hubo error al editar el equipo'));  }

      json_output(json_build(200, null, 'Se ha editado su equipo'));

      

    }

    /* esto es para mostrar el error */

    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* funcion para eliminar el torneo */

  function eliminaEquipo($id){

    try {

      $equipos          = new equiposModel;

      $equipos->id = $id;          

      /* agregamos la imagen a la bd */

      if(!$equipos->elimina_equipo()) {  json_output(json_build(400, null, 'Hubo error al eliminar el torneo'));  }

      $equipos->elimina_equipo();

      json_output(json_build(200, null, 'Se ha eliminado el torneo'));

      

    }

    /* esto es para mostrar el error */

    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

    

  }



  /* function para obtener la informacion para edicion el elemento */

  function obtengoinfo(){

    try {

      $equipos = new equiposModel;

      $lista_equipos = $equipos->listaEquipos();

      echo json_encode($lista_equipos);

    }

    /* esto es para mostrar el error */

    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

    

  }



  function obtengoEquipo($id){

    try {

      $torneos = new equiposModel;

      $torneos->id = $id;

      $torneo_row = $torneos->obtengo_equipo();

      echo json_encode($torneo_row);

    }

    /* esto es para mostrar el error */

    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /////////////////////////////////////////////////////////////////////////





 

  



  

}