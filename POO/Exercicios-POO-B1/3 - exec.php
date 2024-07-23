<?php
require_once '3 - Sistema de Gerenciamento de Funcionários.php';

$joaopedro = new Funcionario('João Pedro V. Pansiere', 'Programador Front-end');

$joaopedro->ajustarSalario(1300);
echo "\n\n";
$joaopedro->alterarCargo('Programador Back-end');
echo "\n\n";
$joaopedro->exibirDetalhes();
