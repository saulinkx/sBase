<?php
require_once dirname (__FILE__) . "/../include/api/Perfil.class.php";
require_once dirname (__FILE__) . "/../include/api/Proyecto.class.php";

function execute (&$oSmarty)
{

	$perfilId           = $_SESSION['usuario']['perfilId'];
	$usuario            = $_SESSION['usuario']['usuario'];
	$usuarioId          = $_SESSION['usuario']['usuarioId'];
	$oPerfil            = new Perfil();
	$oProyecto          = new Proyecto();
	$perfil             = $oPerfil -> obtenerPerfilPorId($perfilId);
	$aProyecto          = $oProyecto -> obtenerDatosCompletosProyecto($usuarioId);
	$resultadoProyecto  = $oProyecto -> obtenerResultadoFinalDelProyecto($aProyecto[0]['registroProyectoId']);
	$perfilUsuario      = $perfil['perfil'];
    	$tipoAcceso 	    = isset($_SESSION['tipoAcceso']) ? $_SESSION['tipoAcceso'] : "";
    	$statusProyecto     = isset($aProyecto[0]['statusProyecto']) ? $aProyecto[0]['statusProyecto'] : "";
    	$comentarios 	    = isset($aProyecto[0]['comentarios']) ? $aProyecto[0]['comentarios'] : "";
    	
    	if ($resultadoProyecto != 0 && $statusProyecto == 'e'){
    		
    		$aRecomendaciones = $oProyecto -> obtenerRecomendacionesDelProyectoEvaluado($aProyecto[0]['registroProyectoId']);
    		$oSmarty -> assign ("recomendaciones",$aRecomendaciones);
    		
    	}
        
        
        
        if($statusProyecto == 'p'){
        	$oSmarty -> assign ("comentarios",$comentarios);
        }
	
	$oSmarty -> assign ("resultadoProyecto",$resultadoProyecto);
	$oSmarty -> assign ("statusProyecto",$statusProyecto);
	$oSmarty -> assign ("tipoAcceso", $tipoAcceso);
	$oSmarty -> assign ("perfil",$perfilUsuario);
	$oSmarty -> assign("contenido","panel_usuario.tpl.html");
	$oSmarty -> assign("titulo","Panel Principal de Usuarios");
	
}
?> 
