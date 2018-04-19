<?php
require_once dirname(__FILE__) . "/../phpmailer.php";
require_once dirname (__FILE__) . "/../persistencia/Persistencia.class.php";

class Correo
{
    function enviarNuevoPasswordSolicitado($contenido,$nombreUsuario,$asunto,$mail){
          
          $email = new email();
          
          if ($email->enviar($mail,$nombreUsuario,$asunto,$contenido)){
               return "datosEnviados";
          }
          else{
               return $email->ErrorInfo;
          }
    
    }
    
    
    function enviaDatosDeAcceso ($nombre,$usuario,$mensaje){
    
          $mail = createMailer();
          $mail -> Body = $mensaje;
          $mail -> isHTML(false);
          $mail -> AddAddress ($usuario, $nombre);
          $mail -> Send();
    }
}
?>
