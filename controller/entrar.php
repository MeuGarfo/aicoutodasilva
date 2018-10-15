<?php
if(getMethod()=='POST'){
    controller('entrarPost');
}else{
    view("entrar");
}
