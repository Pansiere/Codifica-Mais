<?php

class Estoque
{
    public function __construct(
        public array $estoque = []
    ) {
    }

    protected function exibeOpcoes(): string
    {
        echo "1. 'Perecivel' digite 1\n";
        echo "2. 'Bicicleta' digite 2\n";
        echo "3. Para cancelar digite 3\n";
        $opcao = readline("Digite a sua escolha: ");
        return $opcao;
    }

    public function adicionar(): void
    {
        while (true) {

            $opcao = $this->exibeOpcoes();

            switch ($opcao) {
                case 1:
                    $this->adicionarPerecivel();
                    break;
                case 2:
                    $this->adicionarBicicleta();
                    break;
                case 3:
                    echo "Cancelando...\n";
                    return;
                default:
                    echo "\nOpção inválida, por favor tente novamente.\n";
                    break;
            }
        }
    }

    private function adicionarPerecivel(): void
    {
        echo "Adicionando um produto do tipo 'Perecivel':\n";

        $produto = new ProdutoPerecivel(
            (string)readline("Digite o código SKU do produto: \n"),
            (string)readline("Digite o nome do produto: \n"),
            (string)readline("Digite a unidade de medida do produto: \n"),
            (int)readline("Digite a quantidade do produto: \n"),
            (float)readline("Digite o preço do produto: \n"),
            (string)readline("Digite a validade do produto: \n")
        );

        $this->estoque[] = $produto;

        echo "Produto 'perecível' adicionado com sucesso.\n\n";
    }

    private function adicionarBicicleta(): void
    {
        echo "Adicionando um produto do tipo 'Bicicleta':\n";

        $produto = new ProdutoBicicleta(
            (string)readline("Digite o código SKU do produto: \n"),
            (string)readline("Digite o nome do produto: \n"),
            (string)readline("Digite a unidade de medida do produto: \n"),
            (int)readline("Digite a quantidade do produto: \n"),
            (float)readline("Digite o preço do produto: \n"),
            (int)readline("Digite o número de velocidades: \n")
        );

        $this->estoque[] = $produto;

        echo "Produto 'bicicleta' adicionado com sucesso.\n\n";
    }

    public function listar(): void
    {
        $i = 1;

        foreach ($this->estoque as $produto) {
            echo "Produto " . $i++ . ":\n";
            echo "Código SKU: " . $produto->getSku() . PHP_EOL;
            echo "Nome: " . $produto->getNome() . PHP_EOL;
            echo "Unidade de medida: " . $produto->getUnidadeDeMedida() . PHP_EOL;
            echo "Quantidade: " . $produto->getQuantidade() . PHP_EOL;

            if (method_exists($produto, 'getVelocidades')) {
                echo "Velocidades: " . $produto->getVelocidades() . "\n\n";
            }
            if (method_exists($produto, 'getValidade')) {
                echo "Validade: " . $produto->getValidade() . "\n\n";
            }
        }
    }

    public function vender()
    {
        $sku = (string)readline("Digite o código SKU do produto para venda: ");
        $quantidade = (float)readline("Digite a quantidade a vender: ");

        foreach ($this->estoque as $key => $produto) {
            $produtoSku = $produto->getSku();
            $produtoQuantidade = $produto->getQuantidade();

            echo "SKU do Produto: " . $produtoSku . PHP_EOL;

            if (trim($produtoSku) == trim($sku)) {
                echo "SKU correspondente encontrado." . PHP_EOL;

                if ($quantidade > $produtoQuantidade) {
                    echo "\nVenda de " . $produto->getNome() . " não realizada.\n";
                    echo "Existe apenas " . $produtoQuantidade . " unidades disponíveis.\n";
                    return;
                }

                $produto->setQuantidade($produtoQuantidade - $quantidade);

                if ($produto->getQuantidade() == 0) {
                    echo "\nVenda de " . $quantidade . " " . $produto->getNome() . " realizada com sucesso.\n";
                    echo "Produto: " . $produto->getNome() . " esgotado.\n";
                    unset($this->estoque[$key]);
                } else {
                    echo "\nVenda de " . $quantidade . " " . $produto->getNome() . " realizada com sucesso.\n";
                    echo "Quantidade restante: " . $produto->getQuantidade() . "\n";
                }
                return;
            }
        }

        echo "\nCódigo do produto inválido, por favor tente novamente.\n";

        return;
    }

    public function atualizar()
    {
        $sku = (string)readline("Digite o código SKU do produto para atualizar: ");

        foreach ($this->estoque as $key => $produto) {
            if ($produto->getSku() == $sku) {
                $quantidade = readline("Digite a quantidade que deseja adicionar: ");
                $produto->setQuantidade($produto->getQuantidade() + $quantidade);
                echo "Quantidade do produto atualizado com sucesso.\n";
            }
        }
    }

    public function deletar()
    {
        $sku = (string)readline("Digite o código SKU do produto a deletar: ");

        foreach ($this->estoque as $key => $produto) {
            if ($produto->getSku() == $sku) {
                unset($this->estoque[$key]);

                echo "Produto excluido com sucesso\n";
            } else {
                echo "\nCódigo do produto inválido, por favor tente novamente.\n";
            }
        }
    }
}
