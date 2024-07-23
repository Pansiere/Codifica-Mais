<?php
require_once '1 - Sistema de Gerenciamento de Contas Bancárias.php';

$ContaBancaria = new ContaBancaria(3423412, 'Joao Pedro Vicente Pansiere');

$ContaBancaria->depositar(30);
echo PHP_EOL;
$ContaBancaria->sacar(10);
echo PHP_EOL;
echo $ContaBancaria->exibirSaldo();
echo PHP_EOL;
$ContaBancaria->sacar(150);
