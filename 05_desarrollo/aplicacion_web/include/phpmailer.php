<?php
date_default_timezone_set('America/Mexico_City');
require_once dirname (__FILE__) . "/../lib/phpmailer/class.phpmailer.php";

class email  extends PHPMailer{

     var $tu_email    = 'correo@institutucion.mx';
     var $tu_nombre   = 'SistemaBase';
     var $tu_password = 'Password_aqui';
     
     
     function enviar($para, $nombre, $titulo , $contenido){
     
          //configuracion general
          $this->IsSMTP(); // protocolo de transferencia de correo
          $this->SMTPDebug  = 1;
          $this->Host = 'smtp.gmail.com';  // Servidor GMAIL
          $this->Port = 587; //puerto
          $this->SMTPAuth = true; //Habilitar la autenticación SMTP
          $this->CharSet    = "UTF-8";
          $this->Username = $this->tu_email;
          $this->Password = $this->tu_password;
          $this->SMTPSecure = 'tls';  //habilita la encriptacion SSL

          //remitente
          $this->From = $this->tu_email;
          $this->FromName = $this->tu_nombre;

          $this->AddAddress($para);  // Correo y nombre a quien se envia
          $this->Subject = $titulo;
          $this->WordWrap = 50; // Ajuste de texto
          $this->IsHTML(true); //establece formato HTML para el contenido
          
          $this->Body    =  $contenido; //contenido con etiquetas HTML
          $this->AltBody =  strip_tags($contenido); //Contenido para servidores que no aceptan HTML
          //envio de e-mail y retorno de resultado
          return $this->Send();
     }
     
}
?>
