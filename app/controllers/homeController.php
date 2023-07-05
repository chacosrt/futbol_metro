<?php 





class homeController extends Controller {

  



  function __construct() {

    //instanaciamos la funcion de php mailer

 

  }



  function index(){  View::render('login');  }



  /* mostramos el archivo de recuperar credenciales */

  function recuperar(){  View::render('recuperar'); }



  /* mandamos a la tabla de  */

  function actualizacion(){  View::render('actualizacion'); }



  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  /* funcion para agregar movimiento */

  function ingresoSiysd(){
    
    try {

      $mov = new homeModel();

      $mov->usuario = $_POST['usuario'];

      $mov->pass = codiClave($_POST['pass']);


      /* relaizamos la consulta */

      if(!$movs = $mov->consulto()) { json_output(json_build(400, null, 'Lo sentimos los datos no coinciden con un registro')); }

      $mov->id = $movs[0]['id'];

      $mov->nombre = $movs[0]['nombre'];

      $mov->email = $movs[0]['email'];

      $mov->roles = $movs[0]['roles'];

      /* creamos la variable de session para saber que si ingreso */

      $_SESSION['id'] = $mov->id ;

      $_SESSION['nombre'] = $mov->nombre;

      $_SESSION['email'] = $mov->email;

      $_SESSION['roles'] = $mov->roles;


      // REgresamos el valor al ajax

      json_output(json_build(200, $mov));

     

    } 

    

    catch (Exception $e) { json_output(json_build(400, null, $e->getMessage())); }

  }



  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  /* recuperamos la clave de acceso */

  function recuperaClave(){

    try {

      /* intancimaos el metodo */

      $mov              = new homeModel();



      /* obtenemos la variables */

      //$mov->correo        = dividoCadena($_POST['correo'],"@");

      

      /* relaizamos la consulta */

      if(!$movs = $mov->consultoCredenciales()) { json_output(json_build(400, null, 'Lo sentimos los datos no coinciden con un registro')); }



      /* obtenemos los datos para enviar por correo */

      $idUsuario = $movs[0]['idUsuario'];

      $mov->idUsuario = $movs[0]['idUsuario'];

      $usuario = $movs[0]['usuario'];

      $clave = decoClave($movs[0]['clave']);

      $nombre = $movs[0]['nombre'];

      $apePaterno = $movs[0]['apePaterno'];

      $apeMaterno = $movs[0]['apeMaterno'];

      $correo = $usuario."@mtinter.com.mx";

           

      

     /* enviamos el correo de recuperacion */

      /*                              

      try {

          //Server settings

          $mail->SMTPDebug = 0;

          $mail->isSMTP();

      

          //$mail->Host = 'smtp.gmail.com'; 

          $mail->Host = 'smtp.gmail.com'; 

          $mail->SMTPAuth = true;

          $mail->Username = 'tracking@mtinter.com.mx';

          $mail->Password = 'sistra19';

          $mail->SMTPSecure = 'tls';

          $mail->Port = 587;

          $mail->SMTPAuth = true;

          

    

          $mail->AddEmbeddedImage(IMAGES.'images.png', 'cabeceraSuperior');

          $mail->AddEmbeddedImage(IMAGES.'log.jpg', 'pieimd');

          //Recipients

          $mail->setFrom('tracking@mtinter.com.mx', 'Sistema de administración MTI');

          $mail->addAddress('nhernandez@mtinter.com.mx', 'Usuario');     // Add a recipient

          $mail->addAddress('avazquez@mtinter.com.mx', 'Usuario');     // Add a recipient

          $mail->addAddress($$correo, 'Usuario');     // Add a recipient

                        

          //Content

          $mail->CharSet = 'UTF-8';

          $mail->isHTML(true);                                  // Set email format to HTML

          $mail->Subject = 'Mensaje de Sistema de Administración de MTI | Recuperacion de credenciales';

          $mail->Body    = "

          <!DOCTYPE html>

            <html lang='en'>

            <head>

              <meta charset='UTF-8'>

              <meta name='viewport' content='width=device-width, initial-scale=1.0'>

              <meta http-equiv='X-UA-Compatible' content='ie=edge'>

              <title>Document</title>

            </head>

            <body>

              <div style='text-align:center;'>

                <table style='margin: 0 auto;'>

                  <tr>

                    <td style='text-align: left'><img src='cid:cabeceraSuperior' style='height: 100px;'></td>

                    <td style='text-align: right'><h3>Recuperación credenciales</h3></td>

                  </tr>

                  <tr><td><br><br></td></tr>

                  <tr>

                    <td colspan='2' style='text-align: left'>

                      <b>Estimado: </b> {$nombre} {$apePaterno} {$apeMaterno}

                    </td>

                  </tr>

                  <tr><td><br><br></td></tr>

                  <tr><td style='text-align: left;'>Se ha solicitado, la recuperación de sus credenciales de acceso al sistema de administración, de no reconocer este movimiento favor de hacer caso omiso</td></tr>

                  <tr><td><br><br></td></tr>

                  <tr>

                    <td style='text-align: left'>

                      <b>Cuenta de correo:</b> {$correo}<br>

                      <b>Usuario:</b> {$usuario}<br>

                      <b>Clave:</b> {$clave}<br>

                      <b>Liga de acceso:</b> <a href='http://localhost/siimti/'>Ingresar</a><br>

                      <b>Número de usuario:</b> {$idUsuario}<br><br><br><br>

                    </td>

                  </tr>

                  <tr>

                    <td colspan='2' style='text-align:left'><span style='color:gray; font-size:10px;'>Este correo contiene información que es confidencial y también puede contener información privilegiada. Es para uso exclusivo del destinatario/s.

                    <br> Si usted no es el destinatario/s tenga en cuenta que cualquier distribución, copia o uso de esta comunicación o la información que contiene está estrictamente prohibida. 

                    <br>Si usted ha recibido esta comunicación por error por favor notifíquelo por correo electrónico o por teléfono.</span></td>

                  </tr>

                  <tr>

                    <td colspan='2' style='text-align:right'><img src='cid:pieimd' style='height:50px;'></td>

                  </tr>

      

                </table>

              </div>

              

            </body>

            </html>

            ";

          $mail->SMTPOptions = array(

            'ssl' => array(

            'verify_peer' => false,

            'verify_peer_name' => false,

            'allow_self_signed' => true

            )

              

        );

          //enviamos el correo

          $mail->send();



       

        if(!$logAcesso = $mov->addREcupera()) { json_output(json_build(400, null, 'No se agrego el movimiento al log de acceso')); }

        json_output(json_build(200, $mov));



      } 

      catch (Exception $e) { echo "Mailer Error: " . $mail->ErrorInfo; }*/

    

    } 

    /* si no se ejecuta el ajax */

    catch (Exception $e) { json_output(json_build(400, null, $e->getMessage())); }

  }

  

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  /* Actualizar clave de acceso */

  function actualizaClave(){

    try {

      /* intancimaos el metodo */

      $mov              = new homeModel();

      $mov->idUsuario        = $_POST['idUsuario'];

      $mov->nuevaClave        = $_POST['clave'];



      /* obtenemos la clave anteior */

      if(!$movs = $mov->consultaClave()) { json_output(json_build(400, null, 'Lo sentimos los datos no coinciden con un registro')); }

      $claveActual = $movs[0]['clave'];



      $claveActual = decoClave($claveActual);

      $claveNueva = $mov->nuevaClave;

      /* comparamos con la nueva clave */

      if($claveActual == $claveNueva){

        /* si es igual regresamos a la pantalla  */

        json_output(json_build(400, null, 'La nueva clave no debe de ser igual a la actual o a alguna que ya halla utilizado'));

      }

      else{

        /* si no es igual guardamos codificamos la clave */

        $mov->nuevaClave =codiClave($claveNueva);

        $mov->clave = codiClave($claveActual);

        /* guardamos clave anterior */

        if(!$movs = $mov->guardoClaveHistorial()) { json_output(json_build(400, null, 'No se guardo la clave anterior en el historial')); }

        /* actualizamos clave nueva */

        if(!$movs = $mov->actualizoNuevaClave()) { json_output(json_build(400, null, 'No se actualizo la nueva clave')); }

        /* redirecciono */

        json_output(json_build(200, $mov));





      }

      



      





    } 

    /* si no se ejecuta el ajax */

    catch (Exception $e) { json_output(json_build(400, null, $e->getMessage())); }

  }





  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  /* Actualizar clave de acceso */

  function consultoimage(){

    try {

      /* intancimaos el metodo */

      $mov              = new homeModel();

      /* obtenemos la clave anteior */

      if(!$movs = $mov->consunsultoma()) { json_output(json_build(400, null, 'Lo sentimos los datos no coinciden con un registro')); }

      /* comparamos con la nueva clave */

        json_output(json_build(200, $movs));

      }

    /* si no se ejecuta el ajax */

    catch (Exception $e) { json_output(json_build(400, null, $e->getMessage())); }



  }


   /* funcio para salir del sistema */

   function salir(){ 

    $_SESSION = array();

    session_destroy();

    json_output(json_build(200));

  }
  



  

  

}