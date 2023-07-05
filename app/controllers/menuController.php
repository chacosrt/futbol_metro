<?php 



class menuController extends Controller {



  function __construct(){ }

  

  /* funcio para salir del sistema */

  function salir(){ 

    $_SESSION = array();

    session_destroy();

    json_output(json_build(200));

  }



  /* funcion que entra por default */

  function index(){ 

    if($_SESSION['nombre'] != NULL){ View::render('menu');  }

    else{ View::render('home'); }

  

  }



  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  /* SECCION PARA EL MODULO DE menu */

  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /* modulo de empleados */

  function carpa(){ 

  

    try {

      $movements          = new menuModel;

      $movs               = $movements->cargopad();

      /* regresamos la informacion */

      $data = get_module('padreSelect', ['movements' => $movs]);

      json_output(json_build(200, $data));

    }

    /* esto es para mostrar el error */

    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  

  }



  /* modulo de hijos */

  function carhi(){

    try {

      $movements          = new menuModel;

      $movs               = $movements->cargohij();

      /* regresamos la informacion */

      $data = get_module('hijoSelect', ['movements' => $movs]);

      json_output(json_build(200, $data));

    }

    /* esto es para mostrar el error */

    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

  

  /* nueva seccion con la creacion de archivos*/

  function nuevasecci(){

    try {

      $movements          = new menuModel;

      

      $movements->nombre = $_POST['nombre'];

      $movements->descripcion = $_POST['descripcion'];

      $movements->padre = ($_POST['padre'] == '')? NULL : $_POST['padre'];

      $movements->hijo = ($_POST['hijo'] == '')? NULL : $_POST['hijo'];

      $movements->dato = $_POST['dato'];

      $movements->icono = $_POST['icono'];

      /* variable para guardar la accion */

      $movements->idAccion = 107;

      /* variables para crear los archivos */

      $padre = $movements->padre;

      $hijo = $movements->hijo;

      $dato = $movements->dato;

      

      /* verificamos que tipo de seccion se creo */

      /* en caso de que sea un padre  */

      if($padre == '' && $hijo == ''){

        /* carpeta de archivo en viwes */



        /* nombre de la carpeta */

        $nomcarpeta = $dato;

        $nombrearchivo = $dato;

        $dircarpeta = $_SERVER['DOCUMENT_ROOT']."/appMti/templates/views/".$nomcarpeta."/";



        /* verificamos si existe la carpeta en caso negativo la creamos */

        if(file_exists($dircarpeta)){ json_output(json_build(400, null, 'Lo sentimos ya existe una carpeta con ese nombre corto')); }

        else{ mkdir($_SERVER['DOCUMENT_ROOT']."/appMti/templates/views/".$nomcarpeta, 0777);  }

        

        /* en la creacion de archivos se generan valor __________________ los cuales seran remplazados para trabajar en el archivo */

        

        /* archivo en views */

        $archivovista = "

          <?php 

            require INCLUDES.'inc_header.php'; //cabezera

            require INCLUDES.'inc_header_barra.php'; //barra superior

            require INCLUDES.'inc_header_menu.php'; //Menu

          ?>

      

          <div class='wrapper'>

            <div class='content-wrapper'>

            

              <section class='content-header'>

                <h1>  Modulo de <small> ________</small>  </h1>

                <ol class='breadcrumb'>

                  <li><a href='panel'><i class='fa fa-dashboard'></i> Inicio</a></li>

                  <li class='active'>seccion</li>

                </ol>

              </section>

              <br>



              <section class='content'>

                <!--seccion de botones de acciones-->

                <div class='row'>

                  <div class='col-md-10'></div>

                  <div class='col-md-2'><button type='button' class='btn btn-block btn-primary btn-sm' data-toggle='modal' data-target='#nuevo' >Nuevo___________________</button></div>

                </div>

          

                <!--seccion de contenido de modulo-->

                <br>

                <div class='row'>

                  <div class='col-xs-12'>

                    <div class='box'>

                      <div class='box-header'><h3 class='box-title'>Concentrado de ______________</h3></div>

                      <!-- tabla con el concentrado-->

                      <div class='box-body'><div class='tbl___________'></div></div>

                    </div>

                  </div>

                </div>

          

              </section>

          

            </div>



          <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->

          <!-- seccion de modals -->

          <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->

          

          <!--PARA LA SECCION DE SOLICITUD SIN ACEPTAR-->

          <!-- modal para agregar nuevo __________________-->

          <div class='modal inmodal fade' id='nuevo' tabindex='-1' role='dialog'  aria-hidden='true'>

              <div class='modal-dialog modal-lg'>

                  <div class='modal-content'>

                      

                    <div class='modal-header'>

                        <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>

                        <h4 class='modal-title'><b>Nueva__________________________</b></h4>

                    </div>

          

                    <div class='modal-body'>

                    <form class='nueva________________________'>

          

                    </div>

          

                      <div class='modal-footer'>

                          <button type='button' class='btn btn-white' data-dismiss='modal'>Cerrar</button>

                          <button type='submit' class='btn btn-primary'><b>Nuevo _________________________</b></button>

                      </div>

                      

                      </form>

                  </div>

              </div>

          </div>

      

          <!-- modal para eliminar _____________________-->

          <div class='modal inmodal modal-danger fade' id='eliminar' tabindex='-1' role='dialog'  aria-hidden='true'>

              <div class='modal-dialog modal-lg'>

                  <div class='modal-content'>

                      <div class='modal-header'>

                          <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>

                          <h4 class='modal-title'>Eliminar ___________________________</h4>

                      </div>

                      <div class='modal-body'>

                          <form class='__________________________'>

                          <input type='hidden' name='idPuesto' id='idPuesto'>

                          <div class='alert alert-danger text-center'><b>Esta seguro de eliminar ________________________ </b></div>

          

                      </div>

                      <div class='modal-footer'>

                      <button type='button' class='btn btn-outline pull-left' data-dismiss='modal'>Cerrar</button>

                          <button type='submit' class='btn btn-danger'>Eliminar _____________________________</button>

                      </div>

                      </form>

                  </div>

              </div>

          </div>

          

          <!-- editar solicitud  -->

          <div class='modal inmodal fade' id='editar' tabindex='-1' role='dialog'  aria-hidden='true'>

              <div class='modal-dialog modal-lg'>

                  <div class='modal-content'>

                      

                    <div class='modal-header'>

                        <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>

                        <h4 class='modal-title'><b>Edición de ___________________________</b></h4>

                    </div>

          

                    <div class='modal-body'>

                        

                      <form class='edisolicitud'>

                      <input type='hidden' name='id__________' id='id__________' >

                      <div class='foredi___________________'></div>

                      

                    </div>

          

                      <div class='modal-footer'>

                          <button type='button' class='btn btn-white' data-dismiss='modal'>Cerrar</button>

                          <button type='submit' class='btn btn-primary'><b>Editar______________________</b></button>

                      </div>

                      

                      </form>

                  </div>

              </div>

          </div>

        <?php require INCLUDES.'inc_footer_v2.php'; ?>";

        $nombrearchivov = $nombrearchivo."View.php";

        $miArchivov = fopen($_SERVER['DOCUMENT_ROOT']."/appMti/templates/views/".$nomcarpeta."/".$nombrearchivov, "w+");

        $phpv = $archivovista;

        fwrite($miArchivov, $phpv);

        fclose($miArchivov);



        /* archivo controlador */

        $archivocontrolador = "<?php 



          class \$nombrearchivoController extends Controller {

        

            function __construct(){ }

            

            /* funcio para salir del sistema */

            function salir(){ 

              \$_SESSION = array();

              session_destroy();

              json_output(json_build(200));

            }

          

            /* funcion que entra por default */

            function index(){ 

              \$_SESSION['paraArchivo'] = NULL;

              \$_SESSION['paraArchivo'] = '\$nomcarpeta';

              if(\$_SESSION['idUsuario'] != NULL){ View::render('index');  }

              else{ View::render('regreso'); }

            

            }

          }

        ";

        $nombrearchivoc = $nombrearchivo."Controller.php";

        $miArchivoc = fopen($_SERVER['DOCUMENT_ROOT']."/appMti/app/controllers/".$nombrearchivoc, "w+");

        $phpc = $archivocontrolador;

        fwrite($miArchivoc, $phpc);

        fclose($miArchivoc);



        /* archivo modelo */

        $archivomodelo = " <?php 

             class \$nombrearchivoModel extends Model {



                /* declaracion  de variables de las tablas involucradas*/

                public \$id;



                /* funcion para agregar movimiento */

                public function movisis(){

                    \$sql = 'INSERT INTO log_acciones 

                    (idAccion, idUsuario, fecha)

                    VALUES(:idAccion, :idUsuario, :fecha)';

                    \$user = [

                    'idAccion'         => \$this->idAccion,

                    'idUsuario'         => IDUSUARIO,

                    'fecha'         => now()

                    ];

                    try { return (parent::query(\$sql, \$user)) ? true : false; } 

                    catch (Exception \$e) { throw \$e; }

                }



              ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

              /* SECCION PARA _________________________ */

              ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



              /* consultar ________________*/

              public function ____________(){

                \$sql = 'SELECT * FROM _____';

                try { return (\$rows = parent::query(\$sql)) ? \$rows : false; } 

                catch (Exception \$e) { throw \$e; }

              }



              /* agregar______________ */

              public function _______(){

                \$sql = 'INSERT INTO ____ (______) VALUES(:________)';

                \$user = [

                  '___'         => \$this->____,

                  '____'         => \$this->_____

                ];

                try { return (parent::query(\$sql, \$user)) ? true : false; } 

                catch (Exception \$e) { throw \$e; }

              }



              /* eliminar */

              public function ______(){

                \$sql = 'DELETE FROM ______ WHERE _______=:_______';

                \$user = [

                  '_______'         => \$this->_______,

                ];

                try { return (parent::query(\$sql, \$user)) ? true : false; } 

                catch (Exception \$e) { throw \$e; }

              }



              /* editar */

              public function ______(){

                \$sql = 'UPDATE _____ SET ____=:_____,  WHERE ________=:_______';

                \$user = [

                  '_____' => \$this->_____,

                  '_____' => \$this->_____



                ];

                try { return (parent::query(\$sql, \$user)) ? true : false; } 

                catch (Exception \$e) { throw \$e; }

              }

        }";

        $nombrearchivom = $nombrearchivo."Model.php";

        $miArchivom = fopen($_SERVER['DOCUMENT_ROOT']."/appMti/app/models/".$nombrearchivom, "w+");

        $phpm = $archivomodelo;

        fwrite($miArchivom, $phpm);

        fclose($miArchivom);



        /* archivo js */

        $archivojs = "//////////////////////////////////////////////////////////////////////////////////

          //SECCION PARA MODALS Y FUNCION DE JAVASCRIPT

          //////////////////////////////////////////////////////////////////////////////////

          

          /* modal para eliminar */

          $('#eliminar').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget); // Button that triggered the modal

            var recipient = button.data('unoo');

            var modal = $(this);

            modal.find('.modal-body #______').val(recipient);

          });

          

          /* modal para editar */

          $('#editar').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget); // Button that triggered the modal

            var valor = button.data('unoo');

            var modal = $(this);

            modal.find('.modal-body #_____').val(valor);

            data        = new FormData($('._______________').get(0))

            var wrapper = $('.________________');

            //data.push(['valor',valor]);

            $.ajax({

              url: '\$nomcarpeta/______________',

              type: 'POST',

              dataType: 'json',

              contentType: false,

              processData: false,

              cache: false,

              data: data,

              /* con esta linea mostramos el cargador de los formularios */

              beforeSend: function() { wrapper.waitMe(); }

            }).done(function(res) {

              if(res.status === 200) {  

                wrapper.html(res.data); 

                //qactualizamos la seccion de contenido

                _______();

              } 

              else { 

                toastr.error(res.msg, '¡Upss!');

                wrapper.html('');

              }

            })

            .fail(function(err) {

              toastr.error('Hubo un error en la petición', '¡Upss!');

              wrapper.html('');

            })

            .always(function() {

              wrapper.waitMe('hide');

            })

          });

          //////////////////////////////////////////////////////////////////////////////////



          //////////////////////////////////////////////////////////////////////////////////

          // SECCION PARA FUNCION QUE INICIARAN A CARGAR EL DOCUMENTO                    ///

          //////////////////////////////////////////////////////////////////////////////////

          

          $(document).ready(function() {



          /* opciones generales del toaster */

          toastr.options = { 'closeButton': true, 'debug': false, 'newestOnTop': true, 'progressBar': true, 'positionClass': 'toast-bottom-full-width', 'preventDuplicates': true, 'onclick': null,  'showDuration': '200', 'hideDuration': '1000', 'timeOut': '2000', 'extendedTimeOut': '1000', 'showEasing': 'swing', 'hideEasing': 'linear', 'showMethod': 'fadeIn', 'hideMethod': 'fadeOut'}

          

          /* boton de salida */

          $('#btnSalidar').on('click', salgosistema);/* con eso hacemos que solo funcione el boton que se seleccione */

          function salgosistema(event) {

            $.ajax({

              url: 'salir/salgo',

              type: 'post',

              dataType: 'json',

              contentType: false,

              processData: false,

              cache: false,

            }).done(function(res) { if(res.status === 200) { window.location='index.php';  } })

            .fail(function(err) { toastr.error('Hubo un error en la petición', '¡Upss!'); })

          };

        

          //////////////////////////////////////////////////////////////////////////////////

          //SECCION DE FUNCIONES Y CARGAS

          //////////////////////////////////////////////////////////////////////////////////

        

          /* cargamos el concentrado de la secciones */

          _________();

          function _______________() {

            /* seleccionamos el div en que vamos a modificar los valores */

            var wrapper = $('.tblmenus');

            $.ajax({

              url: '\$nomcarpeta/________________________',

              type: 'POST',

              dataType: 'json',

              contentType: false,

              processData: false,

              cache: false,

              /* con esta linea mostramos el cargador de los formularios */

              beforeSend: function() { wrapper.waitMe();  }

            }).done(function(res) {

              if(res.status === 200) {  wrapper.html(res.data); } 

              else { 

                toastr.error(res.msg, '¡Upss!');

                wrapper.html('');

              }

            }).fail(function(err) {

              toastr.error('Hubo un error en la petición', '¡Upss!');

              wrapper.html('');

            }).always(function() {

              wrapper.waitMe('hide');

            })

          }

          //////////////////////////////////////////////////////////////////////////////////

        

          //////////////////////////////////////////////////////////////////////////////////

          //SECCION PARA EL ENVIO DE FORMULARIO Y/O ELEMENTOS

          //////////////////////////////////////////////////////////////////////////////////

        

          /* SECCION PARA LA SOLICITUD DE PUESTO */

          /* generamos la nueva seccion */

          $('body').on('submit', '._______', ___________);

          function ___________(event) {

            event.preventDefault();

            var form    = $('.____________');

            data        = new FormData(form.get(0));

            __________ = $('#__________').val();

            // Validacion campo form

            if(________ === '' ) {

              toastr.error('______________', '¡Upss!');

              return;

            }

            // AJAX

            $.ajax({

              url: '\$nomcarpeta/_______________',

              type: 'post',

              dataType: 'json',

              contentType: false,

              processData: false,

              cache: false,

              data : data,

              beforeSend: function() { form.waitMe(); }

            }).done(function(res) {

              if(res.status === 200) {

                toastr.success(res.msg, '¡Bien!');

                form.trigger('reset');

                $('#___________').modal('hide');

                ____________();

              } 

              else { toastr.error(res.msg, '¡Upss!'); }

            }).fail(function(err) {

              toastr.error('Hubo un error en la petición', '¡Upss!');

            }).always(function() {

              form.waitMe('hide');

            })

          }

          //////////////////////////////////////////////////////////////////////////////////

        });";

        $nombrearchivoj = $nombrearchivo.".js";

        $miArchivoj = fopen($_SERVER['DOCUMENT_ROOT']."/appMti/assets/js/".$nombrearchivoj, "w+");

        $phpj = $archivojs;

        fwrite($miArchivoj, $phpj);

        fclose($miArchivoj);



        



      }

      

      /* creamos los archivos cuando son hijos */

      if($padre != ''){



        /* nombre de la carpeta */

        $nomcarpeta = $dato;

        $nombrearchivo = $dato;

        $dircarpeta = $_SERVER['DOCUMENT_ROOT']."/appMti/templates/views/".$nomcarpeta."/";



        /* en la creacion de archivos se generan valor __________________ los cuales seran remplazados para trabajar en el archivo */

        /* archivo en views */

        $archivovista = "

          <?php 

            require INCLUDES.'inc_header.php'; //cabezera

            require INCLUDES.'inc_header_barra.php'; //barra superior

            require INCLUDES.'inc_header_menu.php'; //Menu

          ?>

      

          <div class='wrapper'>

            <div class='content-wrapper'>

            

              <section class='content-header'>

                <h1>  Modulo de <small> ________</small>  </h1>

                <ol class='breadcrumb'>

                  <li><a href='panel'><i class='fa fa-dashboard'></i> Inicio</a></li>

                  <li class='active'>seccion</li>

                </ol>

              </section>

              <br>



              <section class='content'>

                <!--seccion de botones de acciones-->

                <div class='row'>

                  <div class='col-md-10'></div>

                  <div class='col-md-2'><button type='button' class='btn btn-block btn-primary btn-sm' data-toggle='modal' data-target='#nuevo' >Nuevo___________________</button></div>

                </div>

          

                <!--seccion de contenido de modulo-->

                <br>

                <div class='row'>

                  <div class='col-xs-12'>

                    <div class='box'>

                      <div class='box-header'><h3 class='box-title'>Concentrado de ______________</h3></div>

                      <!-- tabla con el concentrado-->

                      <div class='box-body'><div class='tbl___________'></div></div>

                    </div>

                  </div>

                </div>

          

              </section>

          

            </div>



          <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->

          <!-- seccion de modals -->

          <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->

          

          <!--PARA LA SECCION DE SOLICITUD SIN ACEPTAR-->

          <!-- modal para agregar nuevo __________________-->

          <div class='modal inmodal fade' id='nuevo' tabindex='-1' role='dialog'  aria-hidden='true'>

              <div class='modal-dialog modal-lg'>

                  <div class='modal-content'>

                      

                    <div class='modal-header'>

                        <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>

                        <h4 class='modal-title'><b>Nueva__________________________</b></h4>

                    </div>

          

                    <div class='modal-body'>

                    <form class='nueva________________________'>

          

                    </div>

          

                      <div class='modal-footer'>

                          <button type='button' class='btn btn-white' data-dismiss='modal'>Cerrar</button>

                          <button type='submit' class='btn btn-primary'><b>Nuevo _________________________</b></button>

                      </div>

                      

                      </form>

                  </div>

              </div>

          </div>

      

          <!-- modal para eliminar _____________________-->

          <div class='modal inmodal modal-danger fade' id='eliminar' tabindex='-1' role='dialog'  aria-hidden='true'>

              <div class='modal-dialog modal-lg'>

                  <div class='modal-content'>

                      <div class='modal-header'>

                          <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>

                          <h4 class='modal-title'>Eliminar ___________________________</h4>

                      </div>

                      <div class='modal-body'>

                          <form class='__________________________'>

                          <input type='hidden' name='idPuesto' id='idPuesto'>

                          <div class='alert alert-danger text-center'><b>Esta seguro de eliminar ________________________ </b></div>

          

                      </div>

                      <div class='modal-footer'>

                      <button type='button' class='btn btn-outline pull-left' data-dismiss='modal'>Cerrar</button>

                          <button type='submit' class='btn btn-danger'>Eliminar _____________________________</button>

                      </div>

                      </form>

                  </div>

              </div>

          </div>

          

          <!-- editar solicitud  -->

          <div class='modal inmodal fade' id='editar' tabindex='-1' role='dialog'  aria-hidden='true'>

              <div class='modal-dialog modal-lg'>

                  <div class='modal-content'>

                      

                    <div class='modal-header'>

                        <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>

                        <h4 class='modal-title'><b>Edición de ___________________________</b></h4>

                    </div>

          

                    <div class='modal-body'>

                        

                      <form class='edisolicitud'>

                      <input type='hidden' name='id__________' id='id__________' >

                      <div class='foredi___________________'></div>

                      

                    </div>

          

                      <div class='modal-footer'>

                          <button type='button' class='btn btn-white' data-dismiss='modal'>Cerrar</button>

                          <button type='submit' class='btn btn-primary'><b>Editar______________________</b></button>

                      </div>

                      

                      </form>

                  </div>

              </div>

          </div>

        <?php require INCLUDES.'inc_footer_v2.php'; ?>";

        $nombrearchivov = $nombrearchivo."View.php";

        $miArchivov = fopen($_SERVER['DOCUMENT_ROOT']."/appMti/templates/views/".$padre."/".$nombrearchivov, "w+");

        $phpv = $archivovista;

        fwrite($miArchivov, $phpv);

        fclose($miArchivov);



        /* archivo js */

        $archivojs = "//////////////////////////////////////////////////////////////////////////////////

          //SECCION PARA MODALS Y FUNCION DE JAVASCRIPT

          //////////////////////////////////////////////////////////////////////////////////

          

          /* modal para eliminar */

          $('#eliminar').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget); // Button that triggered the modal

            var recipient = button.data('unoo');

            var modal = $(this);

            modal.find('.modal-body #______').val(recipient);

          });

          

          /* modal para editar */

          $('#editar').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget); // Button that triggered the modal

            var valor = button.data('unoo');

            var modal = $(this);

            modal.find('.modal-body #_____').val(valor);

            data        = new FormData($('._______________').get(0))

            var wrapper = $('.________________');

            //data.push(['valor',valor]);

            $.ajax({

              url: '\$nomcarpeta/______________',

              type: 'POST',

              dataType: 'json',

              contentType: false,

              processData: false,

              cache: false,

              data: data,

              /* con esta linea mostramos el cargador de los formularios */

              beforeSend: function() { wrapper.waitMe(); }

            }).done(function(res) {

              if(res.status === 200) {  

                wrapper.html(res.data); 

                //qactualizamos la seccion de contenido

                _______();

              } 

              else { 

                toastr.error(res.msg, '¡Upss!');

                wrapper.html('');

              }

            })

            .fail(function(err) {

              toastr.error('Hubo un error en la petición', '¡Upss!');

              wrapper.html('');

            })

            .always(function() {

              wrapper.waitMe('hide');

            })

          });

          //////////////////////////////////////////////////////////////////////////////////



          //////////////////////////////////////////////////////////////////////////////////

          // SECCION PARA FUNCION QUE INICIARAN A CARGAR EL DOCUMENTO                    ///

          //////////////////////////////////////////////////////////////////////////////////

          

          $(document).ready(function() {



          /* opciones generales del toaster */

          toastr.options = { 'closeButton': true, 'debug': false, 'newestOnTop': true, 'progressBar': true, 'positionClass': 'toast-bottom-full-width', 'preventDuplicates': true, 'onclick': null,  'showDuration': '200', 'hideDuration': '1000', 'timeOut': '2000', 'extendedTimeOut': '1000', 'showEasing': 'swing', 'hideEasing': 'linear', 'showMethod': 'fadeIn', 'hideMethod': 'fadeOut'}

          

          /* boton de salida */

          $('#btnSalidar').on('click', salgosistema);/* con eso hacemos que solo funcione el boton que se seleccione */

          function salgosistema(event) {

            $.ajax({

              url: 'salir/salgo',

              type: 'post',

              dataType: 'json',

              contentType: false,

              processData: false,

              cache: false,

            }).done(function(res) { if(res.status === 200) { window.location='index.php';  } })

            .fail(function(err) { toastr.error('Hubo un error en la petición', '¡Upss!'); })

          };

        

          //////////////////////////////////////////////////////////////////////////////////

          //SECCION DE FUNCIONES Y CARGAS

          //////////////////////////////////////////////////////////////////////////////////

        

          /* cargamos el concentrado de la secciones */

          _________();

          function _______________() {

            /* seleccionamos el div en que vamos a modificar los valores */

            var wrapper = $('.tblmenus');

            $.ajax({

              url: '\$nomcarpeta/________________________',

              type: 'POST',

              dataType: 'json',

              contentType: false,

              processData: false,

              cache: false,

              /* con esta linea mostramos el cargador de los formularios */

              beforeSend: function() { wrapper.waitMe();  }

            }).done(function(res) {

              if(res.status === 200) {  wrapper.html(res.data); } 

              else { 

                toastr.error(res.msg, '¡Upss!');

                wrapper.html('');

              }

            }).fail(function(err) {

              toastr.error('Hubo un error en la petición', '¡Upss!');

              wrapper.html('');

            }).always(function() {

              wrapper.waitMe('hide');

            })

          }

          //////////////////////////////////////////////////////////////////////////////////

        

          //////////////////////////////////////////////////////////////////////////////////

          //SECCION PARA EL ENVIO DE FORMULARIO Y/O ELEMENTOS

          //////////////////////////////////////////////////////////////////////////////////

        

          /* SECCION PARA LA SOLICITUD DE PUESTO */

          /* generamos la nueva seccion */

          $('body').on('submit', '._______', ___________);

          function ___________(event) {

            event.preventDefault();

            var form    = $('.____________');

            data        = new FormData(form.get(0));

            __________ = $('#__________').val();

            // Validacion campo form

            if(________ === '' ) {

              toastr.error('______________', '¡Upss!');

              return;

            }

            // AJAX

            $.ajax({

              url: '\$nomcarpeta/_______________',

              type: 'post',

              dataType: 'json',

              contentType: false,

              processData: false,

              cache: false,

              data : data,

              beforeSend: function() { form.waitMe(); }

            }).done(function(res) {

              if(res.status === 200) {

                toastr.success(res.msg, '¡Bien!');

                form.trigger('reset');

                $('#___________').modal('hide');

                ____________();

              } 

              else { toastr.error(res.msg, '¡Upss!'); }

            }).fail(function(err) {

              toastr.error('Hubo un error en la petición', '¡Upss!');

            }).always(function() {

              form.waitMe('hide');

            })

          }

          //////////////////////////////////////////////////////////////////////////////////

        });";

        $nombrearchivoj = $nombrearchivo.".js";

        $miArchivoj = fopen($_SERVER['DOCUMENT_ROOT']."/appMti/assets/js/".$nombrearchivoj, "w+");

        $phpj = $archivojs;

        fwrite($miArchivoj, $phpj);

        fclose($miArchivoj);



      }

      if($hijo != ''){



        /* nombre de la carpeta */

        $nomcarpeta = $dato;

        $nombrearchivo = $dato;

        $dircarpeta = $_SERVER['DOCUMENT_ROOT']."/appMti/templates/views/".$nomcarpeta."/";



        /* en la creacion de archivos se generan valor __________________ los cuales seran remplazados para trabajar en el archivo */

        /* archivo en views */

        $archivovista = "

          <?php 

            require INCLUDES.'inc_header.php'; //cabezera

            require INCLUDES.'inc_header_barra.php'; //barra superior

            require INCLUDES.'inc_header_menu.php'; //Menu

          ?>

      

          <div class='wrapper'>

            <div class='content-wrapper'>

            

              <section class='content-header'>

                <h1>  Modulo de <small> ________</small>  </h1>

                <ol class='breadcrumb'>

                  <li><a href='panel'><i class='fa fa-dashboard'></i> Inicio</a></li>

                  <li class='active'>seccion</li>

                </ol>

              </section>

              <br>



              <section class='content'>

                <!--seccion de botones de acciones-->

                <div class='row'>

                  <div class='col-md-10'></div>

                  <div class='col-md-2'><button type='button' class='btn btn-block btn-primary btn-sm' data-toggle='modal' data-target='#nuevo' >Nuevo___________________</button></div>

                </div>

          

                <!--seccion de contenido de modulo-->

                <br>

                <div class='row'>

                  <div class='col-xs-12'>

                    <div class='box'>

                      <div class='box-header'><h3 class='box-title'>Concentrado de ______________</h3></div>

                      <!-- tabla con el concentrado-->

                      <div class='box-body'><div class='tbl___________'></div></div>

                    </div>

                  </div>

                </div>

          

              </section>

          

            </div>



          <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->

          <!-- seccion de modals -->

          <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->

          

          <!--PARA LA SECCION DE SOLICITUD SIN ACEPTAR-->

          <!-- modal para agregar nuevo __________________-->

          <div class='modal inmodal fade' id='nuevo' tabindex='-1' role='dialog'  aria-hidden='true'>

              <div class='modal-dialog modal-lg'>

                  <div class='modal-content'>

                      

                    <div class='modal-header'>

                        <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>

                        <h4 class='modal-title'><b>Nueva__________________________</b></h4>

                    </div>

          

                    <div class='modal-body'>

                    <form class='nueva________________________'>

          

                    </div>

          

                      <div class='modal-footer'>

                          <button type='button' class='btn btn-white' data-dismiss='modal'>Cerrar</button>

                          <button type='submit' class='btn btn-primary'><b>Nuevo _________________________</b></button>

                      </div>

                      

                      </form>

                  </div>

              </div>

          </div>

      

          <!-- modal para eliminar _____________________-->

          <div class='modal inmodal modal-danger fade' id='eliminar' tabindex='-1' role='dialog'  aria-hidden='true'>

              <div class='modal-dialog modal-lg'>

                  <div class='modal-content'>

                      <div class='modal-header'>

                          <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>

                          <h4 class='modal-title'>Eliminar ___________________________</h4>

                      </div>

                      <div class='modal-body'>

                          <form class='__________________________'>

                          <input type='hidden' name='idPuesto' id='idPuesto'>

                          <div class='alert alert-danger text-center'><b>Esta seguro de eliminar ________________________ </b></div>

          

                      </div>

                      <div class='modal-footer'>

                      <button type='button' class='btn btn-outline pull-left' data-dismiss='modal'>Cerrar</button>

                          <button type='submit' class='btn btn-danger'>Eliminar _____________________________</button>

                      </div>

                      </form>

                  </div>

              </div>

          </div>

          

          <!-- editar solicitud  -->

          <div class='modal inmodal fade' id='editar' tabindex='-1' role='dialog'  aria-hidden='true'>

              <div class='modal-dialog modal-lg'>

                  <div class='modal-content'>

                      

                    <div class='modal-header'>

                        <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>

                        <h4 class='modal-title'><b>Edición de ___________________________</b></h4>

                    </div>

          

                    <div class='modal-body'>

                        

                      <form class='edisolicitud'>

                      <input type='hidden' name='id__________' id='id__________' >

                      <div class='foredi___________________'></div>

                      

                    </div>

          

                      <div class='modal-footer'>

                          <button type='button' class='btn btn-white' data-dismiss='modal'>Cerrar</button>

                          <button type='submit' class='btn btn-primary'><b>Editar______________________</b></button>

                      </div>

                      

                      </form>

                  </div>

              </div>

          </div>

        <?php require INCLUDES.'inc_footer_v2.php'; ?>";

        $nombrearchivov = $nombrearchivo."View.php";

        $miArchivov = fopen($_SERVER['DOCUMENT_ROOT']."/appMti/templates/views/".$hijo."/".$nombrearchivov, "w+");

        $phpv = $archivovista;

        fwrite($miArchivov, $phpv);

        fclose($miArchivov);



        /* archivo js */

        $archivojs = "//////////////////////////////////////////////////////////////////////////////////

          //SECCION PARA MODALS Y FUNCION DE JAVASCRIPT

          //////////////////////////////////////////////////////////////////////////////////

          

          /* modal para eliminar */

          $('#eliminar').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget); // Button that triggered the modal

            var recipient = button.data('unoo');

            var modal = $(this);

            modal.find('.modal-body #______').val(recipient);

          });

          

          /* modal para editar */

          $('#editar').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget); // Button that triggered the modal

            var valor = button.data('unoo');

            var modal = $(this);

            modal.find('.modal-body #_____').val(valor);

            data        = new FormData($('._______________').get(0))

            var wrapper = $('.________________');

            //data.push(['valor',valor]);

            $.ajax({

              url: '\$nomcarpeta/______________',

              type: 'POST',

              dataType: 'json',

              contentType: false,

              processData: false,

              cache: false,

              data: data,

              /* con esta linea mostramos el cargador de los formularios */

              beforeSend: function() { wrapper.waitMe(); }

            }).done(function(res) {

              if(res.status === 200) {  

                wrapper.html(res.data); 

                //qactualizamos la seccion de contenido

                _______();

              } 

              else { 

                toastr.error(res.msg, '¡Upss!');

                wrapper.html('');

              }

            })

            .fail(function(err) {

              toastr.error('Hubo un error en la petición', '¡Upss!');

              wrapper.html('');

            })

            .always(function() {

              wrapper.waitMe('hide');

            })

          });

          //////////////////////////////////////////////////////////////////////////////////



          //////////////////////////////////////////////////////////////////////////////////

          // SECCION PARA FUNCION QUE INICIARAN A CARGAR EL DOCUMENTO                    ///

          //////////////////////////////////////////////////////////////////////////////////

          

          $(document).ready(function() {



          /* opciones generales del toaster */

          toastr.options = { 'closeButton': true, 'debug': false, 'newestOnTop': true, 'progressBar': true, 'positionClass': 'toast-bottom-full-width', 'preventDuplicates': true, 'onclick': null,  'showDuration': '200', 'hideDuration': '1000', 'timeOut': '2000', 'extendedTimeOut': '1000', 'showEasing': 'swing', 'hideEasing': 'linear', 'showMethod': 'fadeIn', 'hideMethod': 'fadeOut'}

          

          /* boton de salida */

          $('#btnSalidar').on('click', salgosistema);/* con eso hacemos que solo funcione el boton que se seleccione */

          function salgosistema(event) {

            $.ajax({

              url: 'salir/salgo',

              type: 'post',

              dataType: 'json',

              contentType: false,

              processData: false,

              cache: false,

            }).done(function(res) { if(res.status === 200) { window.location='index.php';  } })

            .fail(function(err) { toastr.error('Hubo un error en la petición', '¡Upss!'); })

          };

        

          //////////////////////////////////////////////////////////////////////////////////

          //SECCION DE FUNCIONES Y CARGAS

          //////////////////////////////////////////////////////////////////////////////////

        

          /* cargamos el concentrado de la secciones */

          _________();

          function _______________() {

            /* seleccionamos el div en que vamos a modificar los valores */

            var wrapper = $('.tblmenus');

            $.ajax({

              url: '\$nomcarpeta/________________________',

              type: 'POST',

              dataType: 'json',

              contentType: false,

              processData: false,

              cache: false,

              /* con esta linea mostramos el cargador de los formularios */

              beforeSend: function() { wrapper.waitMe();  }

            }).done(function(res) {

              if(res.status === 200) {  wrapper.html(res.data); } 

              else { 

                toastr.error(res.msg, '¡Upss!');

                wrapper.html('');

              }

            }).fail(function(err) {

              toastr.error('Hubo un error en la petición', '¡Upss!');

              wrapper.html('');

            }).always(function() {

              wrapper.waitMe('hide');

            })

          }

          //////////////////////////////////////////////////////////////////////////////////

        

          //////////////////////////////////////////////////////////////////////////////////

          //SECCION PARA EL ENVIO DE FORMULARIO Y/O ELEMENTOS

          //////////////////////////////////////////////////////////////////////////////////

        

          /* SECCION PARA LA SOLICITUD DE PUESTO */

          /* generamos la nueva seccion */

          $('body').on('submit', '._______', ___________);

          function ___________(event) {

            event.preventDefault();

            var form    = $('.____________');

            data        = new FormData(form.get(0));

            __________ = $('#__________').val();

            // Validacion campo form

            if(________ === '' ) {

              toastr.error('______________', '¡Upss!');

              return;

            }

            // AJAX

            $.ajax({

              url: '\$nomcarpeta/_______________',

              type: 'post',

              dataType: 'json',

              contentType: false,

              processData: false,

              cache: false,

              data : data,

              beforeSend: function() { form.waitMe(); }

            }).done(function(res) {

              if(res.status === 200) {

                toastr.success(res.msg, '¡Bien!');

                form.trigger('reset');

                $('#___________').modal('hide');

                ____________();

              } 

              else { toastr.error(res.msg, '¡Upss!'); }

            }).fail(function(err) {

              toastr.error('Hubo un error en la petición', '¡Upss!');

            }).always(function() {

              form.waitMe('hide');

            })

          }

          //////////////////////////////////////////////////////////////////////////////////

        });";

        $nombrearchivoj = $nombrearchivo.".js";

        $miArchivoj = fopen($_SERVER['DOCUMENT_ROOT']."/appMti/assets/js/".$nombrearchivoj, "w+");

        $phpj = $archivojs;

        fwrite($miArchivoj, $phpj);

        fclose($miArchivoj);



      }



      /* Guardamos la informacion en la bd */

      if(!$movements->numodu()) {  json_output(json_build(400, null, 'Hubo error al crear la nueva sección'));  }

      $movements->movisis();

      json_output(json_build(200, null, 'Se ha creado la nueva sección'));

      

    }

    /* esto es para mostrar el error */

    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }



  /* concentrado de los menus */

  function concenmenu(){

    try {

      $movements          = new menuModel;

      $movs               = $movements->concentrado();

      /* regresamos la informacion */

      $data = get_module('tblmenus', ['movements' => $movs]);

      json_output(json_build(200, $data));

    }

    /* esto es para mostrar el error */

    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  } 



  /* eliminamos la seccion de menu */

  function elisecc(){

    /* cuando eliminamos todos los archivos de la carpeta de wiev no elimina los js a su nombre de subseccion falta eso */

    try {

      $movements          = new menuModel;

      

      $movements->idMenu = $_POST['idMenu'];

      $movements->dato = $_POST['dato'];

      /* variable para guardar la accion */

      $movements->idAccion = 108;

      $nomcarpeta = $movements->dato;

      $nombrearchivoj = $movements->dato.".js";

      $nombrearchivoc = $movements->dato."Controller.php";

      $nombrearchivom = $movements->dato."Model.php";



      /* eliminamos los archivos del sistema */

      /* eliminamos la carpeta de viwer */

      $dir = $_SERVER['DOCUMENT_ROOT']."/appMti/templates/views/".$nomcarpeta."/";

      

      $handle = opendir($dir);

        $ficherosEliminados = 0;

        while ($file = readdir($handle)) {

            if (is_file($dir.$file)) {

                if (unlink($dir.$file) ){

                    $ficherosEliminados++;

                }

            }

        }

      

      rmdir($_SERVER['DOCUMENT_ROOT']."/appMti/templates/views/".$nomcarpeta."/");

      /* eliminamos el js */

      unlink($_SERVER['DOCUMENT_ROOT']."/appMti/assets/js/".$nombrearchivoj);

      /* eliminamos controlador */

      unlink($_SERVER['DOCUMENT_ROOT']."/appMti/app/controllers/".$nombrearchivoc);

      /* eliminamos modelo */

      unlink($_SERVER['DOCUMENT_ROOT']."/appMti/app/models/".$nombrearchivom);

      

      /* Guardamos la informacion en la bd */

      if(!$movements->elisecc()) {  json_output(json_build(400, null, 'Hubo error al eliminar la sección'));  }

      $movements->elisubseccpadre();

      $movements->elisubsecchijo();

      $movements->movisis();

      json_output(json_build(200, null, 'Se ha eliminado la sección del sistema con sus archivos'));

      

    }

    /* esto es para mostrar el error */

    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }



  /* dar de baja la seccion */

  function baja(){

    try {

      $movements          = new menuModel;

      

      $movements->idMenu = $_POST['idMenu'];



      /* para log de acciones */

      $movements->idAccion = 109; 



      if(!$movements->darbaja()) {  json_output(json_build(400, null, 'Hubo error al dare de baja la sección'));  }

      $movements->movisis();

      json_output(json_build(200, null, 'Se ha dado de baja la sección'));

    }

    /* esto es para mostrar el error */

    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }



  /* dar de alta la seccion */

  function alta(){

    try {

      $movements          = new menuModel;

      

      $movements->idMenu = $_POST['idMenu'];



      /* para log de acciones */

      $movements->idAccion = 110; 



      if(!$movements->daralta()) {  json_output(json_build(400, null, 'Hubo error al dare de alta la sección'));  }

      $movements->movisis();

      json_output(json_build(200, null, 'Se ha dado de alta la sección'));

    }

    /* esto es para mostrar el error */

    catch(Exception $e) { json_output(json_build(400, $e->getMessage())); }

  }

 





  

  

}