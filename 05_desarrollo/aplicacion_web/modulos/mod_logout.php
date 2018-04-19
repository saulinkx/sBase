<?php
function execute (&$oSmarty) {
    $oSmarty -> assign ("titulo", "Salir del sistema");
	// destruye la sesión y vuelve a la página de login
	// Destruye todas las variables de la sesi&oacute;n
	$_SESSION = array();

	// Finalmente, destruye la sesi&oacute;n
	session_destroy();
	
	$oSmarty -> assign ("contenido", "");

	header ("Location:index.php");
}
?>
