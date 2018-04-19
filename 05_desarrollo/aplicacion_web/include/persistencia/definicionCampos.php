<?php
$defs = array (
			"usuarios" => array("perfilId","nombre","usuario","password","email","activo","fechaRegistro"),
			
			"escuelas" => array ("escuela", "estadoId", "fechaRegistro"),
							
			"perfiles" => array ("perfil", "fechaRegistro"),
			
			"perfil_permiso" => array ("perfilId", "permisoId"),
			
			"accesos" => array("tipoAccesoId","fechaInicio","fechaFin","escuelaId")
			
);
?>
