<?php
session_start();
require_once dirname(__FILE__) . "/../include/api/Usuario.class.php";

$passwordActual      = sha1($_POST['passwordActual']);
$password            = sha1($_POST['nuevoPassword']);
$passwordActualLogin = $_SESSION['usuario']['password'];

if($passwordActual != $passwordActualLogin){

     echo "errorPasswordActual";

}else{

     $oUsuario = new Usuario ();

     $oUsuario -> modificarPassword ($password,$_SESSION['usuario']['usuarioId']);
     
     $_SESSION['usuario']['password'] = $password;
     
     echo "actualizacionOk";

}

?>
