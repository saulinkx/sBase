<?php
session_start ();
/**
*** Última modificación: 25 de abril de 2017
*** S@ulinkx
**/
ini_set ("display_errors", "Off");

header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

require_once dirname(__FILE__) . "/include/smarty.php";

// Se inicializan variables que ocupa el sistema de forma general. Considerar si se declaran como globales.

$ocultarMenu     = "";
$errorMensaje    = "";

// Obtiene el nombre del modulo desde la URL
$modulo = isset ($_GET ["modulo"]) ? $_GET ["modulo"] : "";

// Si no se especifico un nombre de modulo asigna
// como modulo predeterminado a login

if (empty ($modulo)) {
	$modulo = "inicio";
}
else if (
	$modulo != "inicio" &&
	$modulo != "acerca_de" &&
	$modulo != "login" &&
	$modulo != "recuperarPassword" &&
	!isset ($_SESSION["usuario"])) {
	$oSmarty -> assign ("errorMensaje", "No ha iniciado sesión en el sistema. Acceso restringido al modulo $modulo");
	$modulo = "inicio";
	$usuarioPermisos = array();
	$oSmarty -> assign ("usuarioPermisos",$usuarioPermisos);
}

$archivoModulo = dirname(__FILE__) . "/modulos/mod_" . $modulo . ".php";

if (file_exists ($archivoModulo)) {

	require_once $archivoModulo;
	$estado = execute ($oSmarty);

} else {
	
	$oSmarty -> assign ("modulo", $modulo);
	$usuarioPermisos = array();
	$oSmarty -> assign ("usuarioPermisos",$usuarioPermisos);
	$oSmarty -> assign ("contenido", "moduloNoEncontrado.html.tpl");
	
}

if (isset ($_SESSION ["usuario"])) {

	$oSmarty -> assign ("sesionIniciada", "1");
	$oSmarty -> assign ("nombre", $_SESSION ["usuario"]['nombre']);
	$oSmarty -> assign ("mostrarLogin", "0");
	
	if (isset ($_SESSION ["usuarioPermisos"])) {
		$oSmarty -> assign ("usuarioPermisos", $_SESSION ["usuarioPermisos"]);
	}
}
else {
    $oSmarty -> assign ("mostrarLogin", "1");
    $usuarioPermisos = array();
    $oSmarty -> assign ("usuarioPermisos",$usuarioPermisos);
}

$oSmarty -> assign ("ocultarMenu",$ocultarMenu);
$oSmarty -> assign ("errorMensaje",$errorMensaje);
$oSmarty -> assign ("logoEncabezado", "");
$oSmarty -> display ("layout.html.tpl");
?>
