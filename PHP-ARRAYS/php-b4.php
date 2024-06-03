<?php
    /*
    CONVERSÃO DE TEMPERATURA
    Escreva um programa que converta a temperatura de Celsius para Fahrenheit e vice-versa. O programa deve solicitar ao usuário a temperatura e a unidade de medida (Celsius ou Fahrenheit), e então exibir o resultado da conversão.
    Fórmula de conversão:
    ● De Celsius para Fahrenheit: °F = (°C * 9/5) + 32
    ● De Fahrenheit para Celsius: °C = (°F - 32) * 5/9
    Exemplo:
    ● Temperatura: 25°C
    ● Temperatura em Fahrenheit: 77°F */
    echo "Programa que converta a temperatura de Celsius para Fahrenheit e vice-versa. O programa solicita ao usuário a temperatura e a unidade de medida (Celsius ou Fahrenheit), e então exibir o resultado da conversão.\nDigite o número da temperatura a ser convertido: ";
    $temperatura = trim(fgets(STDIN));
    $unidadeDeMedida = "unidade";
    while($unidadeDeMedida != "f" && $unidadeDeMedida != "c"){
        echo "Para o número fornecido digite 'c' se a unidade de medida é em Celsius, ou 'f' se for em Fahrenheit: ";
        $unidadeDeMedida = trim(fgets(STDIN));
    }
    if ($unidadeDeMedida == "c"){
        $fahrenheit = ($temperatura * 9/5) + 32;
        echo "A conversão da temperatura em Celsius de " . $temperatura . "°C para Fahrenheit é: $fahrenheit" . "°F.";
    }else{
        $celsios = ($temperatura - 32) * 5/9;
        echo "A conversão da temperatura em Fahrenheit de " . $temperatura . "°F para Celsius é: $celsios" . "°C.";
    }
?>