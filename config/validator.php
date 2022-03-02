<?php
function champ_obligatoire(string $key,string $data,array &$errors,string
$message="ce champ est obligatoire"){
if(empty($data)){
$errors[$key]=$message;
}
}
function valid_email(string $key,string $data,array &$errors,string $message="email
invalid"){

    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
    if (!(preg_match($regex, $data))) {
        $errors[$key]=$message;
    } 

}

function validate_password($data,$key,array &$errors,$message="mot de passe incorect"){

$regex='/^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%])[0-9A-Za-z!@#$%]
{6,100}$/'; 


if (!(preg_match($regex,$data))) {
    $errors[$key]=$message;
} 



}













     
    ?>








