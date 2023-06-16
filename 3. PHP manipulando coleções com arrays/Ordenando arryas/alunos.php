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

function ordenaNotas(array $nota1, array $nota2): int {
    return $nota2['nota'] - $nota1['nota'];
}

function ordenaNotasOperador(array $nota1, array $nota2): int {
    return $nota2['nota'] <=> $nota1['nota'];
}

$notasOrdenadas = $notas;
usort($notasOrdenadas, 'ordenaNotasOperador');

var_dump($notasOrdenadas);