<?php
    echo "Programa de calculo de média de notas.\n";
    
    echo 'Digite a primeira nota: ';
    $primeiroNota = trim(fgets(STDIN));
    echo 'Digite a segunda nota: ';
    $segundaNota = trim(fgets(STDIN));
    echo 'Digite a terceira nota: ';
    $terceiraNota = trim(fgets(STDIN));

    $somaDasNotas = $primeiroNota + $segundaNota + $terceiraNota;
    $media = $somaDasNotas / 3;

    echo "Sua media das notas é de: $media.";
?>