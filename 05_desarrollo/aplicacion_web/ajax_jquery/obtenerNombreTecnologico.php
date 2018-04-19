<?php
require_once dirname  (__FILE__) . "/../include/api/Escuela.class.php";

$escuelaId = isset($_POST['escuelaId']) ? $_POST['escuelaId'] : "";

$oEscuela = new Escuela ();

$aEscuelaNombre  = $oEscuela -> obtenerPorId ($escuelaId);
$aEscuelaAccesos = $oEscuela -> obtenerDatosDeAccesoPorTecnologico ($escuelaId);

if(count($aEscuelaAccesos) == 0){
     echo json_encode(array(array("escuela" => $aEscuelaNombre['escuela'])));
}

if(count($aEscuelaAccesos) > 0 ){
     echo json_encode($aEscuelaAccesos);
}
?>
