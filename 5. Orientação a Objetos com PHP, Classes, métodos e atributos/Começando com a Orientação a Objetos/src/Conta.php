<?php

class Conta
{
    public $cpfTitular;
    public $nomeTitular;
    public $saldo;
}

$umaNovaConta = new Conta();
$umaNovaConta->cpfTitular = '556.998.077-08';
$umaNovaConta->nomeTitular = 'Sérgio Avilla';
$umaNovaConta->saldo = 100;

var_dump($umaNovaConta);