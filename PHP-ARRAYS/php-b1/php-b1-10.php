<?php
/*  Invertendo um Array
    Descrição: Crie um programa que lê um array de 5 elementos e imprime o array em ordem inversa.
*/
    echo "Programa que lê um array de 5 elementos e imprime o array em ordem inversa.\n";

    for ($i = 1; $i <= 5; $i++){
        echo "Digite o " . $i . "° elemento: ";
        $elemento[] = trim(fgets(STDIN));
    }
    echo "\n";
    
    for ($i = 4; $i >= 0; $i--){
        echo "O " . ($i + 1) . "º elemento da lista é: " . $elemento[$i] . "\n";
    }
?>