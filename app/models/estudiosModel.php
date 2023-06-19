<?php 

class estudiosModel extends Model {

  
  public $idUsuario;

  /* secciond e usuarios */
  public $idEstudio;
  public $idEmpresa;
  public $nombreCandidato;
  public $apePaterno;
  public $apeMaterno;
  public $puesto;
  public $fechaSolicitud;
  public $valida;
  public $realizo;
  public $foto;
  public $estatus;
  public $rfc;
  public $curp;
  public $archivo;
  public $proceso;
  public $fechaTermino;
  public $motivoCancelacion;
  public $fechaCancelacion;
  public $usuarioCancela;
  public $encuestador;
  public $fechaCita;
  public $horacita;
  public $nss;
  public $tipo;
  public $telefono;
  public $correo;
  public $encuViaticos;
  public $encuTel;
  public $encuDireccion;



  /* seccion para modulo uno */
  public $idDatos;
  public $sexo;
  public $edad;
  public $estadoCivil;
  public $lugarNacimiento;
  public $fechaNacimiento;
  public $escolaridad;
  public $llamadaEmergencia;
  public $parentesco;
  public $usuarioCrea;
  public $fechaCrea;
  public $telEmergencia;

  /* para la seccion dos */
  public $idDomicilio;
  public $delegacionMunicipio;
  public $ciudad;
  public $estado;
  public $cp;
  public $tiempoResindir;
  public $tel1;
  public $tel2;
  public $tel3;
  public $cel1;
  public $cel2;
  public $cel3;
  public $calle;
  public $numero;
  public $colonia;

  /* para archivos */
  public $idDocumentacion;
  public $titulo;
  public $observaciones;

  /* para estructura familiar */
  public $idEstructura;
  public $familiar;
  public $ocupacion;
  public $laboraEstudia;
  public $cpde;
  public $tiempoReside;

  /* para lo de las redes sociales */
  public $idRedes;
  public $facebook;
  public $twitter;
  public $instagram;
  public $linkedin;

  /* para conducta */
  public $idConducta;
  public $quienEstuvo;
  public $conductaEntrevistado;
  public $relacionVecinos;
  public $pertenecegrupo;
  public $problemasLegales;
  public $familiarRecluido;
  public $familiaresAdentro;
  
  /* para situacion */
  public $idSituacion;
  public $salario;
  public $ingreso;
  public $concepto;
  public $egresos;
  public $superavit;

  /* para deudas */
  public $idDeuda;
  public $cuentaDeuda;
  public $conQuien;
  public $monto;
  public $abonoMensual;
  public $apagaren;
  public $cuentaauto;
  public $modelo;
  public $placas;
  public $valorAuto;
  public $propiedad;
  public $ubicacon;
  public $tarjetaCredito;
  public $bancotarjetaCredito;
  public $creditoAutorizado;
  public $tarjetaTienda;
  public $conquienTienda;
  public $creditoAutorizadotienda;

  /* para entorno */
  public $tipoZona;
  public $tipoVivienda;
  public $edificacion;
  public $titular;
  public $numRecamaras;
  public $sala;
  public $comedor;
  public $cocina;
  public $garaje;
  public $jardin;
  public $nomBano;
  public $tipobano;
  public $viasdeacceso;
  public $medioTransporte;
  public $tiempoServicio;
  public $entreCalles;
  public $color;
  public $porton;
  public $referencias;
  public $agua;
  public $luz;
  public $pavimentacion;
  public $transporte;
  public $vigilancia;
  public $areas;
  public $drenaje;
  public $paredes;
  public $techos;
  public $pisos;
  public $telNormal;
  public $telPlasma;
  public $estereo;
  public $dvd;
  public $blueray;
  public $estufa;
  public $horno;
  public $lavadora;
  public $centrolavado;
  public $refrigerador;
  public $computadora;
  public $extensionInmueble;
  public $condicionesInmueble;
  public $condicionesMobiliario;
  public $orden;
  public $limpieza;
  public $delincuencia;
  public $vandalismo;
  public $drogadiccion;
  public $alcoholismo;
  public $estudio;
  public $zotehuela;
  public $patio;
  public $internet;

  /* para referncia personales */
  public $idRefePersonales;
  public $tiempoConocerlo;
  public $relacion;
  public $opinion;

  /* para referencia laborales */
  public $idRefeLaborales;
  public $empresa;
  public $giro;
  public $fechaIngreso;
  public $fechaEgreso;
  public $area;
  public $motivoSalida;
  public $quienProporciono;
  public $puestoProporciono;
  public $calificacion;
  public $demanda;
  public $volveria;
  public $porque;
  public $candidatoes;
  public $periodosInactivo;

  /* campos para salud */
  public $idSalud;
  public $droga;
  public $cualDroga;
  public $fuma;
  public $frecuenciaFuma;
  public $bebidas;
  public $frecuenciaBebidas;
  public $cafe;
  public $frecuenciaCafe;
  public $lentes;
  public $diagnostico;
  public $intervenciones;
  public $dequeintervenciones;
  public $enfermedadesCronicas;
  public $dequeCronicas;
  public $hereditarias;
  public $cualHereditarias;
  public $quienConstante;
  public $porqueConstante;
  public $ultimaVez;
  public $considera;
  public $porqueConsidera;
  public $deporte;
  public $pasatiempo;
  public $ultimavezDeque;
  public $embarazo;

  /* para el resumen */
  public $idResumen;
  public $social;
  public $escolar;
  public $economica;
  public $laboral;
  public $actitud;
  public $recomendacion;
  public $folio;
  public $observacionesPersonal;
  public $observacionesLaboral;

  /* para la busqeuda de la portada */
  public $valorportada;
  public $estatusper;
  public $renta;

  /* para hobby */
  public $idHobby;
  public $deportes; 
  public $cual; 
  public $frecuencia;
  public $pasatiempos; 
  public $otros;

  /* para beneficiario */
  public $idBeneficiario;
  public $donde;
  public $del;
  public $tiempo;
  public $tel;

  /* para nivel academico */
  public $idNivel;
  public $ultimo;
  public $periodo;
  public $profesional;
  public $cedula;
  public $especialidad;
  public $caso;

  public $idInfolaboral;
  public $campol;
  public $fechal;
  public $acuerdol;
  public $civiles;
  public $campoc;
  public $fechac;
  public $acuerdoc;
  public $familiares;
  public $campof;
  public $fechaf;
  public $acuerdof;
  public $penales;
  public $campop;
  public $fechap;
  public $acuerdop;
  public $administrativa;
  public $campoa;
  public $fechaa;
  public $acuerdoa;
  public $internacional;
  public $campoi;
  public $fechai;
  public $acuerdoi;
  public $sat;
  public $camposat;
  public $fechasat;
  public $acuerdosaqt;
  

  public $idCredito;
  public $fecha;
  public $entidad;
  public $total;
  public $comentario;
  public $endeudamiento;
  public $hipoteca;
  public $score;

  public $idInfona;
  public $puntos;
  public $subcuenta;
  public $maximo;

  public $idSerMedi;
  public $infonavit;
  public $clinicai;
  public $incidentei;
  public $tipoi;
  public $imss;
  public $clinicaim;
  public $incidenteim;
  public $tipoim;
  public $issste;
  public $clinicais;
  public $incidenteis;
  public $tipois;
  public $seguro;
  public $clinicase;
  public $incidentese;
  public $tipose;
  public $privado;
  public $aseguradora;
  public $incidentepri;
  public $tipopri;
  public $issemym;
  public $clinicaisse;
  public $incidenteisse;
  public $tipoisse;
  public $notiene;

  public $comentariol;
  public $comentarioc;
  public $comentariof;
  public $comentariop;
  public $comentarioa;
  public $comentarioi;
  public $comentariosat;
  




  
  /* funcion para agregar movimiento */
  public function movisis(){
    $sql = 'INSERT INTO log_acciones 
    (idAccion, idUsuario, fecha)
    VALUES(:idAccion, :idUsuario, :fecha)';
    $user = [
      'idAccion'         => $this->idAccion,
      'idUsuario'         => IDUSUARIO,
      'fecha'         => now()
      
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* traigo todos los estudios pendientes por el usuario */
  public function concentradopendientes() {
    $sql = 'SELECT * FROM tbl_estudios WHERE idUsuario = :idUsuario AND estatus != 10 AND estatus != 6 AND estatus != 7';
    $user = [
      'idUsuario' => IDUSUARIO
    ];
    try { return ($rows = parent::query($sql, $user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* treamnoes los valores de palomares */
  public function concentradopendientesuno() {
    $sql = "SELECT * FROM tbl_estudios WHERE estatus != 10 AND estatus != 6 AND estatus != 7 AND idEmpresa = 69 ";
 
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }
  /* treamnoes los valores de victor */
  public function concentradopendientesdos() {
    $sql = "SELECT * FROM tbl_estudios WHERE estatus != 10 AND estatus != 6 AND estatus != 7 AND idEmpresa = 70";
   
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }
  /* treamnoes los valores de raul */
  public function concentradopendientestres() {
    $sql = "SELECT * FROM tbl_estudios WHERE estatus != 10 AND estatus != 6 AND estatus != 7 AND idEmpresa = 63";
    $user = [
      'idUsuario' => IDUSUARIO
    ];
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  public function concentradopendientescuatro() {
    $sql = "SELECT * FROM tbl_estudios WHERE estatus != 10 AND estatus != 6 AND estatus != 7 AND idEmpresa = 56";
    $user = [
      'idUsuario' => IDUSUARIO
    ];
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  public function concentradopendientescinco() {
    $sql = "SELECT * FROM tbl_estudios WHERE idUsuario == 371 AND idUsuario == 369 estatus != 10 AND estatus != 6 AND estatus != 7 AND idEmpresa = 87";
    
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* obtengo la empresa del usuario */
  public function empresausuario(){
    $sql = 'SELECT *  FROM tbl_empresasclientes WHERE idEmpCliente=:idEmpCliente';
    $user = [

      'idEmpCliente' =>$_SESSION['idCliente']

    ];
    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

   /* nuevo estudio */
  public function nuevoestudio(){
    $sql = "INSERT INTO tbl_estudios (idUsuario,idEmpresa,nombreCandidato,apePaterno,apeMaterno,puesto,fechaSolicitud,estatus,rfc,curp,proceso,nss,tiposervicio,telefono,correo) 
    VALUES(:idUsuario,:idEmpresa,:nombreCandidato,:apePaterno,:apeMaterno,:puesto,:fechaSolicitud,:estatus,:rfc,:curp,:proceso,:nss,:tiposervicio,:telefono,:correo)";
    $user = [

      'idUsuario' => IDUSUARIO,
      'idEmpresa' => $this->idEmpresa,
      'nombreCandidato' => $this->nombreCandidato,
      'apePaterno' => $this->apePaterno,
      'apeMaterno' => $this->apeMaterno,
      'puesto' => $this->puesto,
      'fechaSolicitud' => now(),
      'estatus' => 1,
      'rfc' => $this->rfc,
      'curp' => $this->curp,
      'proceso' => $this->proceso,
      'nss' => $this->nss,
      'tiposervicio' => $this->tiposervicio,
      'telefono' => $this->telefono,
      'correo' => $this->correo
   

    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* eliminamos el analista */
  public function elimiana(){
    $sql = "UPDATE tbl_estudios SET estatus=:estatus, motivoCancelacion=:motivoCancelacion, fechaCancelacion=:fechaCancelacion  WHERE idEstudio=:idEstudio";
  
    $user = [
      'estatus' => 6,
      'idEstudio' => $this->idEstudio,
      'motivoCancelacion' => $this->motivoCancelacion,
      'fechaCancelacion' => now()
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* obtengo el ultimo id de estudio */
  public function ultimoestudio(){
    $sql = 'SELECT *  FROM tbl_estudios ORDER by idEstudio DESC LIMIT 1';
   
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* agregamos los archivos al estudio */
  /* public function editoarchivosestudio(){
    $sql = 'UPDATE tbl_estudios  SET archivo=:archivo  WHERE idEstudio=:idEstudio';
    $user = [
      'archivo'         => $this->archivo,
      'idEstudio'         => $this->idEstudio
      
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  } */

  /* agregamos los multiples archivos al estudio del cliente */
  public function editoarchivosestudio(){
    $sql = "INSERT INTO tbl_archivosClientes (idEstudio,archivo,fechaCrea) 
    VALUES(:idEstudio,:archivo,:fechaCrea)";
    $user = [
      'archivo'         => $this->archivo,
      'fechaCrea'         => now(),
      'idEstudio'         => $this->idEstudio
      
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* obtengo la informacion para la edicion de elemento */
  public function estudioinfoobtengo(){
    $sql = "SELECT * FROM tbl_estudios WHERE idEstudio =:idEstudio";
    $user = [
      'idEstudio' => $this->idEstudio
    ];

    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* treamoe la informacion de la referencia laborales */
  public function inforeferenla(){
    $sql = "SELECT * FROM tbl_est_refelaborales WHERE idRefeLaborales =:idRefeLaborales";
    $user = [
      'idRefeLaborales' => $this->idRefeLaborales
    ];

    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  
  /* function para la edicion del elmento */
  public function editaelemento(){
    $sql = 'UPDATE tbl_estudios 
    SET nombreCandidato=:nombreCandidato,apePaterno=:apePaterno,apeMaterno=:apeMaterno,puesto=:puesto,
    estatus=:estatus,rfc=:rfc,curp=:curp,proceso=:proceso,nss=:nss,tiposervicio=:tiposervicio,telefono=:telefono,correo=:correo
    WHERE idEstudio=:idEstudio';

    $user = [
      'idEstudio'         => $this->idEstudio,
      'nombreCandidato' => $this->nombreCandidato,
      'apePaterno' => $this->apePaterno,
      'apeMaterno' => $this->apeMaterno,
      'puesto' => $this->puesto,
      'estatus' => 1,
      'rfc' => $this->rfc,
      'curp' => $this->curp,
      'proceso' => $this->proceso,
      'nss' => $this->nss,
      'tiposervicio' => $this->tiposervicio,
      'telefono' => $this->telefono,
      'correo' => $this->correo
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

   /* traigo todos los estudios pendientes por el usuario */
   public function cocentradoterminados() {
    $sql = 'SELECT TBE.* , TBEM.nombre AS nomempresa,TBU.usuario AS usuarioRea
    FROM tbl_estudios AS TBE
    LEFT JOIN tbl_empresas AS TBEM ON TBE.idEmpresa = TBEM.idEmpresa
    LEFT JOIN tbl_usuarios AS TBU ON TBE.realizo = TBU.idUsuario
    WHERE TBE.idUsuario = :idUsuario AND TBE.estatus = 7';
    $user = [
      'idUsuario' => IDUSUARIO
      

    ];
    try { return ($rows = parent::query($sql, $user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }
  public function cocentradoterminadosuno() {
    $sql = 'SELECT TBE.* , TBEM.nombre AS nomempresa,TBU.usuario AS usuarioRea
    FROM tbl_estudios AS TBE
    LEFT JOIN tbl_empresas AS TBEM ON TBE.idEmpresa = TBEM.idEmpresa
    LEFT JOIN tbl_usuarios AS TBU ON TBE.realizo = TBU.idUsuario
    WHERE  TBE.estatus = 7 AND TBE.idEmpresa = 69';
   
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }
  public function cocentradoterminadosdos() {
    $sql = 'SELECT TBE.* , TBEM.nombre AS nomempresa,TBU.usuario AS usuarioRea
    FROM tbl_estudios AS TBE
    LEFT JOIN tbl_empresas AS TBEM ON TBE.idEmpresa = TBEM.idEmpresa
    LEFT JOIN tbl_usuarios AS TBU ON TBE.realizo = TBU.idUsuario
    WHERE TBE.estatus = 7 AND TBE.idEmpresa = 70';
    
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }
  public function cocentradoterminadostres() {
    $sql = 'SELECT TBE.* , TBEM.nombre AS nomempresa,TBU.usuario AS usuarioRea
    FROM tbl_estudios AS TBE
    LEFT JOIN tbl_empresas AS TBEM ON TBE.idEmpresa = TBEM.idEmpresa
    LEFT JOIN tbl_usuarios AS TBU ON TBE.realizo = TBU.idUsuario
    WHERE TBE.estatus = 7 AND TBE.idEmpresa = 63';
    
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  public function sinasignar() {
    $sql = 'SELECT TBE.* , TBEM.nombre AS nomempresa,TBU.usuario AS usuarioRea
    FROM tbl_estudios AS TBE
    LEFT JOIN tbl_empresas AS TBEM ON TBE.idEmpresa = TBEM.idEmpresa
    LEFT JOIN tbl_usuarios AS TBU ON TBE.idUsuario = TBU.idUsuario
    WHERE TBE.estatus = 1 AND TBE.realizo IS NULL ';
    $user = [
      'idUsuario' => IDUSUARIO
      

    ];
    try { return ($rows = parent::query($sql, $user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  public function sinasignarsan() {
    $sql = 'SELECT TBE.* , TBEM.nombre AS nomempresa,TBU.usuario AS usuarioRea
    FROM tbl_estudios AS TBE
    LEFT JOIN tbl_empresas AS TBEM ON TBE.idEmpresa = TBEM.idEmpresa
    LEFT JOIN tbl_usuarios AS TBU ON TBE.idUsuario = TBU.idUsuario
    WHERE TBE.estatus = 1 AND  TBE.idEmpresa = 53 AND TBE.realizo IS NULL ';
    $user = [
      'idUsuario' => IDUSUARIO
      

    ];
    try { return ($rows = parent::query($sql, $user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* obtenemos la informacion para verla en el estudio  */
   public function verinfoasinga(){
    $sql = "SELECT * FROM tbl_estudios WHERE idEstudio =:idEstudio";
    $user = [
      'idEstudio' => $this->idEstudio
    ];

    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* cargamos los estudios terminados para el ejecutivo */
  public function cocentradoterminadosEjec() {
    $sql = 'SELECT TBE.* , TBEM.nombre AS nomempresa,TBU.usuario AS usuarioRea
    FROM tbl_estudios AS TBE
    LEFT JOIN tbl_empresas AS TBEM ON TBE.idEmpresa = TBEM.idEmpresa
    LEFT JOIN tbl_usuarios AS TBU ON TBE.realizo = TBU.idUsuario
    WHERE TBE.estatus = 7';
 
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }
 
  public function cocentradoterminadosEjecSan() {
    $sql = 'SELECT TBE.* , TBEM.nombre AS nomempresa,TBU.usuario AS usuarioRea
    FROM tbl_estudios AS TBE
    LEFT JOIN tbl_empresas AS TBEM ON TBE.idEmpresa = TBEM.idEmpresa
    LEFT JOIN tbl_usuarios AS TBU ON TBE.realizo = TBU.idUsuario
    WHERE TBE.estatus = 7 AND TBE.estatus = 53';
 
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }
 
 
 
  /* traemos todos los clientes registrados en el sistema */
  public function listaclientes(){
    $sql = 'SELECT TBC.*, TBE.nombre AS nombree
    FROM tbl_empresasclientes AS TBC
    LEFT JOIN tbl_empresas AS TBE ON TBE.idEmpresa = TBE.idEmpresa';
 
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }

  }

  /* traemos los ejectuvicos para asignarles los estudios */
  public function listaejectuvis(){
    $sql = 'SELECT * FROM tbl_usuarios WHERE idAnalista != "" ';
 
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }

  }

  /* nueva solicitud de esutido para ejecutivo */
  public function nuevoestudioejectu(){
    $sql = "INSERT INTO tbl_estudios (idUsuario,idEmpresa,nombreCandidato,apePaterno,apeMaterno,puesto,fechaSolicitud,realizo,estatus,rfc,curp,proceso,nss,tiposervicio,telefono,correo) 
    VALUES(:idUsuario,:idEmpresa,:nombreCandidato,:apePaterno,:apeMaterno,:puesto,:fechaSolicitud,:realizo,:estatus,:rfc,:curp,:proceso,:nss,:tiposervicio,:telefono,:correo)";
    $user = [

      'idUsuario' => IDUSUARIO,
      'idEmpresa' => $this->idEmpresa,
      'nombreCandidato' => $this->nombreCandidato,
      'apePaterno' => $this->apePaterno,
      'apeMaterno' => $this->apeMaterno,
      'puesto' => $this->puesto,
      'fechaSolicitud' => now(),
      'realizo' => $this->realizo,
      'estatus' => $this->estatus,
      'rfc' => $this->rfc,
      'curp' => $this->curp,
      'proceso' => $this->proceso,
      'nss' => $this->nss,
      'tiposervicio' => $this->tiposervicio,
      'telefono' => $this->telefono,
      'correo' => $this->correo
   

    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* asignamos ejectuvi a estudio*/
  public function asignoej(){
    $sql = 'UPDATE tbl_estudios SET realizo=:realizo,estatus=:estatus WHERE idEstudio=:idEstudio';

    $user = [
      'idEstudio'         => $this->idEstudio,
      'realizo' => $this->realizo,
      'estatus' => 2
      
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* cragamos los estudios asignados para el coordinador */
  public function asignadoscoo(){
    $sql = 'SELECT TBE.*, TBEM.nombre AS nomemprsa,TBU.usuario
    FROM tbl_estudios AS TBE
    LEFT JOIN tbl_empresas AS TBEM ON TBE.idEmpresa = TBEM.idEmpresa
    LEFT JOIN tbl_usuarios AS TBU ON TBE.realizo = TBU.idUsuario
    WHERE TBE.estatus In (1,2,3,4,5)  AND TBE.realizo != ""';
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }
  public function asignadoscoosan(){
    $sql = 'SELECT TBE.*, TBEM.nombre AS nomemprsa,TBU.usuario
    FROM tbl_estudios AS TBE
    LEFT JOIN tbl_empresas AS TBEM ON TBE.idEmpresa = TBEM.idEmpresa
    LEFT JOIN tbl_usuarios AS TBU ON TBE.realizo = TBU.idUsuario
    WHERE TBE.estatus In (1,2,3,4,5)  AND TBE.realizo != "" AND TBE.idEmpresa = 53';
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* cragamos los estudios asignados al ejectuvio */
  public function asignadosejectui(){
    $sql = 'SELECT TBE.*, TBEM.nombre AS nomemprsa,TBU.usuario
    FROM tbl_estudios AS TBE
    LEFT JOIN tbl_empresas AS TBEM ON TBE.idEmpresa = TBEM.idEmpresa
    LEFT JOIN tbl_usuarios AS TBU ON TBE.realizo = TBU.idUsuario
    WHERE TBE.estatus In (1,2,3,4,5)  AND TBE.realizo =:realizo ';

    $user = [
      'realizo' => IDUSUARIO
      
    ];

    try { return ($rows = parent::query($sql, $user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* infor proinciapapl para edicion */
  public function infoedipreionc(){
    $sql = "SELECT TBE.*, TBEN.encuestador AS nomenvcu
    FROM tbl_estudios AS TBE 
    LEFT JOIN tbl_encuestadores AS TBEN ON TBE.encuestador = TBEN.idEncuestadores
    WHERE TBE.idEstudio = :idEstudio LIMIT 1";
    $user = [
      'idEstudio' => $this->idEstudio
    ];

    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* verificamos si hay de la primera seccion */
  public function infocampouno(){
    $sql = "SELECT * FROM tbl_est_datosgenerales WHERE idEstudio =:idEstudio";
    $user = [
      'idEstudio' => $this->idEstudio
    ];

    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }
  
  /* agregamos la informacion del campo uno */
  public function agregocampouno(){

    $sql = "INSERT INTO tbl_est_datosgenerales (idEstudio,sexo,edad,estadoCivil,lugarNacimiento,fechaNacimiento,escolaridad,llamadaEmergencia,parentesco,usuarioCrea,fechaCrea,telEmergencia)
    VALUES(:idEstudio,:sexo,:edad,:estadoCivil,:lugarNacimiento,:fechaNacimiento,:escolaridad,:llamadaEmergencia,:parentesco,:usuarioCrea,:fechaCrea,:telEmergencia)";
    $user = [
      'idEstudio' => $this->idEstudio,
      'sexo' => $this->sexo,
      'edad' => $this->edad,
      'estadoCivil' => $this->estadoCivil,
      'lugarNacimiento' => $this->lugarNacimiento,
      'fechaNacimiento' => $this->fechaNacimiento,
      'escolaridad' => $this->escolaridad,
      'llamadaEmergencia' => $this->llamadaEmergencia,
      'parentesco' => $this->parentesco,
      'usuarioCrea' =>IDUSUARIO,
      'fechaCrea' =>now(),
      'telEmergencia' => $this->telEmergencia
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }

  }

  /* editamos la informacion */
  public function editocampouno(){
    $sql = 'UPDATE tbl_est_datosgenerales 
    SET sexo=:sexo,edad=:edad,estadoCivil=:estadoCivil,lugarNacimiento=:lugarNacimiento,fechaNacimiento=:fechaNacimiento,escolaridad=:escolaridad,llamadaEmergencia=:llamadaEmergencia,parentesco=:parentesco,telEmergencia=:telEmergencia
    WHERE idDatos=:idDatos';

    $user = [
      'idDatos'         => $this->idDatos,
      'sexo' => $this->sexo,
      'edad' => $this->edad,
      'estadoCivil' => $this->estadoCivil,
      'lugarNacimiento' => $this->lugarNacimiento,
      'fechaNacimiento' => $this->fechaNacimiento,
      'escolaridad' => $this->escolaridad,
      'llamadaEmergencia' => $this->llamadaEmergencia,
      'parentesco' => $this->parentesco,
      'telEmergencia' => $this->telEmergencia
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* treaemos la informacion del campo dos */
  public function infocampodos(){
    $sql = "SELECT * FROM tbl_est_domicilio WHERE idEstudio =:idEstudio";
    $user = [
      'idEstudio' => $this->idEstudio
    ];

    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* agregamos la informacion de campo dos */
  public function agregocamdostotal(){

    
    $sql = "INSERT INTO tbl_est_domicilio (idEstudio,delegacionMunicipio,ciudad,estado,cp,tiempoResindir,tel1,tel2,cel1,cel2,calle,numero,colonia,usuarioCrea,fechaCrea)
    VALUES(:idEstudio,:delegacionMunicipio,:ciudad,:estado,:cp,:tiempoResindir,:tel1,:tel2,:cel1,:cel2,:calle,:numero,:colonia,:usuarioCrea,:fechaCrea)";
    $user = [
      'idEstudio' => $this->idEstudio,
      'delegacionMunicipio' => $this->delegacionMunicipio,
      'ciudad' => $this->ciudad,
      'estado' => $this->estado,
      'cp' => $this->cp,
      'tiempoResindir' => $this->tiempoResindir,
      'tel1' => $this->tel1,
      'tel2' => $this->tel2,
      'cel1' => $this->cel1,
      'cel2' => $this->cel2,
      'calle' => $this->calle,
      'numero' => $this->numero,
      'colonia' => $this->colonia,
      'usuarioCrea' => IDUSUARIO,
      'fechaCrea' =>now()
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }

  }

  /* editamos la informacion dos */
  public function editocampodos(){
    $sql = 'UPDATE tbl_est_domicilio 
    SET idEstudio=:idEstudio,delegacionMunicipio=:delegacionMunicipio,ciudad=:ciudad,estado=:estado,cp=:cp,tiempoResindir=:tiempoResindir,tel1=:tel1,tel2=:tel2,cel1=:cel1,cel2=:cel2,calle=:calle,numero=:numero,colonia=:colonia
    WHERE idDomicilio=:idDomicilio';

    $user = [
      'idDomicilio'         => $this->idDomicilio,
      'idEstudio' => $this->idEstudio,
      'delegacionMunicipio' => $this->delegacionMunicipio,
      'ciudad' => $this->ciudad,
      'estado' => $this->estado,
      'cp' => $this->cp,
      'tiempoResindir' => $this->tiempoResindir,
      'tel1' => $this->tel1,
      'tel2' => $this->tel2,
      'cel1' => $this->cel1,
      'cel2' => $this->cel2,
      'calle' => $this->calle,
      'numero' => $this->numero,
      'colonia' => $this->colonia,
      

     
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* informacnio de campo tres */
  public function infocampotres(){
    $sql = "SELECT * FROM tbl_est_documentacion WHERE idEstudio =:idEstudio";
    $user = [
      'idEstudio' => $this->idEstudio
    ];

    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* agregamos un nuevo documento */
  public function nuedodocumento(){

    $sql = "INSERT INTO tbl_est_documentacion (idEstudio,titulo,observaciones,archivo,usuarioCrea,fechaCrea,folio) VALUES(:idEstudio,:titulo,:observaciones,:archivo,:usuarioCrea,:fechaCrea,:folio)";
    $user = [
      'idEstudio' => $this->idEstudio,
      'titulo' => $this->titulo,
      'observaciones' => $this->observaciones,
      'archivo' => $this->archivo,
      'folio' => $this->folio,
      'usuarioCrea' => IDUSUARIO,
      'fechaCrea' =>now()
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }

  }

  /* elimina documentos */
  public function elidocumen(){
    $sql = 'DELETE FROM tbl_est_documentacion WHERE idDocumentacion=:idDocumentacion';
  
    $user = [
      'idDocumentacion' => $this->idDocumentacion
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* treamoe ifnoracion campo cuatro */
  public function infocampocuatro(){
    $sql = "SELECT * FROM tbl_est_estructurafamiliar WHERE idEstudio =:idEstudio";
    $user = [
      'idEstudio' => $this->idEstudio
    ];

    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* obtenemos la informacion para editar la estrucutra */
  public function infoeditaEstr(){
    $sql = "SELECT * FROM tbl_est_estructurafamiliar WHERE idEstructura =:idEstructura";
    $user = [
      'idEstructura' => $this->idEstructura
    ];

    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* editamos la informacios de la estructura */
  public function editamosEstruc(){

    $sql = 'UPDATE tbl_est_estructurafamiliar 
    SET familiar=:familiar,edad=:edad,ocupacion=:ocupacion,laboraEstudia=:laboraEstudia,calle=:calle,numero=:numero,colonia=:colonia,delegacionMunicipio=:delegacionMunicipio,ciudad=:ciudad,estado=:estado,cpde=:cpde,tiempoReside=:tiempoReside,tel1=:tel1
    WHERE idEstructura=:idEstructura';

    $user = [
      'idEstructura' => $this->idEstructura,
      'familiar' => $this->familiar,
      'edad' => $this->edad,
      'ocupacion' => $this->ocupacion,
      'laboraEstudia' => $this->laboraEstudia,
      'calle' => $this->calle,
      'numero' => $this->numero,
      'colonia' => $this->colonia,
      'delegacionMunicipio' => $this->delegacionMunicipio,
      'ciudad' => $this->ciudad,
      'estado' => $this->estado,
      'cpde' => $this->cpde,
      'tiempoReside' => $this->tiempoReside,
      'tel1' => $this->tel1,
     
  
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* obtenemois la ifnromacion para editar la soituacion */
  public function infoeditasituaciuon(){
    $sql = "SELECT * FROM tbl_est_situacion WHERE idSituacion =:idSituacion";
    $user = [
      'idSituacion' => $this->idSituacion
    ];

    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* editamos la situacion */
  public function editositudu(){

    $sql = 'UPDATE tbl_est_situacion 
    SET nombre=:nombre,parentesco=:parentesco,salario=:salario,ingreso=:ingreso,concepto=:concepto,egresos=:egresos,observaciones=:observaciones,superavit=:superavit
    WHERE idSituacion=:idSituacion';

   
   $user = [
     'idSituacion' => $this->idSituacion,
     'nombre' => $this->nombre,
     'parentesco' => $this->parentesco,
     'salario' => $this->salario,
     'ingreso' => $this->ingreso,
     'concepto' => $this->concepto,
     'egresos' => $this->egresos,
     'observaciones' => $this->observaciones,
     'superavit' => $this->superavit,

   ];

   try { return (parent::query($sql, $user)) ? true : false; } 
   catch (Exception $e) { throw $e; }

  }

  public function infoEditRefper(){
    $sql = "SELECT * FROM tbl_est_refepersonales WHERE idRefePersonales =:idRefePersonales";
    $user = [
      'idRefePersonales' => $this->idRefePersonales
    ];

    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }
  public function editorperf(){


    $sql = 'UPDATE tbl_est_refepersonales 
    SET nombre=:nombre,tiempoConocerlo=:tiempoConocerlo,relacion=:relacion,domicilio=:domicilio,tel1=:tel1,opinion=:opinion
    WHERE idRefePersonales=:idRefePersonales';


  
   $user = [

    'idRefePersonales' => $this->idRefePersonales,
    'nombre' => $this->nombre,
    'tiempoConocerlo' => $this->tiempoConocerlo,
    'relacion' => $this->relacion,
    'domicilio' => $this->domicilio,
    'tel1' => $this->tel1,
    'opinion' => $this->opinion,
  
    


   ];

   try { return (parent::query($sql, $user)) ? true : false; } 
   catch (Exception $e) { throw $e; }

  }

  
  
  
  /* '''''''''''''''' */

  /* agregamos un familiar */
  public function nuevofamiliar(){

    $sql = "INSERT INTO tbl_est_estructurafamiliar (idEstudio,familiar,edad,ocupacion,laboraEstudia,calle,numero,colonia,delegacionMunicipio,ciudad,estado,cpde,tiempoReside,tel1,usuarioCrea,fechaCrea)
     VALUES(:idEstudio,:familiar,:edad,:ocupacion,:laboraEstudia,:calle,:numero,:colonia,:delegacionMunicipio,:ciudad,:estado,:cpde,:tiempoReside,:tel1,:usuarioCrea,:fechaCrea)";
    $user = [
      'idEstudio' => $this->idEstudio,
      'familiar' => $this->familiar,
      'edad' => $this->edad,
      'ocupacion' => $this->ocupacion,
      'laboraEstudia' => $this->laboraEstudia,
      'calle' => $this->calle,
      'numero' => $this->numero,
      'colonia' => $this->colonia,
      'delegacionMunicipio' => $this->delegacionMunicipio,
      'ciudad' => $this->ciudad,
      'estado' => $this->estado,
      'cpde' => $this->cpde,
      'tiempoReside' => $this->tiempoReside,
      'tel1' => $this->tel1,
      'usuarioCrea' => IDUSUARIO,
      'fechaCrea' =>now()
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* eliminamos un familiar */
  public function elidfamiliar(){
    $sql = 'DELETE FROM tbl_est_estructurafamiliar WHERE idEstructura=:idEstructura';
  
    $user = [
      'idEstructura' => $this->idEstructura
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* cargamos seccion cinco */
  public function infocampocinco(){
    $sql = "SELECT * FROM tbl_est_redes WHERE idEstudio =:idEstudio";
    $user = [
      'idEstudio' => $this->idEstudio
    ];

    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* agregamos redes */
  public function agregarredes(){

    $sql = "INSERT INTO tbl_est_redes (idEstudio,facebook,twitter,instagram,linkedin,usuarioCrea,fechaCrea)
    VALUES(:idEstudio,:facebook,:twitter,:instagram,:linkedin,:usuarioCrea,:fechaCrea)";
   $user = [
     'idEstudio' => $this->idEstudio,
     'facebook' => $this->facebook,
     'twitter' => $this->twitter,
     'instagram' => $this->instagram,
     'linkedin' => $this->linkedin,
     'usuarioCrea' => IDUSUARIO,
     'fechaCrea' =>now()
   ];

   try { return (parent::query($sql, $user)) ? true : false; } 
   catch (Exception $e) { throw $e; }

  }

  /* funcion para editar redes */
  public function editocamporedes(){

    $sql = 'UPDATE tbl_est_redes SET facebook=:facebook,twitter=:twitter,instagram=:instagram,linkedin=:linkedin  WHERE idRedes=:idRedes';

    $user = [
      'idRedes' => $this->idRedes,
     'facebook' => $this->facebook,
     'twitter' => $this->twitter,
     'instagram' => $this->instagram,
     'linkedin' => $this->linkedin
     
  
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* modulo seis informacion */
  public function infocamposeis(){
    $sql = "SELECT * FROM tbl_est_conductasocial WHERE idEstudio =:idEstudio";
    $user = [
      'idEstudio' => $this->idEstudio
    ];

    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* agregamos conducta */
  public function agregoconducta(){

    $sql = "INSERT INTO tbl_est_conductasocial (idEstudio,quienEstuvo,conductaEntrevistado,relacionVecinos,pertenecegrupo,problemasLegales,familiarRecluido,familiaresAdentro,usuarioCrea,fechaCrea)
    VALUES(:idEstudio,:quienEstuvo,:conductaEntrevistado,:relacionVecinos,:pertenecegrupo,:problemasLegales,:familiarRecluido,:familiaresAdentro,:usuarioCrea,:fechaCrea)";
   $user = [
     'idEstudio' => $this->idEstudio,
     'quienEstuvo' => $this->quienEstuvo,
     'conductaEntrevistado' => $this->conductaEntrevistado,
     'relacionVecinos' => $this->relacionVecinos,
     'pertenecegrupo' => $this->pertenecegrupo,
     'problemasLegales' => $this->problemasLegales,
     'familiarRecluido' => $this->familiarRecluido,
     'familiaresAdentro' => $this->familiaresAdentro,
     'usuarioCrea' => IDUSUARIO,
     'fechaCrea' =>now()
   ];

   try { return (parent::query($sql, $user)) ? true : false; } 
   catch (Exception $e) { throw $e; }

  }

  /* editamos conduta */
  public function editoconducta(){
    
    $sql = 'UPDATE tbl_est_conductasocial SET quienEstuvo=:quienEstuvo,conductaEntrevistado=:conductaEntrevistado,relacionVecinos=:relacionVecinos,pertenecegrupo=:pertenecegrupo,problemasLegales=:problemasLegales,familiarRecluido=:familiarRecluido,familiaresAdentro=:familiaresAdentro  WHERE idConducta=:idConducta';

    $user = [
      'idConducta' => $this->idConducta,
      'quienEstuvo' => $this->quienEstuvo,
      'conductaEntrevistado' => $this->conductaEntrevistado,
      'relacionVecinos' => $this->relacionVecinos,
      'pertenecegrupo' => $this->pertenecegrupo,
      'problemasLegales' => $this->problemasLegales,
      'familiarRecluido' => $this->familiarRecluido,
      'familiaresAdentro' => $this->familiaresAdentro
  
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }

  }

  /* inforacion campo siete */
  public function infocamposiete(){
    $sql = "SELECT * FROM tbl_est_situacion WHERE idEstudio =:idEstudio";
    $user = [
      'idEstudio' => $this->idEstudio
    ];

    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* se agrega nueva situacion */
  public function agregosituacion(){


    $sql = "INSERT INTO tbl_est_situacion (idEstudio,nombre,parentesco,salario,ingreso,concepto,egresos,observaciones,superavit,usuarioCrea,fechaCrea)
    VALUES(:idEstudio,:nombre,:parentesco,:salario,:ingreso,:concepto,:egresos,:observaciones,:superavit,:usuarioCrea,:fechaCrea)";
   $user = [
     'idEstudio' => $this->idEstudio,
     'nombre' => $this->nombre,
     'parentesco' => $this->parentesco,
     'salario' => $this->salario,
     'ingreso' => $this->ingreso,
     'concepto' => $this->concepto,
     'egresos' => $this->egresos,
     'observaciones' => $this->observaciones,
     'superavit' => $this->superavit,
     'usuarioCrea' => IDUSUARIO,
     'fechaCrea' =>now()
   ];

   try { return (parent::query($sql, $user)) ? true : false; } 
   catch (Exception $e) { throw $e; }

  }

  /* eliminamos la situacion */
  public function eliminasitua(){
    $sql = 'DELETE FROM tbl_est_situacion WHERE idSituacion=:idSituacion';
  
    $user = [
      'idSituacion' => $this->idSituacion
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }
  
  /* infromacion campo ocho */
  public function infocampoocho(){
    $sql = "SELECT * FROM tbl_est_deudas WHERE idEstudio =:idEstudio";
    $user = [
      'idEstudio' => $this->idEstudio
    ];

    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* asgregamos deudad */
  public function agregodeuda(){

    $sql = "INSERT INTO tbl_est_deudas (idEstudio,cuentaDeuda,conQuien,monto,abonoMensual,apagaren,cuentaauto,modelo,placas,valorAuto,propiedad,ubicacon,usuarioCrea,fechaCrea,tarjetaCredito,bancotarjetaCredito,creditoAutorizado,tarjetaTienda,conquienTienda,creditoAutorizadotienda,observaciones)
    VALUES(:idEstudio,:cuentaDeuda,:conQuien,:monto,:abonoMensual,:apagaren,:cuentaauto,:modelo,:placas,:valorAuto,:propiedad,:ubicacon,:usuarioCrea,:fechaCrea,:tarjetaCredito,:bancotarjetaCredito,:creditoAutorizado,:tarjetaTienda,:conquienTienda,:creditoAutorizadotienda,:observaciones)";
   $user = [

    'idEstudio' => $this->idEstudio,
    'cuentaDeuda' => $this->cuentaDeuda,
    'conQuien' => $this->conQuien,
    'monto' => $this->monto,
    'abonoMensual' => $this->abonoMensual,
    'apagaren' => $this->apagaren,
    'cuentaauto' => $this->cuentaauto,
    'modelo' => $this->modelo,
    'placas' => $this->placas,
    'valorAuto' => $this->valorAuto,
    'propiedad' => $this->propiedad,
    'ubicacon' => $this->ubicacon,
    'usuarioCrea' => IDUSUARIO,
    'fechaCrea' =>now(),
    'tarjetaCredito' => $this->tarjetaCredito,
    'bancotarjetaCredito' => $this->bancotarjetaCredito,
    'creditoAutorizado' => $this->creditoAutorizado,
    'tarjetaTienda' => $this->tarjetaTienda,
    'conquienTienda' => $this->conquienTienda,
    'creditoAutorizadotienda' => $this->creditoAutorizadotienda,
    'observaciones' => $this->observaciones

   ];

   try { return (parent::query($sql, $user)) ? true : false; } 
   catch (Exception $e) { throw $e; }

  }

  /* editamos deuda */
  public function editodeudad(){

    $sql = 'UPDATE tbl_est_deudas SET idEstudio=:idEstudio,cuentaDeuda=:cuentaDeuda,conQuien=:conQuien,monto=:monto,abonoMensual=:abonoMensual,apagaren=:apagaren,cuentaauto=:cuentaauto,
    modelo=:modelo,placas=:placas,valorAuto=:valorAuto,propiedad=:propiedad,ubicacon=:ubicacon,tarjetaCredito=:tarjetaCredito,
    bancotarjetaCredito=:bancotarjetaCredito,creditoAutorizado=:creditoAutorizado,tarjetaTienda=:tarjetaTienda,conquienTienda=:conquienTienda,
    creditoAutorizadotienda=:creditoAutorizadotienda, observaciones=:observaciones  WHERE idDeuda=:idDeuda';

    $user = [
      'idDeuda' => $this->idDeuda,
      'idEstudio' => $this->idEstudio,
      'cuentaDeuda' => $this->cuentaDeuda,
      'conQuien' => $this->conQuien,
      'monto' => $this->monto,
      'abonoMensual' => $this->abonoMensual,
      'apagaren' => $this->apagaren,
      'cuentaauto' => $this->cuentaauto,
      'modelo' => $this->modelo,
      'placas' => $this->placas,
      'valorAuto' => $this->valorAuto,
      'propiedad' => $this->propiedad,
      'ubicacon' => $this->ubicacon,
      'tarjetaCredito' => $this->tarjetaCredito,
      'bancotarjetaCredito' => $this->bancotarjetaCredito,
      'creditoAutorizado' => $this->creditoAutorizado,
      'tarjetaTienda' => $this->tarjetaTienda,
      'conquienTienda' => $this->conquienTienda,
      'creditoAutorizadotienda' => $this->creditoAutorizadotienda,
      'observaciones' => $this->observaciones
     
  
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* info campo nueve */
  public function infocamponueve(){
    $sql = "SELECT * FROM tbl_est_entornohabi WHERE idEstudio =:idEstudio";
    $user = [
      'idEstudio' => $this->idEstudio
    ];

    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }
  

  /* funcion para agregar entorno */
  public function agregoentorno(){
    $sql = "INSERT INTO tbl_est_entornohabi (idEstudio,tipoZona,tipoVivienda,edificacion,titular,parentesco,numRecamaras,sala,comedor,cocina,garaje,jardin,nomBano,tipobano,viasdeacceso,medioTransporte,tiempoServicio,entreCalles,color,porton,referencias,observaciones,usuarioCrea,fechaCrea,agua,luz,pavimentacion,telefono,transporte,vigilancia,areas,drenaje,paredes,techos,pisos,telNormal,telPlasma,estereo,dvd,blueray,estufa,horno,lavadora,centrolavado,refrigerador,computadora,extensionInmueble,condicionesInmueble,condicionesMobiliario,orden,limpieza,delincuencia,vandalismo,drogadiccion,alcoholismo,estudio,zotehuela,patio,internet,renta)
    VALUES(:idEstudio,:tipoZona,:tipoVivienda,:edificacion,:titular,:parentesco,:numRecamaras,:sala,:comedor,:cocina,:garaje,:jardin,:nomBano,:tipobano,:viasdeacceso,:medioTransporte,:tiempoServicio,:entreCalles,:color,:porton,:referencias,:observaciones,:usuarioCrea,:fechaCrea,:agua,:luz,:pavimentacion,:telefono,:transporte,:vigilancia,:areas,:drenaje,:paredes,:techos,:pisos,:telNormal,:telPlasma,:estereo,:dvd,:blueray,:estufa,:horno,:lavadora,:centrolavado,:refrigerador,:computadora,:extensionInmueble,:condicionesInmueble,:condicionesMobiliario,:orden,:limpieza,:delincuencia,:vandalismo,:drogadiccion,:alcoholismo,:estudio,:zotehuela,:patio,:internet,:renta)";
   $user = [

    'idEstudio' => $this->idEstudio,
    'tipoZona' => $this->tipoZona,
    'tipoVivienda' => $this->tipoVivienda,
    'edificacion' => $this->edificacion,
    'titular' => $this->titular,
    'parentesco' => $this->parentesco,
    'numRecamaras' => $this->numRecamaras,
    'sala' => $this->sala,
    'comedor' => $this->comedor,
    'cocina' => $this->cocina,
    'garaje' => $this->garaje,
    'jardin' => $this->jardin,
    'nomBano' => $this->nomBano,
    'tipobano' => $this->tipobano,
    'viasdeacceso' => $this->viasdeacceso,
    'medioTransporte' => $this->medioTransporte,
    'tiempoServicio' => $this->tiempoServicio,
    'entreCalles' => $this->entreCalles,
    'color' => $this->color,
    'porton' => $this->porton,
    'referencias' => $this->referencias,
    'observaciones' => $this->observaciones,
    'usuarioCrea' => IDUSUARIO,
    'fechaCrea' =>now(),
    'agua' => $this->agua,
    'luz' => $this->luz,
    'pavimentacion' => $this->pavimentacion,
    'telefono' => $this->telefono,
    'transporte' => $this->transporte,
    'vigilancia' => $this->vigilancia,
    'areas' => $this->areas,
    'drenaje' => $this->drenaje,
    'paredes' => $this->paredes,
    'techos' => $this->techos,
    'pisos' => $this->pisos,
    'telNormal' => $this->telNormal,
    'telPlasma' => $this->telPlasma,
    'estereo' => $this->estereo,
    'dvd' => $this->dvd,
    'blueray' => $this->blueray,
    'estufa' => $this->estufa,
    'horno' => $this->horno,
    'lavadora' => $this->lavadora,
    'centrolavado' => $this->centrolavado,
    'refrigerador' => $this->refrigerador,
    'computadora' => $this->computadora,
    'extensionInmueble' => $this->extensionInmueble,
    'condicionesInmueble' => $this->condicionesInmueble,
    'condicionesMobiliario' => $this->condicionesMobiliario,
    'orden' => $this->orden,
    'limpieza' => $this->limpieza,
    'delincuencia' => $this->delincuencia,
    'vandalismo' => $this->vandalismo,
    'drogadiccion' => $this->drogadiccion,
    'alcoholismo' => $this->alcoholismo,
    'estudio' => $this->estudio,
    'zotehuela' => $this->zotehuela,
    'patio' => $this->patio,
    'internet' => $this->internet,
    'renta' => $this->renta


   ];

   try { return (parent::query($sql, $user)) ? true : false; } 
   catch (Exception $e) { throw $e; }

  }

  /* editamos el entorno */
  public function editoentorno(){

    $sql = 'UPDATE tbl_est_entornohabi SET tipoZona=:tipoZona,tipoVivienda=:tipoVivienda,edificacion=:edificacion,titular=:titular,parentesco=:parentesco,numRecamaras=:numRecamaras,sala=:sala,comedor=:comedor,cocina=:cocina,garaje=:garaje,jardin=:jardin,nomBano=:nomBano,tipobano=:tipobano,viasdeacceso=:viasdeacceso,
    medioTransporte=:medioTransporte,tiempoServicio=:tiempoServicio,entreCalles=:entreCalles,color=:color,porton=:porton,referencias=:referencias,observaciones=:observaciones,agua=:agua,luz=:luz,pavimentacion=:pavimentacion,telefono=:telefono,
    transporte=:transporte,vigilancia=:vigilancia,areas=:areas,drenaje=:drenaje,paredes=:paredes,techos=:techos,pisos=:pisos,telNormal=:telNormal,telPlasma=:telPlasma,estereo=:estereo,dvd=:dvd,blueray=:blueray,estufa=:estufa,horno=:horno,lavadora=:lavadora,centrolavado=:centrolavado,
    refrigerador=:refrigerador,computadora=:computadora,extensionInmueble=:extensionInmueble,condicionesInmueble=:condicionesInmueble,condicionesMobiliario=:condicionesMobiliario,orden=:orden,limpieza=:limpieza,delincuencia=:delincuencia,vandalismo=:vandalismo,drogadiccion=:drogadiccion,
    alcoholismo=:alcoholismo,estudio=:estudio,zotehuela=:zotehuela,patio=:patio,internet=:internet,renta=:renta
     WHERE idEntorno=:idEntorno';

    $user = [
      'idEntorno' => $this->idEntorno,
    'tipoZona' => $this->tipoZona,
    'tipoVivienda' => $this->tipoVivienda,
    'edificacion' => $this->edificacion,
    'titular' => $this->titular,
    'parentesco' => $this->parentesco,
    'numRecamaras' => $this->numRecamaras,
    'sala' => $this->sala,
    'comedor' => $this->comedor,
    'cocina' => $this->cocina,
    'garaje' => $this->garaje,
    'jardin' => $this->jardin,
    'nomBano' => $this->nomBano,
    'tipobano' => $this->tipobano,
    'viasdeacceso' => $this->viasdeacceso,
    'medioTransporte' => $this->medioTransporte,
    'tiempoServicio' => $this->tiempoServicio,
    'entreCalles' => $this->entreCalles,
    'color' => $this->color,
    'porton' => $this->porton,
    'referencias' => $this->referencias,
    'observaciones' => $this->observaciones,
    'agua' => $this->agua,
    'luz' => $this->luz,
    'pavimentacion' => $this->pavimentacion,
    'telefono' => $this->telefono,
    'transporte' => $this->transporte,
    'vigilancia' => $this->vigilancia,
    'areas' => $this->areas,
    'drenaje' => $this->drenaje,
    'paredes' => $this->paredes,
    'techos' => $this->techos,
    'pisos' => $this->pisos,
    'telNormal' => $this->telNormal,
    'telPlasma' => $this->telPlasma,
    'estereo' => $this->estereo,
    'dvd' => $this->dvd,
    'blueray' => $this->blueray,
    'estufa' => $this->estufa,
    'horno' => $this->horno,
    'lavadora' => $this->lavadora,
    'centrolavado' => $this->centrolavado,
    'refrigerador' => $this->refrigerador,
    'computadora' => $this->computadora,
    'extensionInmueble' => $this->extensionInmueble,
    'condicionesInmueble' => $this->condicionesInmueble,
    'condicionesMobiliario' => $this->condicionesMobiliario,
    'orden' => $this->orden,
    'limpieza' => $this->limpieza,
    'delincuencia' => $this->delincuencia,
    'vandalismo' => $this->vandalismo,
    'drogadiccion' => $this->drogadiccion,
    'alcoholismo' => $this->alcoholismo,
    'estudio' => $this->estudio,
    'zotehuela' => $this->zotehuela,
    'patio' => $this->patio,
    'internet' => $this->internet,
    'renta' => $this->renta
     
  
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* mostramos info campo diez */
  public function infocampodiez(){
    $sql = "SELECT * FROM tbl_est_refepersonales WHERE idEstudio =:idEstudio";
    $user = [
      'idEstudio' => $this->idEstudio
    ];

    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }
  
  /* agregamosreferenbcia personal */
  public function agregarreferenciperson(){

    $sql = "INSERT INTO tbl_est_refepersonales (idEstudio,nombre,tiempoConocerlo,relacion,domicilio,tel1,opinion,usuarioCrea,fechaCrea)
    VALUES(:idEstudio,:nombre,:tiempoConocerlo,:relacion,:domicilio,:tel1,:opinion,:usuarioCrea,:fechaCrea)";
   $user = [

    'idEstudio' => $this->idEstudio,
    'nombre' => $this->nombre,
    'tiempoConocerlo' => $this->tiempoConocerlo,
    'relacion' => $this->relacion,
    'domicilio' => $this->domicilio,
    'tel1' => $this->tel1,
    'opinion' => $this->opinion,
    'usuarioCrea' => IDUSUARIO,
    'fechaCrea' =>now()
    


   ];

   try { return (parent::query($sql, $user)) ? true : false; } 
   catch (Exception $e) { throw $e; }

  }

  /* eliminamos refencia personal */
  public function eliminarrefpersonl(){
    $sql = 'DELETE FROM tbl_est_refepersonales WHERE idRefePersonales=:idRefePersonales';
  
    $user = [
      'idRefePersonales' => $this->idRefePersonales
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }
  
  /* campos once */
  public function infocampoonce(){
    $sql = "SELECT * FROM tbl_est_refelaborales WHERE idEstudio =:idEstudio";
    $user = [
      'idEstudio' => $this->idEstudio
    ];

    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* agregamos referencia laboral */
  public function agregareflaboral(){

    $sql = "INSERT INTO tbl_est_refelaborales (idEstudio,empresa,giro,direccion,telefono,fechaIngreso,fechaEgreso,puesto,area,salario,motivoSalida,quienProporciono,puestoProporciono,calificacion,demanda,volveria,porque,observaciones,usuarioCrea,fechaCrea,candidatoes,periodosInactivo)
    VALUES(:idEstudio,:empresa,:giro,:direccion,:telefono,:fechaIngreso,:fechaEgreso,:puesto,:area,:salario,:motivoSalida,:quienProporciono,:puestoProporciono,:calificacion,:demanda,:volveria,:porque,:observaciones,:usuarioCrea,:fechaCrea,:candidatoes,:periodosInactivo)";
   $user = [

    'idEstudio' => $this->idEstudio,
    'empresa' => $this->empresa,
    'giro' => $this->giro,
    'direccion' => $this->direccion,
    'telefono' => $this->telefono,
    'fechaIngreso' => $this->fechaIngreso,
    'fechaEgreso' => $this->fechaEgreso,
    'puesto' => $this->puesto,
    'area' => $this->area,
    'salario' => $this->salario,
    'motivoSalida' => $this->motivoSalida,
    'quienProporciono' => $this->quienProporciono,
    'puestoProporciono' => $this->puestoProporciono,
    'calificacion' => $this->calificacion,
    'demanda' => $this->demanda,
    'volveria' => $this->volveria,
    'porque' => $this->porque,
    'observaciones' => $this->observaciones,
    'usuarioCrea' => IDUSUARIO,
    'fechaCrea' =>now(),
    'candidatoes' => $this->candidatoes,
    'periodosInactivo' => $this->periodosInactivo


   ];

   try { return (parent::query($sql, $user)) ? true : false; } 
   catch (Exception $e) { throw $e; }

  }

  /* editamos las referencias laborals */
  public function editalboral(){

    $sql = " UPDATE tbl_est_refelaborales 
    SET idEstudio=:idEstudio,empresa=:empresa,giro=:giro,direccion=:direccion,telefono=:telefono,fechaIngreso=:fechaIngreso,fechaEgreso=:fechaEgreso,puesto=:puesto,area=:area,salario=:salario,
    motivoSalida=:motivoSalida,quienProporciono=:quienProporciono,puestoProporciono=:puestoProporciono,calificacion=:calificacion,demanda=:demanda,volveria=:volveria,porque=:porque,observaciones=:observaciones,
    candidatoes=:candidatoes,periodosInactivo=:periodosInactivo
    WHERE idRefeLaborales=:idRefeLaborales ";
   $user = [
    
    'idRefeLaborales' => $this->idRefeLaborales,
    'idEstudio' => $this->idEstudio,
    'empresa' => $this->empresa,
    'giro' => $this->giro,
    'direccion' => $this->direccion,
    'telefono' => $this->telefono,
    'fechaIngreso' => $this->fechaIngreso,
    'fechaEgreso' => $this->fechaEgreso,
    'puesto' => $this->puesto,
    'area' => $this->area,
    'salario' => $this->salario,
    'motivoSalida' => $this->motivoSalida,
    'quienProporciono' => $this->quienProporciono,
    'puestoProporciono' => $this->puestoProporciono,
    'calificacion' => $this->calificacion,
    'demanda' => $this->demanda,
    'volveria' => $this->volveria,
    'porque' => $this->porque,
    'observaciones' => $this->observaciones,
    'candidatoes' => $this->candidatoes,
    'periodosInactivo' => $this->periodosInactivo


   ];

   try { return (parent::query($sql, $user)) ? true : false; } 
   catch (Exception $e) { throw $e; }

  }

  /* eliminamos referencia laboral*/
  public function elireflaboral(){
    $sql = 'DELETE FROM tbl_est_refelaborales WHERE idRefeLaborales=:idRefeLaborales';
  
    $user = [
      'idRefeLaborales' => $this->idRefeLaborales
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* campo doce */
  public function infocampodoce(){
    $sql = "SELECT * FROM tbl_est_fotos WHERE idEstudio =:idEstudio";
    $user = [
      'idEstudio' => $this->idEstudio
    ];

    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* agregamos imagen */
  public function agregafoto(){


    $sql = "INSERT INTO tbl_est_fotos (idEstudio,titulo,descripcion,archivo,usuarioCrea,fechaCrea)
    VALUES(:idEstudio,:titulo,:descripcion,:archivo,:usuarioCrea,:fechaCrea)";
   $user = [

    'idEstudio' => $this->idEstudio,
    'titulo' => $this->titulo,
    'descripcion' => $this->descripcion,
    'archivo' => $this->archivo,
    'usuarioCrea' => IDUSUARIO,
    'fechaCrea' =>now()


   ];

   try { return (parent::query($sql, $user)) ? true : false; } 
   catch (Exception $e) { throw $e; }

  }

  /* eliminamos foto */
  public function eliimgg(){
    $sql = 'DELETE FROM tbl_est_fotos WHERE idFotos=:idFotos';
  
    $user = [
      'idFotos' => $this->idFotos
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* campo trece */
  public function infocampotrce(){
    $sql = "SELECT * FROM tbl_est_salud WHERE idEstudio =:idEstudio";
    $user = [
      'idEstudio' => $this->idEstudio
    ];

    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* agregamos salud */
  public function agregasalud(){


    $sql = "INSERT INTO tbl_est_salud (idEstudio,droga,cualDroga,fuma,frecuenciaFuma,bebidas,frecuenciaBebidas,cafe,frecuenciaCafe,lentes,diagnostico,intervenciones,dequeintervenciones,enfermedadesCronicas,dequeCronicas,hereditarias,cualHereditarias,quienConstante,porqueConstante,ultimaVez,considera,porqueConsidera,deporte,pasatiempo,ultimavezDeque,embarazo,usuarioCrea,fechaCrea)
    VALUES(:idEstudio,:droga,:cualDroga,:fuma,:frecuenciaFuma,:bebidas,:frecuenciaBebidas,:cafe,:frecuenciaCafe,:lentes,:diagnostico,:intervenciones,:dequeintervenciones,:enfermedadesCronicas,:dequeCronicas,:hereditarias,:cualHereditarias,:quienConstante,:porqueConstante,:ultimaVez,:considera,:porqueConsidera,:deporte,:pasatiempo,:ultimavezDeque,:embarazo,:usuarioCrea,:fechaCrea)";
   $user = [
    'idEstudio' => $this->idEstudio,
    'droga' => $this->droga,
    'cualDroga' => $this->cualDroga,
    'fuma' => $this->fuma,
    'frecuenciaFuma' => $this->frecuenciaFuma,
    'bebidas' => $this->bebidas,
    'frecuenciaBebidas' => $this->frecuenciaBebidas,
    'cafe' => $this->cafe,
    'frecuenciaCafe' => $this->frecuenciaCafe,
    'lentes' => $this->lentes,
    'diagnostico' => $this->diagnostico,
    'intervenciones' => $this->intervenciones,
    'dequeintervenciones' => $this->dequeintervenciones,
    'enfermedadesCronicas' => $this->enfermedadesCronicas,
    'dequeCronicas' => $this->dequeCronicas,
    'hereditarias' => $this->hereditarias,
    'cualHereditarias' => $this->cualHereditarias,
    'quienConstante' => $this->quienConstante,
    'porqueConstante' => $this->porqueConstante,
    'ultimaVez' => $this->ultimaVez,
    'considera' => $this->considera,
    'porqueConsidera' => $this->porqueConsidera,
    'deporte' => $this->deporte,
    'pasatiempo' => $this->pasatiempo,
    'ultimavezDeque' => $this->ultimavezDeque,
    'embarazo' => $this->embarazo,
    'usuarioCrea' => IDUSUARIO,
    'fechaCrea' =>now()
   ];

   try { return (parent::query($sql, $user)) ? true : false; } 
   catch (Exception $e) { throw $e; }

  }

  /* editamos salud */
  public function editosalud(){
    
    $sql = 'UPDATE tbl_est_salud SET idEstudio=:idEstudio,droga=:droga,cualDroga=:cualDroga,fuma=:fuma,frecuenciaFuma=:frecuenciaFuma,bebidas=:bebidas,frecuenciaBebidas=:frecuenciaBebidas,cafe=:cafe,frecuenciaCafe=:frecuenciaCafe,lentes=:lentes,diagnostico=:diagnostico,intervenciones=:intervenciones,dequeintervenciones=:dequeintervenciones,enfermedadesCronicas=:enfermedadesCronicas,dequeCronicas=:dequeCronicas,hereditarias=:hereditarias,cualHereditarias=:cualHereditarias,quienConstante=:quienConstante,porqueConstante=:porqueConstante,ultimaVez=:ultimaVez,considera=:considera,porqueConsidera=:porqueConsidera,deporte=:deporte,pasatiempo=:pasatiempo,ultimavezDeque=:ultimavezDeque,embarazo=:embarazo
     WHERE idSalud=:idSalud';

    $user = [
      
      'idSalud' => $this->idSalud,
      'idEstudio' => $this->idEstudio,
      'droga' => $this->droga,
      'cualDroga' => $this->cualDroga,
      'fuma' => $this->fuma,
      'frecuenciaFuma' => $this->frecuenciaFuma,
      'bebidas' => $this->bebidas,
      'frecuenciaBebidas' => $this->frecuenciaBebidas,
      'cafe' => $this->cafe,
      'frecuenciaCafe' => $this->frecuenciaCafe,
      'lentes' => $this->lentes,
      'diagnostico' => $this->diagnostico,
      'intervenciones' => $this->intervenciones,
      'dequeintervenciones' => $this->dequeintervenciones,
      'enfermedadesCronicas' => $this->enfermedadesCronicas,
      'dequeCronicas' => $this->dequeCronicas,
      'hereditarias' => $this->hereditarias,
      'cualHereditarias' => $this->cualHereditarias,
      'quienConstante' => $this->quienConstante,
      'porqueConstante' => $this->porqueConstante,
      'ultimaVez' => $this->ultimaVez,
      'considera' => $this->considera,
      'porqueConsidera' => $this->porqueConsidera,
      'deporte' => $this->deporte,
      'pasatiempo' => $this->pasatiempo,
      'ultimavezDeque' => $this->ultimavezDeque,
      'embarazo' => $this->embarazo
      
     
  
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* informacion resumen */
  public function infocampocatorce(){
    $sql = "SELECT * FROM tbl_est_resumen WHERE idEstudio =:idEstudio";
    $user = [
      'idEstudio' => $this->idEstudio
    ];

    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* agregamos resumen */
  public function agregoresumen(){
    
    $sql = "INSERT INTO tbl_est_resumen (idEstudio,social,escolar,economica,laboral,actitud,observaciones,recomendacion,usuarioCrea,fechaCrea,observacionesPersonal,observacionesLaboral)
    VALUES(:idEstudio,:social,:escolar,:economica,:laboral,:actitud,:observaciones,:recomendacion,:usuarioCrea,:fechaCrea,:observacionesPersonal,:observacionesLaboral)";
    $user = [
    'idEstudio' => $this->idEstudio,
    'social' => $this->social,
    'escolar' => $this->escolar,
    'economica' => $this->economica,
    'laboral' => $this->laboral,
    'actitud' => $this->actitud,
    'observaciones' => $this->observaciones,
    'recomendacion' => $this->recomendacion,
    'observacionesPersonal' => $this->observacionesPersonal,
    'observacionesLaboral' => $this->observacionesLaboral,
    'usuarioCrea' => IDUSUARIO,
    'fechaCrea' =>now()
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }

  }

  /* editamos resumen */
  public function editoresumen(){
    
    $sql = 'UPDATE tbl_est_resumen SET idEstudio=:idEstudio,social=:social,escolar=:escolar,economica=:economica,laboral=:laboral,actitud=:actitud,observaciones=:observaciones,recomendacion=:recomendacion,observacionesPersonal=:observacionesPersonal,observacionesLaboral=:observacionesLaboral
     WHERE idResumen=:idResumen';

    $user = [
      
      'idResumen' => $this->idResumen,
      'idEstudio' => $this->idEstudio,
      'social' => $this->social,
      'escolar' => $this->escolar,
      'economica' => $this->economica,
      'laboral' => $this->laboral,
      'actitud' => $this->actitud,
      'observaciones' => $this->observaciones,
      'recomendacion' => $this->recomendacion,
      'observacionesPersonal' => $this->observacionesPersonal,
    'observacionesLaboral' => $this->observacionesLaboral
      
     
  
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* eliminamos el estudio */
  public function cancelamosestudio(){
    $sql = "UPDATE tbl_estudios SET estatus=:estatus, fechaCancelacion=:fechaCancelacion  WHERE idEstudio=:idEstudio";
  
    $user = [
      'estatus' => 6,
      'idEstudio' => $this->idEstudio,
      'fechaCancelacion' => now()
      
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }
  
  /* terminamos el estudio */
  public function terminoestudio(){
    $sql = "UPDATE tbl_estudios SET estatus=:estatus, fechaTermino=:fechaTermino  WHERE idEstudio=:idEstudio";
  
    $user = [
      'estatus' => 7,
      'idEstudio' => $this->idEstudio,
      'fechaTermino' => now()
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  public function enproceso() {
    $sql = 'SELECT TBE.* , TBEM.nombre AS nomempresa,TBU.usuario AS usuarioRea
    FROM tbl_estudios AS TBE
    LEFT JOIN tbl_empresas AS TBEM ON TBE.idEmpresa = TBEM.idEmpresa
    LEFT JOIN tbl_usuarios AS TBU ON TBE.realizo = TBU.idUsuario
    WHERE TBE.estatus != 1 AND TBE.estatus != 6 AND TBE.estatus != 7

    ';
    $user = [
      'idUsuario' => IDUSUARIO
      

    ];
    try { return ($rows = parent::query($sql, $user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  public function cancenaldos() {
    $sql = 'SELECT * FROM tbl_estudios WHERE estatus = 6 ';
    $user = [
      'idUsuario' => IDUSUARIO
      

    ];
    try { return ($rows = parent::query($sql, $user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  
  public function cancenaldossan() {
    $sql = 'SELECT * FROM tbl_estudios WHERE estatus = 6 AND idEmpresa = 53 ';
    $user = [
      'idUsuario' => IDUSUARIO
      

    ];
    try { return ($rows = parent::query($sql, $user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* cragamos los estudios asignados para el coordinador */
  public function asignadoseje(){
    $sql = 'SELECT TBE.*, TBEM.nombre AS nomemprsa,TBU.usuario
    FROM tbl_estudios AS TBE
    LEFT JOIN tbl_empresas AS TBEM ON TBE.idEmpresa = TBEM.idEmpresa
    LEFT JOIN tbl_usuarios AS TBU ON TBE.realizo = TBU.idUsuario
    WHERE TBE.estatus In (1,2,3,4,5)  AND TBE.realizo = :realizo';
    $user = [
      'realizo' => IDUSUARIO

    ];
    try { return ($rows = parent::query($sql, $user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* cargamos los estudios terminados para el ejecutivo */
  public function concentrencuestad() {
    $sql = 'SELECT * FROM tbl_encuestadores';
   
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* asignamos un encuestador */
  public function asignencuesta(){
    $sql = 'UPDATE tbl_estudios SET encuestador=:encuestador,fechaCita=:fechaCita,horacita=:horacita,estatus=:estatus,encuViaticos=:encuViaticos,encuTel=:encuTel,encuDireccion=:encuDireccion
     WHERE idEstudio=:idEstudio';

    $user = [
      
      'idEstudio' => $this->idEstudio,
      'encuestador' => $this->encuestador,
      'fechaCita' => $this->fechaCita,
      'horacita' => $this->horacita,
      'encuViaticos' => $this->encuViaticos,
      'encuTel' => $this->encuTel,
      'encuDireccion' => $this->encuDireccion,
      'estatus' => 4
  
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* terminamos el estudio */
  public function terminarestudio(){
    $sql = 'UPDATE tbl_estudios SET estatus=:estatus, fechaTermino=:fechaTermino WHERE idEstudio=:idEstudio';

    $user = [
      
      'idEstudio' => $this->idEstudio,
      'estatus' => 7,
      'fechaTermino' => now()
  
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* cancelamos el estudio */
  public function cancelarestu(){
    $sql = 'UPDATE tbl_estudios SET estatus=:estatus,motivoCancelacion=:motivoCancelacion,fechaCancelacion=:fechaCancelacion WHERE idEstudio=:idEstudio';

    $user = [
      
      'idEstudio' => $this->idEstudio,
      'motivoCancelacion' => $this->motivoCancelacion,
      'fechaCancelacion' => now(),
      'estatus' => 6
  
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* funcion para mostrar los estudios sin asignar para los encuestadores */
  public function asignadsoednuestador() {
    $sql = 'SELECT * FROM tbl_estudios WHERE estatus IN (1,2,3,4) AND encuestador =:encuestador';
    $user = [
      'encuestador' => $_SESSION['idEncuestadores']

    ];
    try { return ($rows = parent::query($sql, $user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* ocultamos o mostramos documentacion */
  /* terminamos el estudio */
  public function oculmostrdocument(){
    $sql = 'UPDATE tbl_estudios SET verdoc=:verdoc WHERE idEstudio=:idEstudio';

    $user = [
      
      'idEstudio' => $this->idEstudio,
      'verdoc' => 1
  
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

    /* funcion para buscar el estudio desde la portada */
    public function buscoportada(){
      $sql = "SELECT TBE.*, TBEM.nombre AS nomemprsa,TBU.usuario
      FROM tbl_estudios AS TBE
      LEFT JOIN tbl_empresas AS TBEM ON TBE.idEmpresa = TBEM.idEmpresa
      LEFT JOIN tbl_usuarios AS TBU ON TBE.realizo = TBU.idUsuario
      WHERE TBE.nombreCandidato = :nombreCandidato ";

      $user = [
        
        'nombreCandidato' => $this->valorportada,
    
      ];

      try { return ($rows = parent::query($sql, $user)) ? $rows : false; } 
      catch (Exception $e) { throw $e; }
    }
  
    /* cambiamos el estatus a manual */
    public function cambioesta(){
      $sql = 'UPDATE tbl_estudios SET estatusper=:estatusper WHERE idEstudio=:idEstudio';

      $user = [
        
        'idEstudio' => $this->idEstudio,
        'estatusper' => $this->estatusper
      
    
      ];

      try { return (parent::query($sql, $user)) ? true : false; } 
      catch (Exception $e) { throw $e; }
    }
  
    /* informacion quince */
    public function infocampoquince(){
      $sql = "SELECT * FROM tbl_est_hobby WHERE idEstudio =:idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    /* agregamos la informacion del hobby */
    public function agregamoshobby(){

      $sql = "INSERT INTO tbl_est_hobby (idEstudio,deportes,cual,frecuencia,pasatiempos,otros,usuarioCrea,fechaCrea)
      VALUES(:idEstudio,:deportes,:cual,:frecuencia,:pasatiempos,:otros,:usuarioCrea,:fechaCrea)";
      $user = [
      'idEstudio' => $this->idEstudio,
      'deportes' => $this->deportes,
      'cual' => $this->cual,
      'frecuencia' => $this->frecuencia,
      'pasatiempos' => $this->pasatiempos,
      'otros' => $this->otros,
      'usuarioCrea' => IDUSUARIO,
      'fechaCrea' =>now()
      ];
  
      try { return (parent::query($sql, $user)) ? true : false; } 
      catch (Exception $e) { throw $e; }
  
    }
    /* editamos los hobby */
    public function editamoshobby(){
      
      $sql = 'UPDATE tbl_est_hobby 
      SET deportes=:deportes,cual=:cual,frecuencia=:frecuencia,pasatiempos=:pasatiempos,otros=:otros 
      WHERE idHobby=:idHobby';

      $user = [
        
        'idHobby' => $this->idHobby,
        'deportes' => $this->deportes,
        'cual' => $this->cual,
        'frecuencia' => $this->frecuencia,
        'pasatiempos' => $this->pasatiempos,
        'otros' => $this->otros
        
    
      ];

      try { return (parent::query($sql, $user)) ? true : false; } 
      catch (Exception $e) { throw $e; }
    }

    /* diez seis */
    public function infocampodiezseis(){
      $sql = "SELECT * FROM tbl_est_beneficiario WHERE idEstudio =:idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }


    public function agregamosben(){

      $sql = "INSERT INTO tbl_est_beneficiario (parentesco,nombre,edad,ocupacion,donde,calle,numero,colonia,del,ciudad,estado,cp,tiempo,tel,idEstudio)
      VALUES(:parentesco,:nombre,:edad,:ocupacion,:donde,:calle,:numero,:colonia,:del,:ciudad,:estado,:cp,:tiempo,:tel,:idEstudio)";
      $user = [
        'parentesco' =>$this->parentesco,
        'nombre' =>$this->nombre,
        'edad' =>$this->edad,
        'ocupacion' =>$this->ocupacion,
        'donde' =>$this->donde,
        'calle' =>$this->calle,
        'numero' =>$this->numero,
        'colonia' =>$this->colonia,
        'del' =>$this->del,
        'ciudad' =>$this->ciudad,
        'estado' =>$this->estado,
        'cp' =>$this->cp,
        'tiempo' =>$this->tiempo,
        'tel' =>$this->tel,
        'idEstudio' =>$this->idEstudio
      ];
  
      try { return (parent::query($sql, $user)) ? true : false; } 
      catch (Exception $e) { throw $e; }
  
    }

    public function editamosben(){
      
      $sql = 'UPDATE tbl_est_beneficiario 
      SET parentesco=:parentesco,nombre=:nombre,edad=:edad,ocupacion=:ocupacion,donde=:donde,calle=:calle,numero=:numero,colonia=:colonia,del=:del,ciudad=:ciudad,estado=:estado,cp=:cp,tiempo=:tiempo,tel=:tel
      WHERE idBeneficiario=:idBeneficiario';

      $user = [
        
        'idBeneficiario' =>$this->idBeneficiario,
        'parentesco' =>$this->parentesco,
        'nombre' =>$this->nombre,
        'edad' =>$this->edad,
        'ocupacion' =>$this->ocupacion,
        'donde' =>$this->donde,
        'calle' =>$this->calle,
        'numero' =>$this->numero,
        'colonia' =>$this->colonia,
        'del' =>$this->del,
        'ciudad' =>$this->ciudad,
        'estado' =>$this->estado,
        'cp' =>$this->cp,
        'tiempo' =>$this->tiempo,
        'tel' =>$this->tel,
        
    
      ];

      try { return (parent::query($sql, $user)) ? true : false; } 
      catch (Exception $e) { throw $e; }
    }

    /* diez siete */
    public function infocampodiezsiete(){
      $sql = "SELECT * FROM tbl_est_nivelacademico WHERE idEstudio =:idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function agregamosnivel(){

      $sql = "INSERT INTO tbl_est_nivelacademico (ultimo,periodo,profesional,cedula,especialidad,caso,usuarioCrea,fechaCrea,idEstudio,otros)
      VALUES(:ultimo,:periodo,:profesional,:cedula,:especialidad,:caso,:usuarioCrea,:fechaCrea,:idEstudio,:otros)";
      $user = [
        'ultimo' =>$this->ultimo,
        'periodo' =>$this->periodo,
        'profesional' =>$this->profesional,
        'cedula' =>$this->cedula,
        'especialidad' =>$this->especialidad,
        'caso' =>$this->caso,
        'usuarioCrea' => IDUSUARIO,
        'fechaCrea' =>now(),
        'idEstudio' =>$this->idEstudio,
        'otros' =>$this->otros,
        
      ];
  
      try { return (parent::query($sql, $user)) ? true : false; } 
      catch (Exception $e) { throw $e; }
  
    }


    public function editamosnivel(){

      $sql = 'UPDATE tbl_est_nivelacademico 
      SET ultimo=:ultimo,periodo=:periodo,profesional=:profesional,cedula=:cedula,especialidad=:especialidad,caso=:caso,otros=:otros
      WHERE idNivel=:idNivel';

      $user = [
        
        'idNivel' =>$this->idNivel,
        'ultimo' =>$this->ultimo,
        'periodo' =>$this->periodo,
        'profesional' =>$this->profesional,
        'cedula' =>$this->cedula,
        'especialidad' =>$this->especialidad,
        'caso' =>$this->caso,
        'otros' =>$this->otros,
        
    
      ];

      try { return (parent::query($sql, $user)) ? true : false; } 
      catch (Exception $e) { throw $e; }
    }

    /* diez ocho */
    public function infocampodiezocho(){
      $sql = "SELECT * FROM tbl_est_periodo WHERE idEstudio =:idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function agregamosperiodo(){
      
      $sql = "INSERT INTO tbl_est_periodo (inicio,termino,motivo,comentarios,usuarioCrea,fechaCrea,idEstudio)
      VALUES(:inicio,:termino,:motivo,:comentarios,:usuarioCrea,:fechaCrea,:idEstudio)";
      $user = [
        'inicio' =>$this->inicio,
        'termino' =>$this->termino,
        'motivo' =>$this->motivo,
        'comentarios' =>$this->comentarios,
        'usuarioCrea' => IDUSUARIO,
        'fechaCrea' =>now(),
        'idEstudio' =>$this->idEstudio
        
      ];
  
      try { return (parent::query($sql, $user)) ? true : false; } 
      catch (Exception $e) { throw $e; }
  
    }

     /* eliminamos foto */
  public function eliperiod(){
    $sql = 'DELETE FROM tbl_est_periodo WHERE idPeriodo=:idPeriodo';
  
    $user = [
      'idPeriodo' => $this->idPeriodo
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

    /* diez nueve */
    public function infocampodieznueve(){
      $sql = "SELECT * FROM tbl_est_historiallaboral WHERE idEstudio =:idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function agregamohis(){
      
      $sql = "INSERT INTO tbl_est_historiallaboral (ultimo,vida,nusemana,porcentaje,numeroempleadores,progresion,finiquito,liquidacion,aguinaldo,vacaciones,comentarios,usuarioCrea,fechaCrea,idEstudio)
      VALUES(:ultimo,:vida,:nusemana,:porcentaje,:numeroempleadores,:progresion,:finiquito,:liquidacion,:aguinaldo,:vacaciones,:comentarios,:usuarioCrea,:fechaCrea,:idEstudio)";
      $user = [
        'ultimo' =>$this->ultimo,
        'vida' =>$this->vida,
        'nusemana' =>$this->nusemana,
        'porcentaje' =>$this->porcentaje,
        'numeroempleadores' =>$this->numeroempleadores,
        'progresion' =>$this->progresion,
        'finiquito' =>$this->finiquito,
        'liquidacion' =>$this->liquidacion,
        'aguinaldo' =>$this->aguinaldo,
        'vacaciones' =>$this->vacaciones,
        'comentarios' =>$this->comentarios,
        'usuarioCrea' => IDUSUARIO,
        'fechaCrea' =>now(),
        'idEstudio' =>$this->idEstudio,
        
      ];
  
      try { return (parent::query($sql, $user)) ? true : false; } 
      catch (Exception $e) { throw $e; }
  
    }


    public function editamohis(){

      $sql = 'UPDATE tbl_est_historiallaboral 
      SET ultimo=:ultimo,vida=:vida,nusemana=:nusemana,porcentaje=:porcentaje,numeroempleadores=:numeroempleadores,progresion=:progresion,finiquito=:finiquito,liquidacion=:liquidacion,aguinaldo=:aguinaldo,vacaciones=:vacaciones,comentarios=:comentarios,usuarioCrea=:usuarioCrea,fechaCrea=:fechaCrea,idEstudio=:idEstudio
      WHERE idHistorial=:idHistorial';

      $user = [
        'idHistorial' =>$this->idHistorial,
        'ultimo' =>$this->ultimo,
        'vida' =>$this->vida,
        'nusemana' =>$this->nusemana,
        'porcentaje' =>$this->porcentaje,
        'numeroempleadores' =>$this->numeroempleadores,
        'progresion' =>$this->progresion,
        'finiquito' =>$this->finiquito,
        'liquidacion' =>$this->liquidacion,
        'aguinaldo' =>$this->aguinaldo,
        'vacaciones' =>$this->vacaciones,
        'comentarios' =>$this->comentarios,
        'usuarioCrea' => IDUSUARIO,
        'fechaCrea' =>now(),
        'idEstudio' =>$this->idEstudio,
        
    
      ];

      try { return (parent::query($sql, $user)) ? true : false; } 
      catch (Exception $e) { throw $e; }
    }

    /* veinte */
    public function infocampoveinte(){
      $sql = "SELECT * FROM tbl_est_despidos WHERE idEstudio =:idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function agregamossalida(){

      $sql = "INSERT INTO tbl_est_despidos (nombre,periodo,motivo,usuarioCrea,fechaCrea,idEstudio)
      VALUES(:nombre,:periodo,:motivo,:usuarioCrea,:fechaCrea,:idEstudio)";
      $user = [
        'nombre' =>$this->nombre,
        'periodo' =>$this->periodo,
        'motivo' =>$this->motivo,
        'usuarioCrea' => IDUSUARIO,
        'fechaCrea' =>now(),
        'idEstudio' =>$this->idEstudio,
        
      ];
  
      try { return (parent::query($sql, $user)) ? true : false; } 
      catch (Exception $e) { throw $e; }
  
    }
    
    public function elisalida(){
      $sql = 'DELETE FROM tbl_est_despidos WHERE idDespido=:idDespido';
    
      $user = [
        'idDespido' => $this->idDespido
      ];
  
      try { return (parent::query($sql, $user)) ? true : false; } 
      catch (Exception $e) { throw $e; }
    }
    

    /* veinte uno */
    public function infocampoveinteuno(){
      $sql = "SELECT * FROM tbl_est_incapacidad WHERE idEstudio =:idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function agregamosinca(){

      $sql = "INSERT INTO tbl_est_incapacidad (nombre,periodo,usuarioCrea,fechaCrea,idEstudio,motivo)
      VALUES(:nombre,:periodo,:usuarioCrea,:fechaCrea,:idEstudio,:motivo)";
      $user = [
        'nombre' =>$this->nombre,
        'periodo' =>$this->periodo,
        'motivo' =>$this->motivo,
        'usuarioCrea' => IDUSUARIO,
        'fechaCrea' =>now(),
        'idEstudio' =>$this->idEstudio,
        
      ];
  
      try { return (parent::query($sql, $user)) ? true : false; } 
      catch (Exception $e) { throw $e; }
  
    }

    public function eliscapa(){
      $sql = 'DELETE FROM tbl_est_incapacidad WHERE idIncapacidad=:idIncapacidad';
    
      $user = [
        'idIncapacidad' => $this->idIncapacidad
      ];
  
      try { return (parent::query($sql, $user)) ? true : false; } 
      catch (Exception $e) { throw $e; }
    }

    /* veite dos */
    public function infocampoveintedos(){
      $sql = "SELECT * FROM tbl_est_problemas WHERE idEstudio =:idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }
    
    public function agregapros(){



      $sql = "INSERT INTO tbl_est_problemas (nombre,informante,comentarios,usuarioCrea,fechaCrea,idEstudio,dato)
      VALUES(:nombre,:informante,:comentarios,:usuarioCrea,:fechaCrea,:idEstudio,:dato)";
      $user = [
        'nombre' =>$this->nombre,
        'informante' =>$this->informante,
        'comentarios' =>$this->comentarios,
        'usuarioCrea' => IDUSUARIO,
        'fechaCrea' =>now(),
        'idEstudio' =>$this->idEstudio,
        'dato' =>$this->dato,
        
      ];
  
      try { return (parent::query($sql, $user)) ? true : false; } 
      catch (Exception $e) { throw $e; }
  
    }


    public function editapro(){
      
      $sql = 'UPDATE tbl_est_problemas 
      SET nombre=:nombre,informante=:informante,comentarios=:comentarios,dato=:dato
      WHERE idProblema=:idProblema';

      $user = [
        'idProblema' =>$this->idProblema,
        'nombre' =>$this->nombre,
        'informante' =>$this->informante,
        'comentarios' =>$this->comentarios,
        'dato' =>$this->dato,
        
    
      ];

      try { return (parent::query($sql, $user)) ? true : false; } 
      catch (Exception $e) { throw $e; }
    }
    

    /* veinte tres */
    public function infocampoveintetres(){
      $sql = "SELECT * FROM tbl_est_infolaboral WHERE idEstudio =:idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function agreginfolab(){

      $sql = "INSERT INTO tbl_est_infolaboral (campol,fechal,acuerdol,comentariol,campoc,fechac,acuerdoc,comentarioc,campof,fechaf,acuerdof,comentariof,campop,fechap,acuerdop,comentariop,campoa,fechaa,acuerdoa,comentarioa,campoi,fechai,acuerdoi,comentarioi,camposat,fechasat,acuerdosat,comentariosat,usuarioCrea,fechaCrea,idEstudio)
      VALUES(:campol,:fechal,:acuerdol,:comentariol,:campoc,:fechac,:acuerdoc,:comentarioc,:campof,:fechaf,:acuerdof,:comentariof,:campop,:fechap,:acuerdop,:comentariop,:campoa,:fechaa,:acuerdoa,:comentarioa,:campoi,:fechai,:acuerdoi,:comentarioi,:camposat,:fechasat,:acuerdosat,:comentariosat,:usuarioCrea,:fechaCrea,:idEstudio)";
      $user = [
        
        'campol' =>$this->campol,
        'fechal' =>$this->fechal,
        'acuerdol' =>$this->acuerdol,
        'comentariol' =>$this->comentariol,
        'campoc' =>$this->campoc,
        'fechac' =>$this->fechac,
        'acuerdoc' =>$this->acuerdoc,
        'comentarioc' =>$this->comentarioc,
        'campof' =>$this->campof,
        'fechaf' =>$this->fechaf,
        'acuerdof' =>$this->acuerdof,
        'comentariof' =>$this->comentariof,
        'campop' =>$this->campop,
        'fechap' =>$this->fechap,
        'acuerdop' =>$this->acuerdop,
        'comentariop' =>$this->comentariop,
        'campoa' =>$this->campoa,
        'fechaa' =>$this->fechaa,
        'acuerdoa' =>$this->acuerdoa,
        'comentarioa' =>$this->comentarioa,
        'campoi' =>$this->campoi,
        'fechai' =>$this->fechai,
        'acuerdoi' =>$this->acuerdoi,
        'comentarioi' =>$this->comentarioi,
        'camposat' =>$this->camposat,
        'fechasat' =>$this->fechasat,
        'acuerdosat' =>$this->acuerdosat,
        'comentariosat' =>$this->comentariosat,
        'usuarioCrea' => IDUSUARIO,
        'fechaCrea' =>now(),
        'idEstudio' =>$this->idEstudio,
        
       
        
      ];
  
      try { return (parent::query($sql, $user)) ? true : false; } 
      catch (Exception $e) { throw $e; }
  
    }


    public function editainfolab(){
      
      $sql = 'UPDATE tbl_est_infolaboral 
      SET campol=:campol,fechal=:fechal,acuerdol=:acuerdol,comentariol=:comentariol,campoc=:campoc,fechac=:fechac,acuerdoc=:acuerdoc,comentarioc=:comentarioc,campof=:campof,fechaf=:fechaf,acuerdof=:acuerdof,comentariof=:comentariof,campop=:campop,fechap=:fechap,acuerdop=:acuerdop,comentariop=:comentariop,campoa=:campoa,fechaa=:fechaa,acuerdoa=:acuerdoa,comentarioa=:comentarioa,campoi=:campoi,fechai=:fechai,acuerdoi=:acuerdoi,comentarioi=:comentarioi,camposat=:camposat,fechasat=:fechasat,acuerdosat=:acuerdosat,comentariosat=:comentariosat
      WHERE idInfolaboral=:idInfolaboral';

      $user = [
        'idInfolaboral' =>$this->idInfolaboral,
        'campol' =>$this->campol,
        'fechal' =>$this->fechal,
        'acuerdol' =>$this->acuerdol,
        'comentariol' =>$this->comentariol,
        'campoc' =>$this->campoc,
        'fechac' =>$this->fechac,
        'acuerdoc' =>$this->acuerdoc,
        'comentarioc' =>$this->comentarioc,
        'campof' =>$this->campof,
        'fechaf' =>$this->fechaf,
        'acuerdof' =>$this->acuerdof,
        'comentariof' =>$this->comentariof,
        'campop' =>$this->campop,
        'fechap' =>$this->fechap,
        'acuerdop' =>$this->acuerdop,
        'comentariop' =>$this->comentariop,
        'campoa' =>$this->campoa,
        'fechaa' =>$this->fechaa,
        'acuerdoa' =>$this->acuerdoa,
        'comentarioa' =>$this->comentarioa,
        'campoi' =>$this->campoi,
        'fechai' =>$this->fechai,
        'acuerdoi' =>$this->acuerdoi,
        'comentarioi' =>$this->comentarioi,
        'camposat' =>$this->camposat,
        'fechasat' =>$this->fechasat,
        'acuerdosat' =>$this->acuerdosat,
        'comentariosat' =>$this->comentariosat,

    
      ];

      try { return (parent::query($sql, $user)) ? true : false; } 
      catch (Exception $e) { throw $e; }
    }
    
    /* veinte cuatro */
    public function infocampoveintecuatro(){
      $sql = "SELECT * FROM tbl_est_creditos WHERE idEstudio =:idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    /* otbenemos la informaicon para editar */
    public function infoedicreti(){
      $sql = "SELECT * FROM tbl_est_creditos WHERE idCredito =:idCredito";
      $user = [
        'idCredito' => $this->idCredito
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }
    /* editamos el creidto */
    public function editarcre(){
      
      $sql = "UPDATE tbl_est_creditos 
      SET fecha=:fecha,entidad=:entidad,monto=:monto,total=:total,estatus=:estatus,comentario=:comentario,endeudamiento=:endeudamiento,hipoteca=:hipoteca,score=:score
      WHERE idCredito=:idCredito";
      $user = [
        
        'idCredito' =>$this->idCredito,
        'fecha' =>$this->fecha,
        'entidad' =>$this->entidad,
        'monto' =>$this->monto,
        'total' =>$this->total,
        'estatus' =>$this->estatus,
        'comentario' =>$this->comentario,
        'endeudamiento' =>$this->endeudamiento,
        'hipoteca' =>$this->hipoteca,
        'score' =>$this->score
       
      ];
  
      try { return (parent::query($sql, $user)) ? true : false; } 
      catch (Exception $e) { throw $e; }
  
    }
    
    public function agregarcred(){
      
      $sql = "INSERT INTO tbl_est_creditos (fecha,entidad,monto,total,estatus,comentario,endeudamiento,hipoteca,score,usuarioCrea,fechaCrea,idEstudio)
      VALUES(:fecha,:entidad,:monto,:total,:estatus,:comentario,:endeudamiento,:hipoteca,:score,:usuarioCrea,:fechaCrea,:idEstudio)";
      $user = [

        'fecha' =>$this->fecha,
        'entidad' =>$this->entidad,
        'monto' =>$this->monto,
        'total' =>$this->total,
        'estatus' =>$this->estatus,
        'comentario' =>$this->comentario,
        'endeudamiento' =>$this->endeudamiento,
        'hipoteca' =>$this->hipoteca,
        'score' =>$this->score,
        'usuarioCrea' => IDUSUARIO,
        'fechaCrea' =>now(),
        'idEstudio' =>$this->idEstudio,

      
        
      ];
  
      try { return (parent::query($sql, $user)) ? true : false; } 
      catch (Exception $e) { throw $e; }
  
    }

    public function elicre(){
      $sql = 'DELETE FROM tbl_est_creditos WHERE idCredito=:idCredito';
    
      $user = [
        'idCredito' => $this->idCredito
      ];
  
      try { return (parent::query($sql, $user)) ? true : false; } 
      catch (Exception $e) { throw $e; }
    }

    public function infocampoveintecinco(){
      $sql = "SELECT * FROM tbl_est_infonavit WHERE idEstudio =:idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }
    
    public function agreginfona(){

      $sql = "INSERT INTO tbl_est_infonavit (estatus,puntos,subcuenta,maximo,hipoteca,idEstudio)
      VALUES(:estatus,:puntos,:subcuenta,:maximo,:hipoteca,:idEstudio)";
      $user = [
        'estatus' =>$this->estatus,
        'puntos' =>$this->puntos,
        'subcuenta' =>$this->subcuenta,
        'maximo' =>$this->maximo,
        'hipoteca' =>$this->hipoteca,
        'idEstudio' =>$this->idEstudio

      ];
  
      try { return (parent::query($sql, $user)) ? true : false; } 
      catch (Exception $e) { throw $e; }
  
    }


    public function editainfona(){
      
      $sql = 'UPDATE tbl_est_infonavit 
      SET estatus=:estatus,puntos=:puntos,subcuenta=:subcuenta,maximo=:maximo,hipoteca=:hipoteca
      WHERE idInfona=:idInfona';

      $user = [
        'idInfona' =>$this->idInfona,
        'estatus' =>$this->estatus,
        'puntos' =>$this->puntos,
        'subcuenta' =>$this->subcuenta,
        'maximo' =>$this->maximo,
        'hipoteca' =>$this->hipoteca
    
      ];

      try { return (parent::query($sql, $user)) ? true : false; } 
      catch (Exception $e) { throw $e; }
    }

    /* veinti seis */
    public function infocampoveinteseis(){
      $sql = "SELECT * FROM tbl_est_serviciomedicoa WHERE idEstudio =:idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function agregserviciomedico(){
      
      $sql = "INSERT INTO tbl_est_serviciomedicoa ( clinicai, incidentei, tipoi, clinicaim, incidenteim, tipoim, clinicais, incidenteis, tipois, 
       clinicase, incidentese, tipose, aseguradora, incidentepri, tipopri, clinicaisse, incidenteisse, tipoisse, idEstudio, notiene) 
      VALUES(:clinicai,:incidentei,:tipoi,
      :clinicaim,:incidenteim,:tipoim,
      :clinicais,:incidenteis,:tipois,
      :clinicase,:incidentese,:tipose,
      :aseguradora,:incidentepri,:tipopri,
      :clinicaisse,:incidenteisse,:tipoisse,:idEstudio,:notiene)";
      $valores = [
      'clinicai' => $this->clinicai,
      'incidentei' => $this->incidentei,
      'tipoi' => $this->tipoi,
      'clinicaim' => $this->clinicaim,
      'incidenteim' => $this->incidenteim,
      'tipoim' => $this->tipoim,
      'clinicais' => $this->clinicais,
      'incidenteis' => $this->incidenteis,
      'tipois' => $this->tipois,
      'clinicase' => $this->clinicase,
      'incidentese' => $this->incidentese,
      'tipose' => $this->tipose,
      'aseguradora' => $this->aseguradora,
      'incidentepri' => $this->incidentepri,
      'tipopri' => $this->tipopri,
      'clinicaisse' => $this->clinicaisse,
      'incidenteisse' => $this->incidenteisse,
      'tipoisse' => $this->tipoisse,
      'idEstudio' => $this->idEstudio,
      'notiene' => $this->notiene
      ];
  
      try { return (parent::query($sql, $valores)) ? true : false; } 
      catch (Exception $e) { throw $e; }
  
    }


    public function editoserviciomedico(){
      
      $sql = 'UPDATE tbl_est_serviciomedicoa SET clinicaim=:clinicaim,incidenteim=:incidenteim,tipoim=:tipoim,clinicais=:clinicais,incidenteis=:incidenteis,tipois=:tipois,clinicase=:clinicase,incidentese=:incidentese,tipose=:tipose,aseguradora=:aseguradora,incidentepri=:incidentepri,tipopri=:tipopri,clinicaisse=:clinicaisse,incidenteisse=:incidenteisse,tipoisse=:tipoisse,
      notiene=:notiene
      WHERE idSerMedi=:idSerMedi';

      $user = [
        'idSerMedi' => $this->idSerMedi,
        'clinicaim' => $this->clinicaim,
        'incidenteim' => $this->incidenteim,
        'tipoim' => $this->tipoim,
        'clinicais' => $this->clinicais,
        'incidenteis' => $this->incidenteis,
        'tipois' => $this->tipois,
        'clinicase' => $this->clinicase,
        'incidentese' => $this->incidentese,
        'tipose' => $this->tipose,
        'aseguradora' => $this->aseguradora,
        'incidentepri' => $this->incidentepri,
        'tipopri' => $this->tipopri,
        'clinicaisse' => $this->clinicaisse,
        'incidenteisse' => $this->incidenteisse,
        'tipoisse' => $this->tipoisse,
        'notiene' => $this->notiene
    
      ];

      try { return (parent::query($sql, $user)) ? true : false; } 
      catch (Exception $e) { throw $e; }
    }

    /* cargo informacion inicial santander */
    public function cargosantaderuno(){
      $sql = "SELECT TBES.*,TBES.apePaterno AS paternocandi,TBES.apeMaterno AS maternocandi,TBDAT.*,
      TBUSU.nombre AS nomsolicita,TBUSU.apePaterno AS apepaterno,TBUSU.apeMaterno AS apematerno,
      TBUSUdos.nombre AS ejesolicita,TBUSUdos.apePaterno AS ejeapepaterno,TBUSUdos.apeMaterno AS apematernoejecu, TBEM.nombre AS nomempre
      FROM tbl_estudios AS TBES
      LEFT JOIN tbl_est_datosgenerales AS TBDAT ON TBES.idEstudio = TBDAT.idEstudio
      LEFT JOIN tbl_usuarios AS TBUSU ON TBES.idUsuario = TBUSU.idUsuario
      LEFT JOIN tbl_usuarios AS TBUSUdos ON TBES.realizo = TBUSUdos.idUsuario
			LEFT JOIN tbl_empresas AS TBEM ON TBES.idEmpresa = TBEM.idEmpresa
      WHERE TBES.idEstudio = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }
    
    public function cargosantaderdos(){
      $sql = "SELECT * FROM tbl_est_domicilio WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function cargosantadertres(){
      $sql = "SELECT * FROM tbl_est_entornohabi WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function cargosantadercuatro(){
      $sql = "SELECT * FROM tbl_est_refepersonales WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function cargosantadercinco(){
      $sql = "SELECT * FROM tbl_est_redes WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function cargosantaderseis(){
      $sql = "SELECT * FROM tbl_est_hobby WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function cargosantadersiete(){
      $sql = "SELECT * FROM tbl_est_beneficiario WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function cargosantaderocho(){
      $sql = "SELECT * FROM tbl_est_nivelacademico WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function cargosantadernueve(){
      $sql = "SELECT * FROM tbl_est_periodo WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function cargosantaderdiez(){
      $sql = "SELECT * FROM tbl_est_refelaborales WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function cargosantaderonce(){
      $sql = "SELECT * FROM tbl_est_historiallaboral WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function cargosantaderdoce(){
      $sql = "SELECT * FROM tbl_est_despidos WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function cargosantadertrece(){
      $sql = "SELECT * FROM tbl_est_incapacidad WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function cargosantadercatorce(){
      $sql = "SELECT * FROM tbl_est_problemas WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function cargosantaderquince(){
      $sql = "SELECT * FROM tbl_est_infolaboral WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function cargosantaderdiezseis(){
      $sql = "SELECT * FROM tbl_est_creditos WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function cargosantaderdiezsiete(){
      $sql = "SELECT * FROM tbl_est_infonavit WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function cargosantaderdiezocho(){
      $sql = "SELECT * FROM tbl_est_estructurafamiliar WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function cargosantaderdieznueve(){
      $sql = "SELECT * FROM tbl_est_serviciomedicoa WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function cargosantaderveinte(){
      $sql = "SELECT * FROM tbl_est_resumen WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function cargosantaderveinteuno(){
      $sql = "SELECT * FROM tbl_est_documentacion WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function cargoimgres(){
      $sql = "SELECT * FROM tbl_est_fotos WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    /* eliminamos beneficiarios */
    public function eliben(){
      $sql = 'DELETE FROM tbl_est_beneficiario WHERE idBeneficiario=:idBeneficiario';
    
      $user = [
        'idBeneficiario' => $this->idBeneficiario
      ];
  
      try { return (parent::query($sql, $user)) ? true : false; } 
      catch (Exception $e) { throw $e; }
    }

    /* obtenemos la informacion para beneficiarios */
    public function infobenedxc(){
      $sql = "SELECT * FROM tbl_est_beneficiario WHERE idBeneficiario =:idBeneficiario";
      $user = [
        'idBeneficiario' => $this->idBeneficiario
      ];
  
      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }
    /* //////////////////////////////////////////////////////////////////////////////////////////////////////// */
    /* carganmos los nuevos datos */
    public function cargoneuvo(){
      $sql = "SELECT * FROM tbl_est_nivelacademico WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function cargoneuvoDos(){
      $sql = "SELECT * FROM tbl_est_infolaboral WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function cargoneuvoTres(){
      $sql = "SELECT * FROM tbl_est_deudas WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function cargoneuvoCuatro(){
      $sql = "SELECT * FROM tbl_est_conductasocial WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function cargoneuvoCinco(){
      $sql = "SELECT * FROM tbl_est_situacion WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }

    public function cargoneuvoSeis(){
      $sql = "SELECT * FROM tbl_est_estructurafamiliar WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }
    
    /* buscamos los arxchivos */
    public function archivadj(){
      $sql = "SELECT * FROM tbl_archivosClientes WHERE idEstudio  = :idEstudio";
      $user = [
        'idEstudio' => $this->idEstudio
      ];

      try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
      
      catch (Exception $e) { throw $e; }
    }
    
    
    

    

    

    

    
    

    
    
    

    

    

    
    

    
    

    
    

    

    

    
    
    

    

    
    
    
    
    

    
    
    
    
    
    

    
    
    
    
  
  

 

  
  
  
  
  

  
  
  
  

  
  



  
  
  
  
  
  
  
  


}