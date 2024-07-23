<?php
/*
Exercício 1: Sistema de Gerenciamento de Contas Bancárias
Descrição:
    Crie uma classe ContaBancaria que represente uma conta bancária. A
    classe deve ter os seguintes atributos privados: número da conta, nome do titular, saldo.
    Deve haver métodos públicos para depositar e sacar dinheiro, além de um método para
    exibir o saldo atual.
Instruções:
    1 - Defina a classe ContaBancaria com os atributos privados.
    2 - Crie métodos depositar($quantia), sacar($quantia) e exibirSaldo().
    3 - Garanta que o saldo não fique negativo.
    4 - Crie um objeto ContaBancaria, realize operações de depósito e saque, e exiba o saldo.
*/

class ContaBancaria
{
    private int $numeroDaConta;
    private string $nomeDoTitular;
    private float $saldo;

    function __construct(int $numeroDaConta, string $nomeDoTitular)
    {
        $this->numeroDaConta = $numeroDaConta;
        $this->nomeDoTitular = $nomeDoTitular;
        $this->saldo = 0;
    }

    public function depositar(float $quantia): void
    {
        if ($quantia < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        $this->saldo += $quantia;
        echo "Depósito realizado com sucesso\nValor do depósito: R$$quantia\nTitular: $this->nomeDoTitular\nNúmero da conta: {$this->numeroDaConta}\n";
    }

    public function sacar(float $quantia): void
    {
        if ($quantia > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $quantia;
        echo "Saque realizado com sucesso\nValor do saque: R$$quantia\nTitular: $this->nomeDoTitular\nNúmero da conta: {$this->numeroDaConta}\n";
    }

    public function exibirSaldo(): string
    {
        return "Saldo: R$$this->saldo\nTitular: $this->nomeDoTitular\nNúmero da conta: {$this->numeroDaConta}\n";
    }
}
