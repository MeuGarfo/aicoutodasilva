<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require './inc/autoload.php';

print 'Digite seu email e aperte enter'.PHP_EOL;

digitarEmail();

function digitarEmail(){
    $db=db();
    $email = readline("Email: ");
    $email=isEmail($email);
    if($email){
        $where=[
            'email'=>$email
        ];
        $user=$db->get("user","*",$where);
        system('clear');
        print 'Digite sua senha e aperte enter'.PHP_EOL;
        $password = readline("Senha: ");
        system('clear');
        if($user){
            //atualizar senha
            $user['password']=password_hash($password, PASSWORD_DEFAULT);
            $user['updated_at']=time();
            $user['type']='admin';
            if($db->update('user',$user,$where)){
                print PHP_EOL.'Usuário '.$email.' atualizado com sucesso'.PHP_EOL;
            }else{
                print PHP_EOL.'Erro ao atualizar o usuário '.$email.PHP_EOL;
            }
        }else{
            //criar usuário
            system('clear');
            $user=[
                'email'=>$email,
                'password'=>$password,
                'created_at'=>time(),
                'type'=>'admin'
            ];
            if($db->insert('user',$user)){
                print PHP_EOL.'Usuário '.$email.' criado com sucesso'.PHP_EOL;
            }else{
                print PHP_EOL.'Erro ao criar o usuário '.$email.PHP_EOL;
                var_dump($db->error());
            }
        }
    }else{
        digitarEmail();
    }
}
