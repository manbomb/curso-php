<?php

require "funcoes.php";

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
titular_com_letras_maiusculas($contasCorrentes['123']);

unset($contasCorrentes['234']);

foreach ($contasCorrentes as $cpf => $conta) {
    ['nome' => $nome, 'saldo' => $saldo] = $conta;
    console("$nome = $saldo");
}
