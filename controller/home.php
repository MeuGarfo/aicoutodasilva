<?php
//view('home');
$primeiroSegmento=segment(1);
switch ($primeiroSegmento) {
    case 'entrar':
        controller("entrar");
        break;
    default:
        // code...
        break;
}
