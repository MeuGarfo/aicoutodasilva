<?php
helper('user');
$primeiroSegmento=segment(1);
switch ($primeiroSegmento) {
    case '/':
    view("home");
    break;
    case 'criarPost':
    controller('criarPost');
    break;
    case 'entrar':
    controller("entrar");
    break;
    case 'listaDePosts':
    controller("listaDePosts");
    break;
    default:
    view('404');
    break;
}
