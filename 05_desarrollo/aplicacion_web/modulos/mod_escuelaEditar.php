<?php
require_once dirname (__FILE__) . "/../include/api/Escuela.class.php";
require_once dirname  (__FILE__) . "/../include/api/Catalogos.class.php";

function execute (&$oSmarty)
{
    $oSmarty -> assign ("modo", "editar");
    
    $oCatalogos = new Catalogos();
    $aEstados = $oCatalogos -> listarEstados();
    $oSmarty -> assign ("estados", $aEstados);

    $oEscuela = new Escuela ();

    if (empty ($_POST))
    {
    $oSmarty -> assign ("contenido", "escuela_agregar.tpl.html");

	$oSmarty -> assign ("escuelaId", $_GET ["escuelaId"]);

        $aEscuela = $oEscuela -> obtenerPorId ($_GET ["escuelaId"]);

        if (!empty ($aEscuela))
        {
            $oSmarty -> assign ("datos", $aEscuela);
        }
    }
    else
    {
        unset ($_POST ["accion"]);
        
        $oEscuela -> modificar ($_POST);

        header ("Location:index.php?modulo=escuelaListar");

        exit;
    }
}
?>
