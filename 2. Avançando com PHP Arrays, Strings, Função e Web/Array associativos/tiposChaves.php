<?php

// só trabalha com numericos inteiros ou strings
// faz conversão para o tipo da primeira declaração

$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
];

var_dump($array);