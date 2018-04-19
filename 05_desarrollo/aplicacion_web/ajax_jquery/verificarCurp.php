<?php
require_once dirname  (__FILE__) . "/../include/api/Solicitud.class.php";

$oSolicitud    = new Solicitud();
$respuestaCurp = $oSolicitud -> verificarCurp($_POST['curp']);

if($respuestaCurp == "yes"){
     echo "curpOk";
}
?>
