<?php
require_once dirname (__FILE__) . "/definicionCampos.php";
require_once dirname (__FILE__) . "/database.php";

class Persistencia 
{
    /**
    * Almacena en la base de datos la información que proporcione como
    * parametros.
    *
    * @param $tablaNombre El nombre de la tabla donde se quiere insertar los datos
    * @param $aDatos El arreglo con los datos que se quieren registrar
    *
    * @return Un valor booleano. True si se puedieron guardar los datos,
    * False si no se puedieron guardar.
    */
    function insertar ($tablaNombre, $aDatos)
    {
        global $defs;
        $camposTabla = $defs [$tablaNombre];
        
        $campos = "";
        $valores = "";

        foreach ($camposTabla as $campo)
        {
            $campos  .= $campo . ",";
            if (!isset ($aDatos [$campo]))
            {
                trigger_error ("El campo: '$campo' definido en la tabla '$tablaNombre' no se encuentra disponible en los datos a insertar. " .
                    var_export($aDatos, true) .
                    " StackTrace: " . var_export(debug_backtrace(), true)
                    , E_USER_NOTICE);
                
                return false;
            }
            
            $valores .= "'" . $aDatos[$campo] . "',";
        }

        $campos = substr ($campos, 0, -1);
        $valores = substr ($valores, 0, -1);

        $sql = "INSERT INTO " . $tablaNombre . "(" . $campos . ") VALUES (" . $valores . ");";
         
        $db = getDb ();


        $db -> Execute ($sql);
        
        
        return $db -> Insert_ID ();
    }
    
    /** 
    * Elimina fisicamente de la base de datos los registros que coincidan
    * con los valores de los parametros indicados
    */
    function borrar ($tabla, $aCondiciones)
    {
        $db = getDb ();

        $sql = "DELETE FROM " . $tabla;
        $sql .= " WHERE ";

        foreach ($aCondiciones as $condicion)
        {
            $sql .= $condicion . " AND ";
        }

        $sql = substr ($sql, 0, -4);

        return $db -> Execute ($sql);
    }
    
    /**
    * Actualiza los registros de la base de datos que coincidan con los
    * valores indicados como parametros
    */
    function actualizar ($tabla, $aDatos, $aCondiciones)
    {
        $db = getDb ();

        $sql = "UPDATE " . $tabla . " SET ";

        foreach ($aDatos as $campo => $valor)
        {
            $sql .= $campo . "=" . $db -> qstr ($valor) . ",";
        }

        $sql = substr ($sql, 0, -1);

        $sql .= " WHERE ";

        foreach ($aCondiciones as $condicion)
        {
            $sql .= $condicion . " AND ";
        }

        $sql = substr ($sql, 0, -4);

        return $db -> Execute ($sql);
    }
    
    /*
    * Regresa el listado de los registros que coincidan con los
    * parametros indicados
    */
    function listar ($tablas, $aCamposSolicitados = array (), $aCondiciones = array (), $aCamposOrderBy = array ())
    {    
        $db = getDb ();
        
        $sql  = 'SELECT ';
        if (!empty ($aCamposSolicitados) && is_array ($aCamposSolicitados))
        {
            $campos = '';
            foreach ($aCamposSolicitados as $campo)
            {
                $campos .= $campo . ',';
            }
            
            $campos = substr ($campos, 0, -1);
            
            $sql .= ' ' . $campos . ' ';
        }
        else
        {
            $sql .= ' * ';
        }
        
        
        $sql .= ' FROM ';
        
        if (!is_array ($tablas))
        {
             $sql .= $tablas;
        }
        else
        {
            $cantidadTablas = count ($tablas);
            $tablaPrimaria = $tablas [0];
            $sql .= $tablaPrimaria;
            for ($i = 1; $i < $cantidadTablas; $i++)
            {
                $tablaPrimaria = $tablas [$i - 1];
                $tablaSecundaria = $tablas [$i];
                
                $primaryKeys = $db -> MetaPrimaryKeys ($tablaPrimaria);
                $primaryKey = $primaryKeys [0];
                
                $sql .= ' INNER JOIN ' . $tablaSecundaria;
                $sql .= ' ON ' . $tablaPrimaria . '.' . $primaryKey . ' = ';
                $sql .= $tablaSecundaria . '.' . $primaryKey . ' ';
            }
        }
        
        if (!empty ($aCondiciones) && is_array ($aCondiciones))
        {
            $condiciones = '';
            foreach ($aCondiciones as $campo => $valor)
            {
                if (isset ($campo) && $campo !== 0)
                {
                    $condiciones .= $campo . '=' . $db-> qstr ($valor) . ' AND ';
                }
                else
                {
                    $condiciones .= $valor . ' AND ';
                }
            }

            $condiciones = substr ($condiciones, 0, -4);
            
            $sql .= ' WHERE ' . $condiciones . ' ';
        }
        
        if (!empty ($aCamposOrderBy) && is_array ($aCamposOrderBy))
        {
            $campos = '';
            foreach ($aCamposOrderBy as $campo)
            {
                $campos .= $campo . ",";
            }

            $campos = substr ($campos, 0, -1);
            
            $sql .= ' ORDER BY ' . $campos;
        }
        
        

        $result = $db -> Execute ($sql);
        
        if ($db -> ErrorNo () == 0)
        {
            return $result -> GetAll ();
        }
            
        return array ();
    }
    
    function listarRaw ($sql)
    {
        $db = getDb ();
        $result = $db -> Execute ($sql);
        
        if ($db -> ErrorNo () == 0)
        {
            return $result -> GetAll ();
        }
    }
    
    function nolistarRaw ($sql)
    {
        $db = getDb ();
        return $result = $db -> Execute ($sql);
        
    }
    
}

?>
