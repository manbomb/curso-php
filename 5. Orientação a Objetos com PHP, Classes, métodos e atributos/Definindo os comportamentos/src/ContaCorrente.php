<?php

class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;

    public function depositar(float $valor): void
    {
        if ($valor < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        $this->saldo += $valor;

    }

    public function sacar(float $valor)
    {
        if ($valor > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valor;

    }

    public function transferir(float $valor, Conta $contaDestino): void
    {
        if ($valor > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->sacar($valor);
        $contaDestino->depositar($valor);

    }
}

$umaNovaConta = new Conta();

$umaNovaConta->cpfTitular = '556.998.077-08';
$umaNovaConta->nomeTitular = 'Sérgio Avilla';
$umaNovaConta->saldo = 100;
$umaNovaConta->depositar(400);

$segundaConta = new Conta();

$segundaConta->cpfTitular = '667.001.077-08';
$segundaConta->nomeTitular = 'Kauane';
$segundaConta->saldo = 100;

$umaNovaConta->transferir(100, $segundaConta);

var_dump($segundaConta);