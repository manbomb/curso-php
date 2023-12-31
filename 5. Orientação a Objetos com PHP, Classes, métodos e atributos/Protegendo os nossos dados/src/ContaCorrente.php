<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;

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

    public function defineCpfTitular(string $cpf)
    {
        $this->cpfTitular = $cpf;
    }

    public function defineNomeTitular(string $nome)
    {
        $this->nomeTitular = $nome;
    }

    public function recuperarCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function recuperarNomeTitular(): string
    {
        return $this->nomeTitular;
    }
}

$umaNovaConta = new Conta();

$umaNovaConta->defineCpfTitular('556.998.077-08');
$umaNovaConta->defineNomeTitular('Sérgio Avilla');
$umaNovaConta->depositar(400);

$segundaConta = new Conta();

$segundaConta->defineCpfTitular('667.001.077-08');
$segundaConta->defineNomeTitular('Kauane');

$umaNovaConta->transferir(100, $segundaConta);

var_dump($segundaConta);