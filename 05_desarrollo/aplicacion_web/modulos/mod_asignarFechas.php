<?php
require_once dirname  (__FILE__) . "/../include/api/Escuela.class.php";
require_once dirname  (__FILE__) . "/../include/api/Acceso.class.php";

function execute(&$oSmarty)
{    
     
     $oSmarty -> assign ("titulo", "Asignación de fechas");
  
     $oEscuela  = new Escuela ();
     $aEscuelas = $oEscuela -> listar ();
     
     $oAcceso   = new Acceso();
     $aAcceso   = $oAcceso -> listarAccesoNacional();
     //$aTiposDeAcceso = $oAcceso -> listarTiposDeAcceso();
	 /*
     if($aAcceso != null)
     {
          $oSmarty -> assign("accesoNacional",$aAcceso);
     }
     */
     $oSmarty -> assign ("tiposDeAcceso",$aAcceso);
     $oSmarty -> assign ("escuelas", $aEscuelas);     
     $oSmarty -> assign ("contenido", "asignarFechas.html.tpl");
}
?>
