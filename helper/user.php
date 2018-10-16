<?php
function getUserById($userId){
    $db=db();
    $where=[
        'id'=>$userId
    ];
    return $db->get('user','*',$where);
}
function isAuth(){
    $userId=getCookie('user_id');
    $userToken=getCookie('token');
    $user=getUserById($userId);
    if($user){
        if($user['token']==$userToken && $user['token_expiration']>time()){
            return $user;
        }
    }
    return false;
}
