

<?php

if(session_status()==PHP_SESSION_NONE){
    session_start();
}

require_once(dirname(dirname(__FILE__))."/config/constantes.php" );
require_once(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."config/role.php" );
require_once(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."config/router.php" );
require_once(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."config/validator.php" );
require_once(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."config/orm.php" );








?>