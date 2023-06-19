<?php 

class estudiosController extends Controller {
  function __construct(){ }

   /* funcio para salir del sistema */
   function salir(){ 
    $_SESSION = array();
    session_destroy();
    json_output(json_build(200));
  }

  /* funcion que entra por default */
  function index(){ }
  /* para la seccion de estudios de clientes */
  function clientes(){
    $_SESSION['paraArchivo'] = NULL;
    $_SESSION['paraArchivo'] = "estudiosclientes";
    if($_SESSION['idUsuario'] != NULL){ View::render('clientes');  }
    else{ View::render('portada'); }

  }

  /* cargo los estudios pendientes por parte del cliente */
  function cargopendientes(){  
    try {
      $movements          = new estudiosModel;
       /* aqui verificamos si son algunos de los tres usuarios solicitados */
 
       if ($_SESSION['idUsuario'] != 140 AND $_SESSION['idUsuario'] != 166 AND $_SESSION['idUsuario'] != 103 AND $_SESSION['idUsuario'] != 194 AND $_SESSION['idUsuario'] != 273 ){
        $movs               = $movements->concentradopendientes();
       }
       else{
           /* en caso de que se palomares*/
           if($_SESSION['idUsuario'] == 140){
            $movs               = $movements->concentradopendientesuno();
           }
     
           /* en caso de que sea victor de jesus*/
           if($_SESSION['idUsuario'] == 166){
            $movs               = $movements->concentradopendientesdos();
           }
           /* en caso de que sea raul ramos valle */
           if($_SESSION['idUsuario'] == 103){
            $movs               = $movements->concentradopendientestres();  
           }
           /*en caso de evalenzuela*/
           if($_SESSION['idUsuario'] == 194){
            $movs               = $movements->concentradopendientestres();  
           }
           /*en caso de evalenzuela*/
           if($_SESSION['idUsuario'] == 273){
            $movs               = $movements->concentradopendientescuatro();  
           }
           /* ultimo claso martha leos */
           if($_SESSION['idUsuario'] == 371){
            $movs               = $movements->concentradopendientescinco();  
           }
           
       }

      
      /* regresamos la informacion */
      $data = get_module('tblestudiossolicliente', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  
  /* funcion para agregar nuevo ticket por parte del usuario */
  function nuevoestudio(){
    try {
      $movements          = new estudiosModel;
    
      $movements->nombreCandidato = $_POST['nombreCandidato'];
      $movements->apePaterno= $_POST['apePaterno'];
      $movements->apeMaterno= $_POST['apeMaterno'];
      $movements->puesto= $_POST['puesto'];
      $movements->rfc= $_POST['rfc'];
      $movements->curp= $_POST['curp'];
      $movements->nss= $_POST['nss'];
      //$movements->tiposervicio= $_POST['tiposervicio'];
      $movements->tiposervicio= json_encode($_POST['tiposervicio'], true);

      $movements->telefono= $_POST['telefono'];
      $movements->correo= $_POST['correo'];

      /* traigo la empresa del usuario */
      $idempresaconsu = $movements->empresausuario();
      $movements->idEmpresa  = $idempresaconsu[0]['idEmpresa'];

      /* creamos el nuevo estudio */
      $movements->idAccion = 22;
      $movements->nuevoestudio();
      $movements->movisis();

      /* obtenemos el ultimo id */
      $infoultimoestudiuo  = $movements->ultimoestudio();
      $idEstudio  = $infoultimoestudiuo[0]['idEstudio'];
      //echo $idEstudio;
      $movements->idEstudio = $idEstudio;
      /* creamos la carpeta del estudio solicitado */
      mkdir($_SERVER['DOCUMENT_ROOT']."/assets/contenedor/estudios/estudioNum_".$idEstudio."/", 0755);

      /* guardamos los diferentes archivos */
      foreach($_FILES["archivo"]['tmp_name'] as $key => $tmp_name)
      {
        if($_FILES["archivo"]["name"][$key]) {

          $nombre_archivo_1 = $_FILES['archivo']['name'][$key];
          $directorio_1 = $_SERVER['DOCUMENT_ROOT']."/assets/contenedor/estudios/estudioNum_".$idEstudio."/".basename($nombre_archivo_1);
          $movements->archivo = $nombre_archivo_1;
          move_uploaded_file($_FILES['archivo']['tmp_name'][$key], $directorio_1);

          $movements->archivo  = $nombre_archivo_1;
          $movements->editoarchivosestudio(); 
        }
      }

/*       $movements->archivo  = $nombre_archivo_1;
      $movements->editoarchivosestudio(); */
      
      
      json_output(json_build(200, null, 'Se ha solicitado su estudio'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* funcion para eliminar elñ analista */
  function eliminaestudio(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movements->motivoCancelacion = $_POST['motivoCancelacion'];

      /* para log de acciones */
      $movements->idAccion = 16;
            
      /* agregamos la imagen a la bd */
      if(!$movements->elimiana()) {  json_output(json_build(400, null, 'Hubo error al eliminar el estudio'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se ha eliminado el estudio'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
    
  }

  /* function para obtener la informacion para edicion el elemento */
  function obtengodatosedi(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->estudioinfoobtengo();
      /* regresamos la informacion */
      $data = get_module('formedieclienEDI', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
    
  }


  /* function para editar los analistas */
  function editoestudio(){
    try {
      $movements          = new estudiosModel;

      $verifico = $_POST['fileEdi'];
      if($verifico != ''){
        $movements->archivo = $verifico;
      }else{
        $movements->archivo = $_FILES['file']['name'];
      }

      
      $idEstudio = $_POST['idEstudio'];
      $movements->idEstudio = $_POST['idEstudio'];
      $movements->nombreCandidato = $_POST['nombreCandidato'];
      $movements->apePaterno= $_POST['apePaterno'];
      $movements->apeMaterno= $_POST['apeMaterno'];
      $movements->puesto= $_POST['puesto'];
      $movements->rfc= $_POST['rfc'];
      $movements->curp= $_POST['curp'];
      $movements->nss= $_POST['nss'];
      $movements->tiposervicio= $_POST['tiposervicio'];
      $movements->telefono= $_POST['telefono'];
      $movements->correo= $_POST['correo'];
      
      /* para log de acciones */
      $movements->idAccion = 15;

      if($verifico != ''){
        $movements->archivo = $verifico;  
      }else{
        /* guardamos el archivo en el repositorio */
        $nombre_archivo_1 = $_FILES['file']['name'];
        $directorio_1 =$_SERVER['DOCUMENT_ROOT']."/assets/contenedor/estudios/estudioNum_".$idEstudio."/".basename($nombre_archivo_1);
        $movements->archivo = $nombre_archivo_1;
        move_uploaded_file($_FILES['file']['tmp_name'], $directorio_1);
      }

      
      
      /* agregamos la imagen a la bd */
      if(!$movements->editaelemento()) {  json_output(json_build(400, null, 'Hubo error al editar el elemento'));  }
      $movements->movisis();
      $movements->editoarchivosestudio();
      
      json_output(json_build(200, null, 'Se ha edita el elemento'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* cargo solicitudes terminadas */
  function cargoterminados(){  
    try {
      $movements          = new estudiosModel;
      /* aqui verificamos si son algunos de los tres usuarios solicitados */
    

      if ($_SESSION['idUsuario'] != 140 AND $_SESSION['idUsuario'] != 166 AND $_SESSION['idUsuario'] != 103 AND $_SESSION['idUsuario'] != 194 AND $_SESSION['idUsuario'] != 273 ){
       $movs               = $movements->cocentradoterminados();
      }else{
          /* en caso de que se palomares*/
          if($_SESSION['idUsuario'] == 140){
           $movs               = $movements->cocentradoterminadosuno();
          }
    
          /* en caso de que sea victor de jesus*/
          if($_SESSION['idUsuario'] == 166){
           $movs               = $movements->cocentradoterminadosdos();
          }
          /* en caso de que sea raul ramos valle */
          if($_SESSION['idUsuario'] == 103){
           $movs               = $movements->cocentradoterminadostres();  
          }
           /* en caso de que sea evalenzuela */
          if($_SESSION['idUsuario'] == 194){
           $movs               = $movements->cocentradoterminadostres();  
          }
           /* en caso de que sea evalenzuela */
          if($_SESSION['idUsuario'] == 273){
           $movs               = $movements->concentradopendientescuatro();  
          }

           /* ultimo claso martha leos */
           if($_SESSION['idUsuario'] == 371){
            $movs               = $movements->concentradopendientescinco();  
           }
      }

 
      /* regresamos la informacion */
      $data = get_module('tblestudiostercliente', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  
  
  /* //////////////////////////////////////////////////////////////////////////////// */
  /* ASIGNACION DE ESTUDIOS */
  /* //////////////////////////////////////////////////////////////////////////////// */
  function asignacion(){
    $_SESSION['paraArchivo'] = NULL;
    $_SESSION['paraArchivo'] = "estudiosasignacion";
    if($_SESSION['idUsuario'] != NULL){ View::render('asignacion');  }
    else{ View::render('portada'); }

  }

  /* cargo los estudios sin asignar */
  function cargosinasignar(){
    try {
      $movements          = new estudiosModel;
      if($_SESSION['idUsuario'] == 87){
        $movs               = $movements->sinasignarsan();
      }else{
        $movs               = $movements->sinasignar();
      }
      
      /* regresamos la informacion */
      $data = get_module('tblestudiossinasignar', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* ver la informacion de los estudios sin asignar */
  function verinfoasigna(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->verinfoasinga();
      /* regresamos la informacion */
      $data = get_module('infoveoasignaestudio', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* cargo solicitudes terminadas para el ejectuvi */
  function cargoterminadosejectu(){  
    try {
      $movements          = new estudiosModel;
      if($_SESSION['idUsuario'] == 87){
        $movs               = $movements->cocentradoterminadosEjecSan();
      }else{
        $movs               = $movements->cocentradoterminadosEjec();
      }
      
      /* regresamos la informacion */
      $data = get_module('tblestudiostercliente', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargoterminadoscoordin(){  
    try {
      $movements          = new estudiosModel;
      if($_SESSION['idUsuario'] == 87){
        $movs               = $movements->cocentradoterminadosEjecsan();
      }else{
        $movs               = $movements->cocentradoterminadosEjec();
      }
      
      /* regresamos la informacion */
      $data = get_module('tblestudiostercliente', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* function para cargalos los clientes */
  function cargocliente(){
    try {
      $movements          = new estudiosModel;
      $movs               = $movements->listaclientes();
      /* regresamos la informacion */
      $data = get_module('selectclienteestudioeje', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* function para cragar los ejectuvico */
  function cargoejecuti(){
    try {
      $movements          = new estudiosModel;
      $movs               = $movements->listaejectuvis();
      /* regresamos la informacion */
      $data = get_module('selectejecutivoasigna', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* nuevo estudio con la ssignacion y el ejectuvio */
  function nuevoestudioejec(){
    try {
      $movements          = new estudiosModel;
    
      $movements->nombreCandidato = $_POST['nombreCandidato'];
      $movements->apePaterno= $_POST['apePaterno'];
      $movements->apeMaterno= $_POST['apeMaterno'];
      $movements->puesto= $_POST['puesto'];
      $movements->rfc= $_POST['rfc'];
      $movements->curp= $_POST['curp'];
      $movements->nss= $_POST['nss'];
      $movements->tiposervicio= json_encode($_POST['tiposervicio'], true);

      $movements->telefono= $_POST['telefono'];
      $movements->correo= $_POST['correo'];
      $movements->idEmpresa= $_POST['idEmpresa'];
      $movements->realizo= ($_POST['realizo'] == "")? NULL :$_POST['realizo'];
      $movements->estatus= ($_POST['realizo'] == "")? "1" :"2";


      /* creamos el nuevo estudio */
      $movements->idAccion = 22;
      $movements->nuevoestudioejectu();
      $movements->movisis();

      /* obtenemos el ultimo id */
      $infoultimoestudiuo  = $movements->ultimoestudio();
      $idEstudio  = $infoultimoestudiuo[0]['idEstudio'];
      $movements->idEstudio = $idEstudio;

      /* creamos la carpeta del estudio solicitado */
      mkdir($_SERVER['DOCUMENT_ROOT']."/assets/contenedor/estudios/estudioNum_".$idEstudio."/", 0755);

      /* guardamos el archivo en el repositorio */
      $nombre_archivo_1 = $_FILES['archivo']['name'];
      $directorio_1 =$_SERVER['DOCUMENT_ROOT']."/assets/contenedor/estudios/estudioNum_".$idEstudio."/".basename($nombre_archivo_1);
      $movements->archivo = $nombre_archivo_1;
      move_uploaded_file($_FILES['archivo']['tmp_name'], $directorio_1);


      /* actualizamos los archivos en la bd */
      $movements->archivo  = $nombre_archivo_1;
      $movements->editoarchivosestudio();

      
      
      json_output(json_build(200, null, 'Se ha solicitado su estudio'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* asignamos ejecutivo a estudio */
  function asignaejectui(){
    try {
      $movements          = new estudiosModel;

      
      $movements->idEstudio = $_POST['idEstudio'];
      $movements->realizo = $_POST['realizo'];
      
      /* para log de acciones */
      $movements->idAccion = 28;
      $movements->asignoej();
      $movements->movisis();
      
      
      json_output(json_build(200, null, 'Se ha edita el elemento'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /////////////////////////////////////////////////////////////////////////
   /* //////////////////////////////////////////////////////////////////////////////// */
  /* SEGUIMIENTO DE EEJECUTIVO*/
  /* //////////////////////////////////////////////////////////////////////////////// */
  function seguimientocoordinador(){
    $_SESSION['paraArchivo'] = NULL;
    $_SESSION['paraArchivo'] = "secoordinador";
    if($_SESSION['idUsuario'] != NULL){ View::render('secoordinador');  }
    else{ View::render('portada'); }

  }

  /* crago los estudios asignados para el coordinador y sus ejectuviso */
  function cargoasignadocoo(){
    try {
      $movements          = new estudiosModel;
      if($_SESSION['idUsuario'] == 87){
        $movs               = $movements->asignadoscoosan();
      }else{
        $movs               = $movements->asignadoscoo();
      }
      
      /* regresamos la informacion */
      $data = get_module('tblestudiosasignadoscoo', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  /* creamos la temp0oral del estudio */
  function seguimiento(){

    $idEstudio = $_POST['idEstudio'];
    $_SESSION['idEstudio'] = $idEstudio;
    json_output(json_build(200));

  }
  /* enviamos al segumiento */
  function seguimientoVer(){

    $_SESSION['paraArchivo'] = NULL;
    $_SESSION['paraArchivo'] = "seguimientoestudio";

    if($_SESSION['idUsuario'] != NULL){ View::render('seguimiento');  }
    else{ View::render('portada'); }


  }
  
  /* cragamos la informacion incial */
  function Infoinicial(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->infoedipreionc();
      /* regresamos la informacion */
      $data = get_module('formediestudio', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* verificamos y cargamos el campo uno */
  function infocampouno(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->infocampouno();
      /* regresamos la informacion */
      $data = get_module('formcampouno', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* agregamos la informacion del campo uno */
  function campouno(){
    try {
      $movements          = new estudiosModel;
    
      $valido = $_POST['idDatos'];
      $movements->idDatos = $_POST['idDatos'];
      $movements->idEstudio = $_SESSION['idEstudio'];
      $movements->sexo= $_POST['sexo'];
      $movements->edad= $_POST['edad'];
      $movements->estadoCivil= $_POST['estadoCivil'];
      $movements->lugarNacimiento= $_POST['lugarNacimiento'];
      $movements->fechaNacimiento= $_POST['fechaNacimiento'];
      $movements->escolaridad= $_POST['escolaridad'];
      $movements->llamadaEmergencia= $_POST['llamadaEmergencia'];
      $movements->parentesco= $_POST['parentesco'];
      $movements->telEmergencia= $_POST['telEmergencia'];
    
      /* creamos el nuevo estudio */
      $movements->idAccion = 29;
      $movements->movisis();

      if($valido == ''){ $movements->agregocampouno();}
      else{ $movements->editocampouno(); }

      json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* cargamos la info del cmapo dos */
  function infocampodos(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->infocampodos();
      /* regresamos la informacion */
      $data = get_module('formcampodos', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* funcion para el formulario dos */
  function campodostotal(){
    try {
      $movements          = new estudiosModel;
      
      $validoDos = $_POST['idDomicilio'];
      $movements->idEstudio = $_SESSION['idEstudio'];

      $movements->idDomicilio= $_POST['idDomicilio'];
      $movements->delegacionMunicipio= $_POST['delegacionMunicipio'];
      $movements->ciudad= $_POST['ciudad'];
      $movements->estado= $_POST['estado'];
      $movements->cp= $_POST['cp'];
      $movements->tiempoResindir= $_POST['tiempoResindir'];
      $movements->tel1= $_POST['tel1'];
      $movements->tel2= $_POST['tel2'];
      $movements->cel1= $_POST['cel1'];
      $movements->cel2= $_POST['cel2'];
      $movements->calle= $_POST['calle'];
      $movements->numero= $_POST['numero'];
      $movements->colonia= $_POST['colonia'];
    
      
      /* creamos el nuevo estudio */
      $movements->idAccion = 29;
      $movements->movisis();

      if($validoDos == ''){ $movements->agregocamdostotal();}
      else{ $movements->editocampodos(); }

      json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* funcion carga campo tres */
  function infocampotres(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->infocampotres();
      /* regresamos la informacion */
      $data = get_module('formcampotres', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* agregamos cdocumentos */
  function agregodocumne(){
    try {
      $movements          = new estudiosModel;

      $idEstudio = $_SESSION['idEstudio'];
      
      $movements->titulo = $_POST['titulo'];
      $movements->folio = $_POST['folio'];
      $movements->idEstudio = $_SESSION['idEstudio'];
      $movements->observaciones= $_POST['observaciones'];

      /* traigo la empresa del usuario */
      $idempresaconsu = $movements->empresausuario();
      $movements->idEmpresa  = $idempresaconsu[0]['idEmpresa'];

      /* guardamos el archivo en el repositorio */
      $nombre_archivo_1 = $_FILES['archivo']['name'];
      $directorio_1 = $_SERVER['DOCUMENT_ROOT']."/assets/contenedor/estudios/estudioNum_".$idEstudio."/".basename($nombre_archivo_1);
      move_uploaded_file($_FILES['archivo']['tmp_name'], $directorio_1);

      $movements->archivo  = $nombre_archivo_1;
      $movements->idAccion = 31;
      $movements->nuedodocumento();
      $movements->movisis(); 
     
      
      json_output(json_build(200, null, 'Se ha solicitado su estudio'));

    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
    
  }

  /* eliminamos docuymentos */
  function eliminamosdoc(){
    try {
      $movements          = new estudiosModel;
      $movements->idDocumentacion = $_POST['idDocumentacion'];

      /* para log de acciones */
      $movements->idAccion = 32;
            
      /* agregamos la imagen a la bd */
      if(!$movements->elidocumen()) {  json_output(json_build(400, null, 'Hubo error al eliminar el documento'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se ha eliminado el documento'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* cargamos del campo cuatro */
  function infocampocuatro(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->infocampocuatro();
      /* regresamos la informacion */
      $data = get_module('formcampocuatro', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* traemos la informacion para editar antecedentes */
  function refelaborainfo(){
    try {
      $movements          = new estudiosModel;
      $movements->idRefeLaborales = $_POST['idRefeLaborales'];
      $movs               = $movements->inforeferenla();
      /* regresamos la informacion */
      $data = get_module('formeditarefere', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }
  
  /* agregamos familiar */
  function agregofamiliar(){
    try {
      $movements          = new estudiosModel;


      $movements->idEstudio = $_SESSION['idEstudio'];
      $movements->familiar = $_POST['familiar'];
      $movements->edad = $_POST['edad'];
      $movements->ocupacion = $_POST['ocupacion'];
      $movements->laboraEstudia = $_POST['laboraEstudia'];
      $movements->calle = $_POST['calle'];
      $movements->numero = $_POST['numero'];
      $movements->colonia = $_POST['colonia'];
      $movements->delegacionMunicipio = $_POST['delegacionMunicipio'];
      $movements->ciudad = $_POST['ciudad'];
      $movements->estado = $_POST['estado'];
      $movements->cpde = $_POST['cpde'];
      $movements->tiempoReside = $_POST['tiempoReside'];
      $movements->tel1 = $_POST['tel1'];
            
      $movements->idAccion = 33;
      $movements->nuevofamiliar();
      $movements->movisis(); 
     
      
      json_output(json_build(200, null, 'Se ha agregado el familiar'));

    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* eliminamos familiar */
  function eliminamosfamos(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstructura = $_POST['idEstructura'];

      /* para log de acciones */
      $movements->idAccion = 34;
            
      /* agregamos la imagen a la bd */
      if(!$movements->elidfamiliar()) {  json_output(json_build(400, null, 'Hubo error al eliminar el elemento'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se ha eliminado el elemento'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* obtenemos informacion para editar */
  function obtenemosinfoeditaestruc(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstructura = $_POST['idEstructuraed'];
      $movs               = $movements->infoeditaEstr();
      /* regresamos la informacion */
      $data = get_module('formediestructuraFam', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  /* editamos la estructura */
  function editoestreuct(){
    try {
      $movements          = new estudiosModel;
    
      $movements->idEstructura = $_POST['idEstructuraed'];
      $movements->familiar = $_POST['familiar'];
      $movements->edad = $_POST['edad'];
      $movements->ocupacion = $_POST['ocupacion'];
      $movements->laboraEstudia = $_POST['laboraEstudia'];
      $movements->calle = $_POST['calle'];
      $movements->numero = $_POST['numero'];
      $movements->colonia = $_POST['colonia'];
      $movements->delegacionMunicipio = $_POST['delegacionMunicipio'];
      $movements->ciudad = $_POST['ciudad'];
      $movements->estado = $_POST['estado'];
      $movements->cpde = $_POST['cpde'];
      $movements->tiempoReside = $_POST['tiempoReside'];
      $movements->tel1 = $_POST['tel1'];
      
    
      /* creamos el nuevo estudio */
      $movements->idAccion = 35;
      $movements->movisis();

       $movements->editamosEstruc();
      

      json_output(json_build(200, null, 'Se ha edito la informacion a su estudio'));

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function obtenemosinfoeditaSituacion(){
    try {
      $movements          = new estudiosModel;
      $movements->idSituacion = $_POST['idSituacionedi'];
      $movs               = $movements->infoeditasituaciuon();
      /* regresamos la informacion */
      $data = get_module('formediesituaciuon', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  function editoSituacion(){
    try {
      $movements          = new estudiosModel;
 

      $movements->idSituacion = $_POST['idSituacionedi'];
      $movements->nombre = $_POST['nombre'];
      $movements->parentesco= $_POST['parentesco'];
      $movements->salario = $_POST['salario'];
      $movements->ingreso = $_POST['ingreso'];
      $movements->concepto = $_POST['concepto'];
      $movements->egresos = $_POST['egresos'];
      $movements->observaciones = $_POST['observaciones'];
      $movements->superavit = $_POST['superavit'];

      /* creamos el nuevo estudio */
      $movements->idAccion = 37;
      $movements->movisis();

      $movements->editositudu();

      json_output(json_build(200, null, 'Se ha edito la informacion a su estudio'));

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  function obtenemosrefper(){
    try {
      $movements          = new estudiosModel;
      $movements->idRefePersonales = $_POST['idRefePersonalesedi'];
      $movs               = $movements->infoEditRefper();
      /* regresamos la informacion */
      $data = get_module('formedirefepers', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  function editorefeperd(){
    try {
      $movements          = new estudiosModel;
 

      $movements->idRefePersonales = $_POST['idRefePersonalesedi'];
      $movements->nombre = $_POST['nombre'];
      $movements->tiempoConocerlo = $_POST['tiempoConocerlo'];
      $movements->relacion = $_POST['relacion'];
      $movements->domicilio = $_POST['domicilio'];
      $movements->tel1 = $_POST['tel1'];
      $movements->opinion = $_POST['opinion'];

      /* creamos el nuevo estudio */
      $movements->idAccion = 37;
      $movements->movisis();

      $movements->editorperf();

      json_output(json_build(200, null, 'Se ha edito la informacion a su estudio'));

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  

  
  

  
/* '''''''''''''''''''''''''''''''''''''''' */
  /* cargamos el cmapo cinco */
  function infocampocinco(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->infocampocinco();
      /* regresamos la informacion */
      $data = get_module('formcampocinco', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* agregar redes */
  function agregarredes(){
    try {
      $movements          = new estudiosModel;
    
      $valido = $_POST['idRedes'];
      $movements->idRedes = $_POST['idRedes'];
      $movements->idEstudio = $_SESSION['idEstudio'];

      $movements->facebook = $_POST['facebook'];
      $movements->twitter = $_POST['twitter'];
      $movements->instagram = $_POST['instagram'];
      $movements->linkedin = $_POST['linkedin'];
      
    
      /* creamos el nuevo estudio */
      $movements->idAccion = 35;
      $movements->movisis();

      if($valido == ''){ $movements->agregarredes();}
      else{ $movements->editocamporedes(); }

      json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* ifnormacion del campoi seis */
  function infocamposeis(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->infocamposeis();
      /* regresamos la informacion */
      $data = get_module('formcamposeis', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* function para agregar conducta */
  function agregoconduta(){
    try {
      $movements          = new estudiosModel;
    
      $valido = $_POST['idConducta'];
      $movements->idConducta = $_POST['idConducta'];
      $movements->idEstudio = $_SESSION['idEstudio'];

      $movements->quienEstuvo = $_POST['quienEstuvo'];
      $movements->conductaEntrevistado = $_POST['conductaEntrevistado'];
      $movements->relacionVecinos = $_POST['relacionVecinos'];
      $movements->pertenecegrupo = $_POST['pertenecegrupo'];
      $movements->problemasLegales = $_POST['problemasLegales'];
      $movements->familiarRecluido = $_POST['familiarRecluido'];
      $movements->familiaresAdentro = $_POST['familiaresAdentro'];
   
      /* creamos el nuevo estudio */
      $movements->idAccion = 36;
      $movements->movisis();

      if($valido == ''){ $movements->agregoconducta();}
      else{ $movements->editoconducta(); }

      json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* informacion de campo siete */
  function infocamposiete(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->infocamposiete();
      /* regresamos la informacion */
      $data = get_module('formcamposiete', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* agrego situacion */
  function agregosituacion(){
    try {
      $movements          = new estudiosModel;
    
    
      $movements->idEstudio = $_SESSION['idEstudio'];


      $movements->nombre = $_POST['nombre'];
      $movements->parentesco= $_POST['parentesco'];
      $movements->salario = $_POST['salario'];
      $movements->ingreso = $_POST['ingreso'];
      $movements->concepto = $_POST['concepto'];
      $movements->egresos = $_POST['egresos'];
      $movements->observaciones = $_POST['observaciones'];
      $movements->superavit = $_POST['superavit'];

      /* creamos el nuevo estudio */
      $movements->idAccion = 37;
      $movements->movisis();

      $movements->agregosituacion();

      json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* eliminamos siotuacion */
  function eliminamossiete(){
    try {
      $movements          = new estudiosModel;
      $movements->idSituacion = $_POST['idSituacion'];

      /* para log de acciones */
      $movements->idAccion = 38;
            
      /* agregamos la imagen a la bd */
      if(!$movements->eliminasitua()) {  json_output(json_build(400, null, 'Hubo error al eliminar el elemento'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se ha eliminado el elemento'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }  

  /* cargamos ifno ocho */
  function infocampoocho(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->infocampoocho();
      /* regresamos la informacion */
      $data = get_module('formcampoocho', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* agregamos deuda */
  function agregodeuda(){
    try {
      $movements          = new estudiosModel;
      
      $valido = $_POST['idDeuda'];
      $movements->idDeuda = $_POST['idDeuda'];
      $movements->idEstudio = $_SESSION['idEstudio'];

      $movements->cuentaDeuda = $_POST['cuentaDeuda'];
      $movements->conQuien = $_POST['conQuien'];
      $movements->monto = $_POST['monto'];
      $movements->abonoMensual = $_POST['abonoMensual'];
      $movements->apagaren = $_POST['apagaren'];
      $movements->cuentaauto = $_POST['cuentaauto'];
      $movements->modelo = $_POST['modelo'];
      $movements->placas = $_POST['placas'];
      $movements->valorAuto = $_POST['valorAuto'];
      $movements->propiedad = $_POST['propiedad'];
      $movements->ubicacon = $_POST['ubicacon'];
      $movements->tarjetaCredito = $_POST['tarjetaCredito'];
      $movements->bancotarjetaCredito = $_POST['bancotarjetaCredito'];
      $movements->creditoAutorizado = $_POST['creditoAutorizado'];
      $movements->tarjetaTienda = $_POST['tarjetaTienda'];
      $movements->conquienTienda = $_POST['conquienTienda'];
      $movements->creditoAutorizadotienda = $_POST['creditoAutorizadotienda'];
      $movements->observaciones = $_POST['observaciones'];

        
      /* creamos el nuevo estudio */
      $movements->idAccion = 39;
      $movements->movisis();

      if($valido == ''){ $movements->agregodeuda();}
      else{ $movements->editodeudad(); }

      json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* cargamos campo nueve */
  function infocamponueve(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_SESSION['idEstudio'];
      $movs               = $movements->infocamponueve();
      /* regresamos la informacion */
      $data = get_module('formcamponueve', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* funcion para entorno */
  function agregoentorno(){
    try {
      $movements          = new estudiosModel;
      
      $valido = $_POST['idEntorno'];
      $movements->idEntorno = $_POST['idEntorno'];
      $movements->idEstudio = $_SESSION['idEstudio'];


      $movements->tipoZona= $_POST['tipoZona'];
      $movements->tipoVivienda= $_POST['tipoVivienda'];
      $movements->edificacion= $_POST['edificacion'];
      $movements->titular= $_POST['titular'];
      $movements->parentesco= $_POST['parentesco'];
      $movements->numRecamaras= $_POST['numRecamaras'];
      $movements->sala= $_POST['sala'];
      $movements->comedor= $_POST['comedor'];
      $movements->cocina= $_POST['cocina'];
      $movements->garaje= $_POST['garaje'];
      $movements->jardin= $_POST['jardin'];
      $movements->nomBano= $_POST['nomBano'];
      $movements->tipobano= $_POST['tipobano'];
      $movements->viasdeacceso= $_POST['viasdeacceso'];
      $movements->medioTransporte= $_POST['medioTransporte'];
      $movements->tiempoServicio= $_POST['tiempoServicio'];
      $movements->entreCalles= $_POST['entreCalles'];
      $movements->color= $_POST['color'];
      $movements->porton= $_POST['porton'];
      $movements->referencias= $_POST['referencias'];
      $movements->observaciones= $_POST['observaciones'];
      $movements->agua= $_POST['agua'];
      $movements->luz= $_POST['luz'];
      $movements->pavimentacion= $_POST['pavimentacion'];
      $movements->telefono= $_POST['telefono'];
      $movements->transporte= $_POST['transporte'];
      $movements->vigilancia= $_POST['vigilancia'];
      $movements->areas= $_POST['areas'];
      $movements->drenaje= $_POST['drenaje'];
      $movements->paredes= $_POST['paredes'];
      $movements->techos= $_POST['techos'];
      $movements->pisos= $_POST['pisos'];
      $movements->telNormal= $_POST['telNormal'];
      $movements->telPlasma= $_POST['telPlasma'];
      $movements->estereo= $_POST['estereo'];
      $movements->dvd= $_POST['dvd'];
      $movements->blueray= $_POST['blueray'];
      $movements->estufa= $_POST['estufa'];
      $movements->horno= $_POST['horno'];
      $movements->lavadora= $_POST['lavadora'];
      $movements->centrolavado= $_POST['centrolavado'];
      $movements->refrigerador= $_POST['refrigerador'];
      $movements->computadora= $_POST['computadora'];
      $movements->extensionInmueble= $_POST['extensionInmueble'];
      $movements->condicionesInmueble= $_POST['condicionesInmueble'];
      $movements->condicionesMobiliario= $_POST['condicionesMobiliario'];
      $movements->orden= $_POST['orden'];
      $movements->limpieza= $_POST['limpieza'];
      $movements->delincuencia= $_POST['delincuencia'];
      $movements->vandalismo= $_POST['vandalismo'];
      $movements->drogadiccion= $_POST['drogadiccion'];
      $movements->alcoholismo= $_POST['alcoholismo'];
      $movements->estudio= $_POST['estudio'];
      $movements->zotehuela= $_POST['zotehuela'];
      $movements->patio= $_POST['patio'];
      $movements->internet= $_POST['internet'];
      $movements->renta= $_POST['renta'];


        
      /* creamos el nuevo estudio */
      $movements->idAccion = 39;
      $movements->movisis();

      if($valido == ''){ $movements->agregoentorno();}
      else{ $movements->editoentorno(); }

      json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* campo diez */
  function infocampodiez(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_SESSION['idEstudio'];
      $movs               = $movements->infocampodiez();
      /* regresamos la informacion */
      $data = get_module('formcampodiez', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* agregamos referencia personal */
  function agregorefperfe(){
    try {
      $movements          = new estudiosModel;
      
      $movements->idEstudio = $_SESSION['idEstudio'];
 
      $movements->nombre = $_POST['nombre'];
      $movements->tiempoConocerlo = $_POST['tiempoConocerlo'];
      $movements->relacion = $_POST['relacion'];
      $movements->domicilio = $_POST['domicilio'];
      $movements->tel1 = $_POST['tel1'];
      $movements->opinion = $_POST['opinion'];
 
      /* creamos el nuevo estudio */
      $movements->idAccion = 43;
      $movements->movisis();

      $movements->agregarreferenciperson();
      

      json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  
  /* eliminamos referencia personal */
  function elirefpersonal(){
    try {
      $movements          = new estudiosModel;
      $movements->idRefePersonales = $_POST['idRefePersonales'];

      /* para log de acciones */
      $movements->idAccion = 44;
            
      /* agregamos la imagen a la bd */
      if(!$movements->eliminarrefpersonl()) {  json_output(json_build(400, null, 'Hubo error al eliminar el elemento'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se ha eliminado el elemento'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }  
  
  /* campo once */
  function infocampoonce(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_SESSION['idEstudio'];
      $movs               = $movements->infocampoonce();
      /* regresamos la informacion */
      $data = get_module('formcampoonce', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* agregamos referencia laboral */
  function agregoreflabor(){
    try {
      $movements          = new estudiosModel;
      
      $movements->idEstudio = $_SESSION['idEstudio'];
 
      $movements->empresa= $_POST['empresa'];
      $movements->giro= $_POST['giro'];
      $movements->direccion= $_POST['direccion'];
      $movements->telefono= $_POST['telefono'];
      $movements->fechaIngreso= $_POST['fechaIngreso'];
      $movements->fechaEgreso= $_POST['fechaEgreso'];
      $movements->puesto= $_POST['puesto'];
      $movements->area= $_POST['area'];
      $movements->salario= $_POST['salario'];
      $movements->motivoSalida= $_POST['motivoSalida'];
      $movements->quienProporciono= $_POST['quienProporciono'];
      $movements->puestoProporciono= $_POST['puestoProporciono'];
      $movements->calificacion= $_POST['calificacion'];
      $movements->demanda= $_POST['demanda'];
      $movements->volveria= $_POST['volveria'];
      $movements->porque= $_POST['porque'];
      $movements->observaciones= $_POST['observaciones'];
      $movements->candidatoes= $_POST['candidatoes'];
      $movements->periodosInactivo= $_POST['periodosInactivo'];
      /* creamos el nuevo estudio */
      $movements->idAccion = 43;
      $movements->movisis();

      $movements->agregareflaboral();
      

      json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* editamos referencias laboral */
  function editreflaboral(){
    try {
      $movements          = new estudiosModel;
      
      $movements->idEstudio = $_SESSION['idEstudio'];
      $movements->idRefeLaborales= $_POST['idRefeLaborales'];
      $movements->empresa= $_POST['empresa'];
      $movements->giro= $_POST['giro'];
      $movements->direccion= $_POST['direccion'];
      $movements->telefono= $_POST['telefono'];
      $movements->fechaIngreso= $_POST['fechaIngreso'];
      $movements->fechaEgreso= $_POST['fechaEgreso'];
      $movements->puesto= $_POST['puesto'];
      $movements->area= $_POST['area'];
      $movements->salario= $_POST['salario'];
      $movements->motivoSalida= $_POST['motivoSalida'];
      $movements->quienProporciono= $_POST['quienProporciono'];
      $movements->puestoProporciono= $_POST['puestoProporciono'];
      $movements->calificacion= $_POST['calificacion'];
      $movements->demanda= $_POST['demanda'];
      $movements->volveria= $_POST['volveria'];
      $movements->porque= $_POST['porque'];
      $movements->observaciones= $_POST['observaciones'];
      $movements->candidatoes= $_POST['candidatoes'];
      $movements->periodosInactivo= $_POST['periodosInactivo'];
      /* creamos el nuevo estudio */
      $movements->idAccion = 43;
      $movements->movisis();

      $movements->editalboral();
      

      json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  
  /* eliminamos referencia labraol */
  function elireflaboral(){
    try {
      $movements          = new estudiosModel;
      $movements->idRefeLaborales = $_POST['idRefeLaborales'];

      /* para log de acciones */
      $movements->idAccion = 44;
            
      /* agregamos la imagen a la bd */
      if(!$movements->elireflaboral()) {  json_output(json_build(400, null, 'Hubo error al eliminar el elemento'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se ha eliminado el elemento'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }  

  /* campo doce */
  function infocampodoce(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_SESSION['idEstudio'];
      $movs               = $movements->infocampodoce();
      /* regresamos la informacion */
      $data = get_module('formcampodoce', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* agregarfoto */
  function agregofoto(){
    try {
      $movements          = new estudiosModel;
      $idEstudio = $_SESSION['idEstudio'];
      $movements->idEstudio = $_SESSION['idEstudio'];
 
      $movements->titulo= $_POST['titulo'];
      $movements->descripcion= $_POST['descripcion'];
      
      /* guardamos el archivo en el repositorio */
      $nombre_archivo_1 = $_FILES['archivo']['name'];
      $directorio_1 = $_SERVER['DOCUMENT_ROOT']."/assets/contenedor/estudios/estudioNum_".$idEstudio."/".basename($nombre_archivo_1);
      $movements->archivo = $nombre_archivo_1;
      move_uploaded_file($_FILES['archivo']['tmp_name'], $directorio_1);

      $movements->archivo  = $nombre_archivo_1;
      $movements->idAccion = 45;
      $movements->agregafoto();
      $movements->movisis(); 
     
      
      json_output(json_build(200, null, 'Se ha solicitado su estudio'));

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* eliminamos foto */
  function eliminoimgan(){
    try {
      $movements          = new estudiosModel;
      $movements->idFotos = $_POST['idFotos'];

      /* para log de acciones */
      $movements->idAccion = 46;
            
      /* agregamos la imagen a la bd */
      if(!$movements->eliimgg()) {  json_output(json_build(400, null, 'Hubo error al eliminar el documento'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se ha eliminado el documento'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* cargo trece */
  function infocampotrece(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_SESSION['idEstudio'];
      $movs               = $movements->infocampotrce();
      /* regresamos la informacion */
      $data = get_module('formcampotrece', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* informacion de salud */ 
  function inforagregasalud(){
    try {
      $movements          = new estudiosModel;
      
      $valido = $_POST['idSalud'];
      $movements->idSalud = $_POST['idSalud'];
      $movements->idEstudio = $_SESSION['idEstudio'];

      
      $movements->droga= $_POST['droga'];
      $movements->cualDroga= $_POST['cualDroga'];
      $movements->fuma= $_POST['fuma'];
      $movements->frecuenciaFuma= $_POST['frecuenciaFuma'];
      $movements->bebidas= $_POST['bebidas'];
      $movements->frecuenciaBebidas= $_POST['frecuenciaBebidas'];
      $movements->cafe= $_POST['cafe'];
      $movements->frecuenciaCafe= $_POST['frecuenciaCafe'];
      $movements->lentes= $_POST['lentes'];
      $movements->diagnostico= $_POST['diagnostico'];
      $movements->intervenciones= $_POST['intervenciones'];
      $movements->dequeintervenciones= $_POST['dequeintervenciones'];
      $movements->enfermedadesCronicas= $_POST['enfermedadesCronicas'];
      $movements->dequeCronicas= $_POST['dequeCronicas'];
      $movements->hereditarias= $_POST['hereditarias'];
      $movements->cualHereditarias= $_POST['cualHereditarias'];
      $movements->quienConstante= $_POST['quienConstante'];
      $movements->porqueConstante= $_POST['porqueConstante'];
      $movements->ultimaVez= $_POST['ultimaVez'];
      $movements->considera= $_POST['considera'];
      $movements->porqueConsidera= $_POST['porqueConsidera'];
      $movements->deporte= $_POST['deporte'];
      $movements->pasatiempo= $_POST['pasatiempo'];
      $movements->ultimavezDeque= $_POST['ultimavezDeque'];
      $movements->embarazo= $_POST['embarazo'];


        
      /* creamos el nuevo estudio */
      $movements->idAccion = 47;
      $movements->movisis();

      if($valido == ''){ $movements->agregasalud();}
      else{ $movements->editosalud(); }

      json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* cargo catorce */
  function infocampocatroce(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_SESSION['idEstudio'];
      $movs               = $movements->infocampocatorce();
      /* regresamos la informacion */
      $data = get_module('formcampocatorce', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* agregamos info de resumen */
  function inforagregaresumen(){
    try {
      $movements          = new estudiosModel;
      
      $valido = $_POST['idResumen'];
      $movements->idResumen = $_POST['idResumen'];
      $movements->idEstudio = $_SESSION['idEstudio'];

      
      
      $movements->social= $_POST['social'];
      $movements->escolar= $_POST['escolar'];
      $movements->economica= $_POST['economica'];
      $movements->laboral= $_POST['laboral'];
      $movements->actitud= $_POST['actitud'];
      $movements->observaciones= $_POST['observaciones'];
      $movements->recomendacion= $_POST['recomendacion'];
      $movements->observacionesPersonal= $_POST['observacionesPersonal'];
      $movements->observacionesLaboral= $_POST['observacionesLaboral'];


        
      /* creamos el nuevo estudio */
      $movements->idAccion = 48;
      $movements->movisis();

      if($valido == ''){ $movements->agregoresumen();}
      else{ $movements->editoresumen(); }

      json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* cancelamos estudio*/
  function cancelamosestudio(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_SESSION['idEstudio'];

      /* para log de acciones */
      $movements->idAccion = 50;
            
      /* agregamos la imagen a la bd */
      if(!$movements->cancelamosestudio()) {  json_output(json_build(400, null, 'Hubo error al eliminar el documento'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se ha eliminado el documento'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* ///////////////SECCION DE CONCENTRADO */
  function concentrado(){
    $_SESSION['paraArchivo'] = NULL;
    $_SESSION['paraArchivo'] = "estudiosconcentrado";
    if($_SESSION['idUsuario'] != NULL){ View::render('concentrado');  }
    else{ View::render('portada'); }

  }

  function cargosinasignarCon(){
    try {
      $movements          = new estudiosModel;
      $movs               = $movements->sinasignar();
      /* regresamos la informacion */
      $data = get_module('tblestudiossinasignarCon', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargoprocesoCon(){
    try {
      $movements          = new estudiosModel;
      $movs               = $movements->enproceso();
      /* regresamos la informacion */
      $data = get_module('tblestudiosprocesoCon', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargocanCon(){
    try {
      $movements          = new estudiosModel;
      if($_SESSION['idUsuario'] == 53){
        $movs               = $movements->cancenaldossan();
      }else{
        $movs               = $movements->cancenaldos();
      }
      
      /* regresamos la informacion */
      $data = get_module('tblestudioscancelados', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* funcion para los analistas */
  function seejecutivo(){
    $_SESSION['paraArchivo'] = NULL;
    $_SESSION['paraArchivo'] = "estudioseje";
    if($_SESSION['idUsuario'] != NULL){ View::render('seejecutivo');  }
    else{ View::render('portada'); }
  }

  /* crago los estudios asignados para el coordinador y sus ejectuviso */
  function cargoasignadoeje(){
    try {
      $movements          = new estudiosModel;
      $movs               = $movements->asignadoseje();
      /* regresamos la informacion */
      $data = get_module('tblestudiosasignadoscoo', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* cargo solicitudes terminadas para el ejectuvi */
  /*function cargoterminadosej(){  
    try {
      $movements          = new estudiosModel;
      //$movs               = $movements->cocentradoterminadoseje();
    
      $data = get_module('tblestudiostercliente', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }*/

  /* cargo lista de encuestadores */
  function listaencue(){
    try {
      $movements          = new estudiosModel;
      $movs               = $movements->concentrencuestad();
      /* regresamos la informacion */
      $data = get_module('selectencuesta', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* asignamos encuestador */
  function asignaencuesta(){
    try {
      $movements          = new estudiosModel;
      
      $movements->idEstudio = $_SESSION['idEstudio'];
 
      $movements->encuestador= $_POST['encuestador'];
      $movements->fechaCita= $_POST['fechaCita'];
      $movements->horacita= $_POST['horacita'];
      $movements->encuViaticos= $_POST['encuViaticos'];
      $movements->encuTel= $_POST['encuTel'];
      $movements->encuDireccion= $_POST['encuDireccion'];

      
      /* creamos el nuevo estudio */
      $movements->idAccion = 51;
      $movements->movisis();

      $movements->asignencuesta();
      

      json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* funcion para terminar el estudio */
  function terminarestud(){
    try {
      $movements          = new estudiosModel;
      
      $movements->idEstudio = $_SESSION['idEstudio'];
     
      /* creamos el nuevo estudio */
      $movements->idAccion = 49;
      $movements->movisis();

      $movements->terminarestudio();
      

      json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* terminamos el estudio */
  function canestudi(){
    try {
      $movements          = new estudiosModel;
      
      $movements->idEstudio = $_SESSION['idEstudio'];
      $movements->motivoCancelacion = $_POST['motivoCancelacion'];
     
      /* creamos el nuevo estudio */
      $movements->idAccion = 50;
      $movements->movisis();

      $movements->cancelarestu();
      

      json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  
  
  /* pára la seccion de reporte */
  /* boton para el reporte */
  function reportesantander(){
    $_SESSION['paraArchivo'] = NULL;
    $_SESSION['paraArchivo'] = "reportesantender";
    $_SESSION['idEstudio'] = $_GET['idEstudio'];
    if($_SESSION['idUsuario'] != NULL){ View::render('santander');  }
    else{ View::render('portada'); }
  }
  
  /* ///////////////////////////////////////////////////////////////////////////// */
  /* SECCION PARA ENCUESTADORES */
  /* ///////////////////////////////////////////////////////////////////////////// */
  /* para la seccion de encuestadores */
  function seencuestadores(){
    $_SESSION['paraArchivo'] = NULL;
    $_SESSION['paraArchivo'] = "estudiosencuetadores";
    if($_SESSION['idUsuario'] != NULL){ View::render('encuestadores');  }
    else{ View::render('portada'); }
  }

  /* cargo asignados para encuestador */
  function cargosinasignarEnuces(){
    try {
      $movements          = new estudiosModel;
      $movs               = $movements->asignadsoednuestador();
      /* regresamos la informacion */
      $data = get_module('tblestudiossinasignarEncu', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* creamos la temp0oral del estudio */
  function seguimientoEncuesta(){

    $idEstudio = $_POST['idEstudio'];
    $_SESSION['idEstudio'] = $idEstudio;
    json_output(json_build(200));

  }
  /* enviamos al segumiento */
  function seguimientoVerEncu(){

    $_SESSION['paraArchivo'] = NULL;
    $_SESSION['paraArchivo'] = "seguimientoestudio";

    if($_SESSION['idUsuario'] != NULL){ View::render('seguimientoEncu');  }
    else{ View::render('portada'); }


  }

  /* ocultamos o mostramos documentos */
  function ocumostradocuscon(){
    try {
      $movements          = new estudiosModel;
      
      $movements->idEstudio = $_SESSION['idEstudio'];
     
      /* creamos el nuevo estudio */
      /*$movements->idAccion = 49;
      $movements->movisis();*/

      $movements->oculmostrdocument();
      

      json_output(json_build(200, null, 'Se ha oculto o mostro los documentos'));

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* funcion para la busqeuda de estudios desde la portada */
  function busqeudaportada(){
    try {
      $movements          = new estudiosModel;
      /* la varaible de tipo es para mostrar los botones para el resultado de la busqeuda */
      $_SESSION['tipobusqeuda'] = $_POST['tipo'];

      $movements->valorportada = $_POST['valorportada'];
      $movs               = $movements->buscoportada();
      /* regresamos la informacion */
      $data = get_module('tblestudioBusqueda', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  
  /* cambiamos el estatus del estudio manual */
  function cambiosestatus(){
    try {
      $movements          = new estudiosModel;
      
      $movements->estatusper = $_POST['estatusper'];
      $movements->idEstudio = $_SESSION['idEstudio'];
     
      $movements->cambioesta();
      

      json_output(json_build(200, null, 'Se actualizo el estatus'));

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* cargamos los estudios asignados a los ejectuvio */
  function cargoasignadoejecu(){
    try {
      $movements          = new estudiosModel;
      $movs               = $movements->asignadosejectui();
      /* regresamos la informacion */
      $data = get_module('tblestudiosasignadosejecu', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* carñgamos seccion quince */
   /* cargo quincen */
   function infocampoquince(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_SESSION['idEstudio'];
      $movs               = $movements->infocampoquince();
      /* regresamos la informacion */
      $data = get_module('formcampoquince', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function inforagreghobby(){
    try {
      $movements          = new estudiosModel;
      
      $validohob = $_POST['idHobby'];

      $movements->idEstudio = $_SESSION['idEstudio'];
      $movements->idHobby = $_POST['idHobby'];
      $movements->deportes = $_POST['deportes'];
      $movements->cual = $_POST['cual'];
      $movements->frecuencia = $_POST['frecuencia'];
      $movements->pasatiempos = $_POST['pasatiempos'];
      $movements->otros = $_POST['otros'];
     
      /* creamos el nuevo estudio */
      $movements->idAccion = 50;
      $movements->movisis();

      if($validohob != ""){  
        $movements->editamoshobby(); 
        json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));
      }
      else{  
        $movements->agregamoshobby();
        json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));
      }

      

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* diez seis */
  function infocampodiezseis(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_SESSION['idEstudio'];
      $movs               = $movements->infocampodiezseis();
      /* regresamos la informacion */
      $data = get_module('formcampodiezseis', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function beneficiamub(){
    try {
      $movements          = new estudiosModel;
      
      $validohob = $_POST['idBeneficiario'];

      $movements->idEstudio = $_SESSION['idEstudio'];

      $movements->idBeneficiario = $_POST['idBeneficiario'];
      $movements->parentesco = $_POST['parentesco'];
      $movements->nombre = $_POST['nombre'];
      $movements->edad = $_POST['edad'];
      $movements->ocupacion = $_POST['ocupacion'];
      $movements->donde = $_POST['donde'];
      $movements->calle = $_POST['calle'];
      $movements->numero = $_POST['numero'];
      $movements->colonia = $_POST['colonia'];
      $movements->del = $_POST['del'];
      $movements->ciudad = $_POST['ciudad'];
      $movements->estado = $_POST['estado'];
      $movements->cp = $_POST['cp'];
      $movements->tiempo = $_POST['tiempo'];
      $movements->tel = $_POST['tel'];

      /* creamos el nuevo estudio */
      $movements->idAccion = 50;
      $movements->movisis();

      if($validohob != ""){  
        $movements->editamosben(); 
        json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));
      }
      else{  
        $movements->agregamosben();
        json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));
      }

      

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* diez siete   */
  function infordiessiete(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_SESSION['idEstudio'];
      $movs               = $movements->infocampodiezsiete();
      /* regresamos la informacion */
      $data = get_module('formcampodiezsiete', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function agregonivelaca(){
    try {
      $movements          = new estudiosModel;
      
      $validohob = $_POST['idNivel'];
      $movements->idNivel = $_POST['idNivel'];

      $movements->idEstudio = $_SESSION['idEstudio'];

      
      $movements->ultimo = $_POST['ultimo'];
      $movements->periodo = $_POST['periodo'];
      $movements->profesional = $_POST['profesional'];
      $movements->cedula = $_POST['cedula'];
      $movements->especialidad = $_POST['especialidad'];
      $movements->caso = $_POST['caso'];
      $movements->otros = $_POST['otros'];

      /* creamos el nuevo estudio */
      $movements->idAccion = 50;
      $movements->movisis();

      if($validohob != ""){  
        $movements->editamosnivel(); 
        json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));
      }
      else{  
        $movements->agregamosnivel();
        json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));
      }

      

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* diez y ocho  */
  function infordiesocho(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_SESSION['idEstudio'];
      $movs               = $movements->infocampodiezocho();
      /* regresamos la informacion */
      $data = get_module('formcampodiezocho', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function  agregoperiodo(){
    try {
      $movements          = new estudiosModel;
      
      $movements->idEstudio = $_SESSION['idEstudio'];

      
      $movements->inicio = $_POST['inicio'];
      $movements->termino = $_POST['termino'];
      $movements->motivo = $_POST['motivo'];
      $movements->comentarios = $_POST['comentarios'];

      /* creamos el nuevo estudio */
      $movements->idAccion = 50;
      $movements->movisis();

      
        $movements->agregamosperiodo();
        json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));


      

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }
  
  function elimiperido(){
    try {
      $movements          = new estudiosModel;
      $movements->idPeriodo = $_POST['idPeriodo'];

      /* para log de acciones */
      $movements->idAccion = 46;
            
      /* agregamos la imagen a la bd */
      if(!$movements->eliperiod()) {  json_output(json_build(400, null, 'Hubo error al eliminar el documento'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se ha eliminado el documento'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  
  /* diez nueve */
  function infordiesnueve(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_SESSION['idEstudio'];
      $movs               = $movements->infocampodieznueve();
      /* regresamos la informacion */
      $data = get_module('formcampodieznueve', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function agregomovhist(){
    try {
      $movements          = new estudiosModel;
      
      $validohob = $_POST['idHistorial'];

      $movements->idEstudio = $_SESSION['idEstudio'];

      $movements->idHistorial = $_POST['idHistorial'];

      $movements->ultimo = $_POST['ultimo'];
      $movements->vida = $_POST['vida'];
      $movements->nusemana = $_POST['nusemana'];
      $movements->porcentaje = $_POST['porcentaje'];
      $movements->numeroempleadores = $_POST['numeroempleadores'];
      $movements->progresion = $_POST['progresion'];
      $movements->finiquito = $_POST['finiquito'];
      $movements->liquidacion = $_POST['liquidacion'];
      $movements->aguinaldo = $_POST['aguinaldo'];
      $movements->vacaciones = $_POST['vacaciones'];
      $movements->comentarios = $_POST['comentarios'];


      
      /* creamos el nuevo estudio */
      $movements->idAccion = 50;
      $movements->movisis();

      if($validohob != ""){  
        $movements->editamohis(); 
        json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));
      }
      else{  
        $movements->agregamohis();
        json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));
      }

      

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }
  /* veinte */
  function inforveinte(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_SESSION['idEstudio'];
      $movs               = $movements->infocampoveinte();
      /* regresamos la informacion */
      $data = get_module('formcampoveinte', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function  agregosalida(){
    try {
      $movements          = new estudiosModel;
      
      $movements->idEstudio = $_SESSION['idEstudio'];

      
      $movements->nombre = $_POST['nombre'];
      $movements->periodo = $_POST['periodo'];
      $movements->motivo = $_POST['motivo'];

      /* creamos el nuevo estudio */
      $movements->idAccion = 50;
      $movements->movisis();

      
        $movements->agregamossalida();
        json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));


      

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }
  
  function elimisalida(){
    try {
      $movements          = new estudiosModel;
      $movements->idDespido = $_POST['idDespido'];

      /* para log de acciones */
      $movements->idAccion = 46;
            
      /* agregamos la imagen a la bd */
      if(!$movements->elisalida()) {  json_output(json_build(400, null, 'Hubo error al eliminar el documento'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se ha eliminado el documento'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* veinte uno */
  function inforveinteuno(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_SESSION['idEstudio'];
      $movs               = $movements->infocampoveinteuno();
      /* regresamos la informacion */
      $data = get_module('formcampoveinteuno', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function  agregoincapa(){
    try {
      $movements          = new estudiosModel;
      
      $movements->idEstudio = $_SESSION['idEstudio'];

      
      $movements->nombre = $_POST['nombre'];
      $movements->periodo = $_POST['periodo'];
      $movements->motivo = $_POST['motivo'];

      /* creamos el nuevo estudio */
      $movements->idAccion = 50;
      $movements->movisis();

      
        $movements->agregamosinca();
        json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));


      

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  function elimiincapa(){
    try {
      $movements          = new estudiosModel;
      $movements->idIncapacidad = $_POST['idIncapacidad'];

      /* para log de acciones */
      $movements->idAccion = 46;
            
      /* agregamos la imagen a la bd */
      if(!$movements->eliscapa()) {  json_output(json_build(400, null, 'Hubo error al eliminar el documento'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se ha eliminado el documento'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* veinte dos */
  function inforveintedos(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_SESSION['idEstudio'];
      $movs               = $movements->infocampoveintedos();
      /* regresamos la informacion */
      $data = get_module('formcampoveintedos', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function agregproblm(){
    try {
      $movements          = new estudiosModel;
      
      $validohob = $_POST['idProblema'];

      $movements->idEstudio = $_SESSION['idEstudio'];

      $movements->idProblema = $_POST['idProblema'];

      $movements->nombre = $_POST['nombre'];
      $movements->informante = $_POST['informante'];
      $movements->comentarios = $_POST['comentarios'];
      $movements->dato = $_POST['dato'];

      
      /* creamos el nuevo estudio */
      $movements->idAccion = 50;
      $movements->movisis();

      if($validohob != ""){  
        $movements->editapro(); 
        json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));
      }
      else{  
        $movements->agregapros();
        json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));
      }

      

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* veinte tres */
  function inforveintetres(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_SESSION['idEstudio'];
      $movs               = $movements->infocampoveintetres();
      /* regresamos la informacion */
      $data = get_module('formcampoveintetres', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function agreginfolabo(){
    try {
      $movements          = new estudiosModel;
      
      $validohob = $_POST['idInfolaboral'];
      $movements->idEstudio = $_SESSION['idEstudio'];
      $movements->idInfolaboral = $_POST['idInfolaboral'];

      
      $movements->campol= $_POST['campol'];
      $movements->fechal= $_POST['fechal'];
      $movements->acuerdol= $_POST['acuerdol'];
      $movements->comentariol= $_POST['comentariol'];
      
      $movements->campoc= $_POST['campoc'];
      $movements->fechac= $_POST['fechac'];
      $movements->acuerdoc= $_POST['acuerdoc'];
      $movements->comentarioc= $_POST['comentarioc'];
      
      $movements->campof= $_POST['campof'];
      $movements->fechaf= $_POST['fechaf'];
      $movements->acuerdof= $_POST['acuerdof'];
      $movements->comentariof= $_POST['comentariof'];
      
      $movements->campop= $_POST['campop'];
      $movements->fechap= $_POST['fechap'];
      $movements->acuerdop= $_POST['acuerdop'];
      $movements->comentariop= $_POST['comentariop'];
      
      $movements->campoa= $_POST['campoa'];
      $movements->fechaa= $_POST['fechaa'];
      $movements->acuerdoa= $_POST['acuerdoa'];
      $movements->comentarioa= $_POST['comentarioa'];
      
      $movements->campoi= $_POST['campoi'];
      $movements->fechai= $_POST['fechai'];
      $movements->acuerdoi= $_POST['acuerdoi'];
      $movements->comentarioi= $_POST['comentarioi'];
      
      $movements->camposat= $_POST['camposat'];
      $movements->fechasat= $_POST['fechasat'];
      $movements->acuerdosat= $_POST['acuerdosat'];
      $movements->comentariosat= $_POST['comentariosat'];
      
      /* creamos el nuevo estudio */
      $movements->idAccion = 50;
      $movements->movisis();

      if($validohob != ""){  
        $movements->editainfolab(); 
        json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));
      }
      else{  
        $movements->agreginfolab();
        json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));
      }

      

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* veinti cuatro */
  function inforveintecuatro(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_SESSION['idEstudio'];
      $movs               = $movements->infocampoveintecuatro();
      /* regresamos la informacion */
      $data = get_module('formcampoveintecuatro', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* obtenemos informacion para editar */
  function editarinfocredi(){
    try {
      $movements          = new estudiosModel;
      $movements->idCredito = $_POST['idCredito'];
      $movs               = $movements->infoedicreti();
      /* regresamos la informacion */
      $data = get_module('formedicredito', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function agregocret(){
    try {
      $movements          = new estudiosModel;
      
      $validohob = $_POST['idCredito'];

      $movements->idEstudio = $_SESSION['idEstudio'];

      $movements->idCredito = $_POST['idCredito'];

  
      $movements->fecha = $_POST['fecha'];
      $movements->entidad = $_POST['entidad'];
      $movements->monto = $_POST['monto'];
      $movements->total = $_POST['total'];
      $movements->estatus = $_POST['estatus'];
      $movements->comentario = $_POST['comentario'];
      $movements->endeudamiento = $_POST['endeudamiento'];
      $movements->hipoteca = $_POST['hipoteca'];
      $movements->score = $_POST['score'];

      /* creamos el nuevo estudio */
      $movements->idAccion = 50;
      $movements->movisis();

      
        $movements->agregarcred();
        json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));
     

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }
  /* editamos lso creditos */
  function editacredi(){
    try {
      $movements          = new estudiosModel;
      

      $movements->idCredito = $_POST['idCredito'];
 
      $movements->fecha = $_POST['fecha'];
      $movements->entidad = $_POST['entidad'];
      $movements->monto = $_POST['monto'];
      $movements->total = $_POST['total'];
      $movements->estatus = $_POST['estatus'];
      $movements->comentario = $_POST['comentario'];
      $movements->endeudamiento = $_POST['endeudamiento'];
      $movements->hipoteca = $_POST['hipoteca'];
      $movements->score = $_POST['score'];

      /* creamos el nuevo estudio */
      $movements->idAccion = 50;
      $movements->movisis();

      
        $movements->editarcre();
        json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));
     

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }
  
  
  function elicre(){
    try {
      $movements          = new estudiosModel;
      $movements->idCredito = $_POST['idCredito'];

      /* para log de acciones */
      $movements->idAccion = 46;
            
      /* agregamos la imagen a la bd */
      if(!$movements->elicre()) {  json_output(json_build(400, null, 'Hubo error al eliminar el documento'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se ha eliminado el documento'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* veinticinco */
  function inforveintecinco(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_SESSION['idEstudio'];
      $movs               = $movements->infocampoveintecinco();
      /* regresamos la informacion */
      $data = get_module('formcampoveintecinco', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  
  function agreginfonav(){
    try {
      $movements          = new estudiosModel;
      
      $validohob = $_POST['idInfona'];
      $movements->idEstudio = $_SESSION['idEstudio'];
      $movements->idInfona = $_POST['idInfona'];

      $movements->estatus= $_POST['estatus'];
      $movements->puntos= $_POST['puntos'];
      $movements->subcuenta= $_POST['subcuenta'];
      $movements->maximo= $_POST['maximo'];
      $movements->hipoteca= $_POST['hipoteca'];
           
      /* creamos el nuevo estudio */
      $movements->idAccion = 50;
      $movements->movisis();

      if($validohob != ""){  
        $movements->editainfona(); 
        json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));
      }
      else{  
        $movements->agreginfona();
        json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));
      }

      

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* veinte seis */
  function camposermedi(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_SESSION['idEstudio'];
      $movs               = $movements->infocampoveinteseis();
      /* regresamos la informacion */
      $data = get_module('formcampoveinteseis', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function agregomoviservicim(){
    try {
      $movements          = new estudiosModel;
      
      $validosermed = $_POST['idSerMedi'];
      $movements->idEstudio = $_SESSION['idEstudio'];
      $movements->idSerMedi = $_POST['idSerMedi'];

      
      
      $movements->clinicaim = $_POST['clinicaim'];
      $movements->incidenteim = $_POST['incidenteim'];
      $movements->tipoim = $_POST['tipoim'];

      $movements->clinicais = $_POST['clinicais'];
      $movements->incidenteis = $_POST['incidenteis'];
      $movements->tipois = $_POST['tipois'];

      $movements->clinicase = $_POST['clinicase'];
      $movements->incidentese = $_POST['incidentese'];
      $movements->tipose = $_POST['tipose'];

      $movements->aseguradora = $_POST['aseguradora'];
      $movements->incidentepri = $_POST['incidentepri'];
      $movements->tipopri = $_POST['tipopri'];

      $movements->clinicaisse = $_POST['clinicaisse'];
      $movements->incidenteisse = $_POST['incidenteisse'];
      $movements->tipoisse = $_POST['tipoisse'];
      $movements->notiene = $_POST['notiene'];
      

      if($validosermed != ""){  
        $movements->editoserviciomedico(); 
        json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));
      }
      else{  
        $movements->agregserviciomedico();
        json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));
      }

      

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* ///////////////////////////////////////////////////////////////////////// */
  /* REPORTE SANTANDER */
  /* ///////////////////////////////////////////////////////////////////////// */

  function cargouno(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderuno();
      /* regresamos la informacion */
      $data = get_module('santanderUno', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargodos(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderdos();
      /* regresamos la informacion */
      $data = get_module('santanderDos', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargotres(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantadertres();
      /* regresamos la informacion */
      $data = get_module('santanderTres', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargocuatro(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantadercuatro();
      /* regresamos la informacion */
      $data = get_module('santanderCuatro', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargocinco(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantadercinco();
      /* regresamos la informacion */
      $data = get_module('santanderCinco', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  
  function cargoseis(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderseis();
      /* regresamos la informacion */
      $data = get_module('santanderSeis', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargosiete(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantadersiete();
      /* regresamos la informacion */
      $data = get_module('santanderSiete', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargoOcho(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderocho();
      /* regresamos la informacion */
      $data = get_module('santanderOcho', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargonueve(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantadernueve();
      /* regresamos la informacion */
      $data = get_module('santanderNueve', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargodiez(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderdiez();
      /* regresamos la informacion */
      $data = get_module('santanderDiez', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargoonce(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderonce();
      /* regresamos la informacion */
      $data = get_module('santanderOnce', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargodoce(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderdoce();
      /* regresamos la informacion */
      $data = get_module('santanderdoce', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargotrece(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantadertrece();
      /* regresamos la informacion */
      $data = get_module('santandertrece', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  
  function cargocatorce(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantadercatorce();
      /* regresamos la informacion */
      $data = get_module('santanderCatorce', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargoquince(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderquince();
      /* regresamos la informacion */
      $data = get_module('santanderQuince', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargodiezseis(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderdiezseis();
      /* regresamos la informacion */
      $data = get_module('santanderDiezseis', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargodiezsiete(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderdiezsiete();
      /* regresamos la informacion */
      $data = get_module('santanderDiezsiete', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargodiezocho(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderdiezocho();
      /* regresamos la informacion */
      $data = get_module('santanderDiezocho', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  
  function cargodieznueve(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderdieznueve();
      /* regresamos la informacion */
      $data = get_module('santanderDieznueve', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargoveinte(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderveinte();
      /* regresamos la informacion */
      $data = get_module('santanderveinte', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargoveinteuno(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderveinteuno();
      /* regresamos la informacion */
      $data = get_module('santanderveinteuno', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* eliminamos beneficiarios */
  function elibenificia(){
    try {
      $movements          = new estudiosModel;
      $movements->idBeneficiario = $_POST['idBeneficiario'];

      /* para log de acciones */
      $movements->idAccion = 46;
            
      /* agregamos la imagen a la bd */
      if(!$movements->eliben()) {  json_output(json_build(400, null, 'Hubo error al eliminar el documento'));  }
      $movements->movisis();
      json_output(json_build(200, null, 'Se ha eliminado el documento'));
      
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* obtenemos la informacion para editar beneficiarios */
  function beneinfoed(){
    try {
      $movements          = new estudiosModel;
      $movements->idBeneficiario = $_POST['idBeneficiario'];
      $movs               = $movements->infobenedxc();
      /* regresamos la informacion */
      $data = get_module('formedibenefei', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* editamos el beneficiario */
  function editabenef(){
    try {
      $movements          = new estudiosModel;

      $movements->idBeneficiario = $_POST['idBeneficiario'];
      $movements->parentesco = $_POST['parentesco'];
      $movements->nombre = $_POST['nombre'];
      $movements->edad = $_POST['edad'];
      $movements->ocupacion = $_POST['ocupacion'];
      $movements->donde = $_POST['donde'];
      $movements->calle = $_POST['calle'];
      $movements->numero = $_POST['numero'];
      $movements->colonia = $_POST['colonia'];
      $movements->del = $_POST['del'];
      $movements->ciudad = $_POST['ciudad'];
      $movements->estado = $_POST['estado'];
      $movements->cp = $_POST['cp'];
      $movements->tiempo = $_POST['tiempo'];
      $movements->tel = $_POST['tel'];

      /* creamos el nuevo estudio */
      $movements->idAccion = 50;
      $movements->movisis();


        $movements->editamosben(); 
        json_output(json_build(200, null, 'Se ha agrego la informacion a su estudio'));


      

    }
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  /* formato  */
  function reporte(){
    $_SESSION['paraArchivo'] = NULL;
    $_SESSION['paraArchivo'] = "reporte";
    $_SESSION['idEstudio'] = $_GET['idEstudio'];
    if($_SESSION['idUsuario'] != NULL){ View::render('reporte');  }
    else{ View::render('portada'); }
  }
  /************************************************************* */
  /* PARA EL REPORTE GENERLA */
  /************************************************************* */
  function cargounoGen(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderuno();
      /* regresamos la informacion */
      $data = get_module('reporteUno', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargodosGen(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderdos();
      /* regresamos la informacion */
      $data = get_module('reporteDos', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargotresGen(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantadertres();
      /* regresamos la informacion */
      $data = get_module('reporteTres', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargocuatroGen(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantadercuatro();
      /* regresamos la informacion */
      $data = get_module('reporteCuatro', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargocincoGen(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantadercinco();
      /* regresamos la informacion */
      $data = get_module('reporteCinco', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  
  function cargoseisGen(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderseis();
      /* regresamos la informacion */
      $data = get_module('reporteSeis', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargosieteGen(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantadersiete();
      /* regresamos la informacion */
      $data = get_module('reporteSiete', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargoOchoGen(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderocho();
      /* regresamos la informacion */
      $data = get_module('reporteOcho', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargonueveGen(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantadernueve();
      /* regresamos la informacion */
      $data = get_module('reporteNueve', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargodiezGen(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderdiez();
      /* regresamos la informacion */
      $data = get_module('reporteDiez', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargoonceGen(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderonce();
      /* regresamos la informacion */
      $data = get_module('reporteOnce', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargodoceGen(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderdoce();
      /* regresamos la informacion */
      $data = get_module('reportedoce', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargotreceGen(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantadertrece();
      /* regresamos la informacion */
      $data = get_module('reportetrece', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  
  function cargocatorceGen(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantadercatorce();
      /* regresamos la informacion */
      $data = get_module('reporteCatorce', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargoquinceGen(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderquince();
      /* regresamos la informacion */
      $data = get_module('reporteQuince', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargodiezseisGen(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderdiezseis();
      /* regresamos la informacion */
      $data = get_module('reporteDiezseis', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargodiezsieteGen(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderdiezsiete();
      /* regresamos la informacion */
      $data = get_module('reporteDiezsiete', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargodiezochoGen(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderdiezocho();
      /* regresamos la informacion */
      $data = get_module('reporteDiezocho', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  
  function cargodieznueveGen(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderdieznueve();
      /* regresamos la informacion */
      $data = get_module('reporteDieznueve', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargoveinteGen(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderveinte();
      /* regresamos la informacion */
      $data = get_module('reporteveinte', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargoveinteunoGen(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderveinteuno();
      /* regresamos la informacion */
      $data = get_module('reporteveinteuno', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargoveinteunoGeno(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargosantaderveinteuno();
      /* regresamos la informacion */
      $data = get_module('reporteveinteuno', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  
  function cargoveinteunoGenoo(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargoimgres();
      /* regresamos la informacion */
      $data = get_module('reporteveinteunooo', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  

  /* cargamos los nuegos */
  function cargonuevo(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargoneuvo();
      /* regresamos la informacion */
      $data = get_module('reporteNuevo', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargonuevoDos(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargoneuvoDos();
      /* regresamos la informacion */
      $data = get_module('reporteNuevoDos', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargonuevoTres(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargoneuvoTres();
      /* regresamos la informacion */
      $data = get_module('reporteNuevoTres', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargonuevoCuatro(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargoneuvoCuatro();
      /* regresamos la informacion */
      $data = get_module('reporteNuevoCuatro', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargonuevoCinco(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargoneuvoCinco();
      /* regresamos la informacion */
      $data = get_module('reporteNuevoCinco', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  function cargonuevoSeis(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->cargoneuvoSeis();
      /* regresamos la informacion */
      $data = get_module('reporteNuevoSeis', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

  /* buscamos los archivos */
  function obtengoarchi(){
    try {
      $movements          = new estudiosModel;
      $movements->idEstudio = $_POST['idEstudio'];
      $movs               = $movements->archivadj();
      /* regresamos la informacion */
      $data = get_module('tblestudiosadjun', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }
  
  
  
  
  

  

  

  
  
  

  
  

  
  

  
  
  

  
  
  

  
  
  
  
  
  

  
  
  
  
  
  
  
  
  
  

  
  
  



  
  
  
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

 
}