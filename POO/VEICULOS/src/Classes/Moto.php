<?php

namespace exec_poo_a2\Classes;

class Moto extends Veiculo
{
    function ligar(): void
    {
        echo "Ligando a moto";
    }

    function acelerar(): void
    {
        echo "Acelerando a moto";
    }

    function frear(): void
    {
        echo "Freando a moto";
    }

    function exibiDetalhes(): void
    {
        echo "Exibindo detalhes...\n";
        echo "Tipo de veículo: $this->tipo\n";
        echo "Ano: $this->ano\n";
        echo "Cor: $this->cor\n";
        echo "Modelo: $this->modelo\n";
        echo "Potencia: $this->potencia";
    }
}
