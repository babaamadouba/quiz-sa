<?php

if(isset($_REQUEST['controller'])){


   switch($_REQUEST['controller']){

    case 'security':
        require_once(path_src."controllers/security.controllers.php");
        
        break;

    case 'users':
        require_once(path_src."controllers/users.controllers.php");
        echo "bbbbb";
    break;


 }















}






















?>