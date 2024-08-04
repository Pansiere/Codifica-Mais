<?php

require 'autoload.php';

function exibirMenu()
{

    echo "\n";
    echo "Escolha uma das opções abaixo:\n";
    echo "1. Adicionar um produto 1\n";
    echo "2. Vender um produto 2\n";
    echo "3. Atualizar produto 3\n";
    echo "4. Listar o Estoque 4\n";
    echo "5. Deletar um produto 5\n";
    echo "6. Sair\n";
    $opcao = readline("Digite a sua escolha: ");
    echo PHP_EOL;
    return $opcao;
}

$estoque = new Estoque();

while (true) {

    $opcao = exibirMenu();

    switch ($opcao) {
        case 1:
            echo "Adicionando um produto... para o tipo:\n";
            $estoque->adicionar();
            break;
        case 2:
            echo "Vendendo um produto...\n";
            $estoque->vender();
            break;
        case 3:
            echo "Atualizando um produto...\n";
            $estoque->atualizar();
            break;
        case 4:
            echo "Listando o estoque...\n";
            $estoque->listar();
            break;
        case 5:
            echo "Deletando um produto...\n";
            $estoque->deletar();
            break;
        case 6:
            echo "Saindo...\n";
            exit;
        default:
            echo "\nOpção inválida, por favor tente novamente.\n";
            break;
    }
};
