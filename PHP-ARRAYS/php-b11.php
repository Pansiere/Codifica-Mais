<?php
function exibirMenu()
{
    echo "\n";
    echo "Escolha uma das opções abaixo:\n";
    echo "1. Adicionar um produto 1\n";
    echo "2. Vender um produto 2\n";
    echo "3. Verificar Estoque 3\n";
    echo "4. Listar o estoque 4\n";
    echo "5. Limpar o estoque 5\n";
    echo "6. Sair\n";
    $opcao = readline("Digite a sua escolha: ");
    return $opcao;
}

function adicionarProduto(&$estoque, $codigo, $nome, $tamanho, $cor, $quantidade)
{
    foreach ($estoque as $key => $produto) {

        if ($codigo == $produto['codigo']) {

            echo 'Esté código já pertence a um produto cadastrado no estoque. Por favor tente novamente.';
            return;
        }
        if ($nome == $produto['nome']) {

            echo 'Esté nome já pertence a um produto cadastrado no estoque. Por favor tente novamente.';
            return;
        }
    }

    $estoque[] = [
        'codigo' => $codigo,
        'nome' => $nome,
        'tamanho' => $tamanho,
        'cor' => $cor,
        'quantidade' => $quantidade
    ];
}

function venderProduto(&$estoque, $codigo, $quantidade)
{
    foreach ($estoque as $key => &$produto) {

        if ($produto['codigo'] == $codigo) {

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

function verificarEstoque(&$estoque, $codigo)
{
    foreach ($estoque as $produto) {

        if ($produto['codigo'] == $codigo) {

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

        echo "\nCódigo: " . $produto['codigo'] . "\nNome: " . $produto['nome'] . "\nTamanho: " . $produto['tamanho'] . "\nCor: " . $produto['cor'] . "\nQuantidade: " . $produto['quantidade'] . "\n\n";
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

$estoque = [];

while (true) {

    $opcao = exibirMenu();

    switch ($opcao) {
        case 1:
            echo "Adicionar um produto\n";
            $codigo = readline("Digite o Código do produto: ");
            $nome = readline("Digite o Nome do produto: ");
            $tamanho = readline("Digite o Tamanho: ");
            $cor = readline("Digite a Cor: ");
            $quantidade = readline("Digite a Quantidade: ");
            adicionarProduto($estoque, $codigo, $nome, $tamanho, $cor, $quantidade);
            break;
        case 2:
            echo "Vender um produto\n";
            $codigo = readline("Digite o código do produto para venda: ");
            $quantidade = readline("Digite a quantidade para venda: ");
            venderProduto($estoque, $codigo, $quantidade);
            break;
        case 3:
            echo "Verificar estoque\n";
            $codigo = readline("Digite o códgigo do produto para verificar: ");
            verificarEstoque($estoque, $codigo);
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
            echo "Saindo...\n";
            exit;
        default:
            echo "\nOpção inválida, por favor tente novamente.\n";
            break;
    }
}
