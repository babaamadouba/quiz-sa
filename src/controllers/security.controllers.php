<?php

require_once(path_src."models/users.models.php");

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_REQUEST['action'])){


        if($_REQUEST['action']=="connexion"){
            die("je suis sur conexion");
           $login=$_POST['login'];
           $password=$_POST['password'];
           connexion($login,$password);
            

        }

        







     }


    }











if($_SERVER['REQUEST_METHOD']=="GET"){
  
    if(isset($_REQUEST['action'])){


        if($_REQUEST['action']=="connexion"){
          require_once(path_views."securite".DIRECTORY_SEPARATOR."connexion.html.php");
            

        }

        







     }









}
   
  

function connexion(string $login,string $password):void {
    $errors=[];

champ_obligatoire('login',$login,$errors,"champs obligatoire");

    if(count($errors)==0){

    valid_email('login',$login,$errors);

}



champ_obligatoire('password',$password,$errors);

   if(count($errors==0)){
     
      $users= find_user_login_password($login,$password);

    if((count($users))!=0){
          $_SESSION['users-connect']=$users;
          header("location:http://localhost/projet_quiz_sa/public/?controller=users&action=acceuil");
          exit();


        }
    else{
     $errors['connexion']="utilisateur non definis";
     $_SESSION['errors']=$errors;
     header("location:http://localhost/projet_quiz_sa/public/?controller=users&action=acceuil");
     exit();


    }

   }
   
   
   else{
       $_SESSION["errors"]=$errors;
       header("location:http://localhost/projet_quiz_sa/public/");
       exit();

    }


}

   


?>