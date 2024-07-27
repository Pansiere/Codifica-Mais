<?php

namespace exec_poo_a2\Classes;

abstract class Veiculo implements VeiculoInterface
{
    protected string $tipo;
    protected int $ano;
    protected string $cor;
    protected string $modelo;
    protected string $potencia;

    function __construct(string $tipo, int $ano, string $cor, string $modelo, string $potencia)
    {
        $this->tipo = $tipo;
        $this->ano = $ano;
        $this->cor = $cor;
        $this->modelo = $modelo;
        $this->potencia = $potencia;
    }

    abstract function ligar(): void;
}
