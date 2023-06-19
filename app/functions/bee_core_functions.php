<?php
/* funciones para el funcionamiento de framework y sistema */

function to_object($array) { return json_decode(json_encode($array)); }

/* funcion para el titulo del framwork */
function get_sitename() { return 'Sistema de Administración'; }

/* funcio para la fecha actual */
function now() { return date('Y-m-d H:i:s');}

/* fecha actual simple */
function nowSim() { return date('Y-m-d');}

/* hora */
function nowHor() { return date('H:i:s');}


function json_output($json, $die = true) {
  header('Access-Control-Allow-Origin: *');
  header('Content-type: application/json;charset=utf-8');

  if(is_array($json)){ $json = json_encode($json); }

  echo $json;
  if($die) { die; }
  
  return true;
}

/* para armar los codigos de estatus */
function json_build($status = 200, $data = null, $msg = '') {
  if(empty($msg) || $msg == '') {
    switch ($status) {
      case 200:
        $msg = 'Bien';
        break;
      case 201:
        $msg = 'Creado';
        break;
      case 400:
        $msg = 'Respuesta Invalida';
        break;
      case 403:
        $msg = 'Aceso Denegado';
        break;
      case 404:
        $msg = 'No encontrado';
        break;
      case 500:
        $msg = 'Error de sistema Interno';
        break;
      case 550:
        $msg = 'Permiso denegado';
        break;
      default:
        break;
    }
  }

  http_response_code($status);

  $json =
  [
    'status' => $status,
    'error'  => false,
    'msg'    => $msg,
    'data'   => $data
  ];

  $error_codes = [400,403,404,405,500];

  if(in_array($status , $error_codes)){
    $json['error'] = true;
  }

  return json_encode($json);
}

/* con esto cargamos modulos en las vistas */
function get_module($view, $data = []) {

  $file_to_include = MODULES.$view.'Module.php';
	$output = '';
	
	// Por si queremos trabajar con objeto
	$d = to_object($data);
	
	if(!is_file($file_to_include)) { return false; }

	ob_start();
	require_once $file_to_include;
	$output = ob_get_clean();

	return $output;
}

/* para crear divisas mandandole el monto y el simbolo */
function money($amount, $symbol = '$') { return $symbol.number_format($amount, 2, '.', ','); }

function get_option($option) {  return optionModel::search($option); }


