<?php

namespace rp_cod_poo_01\Classes;

class Circulo extends Forma
{
    protected float $raio;

    public function __construct(float $raio)
    {
        $this->raio = $raio;
    }

    function calcularArea(): float
    {
        $constante = 3.14159;

        $area = $constante * ($this->raio ** 2);

        return $area;
    }
}
