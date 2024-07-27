<?php

namespace exec_poo_a2\Classes;

class Carro extends Veiculo
{
    function ligar(): void
    {
        echo 'Ligado o carro';
    }

    function acelerar(): void
    {
        echo 'Acelerando o carro';
    }

    function frear(): void
    {
        echo 'Freando o carro';
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
