<?php
$fechaFinDocente = isset ($_POST['fechaAccesoDocenteFin']) ? $_POST['fechaAccesoDocenteFin'] : "";
$fechaInicioDocente = isset ($_POST['fechaAccesoDocenteInicio']) ? $_POST['fechaAccesoDocenteInicio'] : "";
$fechaFinLocal = isset ($_POST['fechaAccesoLocalFin']) ? $_POST['fechaAccesoLocalFin'] : "";
$fechaInicioLocal = isset ($_POST['fechaAccesoLocalInicio']) ? $_POST['fechaAccesoLocalInicio'] : "";
$fechaFinDictamenLocal = isset ($_POST['fechaAccesoDictamenLocalFin']) ? $_POST['fechaAccesoDictamenLocalFin'] : "";
$fechaInicioDictamenLocal = isset ($_POST['fechaAccesoDictamenLocalInicio']) ? $_POST['fechaAccesoDictamenLocalInicio'] : "";
$fechaFinPar = isset ($_POST['fechaAccesoParFin']) ? $_POST['fechaAccesoParFin'] : "";
$fechaInicioPar = isset ($_POST['fechaAccesoParInicio']) ? $_POST['fechaAccesoParInicio'] : "";
$fechaFinDictamenPar = isset ($_POST['fechaAccesoDictamenParFin']) ? $_POST['fechaAccesoDictamenParFin'] : "";
$fechaInicioDictamenPar = isset ($_POST['fechaAccesoDictamenParInicio']) ? $_POST['fechaAccesoDictamenParInicio'] : "";
$fechaFinApelaciones = isset ($_POST['fechaAccesoApelacionesFin']) ? $_POST['fechaAccesoApelacionesFin'] : "";
$fechaInicioApelaciones = isset ($_POST['fechaAccesoApelacionesInicio']) ? $_POST['fechaAccesoApelacionesInicio'] : "";

$fechaSiguiente = "";

if($fechaFinDocente != "" || $fechaInicioDocente !=""){
     $fechaSiguiente = strtotime($fechaFinDocente) - strtotime($fechaInicioDocente);
     if($fechaSiguiente <= 0){
          $fechaSiguiente = 0;
     }
     else{
          $fechaSiguiente = date("Y-m-d",(strtotime($fechaFinDocente) + 86400));
     }
}

if($fechaFinLocal != "" || $fechaInicioLocal != ""){
     $fechaSiguiente = strtotime($fechaFinLocal) - strtotime($fechaInicioLocal);
     if($fechaSiguiente <= 0){
          $fechaSiguiente = 0;
     }
     else{
          $fechaSiguiente = date("Y-m-d",(strtotime($fechaFinLocal) + 86400));
     }     
}

if($fechaFinDictamenLocal != "" || $fechaInicioDictamenLocal != ""){
     $fechaSiguiente = strtotime($fechaFinDictamenLocal) - strtotime($fechaInicioDictamenLocal);
     if($fechaSiguiente <= 0){
          $fechaSiguiente = 0;
     }
     else{
          $fechaSiguiente = date("Y-m-d",(strtotime($fechaFinDictamenLocal) + 86400));
     }     
}

if($fechaFinPar != "" || $fechaInicioPar != ""){
     $fechaSiguiente = strtotime($fechaFinPar) - strtotime($fechaInicioPar);
     if($fechaSiguiente <= 0){
          $fechaSiguiente = 0;
     }
     else{
          $fechaSiguiente = date("Y-m-d",(strtotime($fechaFinPar) + 86400));
     }    
}

if($fechaFinDictamenPar != "" || $fechaInicioDictamenPar != ""){
     $fechaSiguiente = strtotime($fechaFinDictamenPar) - strtotime($fechaInicioDictamenPar);
     if($fechaSiguiente <= 0){
          $fechaSiguiente = 0;
     }
     else{
          $fechaSiguiente = date("Y-m-d",(strtotime($fechaFinDictamenPar) + 86400));
     }     
}

if($fechaFinApelaciones != "" || $fechaInicioApelaciones != ""){
     $fechaSiguiente = strtotime($fechaFinApelaciones) - strtotime($fechaInicioApelaciones);
     if($fechaSiguiente <= 0){
          $fechaSiguiente = 0;
     }   
}

echo $fechaSiguiente;
?>
