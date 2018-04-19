<?php
require_once dirname (__FILE__) . "/../include/api/Perfil.class.php";

function execute (&$oSmarty)
{
    
    $oPerfil = new Perfil ();

    $oPerfil -> eliminar ($_GET);

    header ("Location: index.php?modulo=perfilListar");

    exit;
}

?>
