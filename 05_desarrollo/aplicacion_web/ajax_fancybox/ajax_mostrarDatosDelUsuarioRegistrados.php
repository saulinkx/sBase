<?php

require_once dirname  (__FILE__) . "/../include/smarty.php";

$ruta = "../";
$oSmarty -> assign("ruta",$ruta);

$nombre	 = $_GET['nombre'];
$usuario 	 = $_GET['usuario'];
$password	 = $_GET['password'];

$oSmarty -> assign ("titulo", "Usuario Registrado");
$oSmarty -> assign("nombre",$nombre);
$oSmarty -> assign("usuario",$usuario);
$oSmarty -> assign("password",$password);

echo $oSmarty -> fetch ("fancy_templates/fancy_mostrarDatosDelUsuarioRegistrados.html.tpl");

?>
