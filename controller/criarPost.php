<?php
$data['user']=isAuth();
if($data['user']){
    if(getMethod()=='GET'){
        //mostrar o editor
        view('criarPost',$data);
    }else{
        //salvar o post
        controller("salvarPost",$data);
    }
}else{

}
?>
