<?php
    echo "Programa que verifica se o número é primo ou não.\n";
    
    echo "\nDigite um numero para verificar se é primo ou não: ";
    $numero = trim(fgets(STDIN));
    
    if ($numero > 1) {
        $divisores = 0;
        for ($i = 1; $i <= $numero; $i++) {
            if ($numero % $i == 0) {
                $divisores++;
            }
        }
        if ($divisores == 2){
            echo "O número $numero é primo.";
        }
        else {
            echo "O número $numero não é primo.";
        }
    } else {
        echo "O numero $numero não é primo.";
    }
?>