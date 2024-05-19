<?php
    echo "Proprama que mostra a tabela de multiplição de um número fornecido de 1 até 10.\n";
    
    echo "\nDigite um numero para a multiplicação: ";
    $numero = trim(fgets(STDIN));

    for($i = 1; $i <= 10; $i++) {
        $multiplicacao = $i * $numero;
        echo "$numero x $i: $multiplicacao\n";
    }
?>