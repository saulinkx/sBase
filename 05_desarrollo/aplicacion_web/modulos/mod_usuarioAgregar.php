<?php
require_once dirname  (__FILE__) . "/../include/api/Escuela.class.php";
require_once dirname  (__FILE__) . "/../include/api/Perfil.class.php";
require_once dirname  (__FILE__) . "/../include/api/Usuario.class.php";
function execute(&$oSmarty)
{
	$oSmarty -> assign ("titulo", "Agregar un nuevo perfil");
	
	$oPerfil   = new Perfil ();
	$aPerfiles = $oPerfil -> listar ();
	
	// La variable modo y datos sirve para el módulo editar. 
	// Se inicializan vacía en este archivo para eliminar el Notice de PHP7
	
	$modo	   = "";
	$datos	   = array("nombre" => "", "email" => "", "perfilId" => "");
	
     	$oSmarty -> assign ("perfiles", $aPerfiles);
     	$oSmarty -> assign ("modo", $modo);
     	$oSmarty -> assign ("datos", $datos);
     	$oSmarty -> assign ("contenido", "usuario_agregar.tpl.html");
}
?>
