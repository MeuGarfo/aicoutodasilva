<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require './inc/autoload.php';
$db=db();

$email = readline("Email:");
setEmail($email);

function setEmail($email){
    $email=trim(mb_strtolower($email));
    $where=[
        'email'=>$email
    ];
    $user=$db->get("user","*",$where);
    $password = readline("Senha:");
    if($user){
        //atualizar senha
        $password=password_hash($password, PASSWORD_DEFAULT);
        $db->update('user',$user,$where);
    }else{
        //criar usuário
    }
}

print $email;
