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

      $torneos->dias= $_POST['dias_text'];

      $torneos->horarios= $_POST['horarios_text'];

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

        $torneos->archivo='<img src="'.IMAGES.$directorio_1.'" alt="" class="avatar-xxs rounded-circle image_src object-cover">' ;
        
      }


      /* agregamos la imagen a la bd */

      if(!$torneos->guardar_torneo()) {  json_output(json_build(400, null, 'Hubo error al crear el torneo'));  }

      json_output(json_build(200, null, 'Se ha creado su torneo'));

      

    }

    /* esto es para mostrar el error */

    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }



  /* funcion para eliminar elñ analista */

  function elianalis(){

    try {

      $movements          = new analistaModel;

      $movements->idAnalista = $_POST['idAnalista'];



      /* para log de acciones */

      $movements->idAccion = 16;

            

      /* agregamos la imagen a la bd */

      if(!$movements->elimiana()) {  json_output(json_build(400, null, 'Hubo error al eliminar el analista'));  }

      $movements->movisis();

      json_output(json_build(200, null, 'Se ha eliminado su analista'));

      

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



  /* function para editar los analistas */

  function editamosinf(){

    try {

      $movements          = new analistaModel;



      $verifico = $_POST['archivoedi'];



      if($verifico != ''){

        $movements->archivo = $verifico;

      }else{

        $movements->archivo = $_FILES['archivo']['name'];

      }

      

      $movements->idAnalista = $_POST['idAnalista'];

      $movements->nombre = $_POST['nombre'];

      $movements->apePaterno= $_POST['apePaterno'];

      $movements->apeMaterno= $_POST['apeMaterno'];

      $movements->idPerfil= $_POST['idPerfil'];

      $movements->correo= $_POST['correo'];

      $movements->coordinador= $_POST['coordinador'];

      $movements->cliente= $_POST['cliente'];

      $movements->telefono= $_POST['telefono'];

      $movements->celular= $_POST['celular'];

      $movements->comentarios= $_POST['comentarios'];

      

      /* para log de acciones */

      $movements->idAccion = 15;

      if($verifico != ''){

        $movements->archivo = $verifico;  

      }else{

        /* guardamos el archivo en el repositorio */

        $nombre_archivo_1 = $_FILES['archivo']['name'];

        $directorio_1 = $_SERVER['DOCUMENT_ROOT']."/appMidas/assets/contenedor/analista/".basename($nombre_archivo_1);

        $movements->archivo = $nombre_archivo_1;

        move_uploaded_file($_FILES['archivo']['tmp_name'], $directorio_1);

      }

      

      /* agregamos la imagen a la bd */

      if(!$movements->editaelemento()) {  json_output(json_build(400, null, 'Hubo error al editar el elemento'));  }

      $movements->movisis();

      json_output(json_build(200, null, 'Se ha edita el elemento'));

      

    }

    /* esto es para mostrar el error */

    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }



  }



  /* funcion para dar de alta usuario en el sistema */

  function alatacorreo(){

    try {

      $movements          = new analistaModel;

      /* obtenemos las varaibles */      

      $movements->idAnalista = $_POST['idAnalista'];

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

      if ($datos[0]['idPerfil'] == 2){$movements->admin = '1';}else{ $movements->admin = NULL;}

      if ($datos[0]['idPerfil'] == 3){$movements->supervisor = NULL;}

            

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

      $movements          = new analistaModel;

      $movements->idAnalista = $_POST['idAnalista'];



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