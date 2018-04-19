<?php

require_once dirname (__FILE__) . "/../persistencia/Persistencia.class.php";

class Permiso
{
    /**
    * Listar los perfiles. Esta funcionalidad
    * solo puede ser ejecutada por un administrador.
    */
    function listar ()
    {
        $oPersistencia = new Persistencia ();
        return $oPersistencia -> listar ("permisos");
    }
    
    function obtenerPermisosPorPerfil ($perfilId)
    {
        $oPersistencia = new Persistencia ();
        return $oPersistencia -> listar (array ("permisos", "perfil_permiso"), "", array ("perfilId" => $perfilId));
    }
}

?>
