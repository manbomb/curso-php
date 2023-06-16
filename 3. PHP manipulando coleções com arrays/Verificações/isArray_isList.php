<?php

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10
    ],
    [
        'aluno' => 'João',
        'nota' => 6
    ],
    [
        'aluno' => 'Claudia',
        'nota' => 8
    ],
];

$naoLista = [
    'oi' => 1,
    'b' => 2
];

if (is_array($notas)) {
    echo "É um array!";
}

if (array_is_list($naoLista)) {
    echo "É uma lista!";
}