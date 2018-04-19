<?php
function execute(&$oSmarty)
{
    $oSmarty -> assign ("usuarioPermisos", $_SESSION ["usuarioPermisos"]);
    
    $oSmarty -> assign ("titulo", "Agregar un nuevo perfil");
    $oSmarty -> assign ("contenido", "password_modificar.tpl.html");
}
?>
