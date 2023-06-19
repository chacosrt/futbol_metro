<?php 
/* funciones para procesos internos */

/* regresa las monedas lso itpos de monedas */
function get_coins() {
  return 
  [
    'MXN',
    'USD',
    'CAD',
    'EUR',
    'ARS',
    'AUD',
    'JPY'
  ];
}

/* funcion para codificar clave  */
function codiClave($output = NULL){
   $key=hash('sha256', SECRET_KEY);
   $iv=substr(hash('sha256', SECRET_IV), 0, 16);
   $output=openssl_encrypt($output, METHODD, $key, 0, $iv);
   $output=base64_encode($output);
   return $output;
   
 }

/* funcion para decodificar clave */
function decoClave($clave = NULL){
  $key1=hash('sha256', SECRET_KEY);
  $iv1=substr(hash('sha256', SECRET_IV), 0, 16);
  $clave=openssl_decrypt(base64_decode($clave), METHODD, $key1, 0, $iv1);
  return $clave;
}

/* dividir string con elemnto de referencia */
function dividoCadena($cadena = NULL, $ref = NULL){

  $dividido = explode($ref, $cadena);
  return $dividido;

}