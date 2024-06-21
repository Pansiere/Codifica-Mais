<?php

/*
1- Adicionar “estoque” inicial no projeto (abaixo). 
2- O sistema não pode permitir adicionar um produto com o mesmo código (SKU) e 
com mesmo nome (Alterar a função adicionarProduto). 
##########3- Criar uma função para apagar todos os produtos  de uma determinada cor. Ex: 
Preciso solicitar o usuário para indicar qual cor ele deseja deletar, após apagar  todos 
os produtos dessa cor. 
##########4- O sistema precisa listar os produtos do estoque em ordem alfabética (Alterar a 
função listarEstoque). 
5- Criar função para indicar o total de itens distintos  que tem disponível no estoque 
(pode considerar os que estão com quantidade zerada), e a quantidade  total de itens 
no estoque  (soma de todas as quantidades  de todos os itens) 
6- Ajustar a função de vender produtos para não deletar o item caso o estoque seja 0. 
7- Criar uma função para deletar o produto pelo código SKU do produto. Caso o 
produto tenha estoque, perguntar se a pessoa de fato quer deletar. 
*/

function exibirMenu()
{
    echo "\n";
    echo "Escolha uma das opções abaixo:\n";
    echo "1. Adicionar um produto 1\n";
    echo "2. Vender um produto 2\n";
    echo "3. Verificar Estoque 3\n";
    echo "4. Listar o estoque 4\n";
    echo "5. Limpar o estoque 5\n";
    echo "6. Deletar produto pelo código SKU 6\n";
    echo "7. Sair\n";
    $opcao = readline("Digite a sua escolha: ");
    return $opcao;
}

function adicionarProduto(&$estoque, $sku, $nome, $unidade_medida, $quantidade, $preco)
{
    foreach ($estoque as $key => $produto) {

        if ($sku == $produto['sku']) {

            echo 'Esté código já pertence a um produto cadastrado no estoque. Por favor tente novamente.';
            return;
        }
        if ($nome == $produto['nome']) {

            echo 'Esté nome já pertence a um produto cadastrado no estoque. Por favor tente novamente.';
            return;
        }
    }

    $estoque[] = [
        'sku' => $sku,
        'nome' => $nome,
        'unidade_medida' => $unidade_medida,
        'quantidade' => $quantidade,
        'preco' => $preco
    ];
}

function venderProduto(&$estoque, $sku, $quantidade)
{
    foreach ($estoque as $key => &$produto) {

        if ($produto['sku'] == $sku) {

            if ($quantidade > $produto['quantidade']) {

                echo "\nVenda de " . $produto['nome'] . " não realizada.\nExiste apenas " .  $produto['quantidade'] . " unidades disponiveis.\n";

                return;
            }

            $produto['quantidade'] -= $quantidade;

            if ($produto['quantidade'] == 0) {

                echo "\nVenda de " . $quantidade . " " . $produto['nome'] . " realizada com sucesso.";
                echo "\nProduto: " . $produto['nome'] . " esgotado.\n";
                unset($estoque[$key]);
            } else {

                echo "\nVenda de " . $quantidade . " " . $produto['nome'] . " realizada com sucesso.\n";
                echo "Quantidade restante: " . $produto['quantidade'] . "\n";
            }
            return;
        }
    }

    echo "\nCódigo do produto inválido, por favor tente novamente.\n";

    return;
}

function verificarEstoque(&$estoque)
{
    $sku = readline("Digite o SKU do produto para verificar: ");

    foreach ($estoque as $produto) {

        if ($produto['sku'] == $sku) {

            echo "\nO produto: " . $produto['nome'] . " está disponível." . "\nQuantidade: " . $produto['quantidade'] . ".\n";
            return;
        }
    }

    echo "\nProduto não está disponível.\n";
}

function listarEstoque(&$estoque)
{
    if (empty($estoque)) {

        echo "Estoque vazio!\n";
        return;
    }

    foreach ($estoque as $produto) {

        echo "\nSKU: " . $produto['sku'] . "\nNome: " . $produto['nome'] . "\nUunidade de Medida: " . $produto['unidade_medida'] . "\nQuantidade: " . $produto['quantidade'] . "\n\n";
    }
}

function limparEstoque(&$estoque)
{
    $corDOProduto = readline('Digite a cor do produto a ser deletado: ');

    foreach ($estoque as $key => $produto) {

        if ($corDOProduto == $produto['cor']) {
            unset($estoque[$key]);
        }
    }
}

function deleterSKU(&$estoque)
{
    $sku = readline('Digite o código SKU a ser deletado: ');

    $key = array_search($sku, array_column($estoque, 'sku'));

    if ($key !== false) {
        $temCerteza = readline("Digite 'sim' se realmete deseja exluir o produto '" . $estoque[$key]['nome'] . '\': ');
        if ($temCerteza == 'sim') {
            echo "\nProduto '" . $estoque[$key]['nome'] . "' deletado com sucesso\n";
            unset($estoque[$key]);
            return;
        }
        echo 'Produto não excluído.';
    }
}
$estoque = [];

while (true) {

    $opcao = exibirMenu();

    switch ($opcao) {
        case 1:
            echo "Adicionar um produto\n";
            $sku = readline("Digite o SKU do produto: ");
            $nome = readline("Digite o Nome do produto: ");
            $unidade_medida = readline("Digite a Unidade de Medida: ");
            $quantidade = readline("Digite a Quantidade: ");
            $preco = readline("Digite o preço: ");
            adicionarProduto($estoque, $sku, $nome, $unidade_medida, $quantidade, $preco);
            break;
        case 2:
            echo "Vender um produto\n";
            $sku = readline("Digite o código do produto para venda: ");
            $quantidade = readline("Digite a quantidade para venda: ");
            venderProduto($estoque, $sku, $quantidade);
            break;
        case 3:
            echo "Verificar estoque\n";
            verificarEstoque($estoque);
            break;
        case 4:
            echo "Listar o estoque\n";
            listarEstoque($estoque);
            break;
        case 5:
            echo "Limpar o estoque\n";
            limparEstoque($estoque);
            break;
        case 6:
            echo "Deletar produto pelo código SKU 6\n";
            deleterSKU($estoque);
            break;
        case 7:
            echo "Saindo...\n";
            exit;
        default:
            echo "\nOpção inválida, por favor tente novamente.\n";
            break;
    }
}
