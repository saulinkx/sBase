<?php
require_once dirname (__FILE__) . "/../persistencia/Persistencia.class.php";
require_once dirname (__FILE__) . "/Permiso.class.php";
require_once dirname (__FILE__) . "/Profesor.class.php";
require_once dirname (__FILE__) . "/Escuela.class.php";
require_once dirname (__FILE__) . "/Acceso.class.php";

class Usuario
{

    function registrar ($aDatos)
    {
        $aResult = array ();
        $oPersistencia = new Persistencia ();

        $aDatos ["usuario"]       = $aDatos ["email"];
        $password		  = $this -> generarPassword();
        $aDatos["password"]       = sha1($password);
        $aDatos["activo"]	  = "1";
        $aDatos ["fechaRegistro"] = date ("Y-m-d H:i:s");
        
        $oPersistencia -> insertar("usuarios",$aDatos);
        
        $aResult = array ("nombre" => $aDatos ["nombre"], "usuario" => $aDatos["email"], "password" => $password);
        
        return $aResult;
	
    }

    function eliminar ($aDatos)
    {
        $oPersistencia = new Persistencia();

        $aCondiciones = array ("usuarioId=" . $aDatos ["usuarioId"]);

        $oPersistencia -> borrar ("usuarios", $aCondiciones);
    }


    function modificar ($aDatos)
    {
        $oPersistencia = new Persistencia ();

        $aCondiciones = array ("usuarioId=" . $aDatos["usuarioId"]);

        $oPersistencia -> actualizar ("usuarios", $aDatos, $aCondiciones);
    }

    function obtenerPorId ($id)
    {
		if (empty($id)) $id= 0;
		
        $oPersistencia = new Persistencia ();

        $aCondiciones = array ("usuarioId=" . $id);

        $resultado = $oPersistencia -> listar ("usuarios", "", $aCondiciones);

        if (count ($resultado) == 1)
        {
            return $resultado [0];
        }

        return null;
    }
    
    function verificarSiTienePermisoDeAccesar($perfilId){ //Se verificara las validaciones de los accesos en esta parte
          $oPersistencia = new Persistencia ();						 //para asegurar el correcto funcionamiento con las nuevas estructuraciones
          
          
			$sql  = "SELECT tipoAccesoId, fechaInicio, fechaFin FROM accesos ORDER BY tipoAccesoId";
		
          		$accesos     	= $oPersistencia -> listarRaw($sql);
          		$oAcceso	= new Acceso();
          		$aTiposDeAcceso = $oAcceso -> listarTiposDeAcceso();
		  
		$aAsignacionDeAccesos = array();
		  
		foreach($accesos as $acceso)
		{
			
			foreach($aTiposDeAcceso as $tipoDeAcceso){
			
				if($acceso['tipoAccesoId'] == $tipoDeAcceso['tipoAccesoId']){
				
					$aAsignacionDeAccesos[$tipoDeAcceso['acceso']] = array(
												$tipoDeAcceso['acceso'] . "Inicio" =>  strtotime($acceso['fechaInicio']),
												$tipoDeAcceso['acceso'] . "Fin" => strtotime($acceso['fechaFin']));
				}
				
			}// Fin del foreach
			
		  }//Fin del foreach de accesos
		  
          
          $aCondiciones  = array ("perfilId=" . $perfilId);
          $resultado     = $oPersistencia -> listar ("perfiles","",$aCondiciones);
          $perfiles      = $resultado [0];
		  
          $login = "";
          
          $fechaActual = strtotime(date("Y-m-d"));
                    
          switch ($perfiles["perfil"]){
               case "admin":
                    $login = 1;
                    return $login;
                    break;
                    exit;
		
               case "adminPeji":
				
			if($fechaActual >= $aAsignacionDeAccesos['peji']['pejiInicio'] && $fechaActual <= $aAsignacionDeAccesos['peji']['pejiFin']){
                                        $_SESSION["tipoAcceso"] = "adminPeji";
					$login = 1;
					return $login;
					break;
					exit;
				}
				else{
				
					$login = 0;
					return $login;
					break;
					exit;
					
				}
				
               case "participante":                  
                    
                    if($fechaActual >= $aAsignacionDeAccesos['registroProyecto']['registroProyectoInicio'] && $fechaActual <= $aAsignacionDeAccesos['registroProyecto']['registroProyectoFin']){
					$_SESSION["tipoAcceso"] = "registroProyecto";
                         $login = 1;
                         return $login;
                         break;
                         exit;
                    }else {
				
			$login = 0;
			return $login;
			break;
			exit;
		    }
          }
    }
       
    function verificarLogin ($aDatos)
    {
       
        $usuario = $this -> obtenerUsuarioDesdeLogin ($aDatos ["usuario"], $aDatos["password"]);

        return $usuario;
    }
    
    function obtenerUsuarioDesdeLogin ($usuario, $password)
    {
        $oPersistencia = new Persistencia ();
        $result = null;

        $aCondiciones = array ("usuario" => $usuario, "password" => sha1($password));

        $lista = $oPersistencia -> listar ("usuarios", "", $aCondiciones);
        
        $oPermiso = new Permiso ();
        if (count ($lista) == 1)
        {
            $result = $lista [0];
            
            $aPermisos = array ();

            foreach ($oPermiso -> obtenerPermisosPorPerfil ($result ["perfilId"]) as $permiso)
            {
                $aPermisos [] = $permiso["permiso"];
            }

            $result ["permisos"] = $aPermisos;
        
        }
        
        return $result;
    }
    
    function listar ()
    {
        $oPersistencia = new Persistencia ();

          return $oPersistencia -> listar (array ("perfiles", "usuarios"));
       

    }
    
    function generarPassword(){
	$caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
	$cadena     = "";
        for($i=0;$i<8;$i++) {
	    $cadena .= substr($caracteres,rand(0,62),1);
        }
	return $cadena;
    }
    
    function obtenerPorEmail($aDatos)
    {
          $oPersistencia = new Persistencia ();
          
          $perfilDelUsuarioARecuperar = $aDatos['perfilIdRecuperarPass'];
          
          if($perfilDelUsuarioARecuperar == 6){
               
               $condicionAdicional = 'perfilId=6';
               
          }elseif($perfilDelUsuarioARecuperar != 6){
               
               $condicionAdicional = 'perfilId!=6';
          
          }
          
          $listarDocenteSql = "SELECT * FROM usuarios WHERE usuario='{$aDatos['usuario']}' AND {$condicionAdicional}";

          $resultado = $oPersistencia -> listarRaw ($listarDocenteSql);

          if (count ($resultado) >= 1)
          {
               return $resultado[0];
          }
          
          return $resultado;
    }
    
    function obtenerEscuelaIdPorProfesorId($profesorId)
    {
    
        $oPersistencia = new Persistencia();
        
        $sql = "SELECT escuelaId FROM usuarios INNER JOIN profesores ON usuarios.usuarioId=profesores.usuarioId WHERE profesores.profesorId={$profesorId};";
        
        $resultado = $oPersistencia -> listarRaw($sql);
        
        return $resultado[0];
    
    }
    
    function modificarPassword($password,$usuarioId){
    
          $oPersistencia = new Persistencia();
          
          $aCondiciones = array ("usuarioId=" . $usuarioId);
          
          $aDatos = array("password" => $password);

          $oPersistencia -> actualizar ("usuarios", $aDatos, $aCondiciones);
    
    }
}

?>
