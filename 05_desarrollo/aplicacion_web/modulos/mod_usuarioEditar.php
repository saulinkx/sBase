<?php
require_once dirname (__FILE__) . "/../include/api/Usuario.class.php";
require_once dirname (__FILE__) . "/../include/api/Escuela.class.php";
require_once dirname (__FILE__) . "/../include/api/Permiso.class.php";
require_once dirname (__FILE__) . "/../include/api/Catalogos.class.php";
require_once dirname (__FILE__) . "/../include/api/Perfil.class.php";
function execute (&$oSmarty)
{
    $oSmarty -> assign ("modo", "editar");

    $oUsuario = new Usuario ();

    if (empty ($_POST))
    {
        $oSmarty -> assign ("contenido", "usuario_agregar.tpl.html");

        $aUsuario = $oUsuario -> obtenerPorId ($_GET ["usuarioId"]);
		
        if (!empty ($aUsuario))
        {
            $oSmarty -> assign ("datos", $aUsuario);
        }

		$oCarreras = new Catalogos ();
		$oSmarty -> assign ("carreras", $oCarreras -> listarCarreras ());
	
	
		$oPerfil = new Perfil ();
		$oSmarty -> assign ("perfiles", $oPerfil -> listar ());


    }

 
 

    else
    {
        unset ($_POST ["accion"]);
        $oUsuario -> modificar ($_POST);

        header ("Location:index.php?modulo=usuarioListar");

        exit;
    }
}
?>
