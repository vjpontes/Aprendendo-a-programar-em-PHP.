<?php

$email = 'Pontes.vjp@gmail.com';
$senha = '123';

if (mb_strlen($senha < 8)) {
    echo 'a senha n eh segura' . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@');
$usuario = substr($email, 0, $posicaoDoArroba);


echo mb_strtolower($usuario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;
