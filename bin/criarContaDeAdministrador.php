<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require './inc/autoload.php';

pedirDados();

function pedirDados(){
    $db=db();
    print 'Digite seu nome completo e aperte enter'.PHP_EOL;
    $name = readline("Nome completo: ");
    system('clear');
    print 'Digite seu email e aperte enter'.PHP_EOL;
    $email = readline("Email: ");
    system('clear');
    $email=isEmail($email);
    if($email){
        $where=[
            'email'=>$email
        ];
        $user=$db->get("user","*",$where);
        print 'Digite sua senha e aperte enter'.PHP_EOL;
        $password = readline("Senha: ");
        system('clear');
        if($user){
            //atualizar senha
            $user['name']=$name;
            $user['password']=passwordHash($password);
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
            $password=passwordHash($password);
            $user=[
                'name'=>$name,
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
        pedirDados();
    }
}
