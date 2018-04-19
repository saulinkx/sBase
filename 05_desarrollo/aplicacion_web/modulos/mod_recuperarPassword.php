<?php
require_once dirname(__FILE__) . "/../include/api/Usuario.class.php";
require_once dirname(__FILE__) . "/../include/api/Comision.class.php";
require_once dirname(__FILE__) . "/../include/api/Correo.class.php";

function execute (&$oSmarty)
{

     $oSmarty -> assign("titulo","Recuperar Password");

     if (empty ($_POST))
     {
          unset ($_SESSION ["datos"]);
          $oSmarty -> assign("contenido","recuperar_Password.tpl.html");
     }
     else
     {
          if (!isset ($_SESSION ["datos"]))
          {
               $_SESSION ["datos"] = $_POST;
          }
          
          switch ($_POST ["accion"])
          {
               case "generar":
                    $oUsuario  = new Usuario();
                    
                    $existeUsuario = $oUsuario -> obtenerPorEmail ($_POST);
                    
                    if($existeUsuario == array())
                    {
                         $oSmarty -> assign("errorMensaje","No existe el usuario en la base de datos, favor de verificarlo");
                         $oSmarty -> assign("contenido","recuperar_Password.tpl.html");
                    }
                    else
                    {
                         $usuarioId = $existeUsuario['usuarioId'];
                         $oComision = new Comision ();
                         $aPassword = $oComision -> generarNuevoPasswordComision($usuarioId);
                         $nombre    = $existeUsuario['nombre'];
                         $password  = $aPassword['password'];
                         
                         $mensaje   = "Ha solicitado un nuevo password para el sistema de estímulos al desempeño docente. ";
                         $mensaje  .= "Sus nuevos datos de acceso son: <br />";
                         $mensaje  .= "Usuario: " . $_POST['usuario'] . "<br />";
                         $mensaje  .= "Password: " . $password . "<p />";
                         $mensaje  .= "Le deseamos suerte!!"; 
                         
                         $asunto   = "Recuperación de Password - EDD";
                         
                         $oCorreo  = new Correo ();
                         $mailResp = $oCorreo -> enviarNuevoPasswordSolicitado($mensaje,$existeUsuario['nombre'],$asunto,$existeUsuario['email']);
                         
                         if($mailResp == "datosEnviados"){
                         
                              $respuestaGeneracionPassword  = "Se ha enviado un nuevo password al correo electrónico: <br />";
                              $respuestaGeneracionPassword .= $existeUsuario['email'];
                              
                         }else{
                         
                              $respuestaGeneracionPassword  = "Se ha generado un error al enviar su password por correo electrónico, ";
                              $respuestaGeneracionPassword .= "favor de solicitarlo con su presidente de la comisión local.";
                         
                         }
                         
                         $oSmarty -> assign ("mensaje",$respuestaGeneracionPassword);
                         $oSmarty -> assign ("contenido", "generarPasswordOk.tpl.html");
                         
                    }
                    
                    break;
          }
     }

}
?>
