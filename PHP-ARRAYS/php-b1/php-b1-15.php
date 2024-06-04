<?php
/*  Encontrar Elemento e Índice
    Descrição: Escreva um programa que leia um array de 7 elementos e um número. O programa deve imprimir se o número está presente no array e em que posição(ões).
*/
    echo "Programa que lê um array de 7 elementos e um número. E imprimi se o número está presente no array e em que posição(ões).\n";
    $encontrado = false;

    for ($i = 0; $i <= 6; $i++){
        echo $i == 0 ? "Digite o 1° elemento ou um número: " : "Digite o " . ($i + 1) . "° elemento ou um número: ";
        $lista[$i] = trim(fgets(STDIN));
    }
    echo "Digite um número para verificar se ele existe ou não na lista: ";
    $numero = trim(fgets(STDIN));

    for ($i = 0; $i < count($lista); $i++){
        if($lista[$i] == $numero){
            echo "O número $numero está presente na lista, e está no índice $i." . PHP_EOL;
            $encontrado = true;
        }
    }
    if ($encontrado != true){
        echo "O número $numero não existe na lista.";
    }
?>
