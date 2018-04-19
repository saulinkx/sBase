<?php
require_once dirname (__FILE__) . "/../include/api/Escuela.class.php";

function execute (&$oSmarty)
{
    
    $oEscuela = new Escuela ();

    $oEscuela -> eliminar ($_GET);

    header ("Location: index.php?modulo=escuelaListar");

    exit;
}

?>
