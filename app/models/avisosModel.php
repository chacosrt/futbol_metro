<?php 

class avisosModel extends Model {

  public $idAviso;
  public $titulo;
  public $mensaje;
  public $dirigido;
  public $tipo;
  public $usuarioCrea;
  public $fechaCrea;


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
  public function concentradoavisos() {
    $sql = 'SELECT * FROM tbl_avisos';
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  public function listaemplead() {
    $sql = 'SELECT * FROM tbl_usuarios';
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* nuevo mensaje */
  public function nuevomensaje() {

    $sql = "INSERT INTO tbl_avisos (titulo,mensaje,dirigido,tipo,usuarioCrea,fechaCrea) 
    VALUES(:titulo,:mensaje,:dirigido,:tipo,:usuarioCrea,:fechaCrea)";
    $user = [
      'titulo'       => $this->titulo,
      'mensaje'       => $this->mensaje,
      'dirigido'       => $this->dirigido,
      'tipo'       => $this->tipo,
      'usuarioCrea'          => IDUSUARIO,
      'fechaCrea'   => now()
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* eliminar mensaje */
  public function eliminomensaje(){
    $sql = "DELETE FROM tbl_avisos WHERE idAviso=:idAviso";
    $user = [

      'idAviso' => $this->idAviso

    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }
  

  

}