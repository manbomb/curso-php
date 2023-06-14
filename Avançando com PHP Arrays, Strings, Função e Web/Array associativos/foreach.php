<?php

$conta1 = [
    'nome' => 'Sérgio',
    'saldo' => 100
];

$conta2 = [
    'nome' => 'Maria',
    'saldo' => 1000
];

$conta3 = [
    'nome' => 'Alberto',
    'saldo' => 30
];

$contasCorrentes = [
    '123' => $conta1,
    '234' => $conta2,
    '345' => $conta3
];

$contasCorrentes['456'] = [
    'nome' => 'Claudia',
    'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf." = ".$conta['nome'].PHP_EOL;
}
