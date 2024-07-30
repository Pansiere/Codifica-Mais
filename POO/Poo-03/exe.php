<?php

require_once 'src/autoload.php';

use rp_cod_poo_03\Classes\{FuncionarioHorista, FuncionarioMensalista};

$funcionarioMensalista = new FuncionarioHorista('João Pedro V. Pansiere', 1500, 40, 50);
echo $funcionarioMensalista->exibirInformacoes() . PHP_EOL . PHP_EOL;

$funcionarioHorista = new FuncionarioMensalista('João Pedro V. Pansiere', 1500);
echo $funcionarioHorista->exibirInformacoes();
