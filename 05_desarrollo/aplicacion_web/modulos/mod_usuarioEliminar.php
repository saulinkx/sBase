<?php
require_once dirname (__FILE__) . "/../include/api/Usuario.class.php";

function execute (&$oSmarty)
{
    
     $oUsuario = new Usuario ();

   $oUsuario -> eliminar ($_GET);

    header ("Location: index.php?modulo=usuarioListar");

    exit;
}

?>
