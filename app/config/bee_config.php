<?php



// Saber si estamos trabajando de forma local o remota

define('IS_LOCAL'   , in_array(['localhost'], ['127.0.0.1', '::1']));



// Definir el uso horario o timezone del sistema

date_default_timezone_set('America/Mexico_City');



// Lenguaje

define('LANG'       , 'es');



// Ruta base de nuestro proyecto

define('BASEPATH'   , IS_LOCAL ? 'http://localhost/dashboard/futbol_metro/' : 'https://app.midashrcs.com/');



// Sal del sistema

define('AUTH_SALT'  , 'appMidas');



// Puerto y la URL del sitio

define('PORT'       , '7882');

//define('URL'        , IS_LOCAL ? 'http://127.0.0.1:'.PORT.'/dasboard/udemy_03/proyecto02/' : '___URL EN PRODUCCIÓN___');

define('URL'        ,'http://localhost/dashboard/futbol_metro/');



// Las rutas de directorios y archivos

define('DS'         , DIRECTORY_SEPARATOR);

define('ROOT'       , getcwd().DS);



define('APP'        , ROOT.'app'.DS);

define('CLASSES'    , APP.'classes'.DS);

define('CONFIG'     , APP.'config'.DS);

define('CONTROLLERS', APP.'controllers'.DS);

define('FUNCTIONS'  , APP.'functions'.DS);

define('MODELS'     , APP.'models'.DS);



define('TEMPLATES'  , ROOT.'templates'.DS);

define('INCLUDES'   , TEMPLATES.'includes'.DS);

define('MODULES'    , TEMPLATES.'modules'.DS);

define('VIEWS'      , TEMPLATES.'views'.DS);

define('MENU'      , CONTROLLERS.'menu'.DS);



// Rutas de archivos o assets con base URL

define('ASSETS'     , URL.'assets/');

define('CSS'        , ASSETS.'css/');

define('FAVICON'    , ASSETS.'favicon/');

define('FONTS'      , ASSETS.'fonts/');

define('IMAGES'     , ASSETS.'images/');

define('JS'         , ASSETS.'js/');

define('PLUGINS'    , ASSETS.'plugins/');

define('UPLOADS'    , ASSETS.'uploads/');

/* de la plantilla de adminlte */

define('BOWER'    , ASSETS.'bower_components/');

define('DIST'    , ASSETS.'dist/');

#define('CONTENEDOR'     , ASSETS.'contenedor/');



/* valores para la clave */

define('METHODD','AES-256-CBC');

define('SECRET_KEY','Hum4n51ll#.');

define('SECRET_IV','110487');



/* fecha de cambio de clave */

$cambio = date('Y')."-10-22";

define('CAMBIOCLAVE',$cambio);







// Set para conexión en producción o servidor real

define('DB_ENGINE'  , 'mysql');

define('DB_HOST'    , 'localhost');

define('DB_NAME'    , 'liga_metro');

define('DB_USER'    , 'root');

define('DB_PASS'    , '');

define('DB_CHARSET' , 'utf8');



// El controlador por defecto / el método por defecto / y el controlador de errores por defecto

define('DEFAULT_CONTROLLER'      , 'home');

define('DEFAULT_ERROR_CONTROLLER', 'error');

define('DEFAULT_METHOD'          , 'index');



/* definimos constantes para las temporates */

#define('IDUSUARIO' , $_SESSION['idUsuario']);

#define('NOMBREUSUARIO' , $_SESSION['usuario']);

