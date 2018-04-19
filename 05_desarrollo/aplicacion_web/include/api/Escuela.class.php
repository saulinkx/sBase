<?php

require_once dirname (__FILE__) . "/../persistencia/Persistencia.class.php";


class Escuela
{
    /**
    * REGISTRA EN LA BD LA INFORMACION DE LA ESCUELA
    * @param $aDatos  SON TODOS LOS DATOS REQUERIDOS DE ESCUELA 
    * @retcompetenciasurn $aResult ARREGLO CON LOS DATOS DE ESCUELA
    */
    function registrar ($aDatos)
    {
        $aResult = array ();
        $oPersistencia = new Persistencia ();
    
        $aDatos ["fechaRegistro"] = date ("Y-m-d H:i:s");
        $oPersistencia -> insertar("escuelas",$aDatos);
 		$aResult = array ("escuela" => $aDatos ["escuela"], "fechaRegistro" => $aDatos["fechaRegistro"]);
        
        return $aResult;
    }
    
    /**
    * Elimina la escuela Registrada. Esta funcionalidad
    * solo puede ser ejecutada por un administrador.
    */
    function eliminar ($aDatos)
    {
        $oPersistencia = new Persistencia();
        $aCondiciones = array ("escuelaId=" . $aDatos ["escuelaId"]);
        $oPersistencia -> borrar ("escuelas", $aCondiciones);
    }
    
    /**
    * Modifica la escuela Seleccionada. Esta funcionalidad
    * solo puede ser ejecutada por un administrador.
    */
    function modificar ($aDatos)
    {
        $oPersistencia = new Persistencia ();
        $aCondiciones = array ("escuelaId=" . $aDatos["escuelaId"]);
        $oPersistencia -> actualizar ("escuelas", $aDatos, $aCondiciones);
    }
    
    /**
    * Listar las escuelas. Esta funcionalidad
    * solo puede ser ejecutada por un administrador.
    */

    function listar ()
    {
        $oPersistencia = new Persistencia ();
        return $oPersistencia -> listar (array("estados","escuelas"),array("escuelaId","escuela","estado"),array("escuelaId !" => 200),array("escuela"));
    }

    function obtenerPorId ($id)
    {
        $oPersistencia = new Persistencia ();
        $aCondiciones = array ("escuelaId" => $id);
        $resultado = $oPersistencia -> listar ("escuelas", "", $aCondiciones);
        
        if (count ($resultado) > 0)
            return $resultado [0];
        else
            return null;
    }
}

?>
