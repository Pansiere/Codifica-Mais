<?php
    /*Encontrar o menor valor em um array 
      Descrição: escreva um programa que leia 10 números inteiros e mostre o menor valor.*/

    echo "Programa que lê 10 números inteiros e mostre o menor valor.\n";

    for ($i = 0; $i <10; $i++){
        echo "Digite o " . ($i + 1) . "º numero: ";
        $numeros[] = trim(fgets(STDIN));
    }
    $menorNumero = $numeros[0];
    
    for ($i = 0; $i <10; $i++){
        if ($numeros[$i] < $menorNumero){
        $menorNumero = $numeros[$i];
        }
    }
    echo "O menor número digitado foi: " . $menorNumero;
?>