<?php
/*  Tabela de Multiplicação
    Descrição: Faça um programa que imprime a tabela de multiplicação de 1 até 10 para um número fornecido pelo usuário.
*/
    echo "Programa que imprime a tabela de multiplicação de 1 até 10 para um número fornecido.\nDigite um número para a multiplicação: ";
    $numero = trim(fgets(STDIN));

    for ($i = 1; $i <=10; $i++){
        $resultado = $numero * $i;
        echo "O resultado de $numero x $i: $resultado\n";
    }
?>