<?php
    echo "Programa para calcular os numeros impares entre A e B.\n";

    echo "Digite o primeiro numero(A): ";
    $a = trim(fgets(STDIN));
    echo "Digite o segundo numero(B), tem que ser maior ou igual ao numero A: ";
    $b = trim(fgets(STDIN));
    $soma = 0;
    
    while ($a > $b) {
        echo "O numero $b é menor do que o numero $a, digite novamente um numero, que seja maior que $a: ";
        $b = trim(fgets(STDIN));
    }
    for ($i = $a; $i <= $b; $i++) {
        if ($i % 2 != 0){
            $soma = $soma + $i;
        }
    }
    echo "A soma dos numeros ímpares de $a até $b é de: $soma.";
?>