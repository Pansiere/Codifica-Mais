<?php
    /*
    CÁLCULO DE ÁREA E PERÍMETRO DE UM RETÂNGULO
    Crie um programa que calcule a área e o perímetro de um retângulo. O programa deve solicitar ao usuário a largura e a altura do retângulo, e então exibir os resultados.
    Fórmulas:
    ● Área = largura * altura
    ● Perímetro = 2 * (largura + altura)
    Exemplo:
    ● Largura: 5 metros
    ● Altura: 3 metros
    ● Área: 15 m²
    ● Perímetro: 16 metros 
    */
    echo "Programa que calcula a área e o perímetro de um retângulo.\n";
    echo "Digite a largura do retângulo: ";
    $largura = trim(fgets(STDIN));
    $largura = floatval($largura);

    echo "Agora, digite a altura do retângulo: ";
    $altura = trim(fgets(STDIN));
    $altura = floatval($altura);

    $area = $largura * $altura;
    $perimetro = 2 * ($largura + $altura);

    echo "A área do retângulo é de: " . $area . " m², e o perímetro é de: " . $perimetro . " metros.\n";
?>