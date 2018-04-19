<?php

require_once dirname  (__FILE__) . "/../include/api/Escuela.class.php";
require_once dirname  (__FILE__) . "/../include/api/Catalogos.class.php";

function execute (&$oSmarty)
{
    $oSmarty -> assign ("titulo", "Agregar nueva escuela");

    $oCatalogos = new Catalogos();
    $aEstados = $oCatalogos -> listarEstados();
    $oSmarty -> assign ("estados", $aEstados);
    
    if (empty ($_POST))
    {
        unset ($_SESSION ["datos"]);
        $oSmarty -> assign ("contenido", "escuela_agregar.tpl.html");
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
            $oEscuela = new Escuela ();
        
            $aResultado = $oEscuela -> registrar ($_SESSION ["datos"]);
        
            header("Location: index.php?modulo=escuelaListar");
            break;
	}
    }
}
?>
