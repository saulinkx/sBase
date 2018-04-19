<?php
require_once dirname  (__FILE__) . "/../include/api/Perfil.class.php";
function execute(&$oSmarty)
{
	$oPerfil = new Perfil ();
        $aPerfil = $oPerfil -> listar ();

	$oSmarty -> assign ("perfiles", $aPerfil);
        $oSmarty -> assign ("titulo", "Listar Perfiles");
        $oSmarty -> assign ("contenido", "perfil_listar.tpl.html");
}
?>
