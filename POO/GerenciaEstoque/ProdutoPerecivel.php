<?php

class ProdutoPerecivel extends Produto
{
    public function __construct(
        public string $sku,
        public string $nome,
        public string $unidadeDeMedida,
        public int $quantidade,
        public float $preco,
        public string $validade //propriedade específica
    ) {
        parent::__construct($sku, $nome, $unidadeDeMedida, $quantidade, $preco);
    }

    public function getValidade(): string //propriedade específica
    {
        return $this->validade;
    }
}

// sobreescrito = poliformismo? gogo