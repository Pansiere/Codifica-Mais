<?php
    echo "Soma de dois números.\n";
    
    echo 'Digite um numero: ';
    $primeiroNumero = trim(fgets(STDIN));
    echo 'Digite um segundo numero: ';
    $segundoNumero = trim(fgets(STDIN));
    
    $resultado = $primeiroNumero + $segundoNumero;
    echo "A some $primeiroNumero + $segundoNumero é igual a: $resultado";
?>