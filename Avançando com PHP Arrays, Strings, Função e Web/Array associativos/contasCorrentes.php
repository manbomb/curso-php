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

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); ++$i) {
    $conta = $contasCorrentes[$i];
    echo $conta['nome'] . PHP_EOL;
}
