<?php
require_once dirname (__FILE__) . "/../persistencia/Persistencia.class.php";
require_once dirname (__FILE__) . "/Permiso.class.php";

class Perfil
{
    /**
    * Registrar en la BD la informacion correspondiente a los perfiles 
    * @param $aDatos son todos los datos necesarios para crear el perfil
    * @return $aResult es un arreglo con los datos del perfil
    */
    function registrar ($aDatos)
    {
        
        $aResult = array ();
        $oPersistencia = new Persistencia ();
        
        $aDatos ["fechaRegistro"] = date ("Y-m-d H:i:s");

        $aPermisos = $aDatos ["permisos"];
        
        $perfilId = $oPersistencia -> insertar("perfiles", $aDatos);

        foreach ($aPermisos as $permisoId)
        {
            $aPerfilPermiso = array ("perfilId" => $perfilId, "permisoId" => $permisoId);
            $oPersistencia -> insertar ("perfil_permiso", $aPerfilPermiso);
        }
        
        $aResult = array ("perfil" => $aDatos ["perfil"], "fechaRegistro" => $aDatos["fechaRegistro"]);
        
        return $aResult;
    }
    
    function modificar ($aDatos)
    {
        $oPersistencia = new Persistencia ();

        $aCondiciones = array ("perfilId=" . $aDatos["perfilId"]);

        $oPersistencia -> actualizar ("perfiles", $aDatos, $aCondiciones);
    }
    
    /**
    * Elimina el perfil seleccionado. Esta funcionalidad
    * solo puede ser ejecutada por un administrador.
    */
    function eliminar ($aDatos)
    {
        $oPersistencia = new Persistencia();

        $aCondiciones = array ("perfilId=" . $aDatos ["perfilId"]);

        $oPersistencia -> borrar ("perfiles", $aCondiciones);
        $oPersistencia -> borrar ("perfil_permiso", $aCondiciones);
    }
    
    function eliminarPermisosPorPerfil($aDatos)
    {
    
        $oPersistencia = new Persistencia();

        $aCondiciones = array ("perfilId=" . $aDatos ["perfilId"]);

        $oPersistencia -> borrar ("perfil_permiso", $aCondiciones);
    
    }
    
    function registrarPermisosPorPerfil ($aDatos)
    {
        
        $aResult = array ();
        $oPersistencia = new Persistencia ();

        $aPermisos = $aDatos ["permisos"];
        
        $perfilId = $aDatos['perfilId'];

        foreach ($aPermisos as $permisoId)
        {
            $aPerfilPermiso = array ("perfilId" => $perfilId, "permisoId" => $permisoId);
            $oPersistencia -> insertar ("perfil_permiso", $aPerfilPermiso);
        }
        
    }
    
    /**
    * Listar los perfiles. Esta funcionalidad
    * solo puede ser ejecutada por un administrador.
    */
    function listar ()
    {
        $oPersistencia = new Persistencia ();

        $aPerfiles = $oPersistencia -> listar ("perfiles");

        $oPermiso = new Permiso ();

        for ($i = 0; $i < count ($aPerfiles); $i++)
        {
            $aPerfiles [$i]["permisos"] = $oPermiso -> obtenerPermisosPorPerfil ($aPerfiles[$i]["perfilId"]);
        }

        return $aPerfiles;
    }
    
    function obtenerPermisosDisponibles ()
    {
        $oPermiso = new Permiso ();

        return $oPermiso -> listar ();
    }

    function obtenerPorNombre ($perfilNombre)
    {
        $oPersistencia = new Persistencia ();

        $result = $oPersistencia -> listar ("perfiles", "", array ("perfil" => $perfilNombre));

        $perfil = null;

        if (count ($result) > 0)
        {
            $perfil = $result [0];
        }

        return $perfil;
    }

    function obtenerPerfilPorId ($perfilId)
    {
        $oPersistencia = new Persistencia ();

        $result = $oPersistencia -> listar ("perfiles", "", array ("perfilId" => $perfilId));

        if (count ($result) > 0)
        {
            return $result[0];
        }

        return null;
    }
}

?>
