<?php
helper('user');
print 'lista de posts ok<br>';
$user=isAuth();
if($user){
    print 'olá <b>'.$user['name'].'</b>';
}
