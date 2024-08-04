<?php

class Estoque
{
    public function __construct(
        public array $estoque = []
    ) {
    }

    protected function exibeOpcoes(): string
    {
        echo "Adicionando um produto, para o tipo:\n";
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
                case '1':
                    $this->adicionarPerecivel();
                    break;
                case '2':
                    $this->adicionarBicicleta();
                    break;
                case '3':
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
        $sku = (string)readline("Digite o código SKU do produto: \n");
        $nome = (string)readline("Digite o nome do produto: \n");
        $unidadeDeMedida = (string)readline("Digite a unidade de medida do produto: \n");
        $quantidade = (int)readline("Digite a quantidade do produto: \n");
        $preco = (float)readline("Digite o preço do produto: \n");
        $validade = (string)readline("Digite a validade do produto: \n");

        $produto = new ProdutoPerecivel($sku, $nome, $unidadeDeMedida, $quantidade, $preco, $validade);
        $this->estoque[] = $produto;
        echo "Produto perecível adicionado com sucesso.\n";
    }

    private function adicionarBicicleta(): void
    {
        echo "Adicionando um produto do tipo 'Perecivel':\n";
        #echo "Produto perecivel adicionado com sucesso.\n";
    }

    public function listar(): void
    {
        #      foreach ($this->estoque as $produto) {
        #         echo $produto . "\n";
        #    }
    }

    public function vendar()
    {
    }

    public function atualizar()
    {
    }

    public function deletar()
    {
    }
}
