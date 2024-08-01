<?php

class ProdutoBicicleta extends Produto
{
    public function lubrificarCorrente(): void //comportamentos específicos
    {
        echo 'Corrente lubrificada, a bike está pronta para pedalada!';
    }
}
