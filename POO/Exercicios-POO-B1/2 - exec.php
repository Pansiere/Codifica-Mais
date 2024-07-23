<?php
require_once '2 - Sistema de Gerenciamento de Produtos.php';

$camisaPolo = new Produto('Camisa Polo', 90);

$camisaPolo->alterarPreco(95.5);
echo "\n\n";
$camisaPolo->ajustarEstoque(100);
echo "\n\n";
$camisaPolo->exibirDetalhes();
