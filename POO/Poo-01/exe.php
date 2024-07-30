<?php

require_once 'src/autoload.php';

use rp_cod_poo_01\Classes\{Circulo, Retangulo};

$calculandoCirculo = new Circulo(8);
echo "Calculo da área do circulo: ";
echo $calculandoCirculo->calcularArea();

$calculandoRetangulo = new Retangulo(10, 20);
echo "\n\nCalculo da área do retângulo: ";
echo $calculandoRetangulo->calcularArea() . PHP_EOL;
