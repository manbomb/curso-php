<?php

function console(string $msg): void
{
    echo $msg . PHP_EOL;
}

function sacar(array $conta, float $valorSacar): array
{
    if ($valorSacar > $conta['saldo']) {
        console("Não pode sacar este valor!");
        return $conta;
    }
    $conta['saldo'] -= $valorSacar;
    return $conta;
}

function depositar(array $conta, float $valor): array
{
    if ($valor <= 0) {
        console("Não pode depositar este valor!");
        return $conta;
    }
    $conta['saldo'] += $valor;
    return $conta;
}

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
