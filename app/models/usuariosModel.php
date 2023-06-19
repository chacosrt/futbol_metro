<?php 

class usuariosModel extends Model {

  public $id;
  public $idUsuario;
  /* para agregar accion al log de acciones */
  public $idAccion;
  public $fecha;

  /* para la seccion de permisos de usuario */
  public $idPermiso;
  public $iMenu;
  public $nombre;
  public $dato;
  public $admin;
  public $consulta;
  public $agregar;
  public $editar;
  public $eliminar;
  public $exportar;
  public $especiales;
  public $padre;
  public $hijo;
  public $datod;
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

  /* metodo para consulta y ingresar al sistema */
  public function concetradoUsuarios() {
    $sql = 'SELECT * FROM tbl_usuarios ;';
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* metodo para dar de baja los usuario */
  public function darbaja(){
    $sql = 'UPDATE tbl_usuarios SET estatus=:estatus WHERE idUsuario=:idUsuario';
    $user = [
      'estatus'         => 2,
      'idUsuario'         => $this->idUsuario,
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }
  
  /* metodo para dar de alta */
  public function daralta(){
    $sql = 'UPDATE tbl_usuarios SET estatus=:estatus WHERE idUsuario=:idUsuario';
    $user = [
      'estatus'         => 1,
      'idUsuario'         => $this->idUsuario,
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* concentrado de modulos en el sistema */
  public function concemudlo(){
    $sql = 'SELECT idMenu,nombre,padre,dato,icono 
    FROM cat_menu
    WHERE estatus = 1 AND padre IS NULL;';
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* guardamos la seleccion de seccion */
  public function selSecc(){
    $sql = "INSERT INTO tbl_usuarios_permisos (idMenu,idUsuario,nombre,dato,icono) 
    VALUES(:idMenu,:idUsuario,:nombre,:dato,:icono)";
    $user = [

      'idMenu' => $this->idMenu,
      'idUsuario' => $this->idUsuario,
      'nombre' => $this->nombre,
      'icono' => $this->icono,
      'dato' => $this->dato

    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* obtengo los submodulos despues de seleccionar la seccion */
  public function obtengosubmou(){
    $sql = "SELECT * FROM cat_menu WHERE padre=:padre AND estatus= :estatus";
    $valor=['padre' => $this->padre,'estatus' => 1];
    try { return ($rows = parent::query($sql,$valor)) ? $rows : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* guardamos la seleccion del submenu */
  public function nuevosubmen(){
    $sql = "INSERT INTO tbl_usuarios_permisos (idMenu,idUsuario,nombre,dato,administrador,consulta,agregar,editar,eliminar,exportar,especiales,padre,icono) 
    VALUES(:idMenu,:idUsuario,:nombre,:dato,:administrador,:consulta,:agregar,:editar,:eliminar,:exportar,:especiales,:padre,:icono)";
    $user = [

      'idMenu' => $this->idMenu,
      'idUsuario' => $this->idUsuario,
      'nombre' => $this->nombre,
      'dato' => $this->dato,
      'administrador' => $this->administrador,
      'consulta' => $this->consulta,
      'agregar' => $this->agregar,
      'editar' => $this->editar,
      'eliminar' => $this->eliminar,
      'exportar' => $this->exportar,
      'especiales' => $this->especiales,
      'icono' => $this->icono,
      'padre' => $this->padre

    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* quitamos la seleccion de seccion con submodulos */
  public function desselSecc(){

    $sql = "DELETE FROM tbl_usuarios_permisos WHERE idMenu=:idMenu AND idUsuario=:idUsuario";
    $user = [

      'idMenu' => $this->idMenu,
      'idUsuario' => $this->idUsuario

    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  public function desselSeccSub(){

    $sql = "DELETE FROM tbl_usuarios_permisos WHERE padre=:padre";
    $user = [

      'padre' => $this->padre

    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* verificamos que secciones tiene el usuario */
  public function secseleccionadas(){
    $sql = 'SELECT * 
    FROM tbl_usuarios_permisos
    WHERE idUsuario = :idUsuario AND padre IS NULL;';
    $user = [

      'idUsuario' => $this->idUsuario

    ];
    
    try { return ($rows = parent::query($sql, $user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* verificamos que submodulos tiene actiavado el usuario */
  public function secobtengosubmou(){
    $sql = "SELECT * FROM tbl_usuarios_permisos WHERE padre=:padre AND idUsuario=:idUsuario";
    $valor=[
      'idUsuario' => $this->idUsuario,
      'padre' => $this->padre
    ];
    try { return ($rows = parent::query($sql,$valor)) ? $rows : false; } 
    catch (Exception $e) { throw $e; }
  }
  
   /* editamos la seleccion del submenu */
   public function nuevosubmenedi(){
    $sql = 'UPDATE tbl_usuarios_permisos 
    SET administrador=:administrador,consulta=:consulta,agregar=:agregar,editar=:editar,eliminar=:eliminar,exportar=:exportar,especiales=:especiales,padre=:padre
    WHERE idPermiso=:idPermiso';
   
    $user = [

      'administrador' => $this->administrador,
      'consulta' => $this->consulta,
      'agregar' => $this->agregar,
      'editar' => $this->editar,
      'eliminar' => $this->eliminar,
      'exportar' => $this->exportar,
      'especiales' => $this->especiales,
      'idPermiso' => $this->idPermiso,
      'padre' => $this->padre

    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }
}