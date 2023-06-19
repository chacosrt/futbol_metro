<?php 



class homeModel extends Model {



  public $id;

  public $option;

  public $val;

  public $created_at;

  public $updated_at;

  public $idUsuario;

  public $usuario;

  public $clave;

  public $tipoCambio;

  public $nuevaClave;

  public $padre;

  public $usuarioconsmnu;



  /* para la consulta de ubi */

  public $conubiuno;

  public $conubidos;

  public $conubitres;

  



  /* metodo para consulta y ingresar al sistema */

  public function consulto() {

    $sql = 'SELECT * FROM usuarios WHERE email = :usuario AND pass = :pass AND estatus=:estatus';

    $data = 

    [

      'usuario'       => $this->usuario,

      'pass'          => $this->pass,

      'estatus'   => "1"

    ];

    try { return ($rows = parent::query($sql, $data)) ? $rows : false; } 

    

    catch (Exception $e) { throw $e; }

  }



  /** Método para agregar agregar el ingreso al sistema usuario  */

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



  /* consulto credenciales para recuperacion */

  public function consultoCredenciales(){

    $sql = 'SELECT * FROM tbl_usuarios WHERE usuario = :usuario AND estatus=:estatus';

    $data = 

    [

      'correo'       => $this->correo,

      'estatus'          => 1

    ];



    try { return ($this->id = parent::query($sql, $data)) ? $this->id : false; } 

    

    catch (Exception $e) { throw $e; }

  }



  /* agregam os el movimiento al log de acciones */

  public function addREcupera() { 

    $sql = 'INSERT INTO log_acciones (idAccion, idUsuario, fecha) VALUES (:idUsuario, :fecha, :otros)';

    $data = 

    [

      'idAccion'       => 1,

      'idUsuario'       => $this->idUsuario,

      'fecha'          => now()

    ];



    try { return ($this->id = parent::query($sql, $data)) ? $this->id : false; } 

    

    catch (Exception $e) { throw $e; }

  }

  

  /* verificamos si ya se guardo el tipo de cambio */

  public function buscotipoCambio(){

    $sql = 'SELECT idTipoCambio FROM his_tipocambio_usd WHERE fecha = :fecha';

    $data =  [ 'fecha'       => nowSim() ];



    try { return ($this->id = parent::query($sql, $data)) ? $this->id : false; } 

    

    catch (Exception $e) { throw $e; }

  }



  /* guardamos el tipo de cambio */

  public function guardoTipoCambio() { 

    $sql = 'INSERT INTO his_tipocambio_usd (moneda,fecha,cambio,horaRegistro)VALUES(:usd,:fecha,:tipoCambioHoy,:horaRgisCambio)';

    $data = 

    [

      'usd'       => 'USD',

      'fecha'          => nowSim(),

      'tipoCambioHoy'       => $this->tipoCambio,

      'horaRgisCambio'          => nowHor()

    ];



    try { return ($this->id = parent::query($sql, $data)) ? $this->id : false; } 

    

    catch (Exception $e) { throw $e; }

  }



  /* activamos la bandera de las claves */

  public function activoBandera(){

    $sql = ' UPDATE tbl_usuarios SET  cambio = :cambio';

    $data =  [ 'cambio'       => 1 ];



    try { return ($this->id = parent::query($sql, $data)) ? $this->id : false; } 

    

    catch (Exception $e) { throw $e; }

  }



  /* funciones para la actualizacion de claves */

  /* consulto la clave actual */

  public function consultaClave(){

    $sql = 'SELECT clave FROM tbl_usuarios WHERE idUsuario = :idUsuario';

    $data =  [ 'idUsuario'       => $this->idUsuario ];



    try { return ($this->id = parent::query($sql, $data)) ? $this->id : false; } 

    

    catch (Exception $e) { throw $e; }

  }



  /* guardo la clave vieja en el historial */

  public function guardoClaveHistorial(){

    $sql = 'INSERT INTO his_claves (idUsuario,clave,fechaRegistro)VALUES(:idUsuario,:clave,:fecha)';

    $data = 

    [

      'idUsuario'       => $this->idUsuario,

      'clave'       => $this->clave,

      'fecha'          => now()

      

    ];



    try { return ($this->id = parent::query($sql, $data)) ? $this->id : false; } 

    

    catch (Exception $e) { throw $e; }

  }



  /* actualizo la nueva clave */

  public function actualizoNuevaClave(){

    $sql = ' UPDATE tbl_usuarios SET  clave = :clave, cambio=:cambio WHERE idUsuario =:idUsuario';

    $data =  [ 

      'clave'       => $this->nuevaClave,

      'idUsuario'       => $this->idUsuario,

      'cambio'       => NULL

    ];



    try { return ($this->id = parent::query($sql, $data)) ? $this->id : false; } 

    

    catch (Exception $e) { throw $e; }



  }



  /* consultamos el fondo pantalla */

  public function consunsultoma(){

    $sql = 'SELECT archivo FROM tbl_portada WHERE estatus = :estatus';

    $data =  [ 'estatus'       => '1' ];



    try { return ($this->id = parent::query($sql, $data)) ? $this->id : false; } 

    

    catch (Exception $e) { throw $e; }

  }



  /* traemois el menu administrador */

  public function obmenuadminPasoUno(){

    $sql = 'SELECT nombre,dato,icono 

    FROM cat_menu

    WHERE estatus = 1 AND padre IS NULL ORDER BY dato ASC';

    try { return ($rows = parent::query($sql)) ? $rows : false; } 

    

    catch (Exception $e) { throw $e; }

  }

  

  /* traemos los submenus */

  public function obmenuadminPasodos(){

    $sql = "SELECT * FROM cat_menu WHERE padre=:padre";

    $valor=[

      'padre' => $this->padre

    ];

    try { return ($rows = parent::query($sql,$valor)) ? $rows : false; } 

    catch (Exception $e) { throw $e; }

  }



  /* funcio para consultar las seccion de un usuario normal */

  public function menuusuarioUno(){

    $sql = "SELECT * FROM tbl_usuarios_permisos WHERE idUsuario=:usuarioconsmnu AND padre IS NULL ORDER BY dato ASC";

    $valor=[

      'usuarioconsmnu' => $this->usuarioconsmnu

    ];

    try { return ($rows = parent::query($sql,$valor)) ? $rows : false; } 

    catch (Exception $e) { throw $e; }

  }



  /* funcion para consultar los submenus de un usuario normal */

  public function menuusuarioDos(){

    $sql = "SELECT * FROM tbl_usuarios_permisos WHERE padre=:padre AND  idUsuario=:usuarioconsmnu ORDER BY dato ASC";

    $valor=[

      'usuarioconsmnu' => $this->usuarioconsmnu,

      'padre' => $this->padre

    ];

    try { return ($rows = parent::query($sql,$valor)) ? $rows : false; } 

    catch (Exception $e) { throw $e; }

  }



  /* consultamos la tabla de empleados */

  public function consultoempleadosubi(){

    $sql = "SELECT * FROM tbl_empleados WHERE idEmpleado=:idEmpleado ";

    $valor=[

      'idEmpleado' => $this->conubiuno

    ];

    try { return ($rows = parent::query($sql,$valor)) ? $rows : false; } 

    catch (Exception $e) { throw $e; }



  }



  /* consulto el puesto del empleado que ingresa */

  public function consultopuestoubi(){

    $sql = "SELECT * FROM tbl_puestos WHERE idPuesto=:idPuesto ";

    $valor=[

      'idPuesto' => $this->conubidos

    ];

    try { return ($rows = parent::query($sql,$valor)) ? $rows : false; } 

    catch (Exception $e) { throw $e; }



  }



  /* obtenemos la clave y el id de la ubicacion */

  public function consultoubiubi(){

    $sql = "SELECT * FROM cat_ubicaciones WHERE idUbicacion=:idUbicacion ";

    $valor=[

      'idUbicacion' => $this->conubitres

    ];

    try { return ($rows = parent::query($sql,$valor)) ? $rows : false; } 

    catch (Exception $e) { throw $e; }

  }

}