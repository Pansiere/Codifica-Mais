<?php /*
    CÁLCULO DE GORJETA EM UM RESTAURANTE
    Crie um programa que calcule a gorjeta a ser paga em um restaurante. O programa deve
    solicitar ao usuário o valor total da conta e a porcentagem da gorjeta. Em seguida, o
    programa deve calcular o valor da gorjeta e o valor total a ser pago, incluindo a gorjeta.
    Exemplo:
    ● Valor da conta: R$ 120,00
    ● Porcentagem da gorjeta: 10%
    ● Valor da gorjeta: R$ 12,00
    ● Valor total a ser pago: R$ 132,00 */
    echo "Programa que calcula a gorjeta a ser paga em um restaurante. O solicita ao usuário o valor total da conta e a porcentagem da gorjeta. Em seguida, o programa calcula o valor da gorjeta e o valor total a ser pago, incluindo a gorjeta.\nDigite o valor total da conta: ";

    $valorDaConta = trim(fgets(STDIN));

    echo "Digite a porcentagem total da gorjeta: ";
    $porcentagemDaGorjeta = trim(fgets(STDIN));

    $valorDaGorgeta = $valorDaConta / 100 * $porcentagemDaGorjeta;
    $totalASePago = $valorDaConta + $valorDaGorgeta;

    echo "\nO valor total a ser pago junto com a gorjeta é de: R$$totalASePago,00 ";
?>