<?php

namespace rp_cod_poo_01\Classes;

class Retangulo extends Forma
{
    private float $largura;
    private float $altura;

    public function __construct(float $largura, float $altura)
    {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function calcularArea(): float
    {
        return $this->largura * $this->altura;
    }
}
