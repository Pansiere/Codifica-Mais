<?php

abstract class Produto implements ProdutoInterface
{
    public function __construct(
        public string $sku,
        public string $nome,
        public int $quantidade,
        public string $unidadeDeMedida,
        public float $preco
    ) {
    }
    public function getSku(): string
    {
        return $this->sku;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function getQuantidade(): int
    {
        return $this->quantidade;
    }
    public function getUnidadeDeMedida(): string
    {
        return $this->unidadeDeMedida;
    }
    public function getPreco(): float
    {
        return $this->preco;
    }
}
