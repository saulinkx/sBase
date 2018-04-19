<?php
	session_start();
	require_once dirname(__FILE__) . "/../include/api/Acceso.class.php";

	$oAcceso = new Acceso();

	$accesoId 		= isset($_POST['accesoId']) ? $_POST['accesoId'] : "";
	$fechaInicio 	= isset($_POST['fechaInicio']) ? $_POST['fechaInicio'] : "";
	$fechaFin 		= isset($_POST['fechaFin']) ? $_POST['fechaFin'] : "";
	$escuelaId 		= isset($_POST['escuelaId']) ? $_POST['escuelaId'] : "";
	$tipoAcceso 	= isset($_POST['tipoAcceso']) ? $_POST['tipoAcceso'] : "";

	$aDatos = array("tipoAccesoId" 	=> $tipoAcceso,
					"fechaInicio" 	=> $fechaInicio,
					"fechaFin" 		=> $fechaFin,
					"escuelaId" 	=> $escuelaId);

if($accesoId == 0){
	// inserta datos de acceso en la tabla accesos
	
	$result = $oAcceso -> registrar($aDatos);
    echo $result;
} else {
	// actualiza datos de accesos en la tabla Accesos
	
	$result = $oAcceso -> modificar($aDatos,$accesoId);
    echo $accesoId;
}

?>
