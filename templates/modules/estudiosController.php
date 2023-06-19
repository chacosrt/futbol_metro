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
      $movs               = $movements->concentradopendientes();
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
      $movements->tiposervicio= $_POST['tiposervicio'];
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
      $movements->idEstudio = $idEstudio;

      /* creamos la carpeta del estudio solicitado */
      mkdir($_SERVER['DOCUMENT_ROOT']."/assets/contenedor/estudios/estudioNum_".$idEstudio."/", 0755);

      /* guardamos el archivo en el repositorio */
      $nombre_archivo_1 = $_FILES['file']['name'];
      $directorio_1 = $_SERVER['DOCUMENT_ROOT']."/assets/contenedor/estudios/estudioNum_".$idEstudio."/".basename($nombre_archivo_1);
      $movements->archivo = $nombre_archivo_1;
      move_uploaded_file($_FILES['file']['tmp_name'], $directorio_1);


      $movements->archivo  = $nombre_archivo_1;
      $movements->editoarchivosestudio();

      
      
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
      $movs               = $movements->cocentradoterminados();
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
      $movs               = $movements->sinasignar();
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
      $movs               = $movements->cocentradoterminadosEjec();
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
      $movs               = $movements->cocentradoterminadosEjec();
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
      $movements->tiposervicio= implode(",", $_POST['tiposervicio']);

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
      $nombre_archivo_1 = $_FILES['file']['name'];
      $directorio_1 =$_SERVER['DOCUMENT_ROOT']."/assets/contenedor/estudios/estudioNum_".$idEstudio."/".basename($nombre_archivo_1);
      $movements->archivo = $nombre_archivo_1;
      move_uploaded_file($_FILES['file']['tmp_name'], $directorio_1);


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
      $movs               = $movements->asignadoscoo();
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
      $movements->archivo = $nombre_archivo_1;
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
      $movs               = $movements->cancenaldos();
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
  function cargoterminadosej(){  
    try {
      $movements          = new estudiosModel;
      $movs               = $movements->cocentradoterminadoseje();
      /* regresamos la informacion */
      $data = get_module('tblestudiostercliente', ['movements' => $movs]);
      json_output(json_build(200, $data));
    }
    /* esto es para mostrar el error */
    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }
  }

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
    $_SESSION['paraArchivo'] = "estudiosencuetadores";
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
  
  
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

 
}