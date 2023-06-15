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