<?php 

class panelModel extends Model {

  public $id;
  public $option;
  public $val;
  public $created_at;
  public $updated_at;
  public $idUsuario;
  public $idEmpleado;
  public $idalerta;

  /* metodo para agregar el movimiento al log */
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
  public function consulto() {
    $sql = 'SELECT * FROM tbl_usuarios WHERE usuario=:usuario AND clave=:clave AND estatus=:estatus';
    $data = 
    [
      'usuario'       => $this->usuario,
      'clave'          => $this->clave,
      'estatus'   => "1"
    ];
    try { return ($rows = parent::query($sql, $data)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /** Método para agregar un nuevo usuario  */
  public function addAcceso() {
    $sql = 'INSERT INTO log_acceso (idUsuario, fecha, otros) VALUES (:idUsuario, :fecha, :otros)';
    $data = 
    [
      'idUsuario'       => $this->idUsuario,
      'fecha'          => now(),
      'otros'   => php_uname()
    ];

    try { return ($this->id = parent::query($sql, $data)) ? $this->id : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* obtengo el historial de acceso al sistema */
  public function logAcceso() {
    $sql = 'SELECT logacc.*, tus.nombre, tus.apePaterno, tus.apeMaterno 
    FROM log_acceso as logacc 
    LEFT JOIN tbl_analista AS tus ON  logacc.idUsuario = tus.idAnalista';
    
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* obtnego el log de acciones */
  public function logAcciones() {
    $sql = 'SELECT LOAC.*, CAAC.*, CAAC.nombre as nomacci, TBUS.*, LOAC.idUsuario AS pruebousu
    FROM log_acciones AS LOAC
    LEFT JOIN cat_acciones AS CAAC ON LOAC.idAccion = CAAC.idAccion
    LEFT JOIN tbl_analista AS TBUS ON LOAC.idUsuario = TBUS.idAnalista
    ORDER BY LOAC.fecha DESC';
    
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }
  
   
  /* terminados */
  public function numeroterminados(){
    $sql = 'SELECT COUNT(*) AS total FROM tbl_estudios WHERE idUsuario=:idUsuario AND estatus = :estatus';
    $user = 
    [
      'idUsuario'   => $this->idUsuario,
      'estatus'   => 7,
    ];
    

    try { return ($rows = parent::query($sql, $user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
   
  }

  /* solicitados */
  public function numerosolicitados(){
    $sql = 'SELECT COUNT(*) AS total FROM tbl_estudios WHERE idUsuario=:idUsuario AND estatus = :estatus';
    $user = 
    [
      'idUsuario'   => $this->idUsuario,
      'estatus'   => 1,
    ];
    

    try { return ($rows = parent::query($sql, $user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
   
  }

  /* en proceso */
  public function numerosproceso(){
    $sql = 'SELECT COUNT(*) AS total FROM tbl_estudios WHERE idUsuario=:idUsuario AND estatus IN (:estatus)';
    $user = 
    [
      'idUsuario'   => $this->idUsuario,
      'estatus'   => "2,3,4,5",
    ];
    

    try { return ($rows = parent::query($sql, $user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
   
  }

  /* cancelados */
  public function numerocancelados(){
    $sql = 'SELECT COUNT(*) AS total FROM tbl_estudios WHERE idUsuario=:idUsuario AND estatus = :estatus';
    $user = 
    [
      'idUsuario'   => $this->idUsuario,
      'estatus'   => 6,
    ];
    

    try { return ($rows = parent::query($sql, $user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
   
  }


 
}