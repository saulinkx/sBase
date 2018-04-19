<?php
require_once dirname  (__FILE__) . "/../include/api/Perfil.class.php";

function execute (&$oSmarty)
{
    $oPerfil = new Perfil ();
    $oSmarty -> assign ("titulo", "Agregar nuevo perfil");
    
    if (empty ($_POST))
    {
        unset ($_SESSION ["datos"]);
	
	$perfilId = "";
	$datos	  = array("perfil" => "");
	
	$oSmarty -> assign ("perfilId",$perfilId);
	$oSmarty -> assign ("datos",$datos);
        $oSmarty -> assign ("permisos", $oPerfil -> obtenerPermisosDisponibles ());
        $oSmarty -> assign ("contenido", "perfil_agregar.tpl.html");        
    }
    else
    {
	if (!isset ($_SESSION ["datos"]))
        {
            $_SESSION ["datos"] = $_POST;
        }
        
        switch ($_POST ["accion"])
        {
	    case "guardar":
        
            $aResultado = $oPerfil -> registrar ($_SESSION ["datos"]);
            $oSmarty -> assign ("contenido", "modulo_no_disponible.html.tpl");
        
            header("Location: index.php?modulo=perfilListar");
            break;
	}
    }
}
?>
