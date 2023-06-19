<?php 

class logModel extends Model {

  public $id;


  /* metodo para consulta y ingresar al sistema */
  public function concentradoHistorial() {
    $sql = 'SELECT logacc.*, tus.nombre, tus.apePaterno, tus.apeMaterno 
    FROM log_acceso as logacc 
    LEFT JOIN tbl_usuarios AS tus ON  logacc.idUsuario = tus.idUsuario';
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* obtenemos el historial de las actividades dentro del sistema */
  public function concentradoHistorialAct() {
    $sql = 'SELECT LOAC.*, CAAC.*, CAAC.nombre as nomacci, TBUS.*, LOAC.idUsuario AS pruebousu
    FROM log_acciones AS LOAC
    LEFT JOIN cat_acciones AS CAAC ON LOAC.idAccion = CAAC.idAccion
    LEFT JOIN tbl_usuarios AS TBUS ON LOAC.idUsuario = TBUS.idUsuario
    ORDER BY LOAC.fecha DESC';
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  


}