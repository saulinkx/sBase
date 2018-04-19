<?php
session_start();
require_once dirname(__FILE__) . "/../include/api/Usuario.class.php";

$aDatos = $_POST;

$oUsuario = new Usuario ();
$aResultado    = $oUsuario -> registrar ($aDatos);


echo json_encode($aResultado);

?>
