<?php
require_once dirname(__FILE__) . "/../lib/smarty/Smarty.class.php";

$oSmarty = new Smarty ();


$oSmarty -> template_dir = dirname (__FILE__) . "/../templates/";
$oSmarty -> compile_dir = dirname (__FILE__) . "/../templates_c/";


if (isset ($_SESSION ["logged"]))
{
    $oSmarty -> assign ("perfilId", $_SESSION ["perfilId"]);
}
?>
