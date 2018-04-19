<?php
require_once (dirname (__FILE__ ) . "/../database_config.php");
require_once (dirname (__FILE__ ) . "/../adodb.php");

function getDb () {
    static $db;
//     static $cuenta = 1;

    if (!isset ($db)) {
        $db = ADONewConnection (DATABASE_DRIVER);

        $db -> connect (DATABASE_HOST, DATABASE_USER, DATABASE_PASSWD, DATABASE_NAME);
        
        $db -> Execute ("SET NAMES 'utf8'");

        //$db -> debug = true;
    }

    return $db;
}
?>
