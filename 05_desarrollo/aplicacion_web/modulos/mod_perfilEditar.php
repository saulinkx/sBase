<?php
require_once dirname (__FILE__) . "/../include/api/Perfil.class.php";
require_once dirname (__FILE__) . "/../include/api/Permiso.class.php";
function execute (&$oSmarty)
{
    $oSmarty -> assign ("modo", "editar");

    $oPerfil  = new Perfil ();
    $oPermiso = new Permiso ();

    if (empty ($_POST))
    {
        
        unset ($_SESSION ["datos"]);
        
        $perfilId = isset($_GET['perfilId']) ? $_GET['perfilId'] : "";

        $oSmarty -> assign ("perfilId", $perfilId);
        
        $aPerfil = $oPerfil -> obtenerPerfilPorId ($_GET ["perfilId"]);
        $oSmarty -> assign ("permisos", $oPerfil -> obtenerPermisosDisponibles ());
        
        $aPermisos = $oPermiso -> obtenerPermisosPorPerfil ($perfilId);
        
        if (!empty ($aPermisos))
        {
            $oSmarty -> assign ("permisosPerfil", $aPermisos);
        }

        if (!empty ($aPerfil))
        {
            $oSmarty -> assign ("datos", $aPerfil);
        }
        $oSmarty -> assign ("contenido", "perfil_agregar.tpl.html");
    }
    else
    {
        if (!isset ($_SESSION ["datos"]))
        {
            $_SESSION ["datos"] = $_POST;
        }
        
        $datosTablaPerfil = array("perfilId" => $_SESSION["datos"]["perfilId"],"perfil" => $_SESSION["datos"]['perfil']);
        
        $oPerfil -> modificar ($datosTablaPerfil);
        $oPerfil -> eliminarPermisosPorPerfil ($_SESSION ["datos"]);
        $aResultado = $oPerfil -> registrarPermisosPorPerfil ($_SESSION ["datos"]);

        header ("Location:index.php?modulo=perfilListar");

        exit;
    }
}
?>
