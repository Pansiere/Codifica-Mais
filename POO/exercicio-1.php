<?php

class Carro
{
    private $marca;
    private $modelo;
    private $ano;
    private $acelerando = false;

    public function __construct(string $marca, string $modelo, int $ano)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function acelerar(): string
    {
        $this->acelerando = true;
        return 'Acelerando o carro.';
    }

    public function frear(): string
    {
        $this->acelerando = false;
        return 'Freando o carro.';
    }
}

$conduzindoCarro = new Carro('BMW', 'Z11', 2024);

echo $conduzindoCarro->acelerar() . PHP_EOL;

echo $conduzindoCarro->frear() . PHP_EOL;