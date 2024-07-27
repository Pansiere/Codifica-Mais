<?php

require_once 'src/autoload.php';

use exec_poo_a2\Classes\{Carro, Camiao, Moto};

#Executando objeto Veiculo/Carro°
echo "###########################################\n";
echo "Executando objeto Veiculo/Carro:\n\n";
$s10 = new Carro('Caminhoneta', 2015, 'Branca', 'S10', '220cv');
$s10->exibiDetalhes();
echo PHP_EOL . PHP_EOL;
$s10->ligar();
echo PHP_EOL;
$s10->acelerar();
echo PHP_EOL;
$s10->frear();
echo PHP_EOL;

#Executando objeto Veiculo/Caminhao
echo "\n###########################################\n";
echo "Executando objeto Veiculo/Caminhao:\n\n";
$Petrock = new Camiao('Camonhão', 2008, 'Branca', 'Petrock', '300cv');
$Petrock->exibiDetalhes();
echo PHP_EOL . PHP_EOL;
$Petrock->ligar();
echo PHP_EOL;
$Petrock->acelerar();
echo PHP_EOL;
$Petrock->frear();

#Executando objeto Veiculo/Moto:
echo "\n\n###########################################\n";
echo "Executando objeto Veiculo/Moto:\n\n";
$bizz = new Moto('Motocicleta', 2023, 'Azul e prata', 'Bizz', '120cc');
$bizz->exibiDetalhes();
echo PHP_EOL . PHP_EOL;
$bizz->ligar();
echo PHP_EOL;
$bizz->acelerar();
echo PHP_EOL;
$bizz->frear();
