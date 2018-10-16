<?php
$db=db();
$where=[
    'email'=>@$_POST['email']
];
$user=$db->get('user','*',$where);
if($user){
    $password=@$_POST['password'];
    if(passwordVerify($password,$user['password'])){
        dadosCorretos($user,$db);
    }else{
        dadosIncorretos();
    }
}else{
    dadosIncorretos();
}

function dadosCorretos($user,$db){
    $user['token']=getToken();
    $mins=60;
    $horas=60*$mins;
    $dias=24*$horas;
    $anos=365*$dias;
    $user['token_expiration']=time()+(2*$anos);
    newCookie('user_id',$user['id'],$user['token_expiration']);
    newCookie('token',$user['token'],$user['token_expiration']);
    $where=[
        'id'=>$user['id']
    ];
    $db->update('user',$user,$where);
    redirect('/criarPost');
}

function dadosIncorretos(){
    redirect('/entrar?erro');
}
