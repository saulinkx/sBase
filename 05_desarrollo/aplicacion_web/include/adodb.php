<?php
require (dirname (__FILE__) . "/../lib/adodb5/adodb.inc.php");
require ("database_config.php");

$db = ADONewConnection (DATABASE_DRIVER);
$db->Connect (DATABASE_HOST, DATABASE_USER, DATABASE_PASSWD, DATABASE_NAME);
?>
