<?php
/*
Exercício 3:
    Sistema de Gerenciamento de Funcionários
Descrição:
    Crie uma classe Funcionario que represente um funcionário em uma
    empresa. A classe deve ter os seguintes atributos privados: nome, cargo, salário. Deve
    haver métodos públicos para ajustar o salário, alterar o cargo e exibir os detalhes do
    funcionário.
Instruções:
    1. Defina a classe Funcionario com os atributos privados.
    2. Crie métodos ajustarSalario($novoSalario), alterarCargo($novoCargo)
    e exibirDetalhes().
    3. Crie um objeto Funcionario, ajuste o salário e o cargo, e exiba os detalhes.
*/

class Funcionario
{
    private string $nome;
    private string $cargo;
    private float $salario;

    function __construct(string $nome, string $cargo)
    {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = 0;
    }

    public function ajustarSalario(float $novoSalario): void
    {
        echo "Ajustando o salário...\n";

        echo "Valor anterior: R$$this->salario\n";

        $this->salario = $novoSalario;

        echo "Valor atual: R$$this->salario";

        return;
    }
    public function alterarCargo(string $novoCargo): void
    {
        echo "Alterando o cargo...\n";

        echo "Cargo antigo: $this->cargo\n";

        $this->cargo = $novoCargo;

        echo "Cargo novo: $this->cargo";

        return;
    }
    public function exibirDetalhes(): void
    {
        echo "Exibindo detalhes do funcionário...\n";
        echo "Nome: $this->nome\n";
        echo "Cargo: $this->cargo\n";
        echo "Salário: R$$this->salario";

        return;
    }
}
