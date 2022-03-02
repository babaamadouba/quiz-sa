<?php
define("ROOT",str_replace("public".DIRECTORY_SEPARATOR."index.php","",$_SERVER['SCRIPT_FILENAME']));
define("path_src",ROOT."src".DIRECTORY_SEPARATOR) ;


define("path_views",ROOT."templates".DIRECTORY_SEPARATOR);

define("path_db",ROOT."data".DIRECTORY_SEPARATOR."db.json");
define("path_config",ROOT."config".DIRECTORY_SEPARATOR);
define("webroot",ROOT."public".DIRECTORY_SEPARATOR);
/*define("webroot",str_replace("index.php","",$_SERVER['SCRIPT_NAME']));*/
define("PATH_POST","http://localhost:8002");
?>