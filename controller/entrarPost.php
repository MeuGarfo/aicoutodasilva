<?php
$db=db();
$where=[
    'email'=>@$_POST['email']
];
$user=$db->get('user','*',$where);
if($user){
    $password=@$_POST['password'];
    if(passwordVerify($password,$user['password'])){
        print 'login ok';
    }else{
        dadosIncorretos();
    }
}else{
    dadosIncorretos();
}

function dadosCorretos(){
    
}

function dadosIncorretos(){
    $url='/entrar?erro';
    header('Location: '.$url);
}
