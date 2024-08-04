<?php

class ProdutoBicicleta extends Produto
{
    public function __construct(
        public string $sku,
        public string $nome,
        public string $unidadeDeMedida,
        public int $quantidade,
        public float $preco,
        public int $velocidades
    ) {
        parent::__construct($sku, $nome, $unidadeDeMedida, $quantidade, $preco);
    }

    public function lubrificarCorrente(): void
    {
        echo 'Corrente lubrificada, a bike está pronta para pedalada!';
    }
    public function getVelocidades(): string
    {
        return $this->velocidades;
    }
}
