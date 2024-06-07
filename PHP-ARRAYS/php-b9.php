<?php
    /*CÁLCULO DE DESCONTO PROGRESSIVO
    Crie um programa que calcule o valor final de uma compra com desconto progressivo. O programa deve conter as seguintes funções:
    1 - aplicarDesconto($valorCompra, $percentualDesconto): Recebe o valor da compra e o percentual de desconto como parâmetros e retorna o valor final com o desconto aplicado.
    2 - calcularDescontoProgressivo($valorCompra): Recebe o valor da compra como parâmetro e retorna o valor final com o desconto progressivo aplicado.
        ● Se o valor da compra for menor que R$ 100,00, não há desconto.
        ● Se o valor da compra for entre R$ 100,00 e R$ 500,00, aplica-se um desconto de 10%.
        ● Se o valor da compra for maior que R$ 500,00, aplica-se um desconto de 20%.
    O programa deve solicitar ao usuário o valor da compra e exibir o valor final após a aplicação do desconto progressivo.
    ”*/
    function aplicarDesconto($valorCompra, $percentualDesconto){
        $desconto = ($valorCompra / 100) * $percentualDesconto;  
    
        $valorTotalDaCompra = $valorCompra - $desconto;
    
        $mensagem = "O valor total da sua compra foi de R$$valorTotalDaCompra, foi aplicado um desconto de $percentualDesconto% em sua compra.";
    
        return $mensagem;
    }

    function calcularDescontoProgressivo($valorCompra){
        $percentualDesconto = 20;
    
        if($valorCompra <= 100){
            $mensagem = "O valor total da sua compra foi de R$$valorCompra. Descontos são aplicados apenas para compras acima de R$100,00.";
            
            return $mensagem;
        }
        
        if ($valorCompra <=  500){
            $percentualDesconto = 10;
        }

        $descontoAplicado =  aplicarDesconto($valorCompra, $percentualDesconto);
        return $descontoAplicado;
    }

    echo "Programa que calcula o valor final de uma compra com desconto progressivo.\nDigite o valor da compra: ";
    
    $valorCompra = trim(fgets(STDIN));
    
    $valorTotalDaCompra = calcularDescontoProgressivo($valorCompra);
    
    echo $valorTotalDaCompra;
?>