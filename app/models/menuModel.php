<?php 

class menuModel extends Model {

  public $id;
  /* para agregar accion al log de acciones */
  public $idAccion;
  public $fecha;
  public $idUsuario;
  /* para la tabla de de menu */
  public $idMenu;
  public $nombre;
  public $descripcion;
  public $estatus;
  public $padre;
  public $hijo;
  public $nieto;
  public $dato;
  public $icono;

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


  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  /* SECCION PARA EL MODULO DE menus */
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  /* metodo para consulta y ingresar al sistema */
  public function cargopad() {
    $sql = 'SELECT * FROM cat_menu WHERE padre IS NULL AND hijo IS NULL';
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }
  /* cargamos las opciones que son hijos */
  public function cargohij() {
    $sql = 'SELECT * FROM cat_menu WHERE padre IS NOT NULL AND hijo IS NULL;';
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* nuevo modulo  */
  public function numodu(){
    $sql = 'INSERT INTO cat_menu 
    (nombre,descripcion,estatus,padre,hijo,dato,icono)
    VALUES(:nombre,:descripcion,:estatus,:padre,:hijo,:dato,:icono)';
    $user = [
      'nombre'         => $this->nombre,
      'descripcion'         => $this->descripcion,
      'estatus'         => 1,
      'padre'         => $this->padre,
      'hijo'         => $this->hijo,
      'dato'         => $this->dato,
      'icono'         => $this->icono
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* cargamos el concentrado del menu */
  public function concentrado(){
    $sql = 'SELECT * FROM cat_menu';
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* eliminamos la seccion */
  public function elisecc(){
    $sql = 'DELETE FROM cat_menu WHERE idMenu=:idMenu';
    $user = [
      'idMenu'         => $this->idMenu,
      
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* eliminamos las subsecciones */
  public function elisubseccpadre(){
    $sql = 'DELETE FROM cat_menu WHERE padre=:padre';
    $user = [
      'padre'         => $this->dato,
      
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  public function elisubsecchijo(){
    $sql = 'DELETE FROM cat_menu WHERE hijo=:hijo';
    $user = [
      'hijo'         => $this->dato,
      
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }
  
  /* damos de baja la seccion */
  public function darbaja(){
    $sql = 'UPDATE cat_menu SET estatus=:estatus WHERE idMenu=:idMenu';

    $user = [
      'idMenu' => $this->idMenu,
      'estatus' => 2

    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }

  }

  /* dar de alta */
  public function daralta(){
    $sql = 'UPDATE cat_menu SET estatus=:estatus WHERE idMenu=:idMenu';

    $user = [
      'idMenu' => $this->idMenu,
      'estatus' => 1

    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }

  }
  


}