<?php
require_once dirname (__FILE__) . "/../include/api/Usuario.class.php";
require_once dirname (__FILE__) . "/../include/api/Escuela.class.php";

function execute (&$oSmarty)
{

          $oSmarty -> assign ("titulo", "Cambiar Contraseña");
       
          $oSmarty -> assign ("contenido", "change_password.html.tpl");
               
}
?>
