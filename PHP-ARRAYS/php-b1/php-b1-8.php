<?php
/*  Soma dos Elementos Pares de um Array
    Descrição: Desenvolva um programa que lê 5 números inteiros, armazena em um array e depois calcula a soma dos elementos que são pares.
*/
    echo "Programa que lê 5 números inteiros, armazena em um array e depois calcula a soma dos elementos que são pares.\n";

    $soma = 0;

    for ($i = 0; $i < 5; $i++){
        echo $i == 0 ? "Digite o 1° numero: " : "Digite o " . ($i + 1) . "° numero: ";
        $numeros[] = trim(fgets(STDIN));
        
        if ($numeros[$i] % 2 == 0){
            $soma = $numeros[$i] + $soma; 
        }
    }
    echo "O resultado da soma dos números pares é: $soma";
?>