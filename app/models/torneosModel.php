<?php 



class torneosModel extends Model {



  public $id;

  public $idUsuario;

  /* para la seccion de permisos de usuario */

  public $nombre;

  public $lugar;

  public $temporada;

  public $modalidad;

  public $dias;

  public $horarios;

  public $fecha_inicio;

  public $fecha_fin;

  public $categoria;

  public $archivo;

  public $creado_por;

  public $creado_el;

  public $modificado_por;

  public $modificado_el;





  /* secciond e usuarios */

  public $usuario;

  public $clave;

  public $fechaActivacion;

  public $estatus;

  public $cambio;

  public $fechaBaja;

  public $idCliente;

  public $idEncuestadores;

  public $admin;

  public $superviso;

  

  

  /* funcion para agregar torneo */

  public function guardar_torneo(){

    $sql = 'INSERT INTO torneos 

    (nombre_torneo, lugar, temporada, modalidad, dias, horarios, fecha_inicio, fecha_fin, categoria, img,creado_por,creado_el,modificado_por,modificado_el)

    VALUES(:nombre_torneo, :lugar, :temporada, :modalidad, :dias, :horarios, :fecha_inicio, :fecha_fin, :categoria, :archivo, :creado_por,:creado_el,:modificado_por,:modificado_el)';

    $user = [

      'nombre_torneo' => $this->nombre,

      'lugar' => $this->lugar,

      'temporada' => $this->temporada,

      'modalidad' => $this->modalidad,

      'dias' => $this->dias,

      'horarios' => $this->horarios,

      'fecha_inicio' => $this->fecha_inicio,

      'fecha_fin' => $this->fecha_fin,

      'categoria' => $this->categoria,

      'archivo' => $this->archivo,

      'creado_por' => $this->creado_por,

      'creado_el' => $this->creado_el,

      'modificado_por' => $this->modificado_por,

      'modificado_el' => $this->modificado_el

    ];


    try { return (parent::query($sql, $user)) ? true : false; } 

    catch (Exception $e) { throw $e; }

  }



  /* metodo para consulta e ingresar al sistema */

  public function listaTorneos() {

    $sql = 'SELECT * FROM torneos';

    try { return ($rows = parent::query($sql)) ? $rows : false; } 

    

    catch (Exception $e) { throw $e; }

  }



  /* traemos los coodrinadores */

  public function concecoordinba(){

    $sql = 'SELECT * FROM tbl_analista WHERE coordinador IS NULL';

    try { return ($rows = parent::query($sql)) ? $rows : false; } 

    

    catch (Exception $e) { throw $e; }



  }



  /* traemos los clientes para nuevo analista */

  public function concelcientes(){

    $sql = 'SELECT * FROM tbl_empresas';

    try { return ($rows = parent::query($sql)) ? $rows : false; } 

    

    catch (Exception $e) { throw $e; }



  }



  /* nuevo analista */

  public function nuevoanalista(){

    $sql = "INSERT INTO tbl_analista (nombre,apePaterno,apeMaterno,idPerfil,correo,coordinador,cliente,telefono,celular,archivo,comentarios,usuarioCrea,fechaCrea) 

    VALUES(:nombre,:apePaterno,:apeMaterno,:idPerfil,:correo,:coordinador,:cliente,:telefono,:celular,:archivo,:comentarios,:usuarioCrea,:fechaCrea)";

    $user = [



      'nombre' => $this->nombre,

      'apePaterno' => $this->apePaterno,

      'apeMaterno' => $this->apeMaterno,

      'idPerfil' => $this->idPerfil,

      'correo' => $this->correo,

      'coordinador' => $this->coordinador,

      'cliente' => $this->cliente,

      'telefono' => $this->telefono,

      'celular' => $this->celular,

      'archivo' => $this->archivo,

      'comentarios' => $this->comentarios,

      'usuarioCrea' => IDUSUARIO,

      'fechaCrea' =>now()



    ];



    try { return (parent::query($sql, $user)) ? true : false; } 

    catch (Exception $e) { throw $e; }

  }



  /* eliminamos el analista */

  public function elimiana(){

    $sql = "DELETE FROM tbl_analista WHERE idAnalista=:idAnalista";

    $user = [



      'idAnalista' => $this->idAnalista



    ];



    try { return (parent::query($sql, $user)) ? true : false; } 

    catch (Exception $e) { throw $e; }

  }



  /* obtengo la informacion para la edicion de elemento */

  public function infoedita(){

    $sql = 'SELECT *  FROM tbl_analista WHERE idAnalista=:idAnalista';

    $user = [



      'idAnalista' => $this->idAnalista



    ];

    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 

    

    catch (Exception $e) { throw $e; }

  }



  /* function para la edicion del elmento */

  public function editaelemento(){

    $sql = 'UPDATE tbl_analista 

    SET nombre=:nombre, apePaterno=:apePaterno, apeMaterno=:apeMaterno, idPerfil=:idPerfil, correo=:correo, coordinador=:coordinador, cliente=:cliente, telefono=:telefono, celular=:celular, archivo=:archivo, comentarios =:comentarios

    WHERE idAnalista=:idAnalista';

    $user = [

      'nombre'         => $this->nombre,

      'apePaterno'         => $this->apePaterno,

      'apeMaterno'         => $this->apeMaterno,

      'idPerfil'         => $this->idPerfil,

      'correo'         => $this->correo,

      'coordinador'         => $this->coordinador,

      'cliente'         => $this->cliente,

      'telefono'         => $this->telefono,

      'celular'         => $this->celular,

      'archivo'         => $this->archivo,

      'comentarios'         => $this->comentarios,

      'idAnalista'         => $this->idAnalista

    ];



    try { return (parent::query($sql, $user)) ? true : false; } 

    catch (Exception $e) { throw $e; }

  }



  /* obtenemos informacion para creacion de usuario */

  public function obtengoInfoParausuario(){

    $sql = 'SELECT *  FROM tbl_analista WHERE idAnalista=:idAnalista';

    $user = [



      'idAnalista' => $this->idAnalista



    ];

    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 

    

    catch (Exception $e) { throw $e; }

  }



  /* creamos el nuevo usuario del sistema */

  public function nuevousuariosistema(){

    $sql = "INSERT INTO tbl_usuarios (usuario,clave,nombre,apePaterno,apeMaterno,fechaActivacion,estatus,idAnalista,correo,admini,supervisor) 

    VALUES(:usuario,:clave,:nombre,:apePaterno,:apeMaterno,:fechaActivacion,:estatus,:idAnalista,:correo,:admini,:supervisor)";

    $user = [



      'usuario' => $this->usuario,

      'clave' => $this->clave,

      'nombre' => $this->nombre,

      'apePaterno' => $this->apePaterno,

      'apeMaterno' => $this->apeMaterno,

      'fechaActivacion' => now(),

      'estatus' => 1,

      'idAnalista' => $this->idAnalista,

      'correo' => $this->correo,

      'admini' => $this->admin,

      'supervisor' => $this->supervisor

    ];



    try { return (parent::query($sql, $user)) ? true : false; } 

    catch (Exception $e) { throw $e; }

  }



  /* cambiamos el estatus en la tabla para la creacion de usuario */

  public function cambiosisttabla(){

    $sql = 'UPDATE tbl_analista SET  sistema =:sistema  WHERE idAnalista=:idAnalista';

    $user = [

      'sistema'         => 1,

      'idAnalista'         => $this->idAnalista

    ];



    try { return (parent::query($sql, $user)) ? true : false; } 

    catch (Exception $e) { throw $e; }



  }



  /* eliminamos el usuario del sistema */

  public function bajadesistema(){

    $sql = "DELETE FROM tbl_usuarios WHERE idAnalista=:idAnalista";

    $user = [



      'idAnalista' => $this->idAnalista



    ];



    try { return (parent::query($sql, $user)) ? true : false; } 

    catch (Exception $e) { throw $e; }

  }

  public function cambiosisttablados(){

    $sql = 'UPDATE tbl_analista SET  sistema =:sistema  WHERE idAnalista=:idAnalista';

    $user = [

      'sistema'         => 2,

      'idAnalista'         => $this->idAnalista

    ];



    try { return (parent::query($sql, $user)) ? true : false; } 

    catch (Exception $e) { throw $e; }



  }



  

}