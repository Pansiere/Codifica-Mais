<?php

class ProdutoPerecivel extends Produto
{
    public function __construct(
        public string $sku,
        public string $nome,
        public string $unidadeDeMedida,
        public int $quantidade,
        public float $preco,
        public string $validade
    ) {
        parent::__construct($sku, $nome, $unidadeDeMedida, $quantidade, $preco);
    }

    public function getValidade(): string
    {
        return $this->validade;
    }
}
