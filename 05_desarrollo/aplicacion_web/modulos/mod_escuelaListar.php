<?php
require_once dirname  (__FILE__) . "/../include/api/Escuela.class.php";

function execute(&$oSmarty)
{
	   $oEscuela = new Escuela ();
        $aEscuelas = $oEscuela -> listar ();

	   $oSmarty -> assign ("escuelas", $aEscuelas);
        $oSmarty -> assign ("titulo", "Listado de escuelas");
        $oSmarty -> assign ("contenido", "escuela_listar.tpl.html");
}
?>
