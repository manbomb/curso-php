<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;
    public static $numeroDeContas = 0;

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->validaNomeTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
        ++self::$numeroDeContas;
    }

    public function __destruct() {
        echo "Dump!";
    }

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

    public function recuperarCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function recuperarNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    private function validaNomeTitular(string $nomeTitular): void
    {
        if (mb_strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}

$umaNovaConta = new Conta('556.998.077-08', 'Sérgio Avilla');
$umaNovaConta->depositar(400);

$segundaConta = new Conta('667.001.077-08', 'Kauane');
$umaNovaConta->transferir(100, $segundaConta);

var_dump($segundaConta);
var_dump(Conta::$numeroDeContas);

unset($segundaConta);