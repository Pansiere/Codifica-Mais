<?php

namespace exec_poo_a2\Classes;

class Camiao extends Veiculo
{
    function ligar(): void
    {
        echo "Ligando o caminhão";
    }

    function acelerar(): void
    {
        echo "Acelerando o caminhão";
    }

    function frear(): void
    {
        echo "Freando o caminhão";
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
