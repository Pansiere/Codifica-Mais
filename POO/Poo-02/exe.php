<?php

require_once 'src/autoload.php';

use rp_cod_poo_02\Classes\{Cachorro, Gato};

$cachorro = new Cachorro('Dog');
echo $cachorro->fazerSom() . PHP_EOL;

$gato = new Gato('Cat');
echo $gato->fazerSom();
