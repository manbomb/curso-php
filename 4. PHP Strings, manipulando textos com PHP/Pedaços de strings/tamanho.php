<?php

$email = 'sergio@gmail.com';
$senha = '123á';

// acentos ocupam dois bytes

echo $senha[0].PHP_EOL;

$lengthPass = strlen($senha);
var_dump($lengthPass);

$lengthPassMB = mb_strlen($senha);
var_dump($lengthPassMB);

$posArroba = strpos($email, '@');

$nome = substr($email, 0, $posArroba);
var_dump($nome);

$dominio = substr($email, $posArroba + 1);
var_dump($dominio);
