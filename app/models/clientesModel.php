<?php 

class clientesModel extends Model {

  public $id;
  public $idUsuario;
  /* para agregar accion al log de acciones */
  public $idAccion;
  public $fecha;

  /* para la seccion de permisos de usuario */
  public $idEmpresa; 
  public $nombre; 
  public $direccion; 
  public $telefono; 
  public $correo; 
  public $contacto; 
  public $paginaWeb; 
  public $usuarioCrea; 
  public $fechaCrea; 
  public $comentarios; 
  public $archivo;
  public $celular;
  public $idEmpCliente;
  public $sistema;

  public $idCliente;
  public $usuario;
  public $clave;
  
  
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
  public function cargoempresa() {
    $sql = 'SELECT * FROM tbl_empresas';
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* traemos los coodrinadores */
  public function cargoempre(){
    $sql = 'SELECT * FROM tbl_empresas ';
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }

  }

  /* traemos los clientes para nuevo analista */
  public function concelcientes(){
    $sql = 'SELECT logacc.*, tus.nombre AS nombreEmpr 
    FROM tbl_empresasclientes as logacc 
    LEFT JOIN tbl_empresas AS tus ON  logacc.idEmpresa = tus.idEmpresa';
    try { return ($rows = parent::query($sql)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }

  }

  /* nuevo analista */
  public function nuevamepresa(){
    $sql = "INSERT INTO tbl_empresas (nombre,direccion,telefono,correo,contacto,paginaWeb,usuarioCrea,fechaCrea,comentarios,archivo) 
    VALUES(:nombre,:direccion,:telefono,:correo,:contacto,:paginaWeb,:usuarioCrea,:fechaCrea,:comentarios,:archivo)";
    $user = [

      'nombre' => $this->nombre,
      'direccion' => $this->direccion,
      'telefono' => $this->telefono,
      'correo' => $this->correo,
      'contacto' => $this->contacto,
      'paginaWeb' => $this->paginaWeb,
      'usuarioCrea' => IDUSUARIO,
      'fechaCrea' =>now(),
      'comentarios' => $this->comentarios,
      'archivo' => $this->archivo
      
      

    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* nuevocliente */
  public function nuevocliente(){
    $sql = "INSERT INTO tbl_empresasclientes (idEmpresa,nombre,correo,telefono,celular,comentarios,usuarioCrea,fechaCrea) 
    VALUES(:idEmpresa,:nombre,:correo,:telefono,:celular,:comentarios,:usuarioCrea,:fechaCrea)";
    $user = [

      'nombre' => $this->nombre,
      'idEmpresa' => $this->idEmpresa,
      'telefono' => $this->telefono,
      'correo' => $this->correo,
      'celular' => $this->celular,
      'comentarios' => $this->comentarios,
      'usuarioCrea' => IDUSUARIO,
      'fechaCrea' =>now()


    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }

  }

  /* eliminamos el empresas */
  public function eliminoempresa(){
    $sql = "DELETE FROM tbl_empresas WHERE idEmpresa=:idEmpresa";
    $user = [

      'idEmpresa' => $this->idEmpresa

    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* obtengo la informacion para la edicion de elemento */
  public function infoedita(){
    $sql = 'SELECT *  FROM tbl_empresas WHERE idEmpresa=:idEmpresa';
    $user = [

      'idEmpresa' => $this->idEmpresa

    ];
    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  public function infoeditacli(){
    $sql = 'SELECT *  FROM tbl_empresasclientes WHERE idEmpCliente=:idEmpCliente';
    $user = [

      'idEmpCliente' => $this->idEmpCliente

    ];
    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }


  /* function para editar empresa */
  public function editoempresas(){
    $sql = 'UPDATE tbl_empresas SET nombre =:nombre,direccion =:direccion,telefono =:telefono,correo =:correo,contacto =:contacto,paginaWeb =:paginaWeb,comentarios =:comentarios,archivo =:archivo
      WHERE idEmpresa=:idEmpresa';
    $user = [
      'idEmpresa' => $this->idEmpresa,
      'nombre' => $this->nombre,
      'direccion' => $this->direccion,
      'telefono' => $this->telefono,
      'correo' => $this->correo,
      'contacto' => $this->contacto,
      'paginaWeb' => $this->paginaWeb,
      'comentarios' => $this->comentarios,
      'archivo' => $this->archivo
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* elimino cliente */ 
  public function eliminoecliente(){
    $sql = "DELETE FROM tbl_empresasclientes WHERE idEmpCliente=:idEmpCliente";
    $user = [

      'idEmpCliente' => $this->idEmpCliente

    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* editar cliente */
  public function editoclien(){
    $sql = 'UPDATE tbl_empresasclientes SET nombre =:nombre,correo =:correo,telefono =:telefono,celular =:celular,comentarios =:comentarios
    WHERE idEmpCliente=:idEmpCliente';
    $user = [
      'idEmpCliente' => $this->idEmpCliente,
      'nombre' => $this->nombre,
      'celular' => $this->celular,
      'telefono' => $this->telefono,
      'correo' => $this->correo,
      'comentarios' => $this->comentarios
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }


  /* obtenemos informacion para creacion de usuario */
  public function obtengoInfoParausuario(){
    $sql = 'SELECT *  FROM tbl_empresasclientes WHERE idEmpCliente=:idEmpCliente';
    $user = [

      'idEmpCliente' => $this->idEmpCliente

    ];
    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 
    
    catch (Exception $e) { throw $e; }
  }

  /* creamos el nuevo usuario del sistema */
  public function nuevousuariosistema(){
    $sql = "INSERT INTO tbl_usuarios (usuario,clave,nombre,fechaActivacion,estatus,idCliente,correo) 
    VALUES(:usuario,:clave,:nombre,:fechaActivacion,:estatus,:idCliente,:correo)";
    $user = [

      'usuario' => $this->usuario,
      'clave' => $this->clave,
      'nombre' => $this->nombre,
      'fechaActivacion' => now(),
      'estatus' => 1,
      'idCliente' => $this->idCliente,
      'correo' => $this->correo
      
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }

  /* cambiamos el estatus en la tabla para la creacion de usuario */
  public function cambiosisttabla(){
    $sql = 'UPDATE tbl_empresasclientes SET  sistema =:sistema  WHERE idEmpCliente=:idEmpCliente';
    $user = [
      'sistema'         => 1,
      'idEmpCliente'         => $this->idEmpCliente
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }

  }

  /* eliminamos el usuario del sistema */
  public function bajadesistema(){
    $sql = "DELETE FROM tbl_usuarios WHERE idCliente=:idCliente";
    $user = [

      'idCliente' => $this->idEmpCliente

    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }
  }
  public function cambiosisttablados(){
    $sql = 'UPDATE tbl_empresasclientes SET  sistema =:sistema  WHERE idEmpCliente=:idEmpCliente';
    $user = [
      'sistema'         => $this->sistema,
      'idEmpCliente'         => $this->idEmpCliente
    ];

    try { return (parent::query($sql, $user)) ? true : false; } 
    catch (Exception $e) { throw $e; }

  }

  
}