<?php 

class soporteModel extends Model {

  public $id;
  public $idUsuario;
  public $idPortada;
  public $archivo;
  public $estatus;
  public $usuarioCrea;
  public $fechaCrea;
  public $idSoporte;
  public $respuesta;
  public $calificacion;
  public $titulo;
  public $descripcion;
  public $pregunta;
  public $idPregunta;
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



  /* metodo para caragr el historial de preguntas frecuentes */
  public function concentradoPreguntas() {
    $sql = 'SELECT *  FROM tbl_preguntas';

    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* metodo para el historial de tickets */
  public function concentradoHistorial() {
    $sql = 'SELECT * FROM tbl_soporte WHERE usuarioCrea=:usuarioCrea';
    $user = ['usuarioCrea'         => $_SESSION['idUsuario']  ];

    try { return ($rows = parent::query($sql, $user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* metodo para ver el historial de la preguntas */
  public function verrespuestas() {
    $sql = 'SELECT * FROM tbl_soporte_respuesta WHERE idSoporte=:idSoporte';
    $user = ['idSoporte'         => $this->idSoporte ];

    try { return ($rows = parent::query($sql, $user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* metodo para verificar si existe un ticket abierto por paret del usuario  */
  public function infoticket(){
    $sql = 'SELECT * FROM tbl_soporte WHERE usuarioCrea=:usuarioCrea AND estatus=:estatus';
    $user = [
      'usuarioCrea'         => IDUSUARIO,
      'estatus'         => 1,
   ];

    try { return ($rows = parent::query($sql, $user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }

  }
  
  /* para mostrar las respuestas del ticket abierto  */
  public function restiabierto(){

    $sql = 'SELECT TSOR.*,TUS.nombre,TUS.apePaterno,TUS.apeMaterno 
    FROM tbl_soporte_respuesta AS TSOR
    LEFT JOIN tbl_usuarios AS TUS ON TSOR.usuarioCrea = TUS.idUsuario
    WHERE TSOR.idSoporte =:idSoporte';

    $user = [ 'idSoporte'         => $this->idSoporte ];

    try { return ($rows = parent::query($sql, $user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }

  }
  
  /* para cuando pone una respuesta el usuario  */
  public function contestaUsu(){
    $sql = 'INSERT INTO tbl_soporte_respuesta 
    (idSoporte,respuesta,usuarioCrea,fechaCrea,tipo)
    VALUES(:idSoporte,:respuesta,:idUsuario,:fecha,:tipo)';
    $user = [
      'idSoporte'         => $this->idSoporte,
      'respuesta'         => $this->respuesta,
      'idUsuario'         => $_SESSION['idUsuario'],
      'fecha'         => now(),
      'tipo'         => 1
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }

  }

  /* funcion para cuando el usuario elimina un ticket */
  public function eliminausua(){
    $sql = 'UPDATE tbl_soporte SET estatus=:estatus WHERE idSoporte=:idSoporte';
    $user = [
      'idSoporte'         => $this->idSoporte,
      'estatus'         => 3
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }

  }
  
  /* funcion para terminar el ticket por parte del usuario */
  public function termitic(){
    $sql = 'UPDATE tbl_soporte SET estatus=:estatus,calificacion=:calificacion WHERE idSoporte=:idSoporte';
    $user = [
      'idSoporte'         => $this->idSoporte,
      'calificacion'         => $this->calificacion,
      'estatus'         => 2
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }

  }

  /* funcion para que el cliente agregre un nuevo ticket de soporte */
  public function nuevosoporteusuario(){
    $sql = 'INSERT INTO tbl_soporte 
    (titulo, descripcion, archivo, usuarioCrea, fechaCrea, estatus)
    VALUES(:titulo,:descripcion,:archivo,:usuarioCrea,:fechaCrea,:estatus)';
    $user = [
      'titulo'         => $this->titulo,
      'descripcion'         => $this->descripcion,
      'archivo'         => $this->archivo,
      'usuarioCrea'         => IDUSUARIO,
      'fechaCrea'         => now(),
      'estatus'         => 1
      
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }

  }
  
  /* SECCION PARA LA ADMINISTRACION */

  /* carga de soportes vivos */
  public function soportesadmin(){
    $sql = 'SELECT * FROM tbl_soporte WHERE estatus=:estatus';
    $user = ['estatus'         => 1  ];

    try { return ($rows = parent::query($sql, $user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
    
  }

  /* carga de preguntas frecuentes */
  public function faqadmin(){
    $sql = 'SELECT *  FROM tbl_preguntas';

    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }

  }

  /* mostramos todos los soportes para el adminsitrador */
  public function historialadmin(){
    $sql = 'SELECT * FROM tbl_soporte WHERE estatus!=:estatus';
    $user = ['estatus'         => 1  ];

    try { return ($rows = parent::query($sql, $user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }

  }
  
  /* contesta admin */
  public function contestaAdmin(){
    $sql = 'INSERT INTO tbl_soporte_respuesta 
    (idSoporte,respuesta,usuarioCrea,fechaCrea,tipo)
    VALUES(:idSoporte,:respuesta,:idUsuario,:fecha,:tipo)';
    $user = [
      'idSoporte'         => $this->idSoporte,
      'respuesta'         => $this->respuesta,
      'idUsuario'         => $_SESSION['idUsuario'],
      'fecha'         => now(),
      'tipo'         => 2
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }

  }

  /* para eliminar por parte del admin */
   /* funcion para cuando el usuario elimina un ticket */
   public function eliadmin(){
    $sql = 'UPDATE tbl_soporte SET estatus=:estatus WHERE idSoporte=:idSoporte';
    $user = [
      'idSoporte'         => $this->idSoporte,
      'estatus'         => 3
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }

  }

   /* funcion para terminar el ticket por parte del admink */
   public function termiticadmin(){
    $sql = 'UPDATE tbl_soporte SET estatus=:estatus WHERE idSoporte=:idSoporte';
    $user = [
      'idSoporte'         => $this->idSoporte,
      'estatus'         => 2
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }

  }

  /* agregamos una nueva pregunta frecuente */
    /* funcion para que el cliente agregre un nuevo ticket de soporte */
  public function nuevaprefre(){
      $sql = 'INSERT INTO tbl_preguntas 
      ( pregunta, respuesta, usuarioCrea, fechaCrea)
      VALUES(:pregunta, :respuesta, :usuarioCrea, :fechaCrea)';
      $user = [
        'pregunta'         => $this->pregunta,
        'respuesta'         => $this->respuesta,
        'usuarioCrea'         => IDUSUARIO,
        'fechaCrea'         => now()
        
      ];
  
      try { return (parent::query($sql, $user)) ? true : false; } 
      catch (Exception $e) { throw $e; }
  
  }

   /* funcion para terminar el ticket por parte del admink */
   public function eliprfrecu(){
    $sql = 'DELETE FROM tbl_preguntas WHERE idPregunta=:idPregunta';
    $user = [
      'idPregunta'         => $this->idPregunta,
      
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }

  }

  


}