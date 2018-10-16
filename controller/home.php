<?php
//view('home');
$primeiroSegmento=segment(1);
switch ($primeiroSegmento) {
    case '/':
        view("home");
        break;
    case 'entrar':
        controller("entrar");
        break;
    case 'listaDePosts':
        controller("listaDePosts");
        break;
    default:
        // code...
        break;
}
