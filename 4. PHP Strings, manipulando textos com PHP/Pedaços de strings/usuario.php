<?php

$email = 'sergio@gmail.com';

$nome = substr($email, 0, 6);
var_dump($nome);

$dominio = substr($email, 7, 5);
var_dump($dominio);