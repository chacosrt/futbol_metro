<?php 

class encuestadoresModel extends Model {

  public $idEncuestadores;
  public $fechaRegistro;
  public $encuestador;
  public $ciudad;
  public $estado;
  public $correo;
  public $telefono;
  public $pago;
  public $cuenta;
  public $banco;
  public $usuarioCrea;
  public $fechaCrea;
  public $comentarios;
  public $sistema;



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

  /* concentrado de avisos */
  public function concentrencuestadores() {
    $sql = 'SELECT * FROM tbl_encuestadores';
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }


  /* nuevo mensaje */
  public function nuencuestador() {

    $sql = "INSERT INTO tbl_encuestadores (fechaRegistro,encuestador,ciudad,estado,correo,telefono,pago,cuenta,banco,usuarioCrea,fechaCrea,comentarios) 
    VALUES(:fechaRegistro,:encuestador,:ciudad,:estado,:correo,:telefono,:pago,:cuenta,:banco,:usuarioCrea,:fechaCrea,:comentarios)";
    $user = [
      'fechaRegistro'       => $this->fechaRegistro,
      'encuestador'       => $this->encuestador,
      'ciudad'       => $this->ciudad,
      'estado'       => $this->estado,
      'correo'       => $this->correo,
      'telefono'       => $this->telefono,
      'pago'       => $this->pago,
      'cuenta'       => $this->cuenta,
      'banco'       => $this->banco,
      'comentarios'       => $this->comentarios,
      'usuarioCrea'          => IDUSUARIO,
      'fechaCrea'   => now()
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* eliminar mensaje */
  public function eliencues(){
    $sql = "DELETE FROM tbl_encuestadores WHERE idEncuestadores=:idEncuestadores";
    $user = [

      'idEncuestadores' => $this->idEncuestadores

    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }
  
  public function infoedita(){
    $sql = 'SELECT *  FROM tbl_encuestadores WHERE idEncuestadores=:idEncuestadores';
    $user = [

      'idEncuestadores' => $this->idEncuestadores

    ];
    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* editamos info */
  public function ediencues(){

    $sql = 'UPDATE tbl_encuestadores  SET fechaRegistro=:fechaRegistro,encuestador=:encuestador,ciudad=:ciudad,estado=:estado,correo=:correo,telefono=:telefono,pago=:pago,cuenta=:cuenta,banco=:banco,comentarios=:comentarios
    WHERE idEncuestadores=:idEncuestadores';
    $user = [
      
      'idEncuestadores'       => $this->idEncuestadores,
      'fechaRegistro'       => $this->fechaRegistro,
      'encuestador'       => $this->encuestador,
      'ciudad'       => $this->ciudad,
      'estado'       => $this->estado,
      'correo'       => $this->correo,
      'telefono'       => $this->telefono,
      'pago'       => $this->pago,
      'cuenta'       => $this->cuenta,
      'banco'       => $this->banco,
      'comentarios'       => $this->comentarios,
      
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

   /* obtenemos informacion para creacion de usuario */
   public function obtengoInfoParausuario(){
    $sql = 'SELECT *  FROM tbl_encuestadores WHERE idEncuestadores=:idEncuestadores';
    $user = [

      'idEncuestadores' => $this->idEncuestadores

    ];
    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* creamos el nuevo usuario del sistema */
  public function nuevousuariosistema(){
    $sql = "INSERT INTO tbl_usuarios (usuario,clave,nombre,apePaterno,apeMaterno,fechaActivacion,estatus,idEncuestadores,correo) 
    VALUES(:usuario,:clave,:nombre,:apePaterno,:apeMaterno,:fechaActivacion,:estatus,:idEncuestadores,:correo)";
    $user = [

      'usuario' => $this->usuario,
      'clave' => $this->clave,
      'nombre' => $this->nombre,
      'apePaterno' => $this->apePaterno,
      'apeMaterno' => $this->apeMaterno,
      'fechaActivacion' => now(),
      'estatus' => 1,
      'idEncuestadores' => $this->idEncuestadores,
      'correo' => $this->correo
    
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }
  
  /* cambiamos el estatus en la tabla para la creacion de usuario */
  public function cambiosisttabla(){
    $sql = 'UPDATE tbl_encuestadores SET  sistema =:sistema  WHERE idEncuestadores=:idEncuestadores';
    $user = [
      'sistema'         => 1,
      'idEncuestadores'         => $this->idEncuestadores
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }

  }

  /* eliminamos el usuario del sistema */
  public function bajadesistema(){
    $sql = "DELETE FROM tbl_usuarios WHERE idEncuestadores=:idEncuestadores";
    $user = [

      'idEncuestadores' => $this->idEncuestadores

    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }
  public function cambiosisttablados(){
    $sql = 'UPDATE tbl_encuestadores SET  sistema =:sistema  WHERE idEncuestadores=:idEncuestadores';
    $user = [
      'sistema'         => NULL,
      'idEncuestadores'         => $this->idEncuestadores
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }

  }

  

}