<?php
require_once dirname (__FILE__) . "/../include/api/Usuario.class.php";
require_once dirname (__FILE__) . "/../include/api/Escuela.class.php";

function execute (&$oSmarty)
{

    $oSmarty -> assign ("titulo", "Inicio de sesión");	

    if (empty ($_POST))
    {
    	
    	$datos = array("usuario" => "", "password" => "");
    	$oSmarty -> assign ("datos",$datos);
        $oSmarty -> assign ("contenido", "login_default.html.tpl");

        
    }
    else {
        $oUsuario = new Usuario ();
        
        $datos = array("usuario" => $_POST['usuario'], "password" => $_POST['password']);
        $usuario = $oUsuario -> verificarLogin ($_POST);
        $aPermisos = $usuario ["permisos"];

        if (empty ($aPermisos))
        {

            $oSmarty -> assign ("errorMensaje", "Acceso incorrecto");
            $oSmarty -> assign ("contenido", "login_default.html.tpl");

        }
        else 
        {
            $tieneAccesoElUsuario = $oUsuario -> verificarSiTienePermisoDeAccesar($usuario["perfilId"]);
            
            if($tieneAccesoElUsuario == 0){
            	
                 $oSmarty -> assign ("errorMensaje", "No puedes ingresar a la plataforma debido a las fechas de acceso establecidas");
                 $oSmarty -> assign ("contenido", "login_default.html.tpl");
               
            }
            
            if($tieneAccesoElUsuario == 1){
                 
                 $_SESSION ["usuarioPermisos"] = $aPermisos;
                 $_SESSION ["usuario"] = $usuario;
                 $_SESSION ["usuarioId"] = $usuario['usuarioId'];
                 
                 $oSmarty -> assign ("usuarioPermisos", $aPermisos);
                 
                 header ("Location:index.php?modulo=panelUsuario");
                 exit;
            }
        }
    }

    $oSmarty -> assign ("datos",$datos);
}
?>
