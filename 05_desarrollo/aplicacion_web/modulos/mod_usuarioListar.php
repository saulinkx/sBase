<?php
require_once dirname(__FILE__) . "/../include/api/Usuario.class.php";
function execute(&$oSmarty)
{
    $oUsuario = new Usuario ();

    $oSmarty -> assign ("usuarios", $oUsuario -> listar ());

    $oSmarty -> assign ("titulo", "Lista de usuarios");
    $oSmarty -> assign ("contenido", "usuario_listar.tpl.html");
}
?>
