<?php
/*
Exercício 2:
    Sistema de Gerenciamento de Produtos
Descrição:
    Crie uma classe Produto que represente um produto em uma loja. A classe
    deve ter os seguintes atributos privados: nome, preço, quantidade em estoque. Deve
    haver métodos públicos para alterar o preço, ajustar a quantidade em estoque e exibir os
    detalhes do produto.
Instruções:
    1. Defina a classe Produto com os atributos privados.
    2. Crie métodos alterarPreco($novoPreco), ajustarEstoque($quantidade) e
    exibirDetalhes().
    3. Crie um objeto Produto, altere o preço e a quantidade em estoque, e exiba os
    detalhes.
*/

class Produto
{
    private string $nome;
    private float $preco;
    private int $quantidadeEmEstoque;

    function __construct(string $nome, float $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidadeEmEstoque = 0;
    }

    public function alterarPreco(float $novoPreco): void
    {
        echo "Alterando o preço do produto\n";
        echo "Valor anterior: R$$this->preco\n";
        echo "Valot atual: R$$novoPreco";
        $this->preco = $novoPreco;

        return;
    }

    public function ajustarEstoque($quantidade): void
    {
        $this->quantidadeEmEstoque = $quantidade;

        echo "Estoque ajustado com sucesso";

        return;
    }

    public function exibirDetalhes(): void
    {
        echo "Detalhes do produto\n";
        echo "Nome: $this->nome\n";
        echo "Preço: R$$this->preco\n";
        echo "Quantidade em estoque: $this->quantidadeEmEstoque";

        return;
    }
}
