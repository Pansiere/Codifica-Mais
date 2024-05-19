<?php
    echo "Programa para verificar maioridade\n";

    echo "\nDigite sua idade: ";
    $idade = trim(fgets(STDIN));

    if ($idade < 18) {
        echo "Você é menor de idade, pois tem apenas $idade anos.";
        }else {
            echo "Você é maior de idade. Pois tem $idade anos.";
        }
?>