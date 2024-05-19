<?php
    echo "Scripc que solicita ao usuário uma série de números inteiros até que ele digite '-1' para parar a entrada. E então, eterminar e exibir o maior e o menor número digitado  pelo usuário\n";

    echo "\nDigite um número para começar: ";
    $entrada = trim(fgets(STDIN));
    $maiorNumero = $entrada;
    $menorNumero = $entrada;

    while ($entrada != -1){
        echo "Digite um outro número (ou -1 para terminar): ";
        $entrada = trim(fgets(STDIN));

        if ($entrada > $maiorNumero){
            $maiorNumero = $entrada;
        }
        if ($entrada != -1 && $entrada < $menorNumero){
            $menorNumero = $entrada;
        }
    }
    echo "O maior numero digitado foi: $maiorNumero.\n";
    echo "O menor numero digitado foi: $menorNumero.";
?>