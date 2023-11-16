<?php 



class equiposModel extends Model {



  public $id;

  /* para la seccion de permisos de usuario */

  public $nombre;

  public $liga;

  public $delegado;

  public $estatus;

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

  public $cambio;

  public $fechaBaja;

  public $idCliente;

  public $idEncuestadores;

  public $admin;

  public $superviso;

  

  

  /* funcion para agregar torneo */

  public function guardar_equipo(){

    $sql = 'INSERT INTO equipos 

    (nombre, liga, delegado,estatus, img_equipo,creado_por,creado_el,modificado_por,modificado_el)

    VALUES(:nombre, :liga, :delegado, :estatus, :archivo, :creado_por,:creado_el,:modificado_por,:modificado_el)';

    $user = [

      'nombre' => $this->nombre,

      'liga' => $this->liga,

      'delegado' => $this->delegado,

      'estatus' => $this->estatus,

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

  public function listaEquipos() {

    $sql = 'SELECT * FROM equipos,torneos WHERE equipos.liga = torneos.id';

    try { return ($rows = parent::query($sql)) ? $rows : false; } 

    

    catch (Exception $e) { throw $e; }

  }



  /* eliminamos el analista */

  public function elimina_equipo(){

    $sql = "DELETE FROM equipos WHERE id=:id";

    $user = [



      'id' => $this->id



    ];



    try { return (parent::query($sql, $user)) ? true : false; } 

    catch (Exception $e) { throw $e; }

  }



  /* function para la edicion del elmento */

  public function edita_equipo(){

    $sql = 'UPDATE equipos 

    SET nombre=:nombre, liga=:liga, delegado=:delegado, estatus=:estatus, img_equipo=:archivo,modificado_por=:modificado_por,modificado_el=:modificado_el

    WHERE id=:id';

    $user = [

      'nombre' => $this->nombre,

      'liga' => $this->liga,

      'delegado' => $this->delegado,

      'estatus' => $this->estatus,

      'archivo' => $this->archivo,

      'modificado_por' => $this->modificado_por,

      'modificado_el' => $this->modificado_el,

      'id' => $this->id

    ];


    try { return (parent::query($sql, $user)) ? true : false; } 

    catch (Exception $e) { throw $e; }

  }

  /* function para obtener registro de un torneo */

  public function obtengo_equipo(){

    $sql = 'SELECT * FROM equipos,torneos WHERE equipos.liga = torneos.id AND equipos.id=:id';

    $user = [



      'id' => $this->id



    ];

    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 

    

    catch (Exception $e) { throw $e; }

  }
   

}