<?php

$estoque = [];

function exibirMenu()
{
    echo "\n";
    echo "Escolha uma das opções abaixo:\n";
    echo "1. Adicionar um produto 1\n";
    echo "2. Vender um produto 2\n";
    echo "3. Verificar um produto 3\n";
    echo "4. Listar o estoque 4\n";
    echo "5. Listar total de itens 5\n";
    echo "6. Atualizar um produto 6\n";
    echo "7. Limpar estoque 7\n";
    echo "8. Deletar um produto 8\n";
    echo "9. Sair\n";
    $opcao = readline("Digite a sua escolha: ");
    echo PHP_EOL;
    return $opcao;
}

//1. Adicionar um produto
function adicionarProduto(&$estoque, $sku, $nome, $unidade_medida, $quantidade, $preco)
{
    foreach ($estoque as $key => $produto) {

        if ($sku == $produto['sku']) {

            echo "\nEsté código já pertence a um produto cadastrado no estoque. Por favor tente novamente.\n";
            return;
        }
        if ($nome == $produto['nome']) {

            echo "\nEsté nome já pertence a um produto cadastrado no estoque. Por favor tente novamente.\n";
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

//2. Vender um produto
function venderProduto(&$estoque, $sku, $quantidade)
{
    foreach ($estoque as $key => &$produto) {

        if ($produto['sku'] == $sku) {

            if ($quantidade > $produto['quantidade']) {

                echo "\nVenda de " . $produto['nome'] . " não realizada.\nExiste apenas " .  $produto['quantidade'] . " unidades disponiveis.\n";

                return;
            }

            $produto['quantidade'] -= $quantidade;

            echo "\nVenda de " . $quantidade . " " . $produto['nome'] . " realizada com sucesso.\n";

            echo "Quantidade restante: " . $produto['quantidade'] . "\n";

            return;
        }
    }

    echo "\nCódigo do produto inválido, por favor tente novamente.\n";

    return;
}

//3. Verificar um produto
function verificarProduto(&$estoque)
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

//4. Listar o estoque
function listarEstoque(&$estoque)
{
    if (empty($estoque)) {

        echo "Estoque vazio!\n";
        return;
    }

    usort($estoque, function ($a, $b) {

        return strcmp($a['nome'], $b['nome']);
    });

    foreach ($estoque as $produto) {

        echo "\nSKU: " . $produto['sku'] . "\nNome: " . $produto['nome'] . "\nUunidade de Medida: " . $produto['unidade_medida'] . "\nQuantidade: " . $produto['quantidade'] . "\n\n";
    }
}

//5. Listar total de itens
function listarTotalDeItens($estoque)
{

    $tiposDfferenteDeItens = 0;
    $quantidadeTotalDeTodosDeItens = 0;

    foreach ($estoque as $produto) {

        $tiposDfferenteDeItens++;

        $quantidadeTotalDeTodosDeItens += $produto['quantidade'];
    }

    echo "Quantidade total de itens diferentes no estoque: $tiposDfferenteDeItens";

    echo "\nQuantiadade total de todos os itens: $quantidadeTotalDeTodosDeItens\n";

    return;
}

//6. Atualizar o estoque
function atualizarProduto(&$estoque, $sku)
{
    $key = array_search($sku, array_column($estoque, 'sku'));

    if ($key === false) {
        echo "Produto não econtrado. Tente novamente.\n";
        return;
    }

    echo "Produto selecionado '" . $estoque[$key]['nome'] . "'\n";

    $quantidade = readline("Digite quantas unidades deseja adicionar: ");

    $estoque[$key]['quantidade'] += $quantidade;

    echo "Produto atualizado com sucesso.\n";

    return;
}

//7. Listar total de itens
function limparEstoque(&$estoque)
{
    $corDOProduto = readline('Digite a cor do produto a ser deletado: ');

    foreach ($estoque as $key => $produto) {

        if ($corDOProduto == $produto['cor']) {
            unset($estoque[$key]);
        }
    }
}

//8. Deletar um produto
function deletarProduto(&$estoque)
{
    $sku = readline('Digite o código SKU a ser deletado: ');

    $key = array_search($sku, array_column($estoque, 'sku'));

    if ($estoque[$key]['quantidade'] == 0) {

        echo "\nProduto '" . $estoque[$key]['nome'] . "' deletado com sucesso\n";

        unset($estoque[$key]);

        return;
    }

    if ($key !== false) {

        $temCerteza = readline("Digite 'sim' se realmete deseja exluir o produto '" . $estoque[$key]['nome'] . '\': ');

        if ($temCerteza == 'sim') {

            echo "\nProduto '" . $estoque[$key]['nome'] . "' deletado com sucesso\n";

            unset($estoque[$key]);

            return;
        }
    }
    echo "Produto não excluído.\n";
}

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
            echo "Verificar um produto\n";
            verificarProduto($estoque);
            break;
        case 4:
            echo "Listar o estoque\n";
            listarEstoque($estoque);
            break;
        case 5:
            echo "Listar total de itens\n";
            listarTotalDeItens($estoque);
            break;
        case 6:
            echo "Atualizar um produto\n";
            $sku = readline("Digite o código SKU do produto: ");
            atualizarProduto($estoque, $sku);
            break;
        case 7:
            echo "Limpar estoque\n";
            limparEstoque($estoque);
            break;
        case 8:
            echo "Deletar um produto\n";
            deletarProduto($estoque);
            break;
        case 9:
            echo "Saindo...\n";
            exit;
        default:
            echo "\nOpção inválida, por favor tente novamente.\n";
            break;
    }
}
