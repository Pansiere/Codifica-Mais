<?php
/*  Duplicação de Elementos
    Descrição: Crie um programa que leia um array de 6 números e crie outro array onde cada elemento é o dobro do elemento correspondente no primeiro array.
*/
    echo "Programa que lê um array de 6 números e crie outro array onde cada elemento é o dobro do elemento correspondente no primeiro array.\n";

    for ($i = 1; $i <= 6; $i++){
        echo "Digite o " . $i . "° número: ";
        $lista[] = trim(fgets(STDIN));
    }
    echo "\n";
    
    for ($i = 0; $i <= 5; $i++){
        $listaDobrada[] = $lista[$i] * 2; 
        echo "O dobro do número da primeira lista de indice $i é: " . $listaDobrada[$i] . PHP_EOL;
    }
?>