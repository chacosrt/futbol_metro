<?php 



class torneosModel extends Model {



  public $id;

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



  /* eliminamos el analista */

  public function elimina_torneo(){

    $sql = "DELETE FROM torneos WHERE id=:id";

    $user = [



      'id' => $this->id



    ];



    try { return (parent::query($sql, $user)) ? true : false; } 

    catch (Exception $e) { throw $e; }

  }



  /* function para la edicion del elmento */

  public function edita_torneo(){

    $sql = 'UPDATE torneos 

    SET nombre_torneo=:nombre_torneo, lugar=:lugar, temporada=:temporada, modalidad=:modalidad, dias=:dias, horarios=:horarios, fecha_inicio=:fecha_inicio, fecha_fin=:fecha_fin, categoria=:categoria, img=:img,modificado_por=:modificado_por,modificado_el=:modificado_el

    WHERE id=:id';

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

      'modificado_por' => $this->modificado_por,

      'modificado_el' => $this->modificado_el,

      'id' => $this->id

    ];



    try { return (parent::query($sql, $user)) ? true : false; } 

    catch (Exception $e) { throw $e; }

  }

  /* function para obtener registro de un torneo */

  public function obtengo_torneo(){

    $sql = 'SELECT * FROM torneos WHERE id=:id';

    $user = [



      'id' => $this->id



    ];

    try { return ($rows = parent::query($sql,$user)) ? $rows : false; } 

    

    catch (Exception $e) { throw $e; }

  }
   

}