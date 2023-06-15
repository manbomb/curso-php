<?php

// include "funcoes.php"; // não é essencial, não dá erro
require "funcoes.php"; // essencial
require_once "funcoes.php"; // se já importou, não o faz novamente

$contasCorrentes = [
    '123' => [
        'nome' => 'Sérgio',
        'saldo' => 100
    ],
    '234' => [
        'nome' => 'Maria',
        'saldo' => 1000
    ],
    '345' => [
        'nome' => 'Alberto',
        'saldo' => 30
    ],
    '456' => [
        'nome' => 'Claudia',
        'saldo' => 2000
    ]
];

$contasCorrentes['123'] = sacar($contasCorrentes['123'], 100);
$contasCorrentes['123'] = depositar($contasCorrentes['123'], 100);

foreach ($contasCorrentes as $cpf => $conta) {
    console("{$conta["nome"]} = {$conta["saldo"]}");
}
