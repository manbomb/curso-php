<?php

$email = 'sergio@gmail.com';

$posArroba = strpos($email, '@');

$nome = substr($email, 0, $posArroba);
var_dump($nome);

$dominio = substr($email, $posArroba + 1);
var_dump($dominio);
