<?php 

class portadaModel extends Model {

  public $id;
  public $idUsuario;
  public $idPortada;
  public $archivo;
  public $estatus;
  public $usuarioCrea;
  public $fechaCrea;
  /* para agregar accion al log de acciones */
  public $idAccion;
  public $fecha;
  
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

  /* metodo para consulta y ingresar al sistema */
  public function concetradoImg() {
    $sql = 'SELECT *  FROM tbl_portada';
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* meotod para agregar una nm ueva imagen */
  public function nuimport(){
    $sql = 'INSERT INTO tbl_portada (archivo,estatus,usuarioCrea,fechaCrea)VALUES(:archivo,:estatus,:usuarioCrea,:fechaCrea)';
    $user = [
      'archivo'         => $this->archivo,
      'estatus'         => 0,
      'usuarioCrea'         => $_SESSION['idUsuario'],
      'fechaCrea'         => now()
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* metodo para dar de baja los usuario */
  public function darbaja(){
    $sql = 'UPDATE tbl_portada SET estatus=:estatus WHERE idPortada=:idPortada';
    $user = [
      'estatus'         => 0,
      'idPortada'         => $this->idPortada,
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }
  
  /* metodo para dar de alta */
  public function daralta(){
    $sql = 'UPDATE tbl_portada SET estatus=:estatus WHERE idPortada=:idPortada';
    $user = [
      'estatus'         => 1,
      'idPortada'         => $this->idPortada,
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* damos de baja todo */
  public function bajatodofond(){
    $sql = 'UPDATE tbl_portada SET estatus=:estatus';
    $user = [  'estatus'         => 0  ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }
  
  /* eliminamos la portada */
  public function eliminarportadsa(){
    $sql = 'DELETE FROM tbl_portada WHERE idPortada=:idPortada';
    $user = [  'idPortada'         => $this->idPortada ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }

  }

}