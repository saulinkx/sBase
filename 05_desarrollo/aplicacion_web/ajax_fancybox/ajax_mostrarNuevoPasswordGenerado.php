<?php

require_once dirname  (__FILE__) . "/../include/smarty.php";

$ruta = "../";
$oSmarty -> assign("ruta",$ruta);

$nombre	 = $_GET['nombre'];
$password	 = $_GET['password'];

$oSmarty -> assign("nombre",$nombre);
$oSmarty -> assign("password",$password);

echo $oSmarty -> fetch ("fancy_templates/fancy_mostrarNuevoPasswordGenerado.html.tpl");

?>
