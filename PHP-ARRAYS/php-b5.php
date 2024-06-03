<?php
    /*SISTEMA DE COMPRAS (CÁLCULO DE DESCONTO)
    Você está desenvolvendo um sistema de compras online e precisa calcular o valor final de um produto com desconto. Sua tarefa é criar uma função que receba o valor original do produto e a porcentagem de desconto como parâmetros, e retornar o valor final com o desconto aplicado. Aqui está o que o programa deve fazer:
    1 - Crie uma função que receba o valor original do produto e a porcentagem de desconto como parâmetros.
    2 - Dentro da função, calcule o valor do desconto aplicando a porcentagem sobre o valor original.
    3 - Subtraia o valor do desconto do valor original para obter o valor final com desconto.
    4 - Retorne o valor final com desconto.*/
    function calculo($valor, $porcentagemDeDesconto){ 
        $SomaDoDesconto = $valor / 100 * $porcentagemDeDesconto;
        $valorComDesconto = $valor - $SomaDoDesconto;
        return $valorComDesconto;
    }
    echo "Programa para calcular o valor final de um produto com desconto.\nDigite o valor original do produto: ";
    $valorOriginal = trim(fgets(STDIN));
    echo "Digite a porcentagem a ser aplicada no desconto: ";
    $desconto = trim(fgets(STDIN));

    $valorFinal = calculo($valorOriginal, $desconto);
    echo "O valor final do produto com o desconto aplicado é de: $valorFinal.";
?>