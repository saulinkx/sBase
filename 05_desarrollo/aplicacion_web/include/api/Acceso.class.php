<?php
require_once dirname ( __FILE__ ). "/../persistencia/Persistencia.class.php";

class Acceso
{
     function registrar($aDatos)
     {
          $oPersistencia = new Persistencia();
          
          $resultado = $oPersistencia -> insertar("accesos",$aDatos);
          
          return $resultado; 
     }
     
     function modificar($aDatos,$accesoId)
     {
          $oPersistencia = new Persistencia();
          
          $aCondiciones = array("accesoId=" . $accesoId);
          
          $resultado = $oPersistencia -> actualizar("accesos",$aDatos,$aCondiciones);
          
          return $resultado;
     }
     
     function listarTiposDeAcceso(){
		
		$oPersistencia = new Persistencia();
		
		$aTiposDeAcceso = $oPersistencia -> listar("tipoAccesos",array(),array(),array("orden"));
		
		return $aTiposDeAcceso;
     }
     
     function listarTipoDeAccesoPorNombreAcceso($acceso){
     
		$oPersistencia = new Persistencia();
		
		$aAcceso = $oPersistencia -> listar("tipoAccesos",array(),array("acceso" => $acceso),array());
		
		return $aAcceso[0];
     
     }
     
}
?>
