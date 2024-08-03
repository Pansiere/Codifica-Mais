<?php

require_once 'autoload.php';

$sku = 'ABC123';
$nome = 'Tomate';
$unidadeDeMedida = 'KG';
$quantidade = 100;
$preco = 3.5;
$validade = '10-05-23';

$tomate = new ProdutoPerecivel($sku, $nome, $unidadeDeMedida, $quantidade, $preco, $validade);

echo $tomate->getValidade();
