<?php

class ProdutoPerecivel extends Produto
{
    public function __construct(
        $sku,
        $nome,
        $quantidade,
        $unidadeDeMedida,
        $preco,
        public string $validade //propriedade específica
    ) {
        parent::__construct($sku, $nome, $quantidade, $unidadeDeMedida, $preco);
    }
}
