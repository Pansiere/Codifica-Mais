<?php
/*  Encontrar Elemento e Índice
    Descrição: Escreva um programa que leia um array de 7 elementos e um número. O programa deve imprimir se o número está presente no array e em que posição(ões).
*/
    echo "Programa que lê um array de 7 elementos e um número. E imprimi se o número está presente no array e em que posição(ões).\n";

    for ($i = 0; $i <= 6; $i++){
        echo $i == 0 ? "Digite o 1° elemento ou um número: " : "Digite o " . ($i + 1) . "° elemento ou um número: ";
        $lista[$i] = trim(fgets(STDIN));

        if (is_numeric($lista[$i])){
            $numerosPresentes[] = $lista[$i];
            $indiceDosNumeros [] = $i;
        }
    }
    for ($i = 0; $i < count($numerosPresentes); $i++){
        echo "No índice " .  $indiceDosNumeros[$i] . " existe um número, que é: " . $numerosPresentes[$i] . "." . PHP_EOL;
    }
?>
