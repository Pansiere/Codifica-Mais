<?php
    echo "Programa para informar se o número é par ou ímpar.\n";
    
    echo "\nDigite um numero: ";
    $numero = trim(fgets(STDIN));

    if ($numero % 2 == 0) {
        echo "O numero $numero é par.";
    } else {
        echo "O numero $numero é ímpar.";
    }
?>