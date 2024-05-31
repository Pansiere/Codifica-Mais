<?php
    /*Encontrar o menor valor em um array 
      Descrição: escreva um programa que leia 10 números inteiros e mostre o menor valor.*/

    echo "Programa que lê 10 números inteiros e mostre o menor valor.\n";

    for ($i = 0; $i <10; $i++){
        echo "Digite o " . ($i + 1) . "º numero: ";
        $numeros[] = trim(fgets(STDIN));
    }
    $menorNumero = $numeros[0];
    
    for ($i = 0; $i <10; $i++){
        if ($numeros[$i] < $menorNumero){
        $menorNumero = $numeros[$i];
        }
    }
    echo "O menor número digitado foi: " . $menorNumero;
?>

<?php
/*  Tabela de Multiplicação
    Descrição: Faça um programa que imprime a tabela de multiplicação de 1 até 10 para um número fornecido pelo usuário.
*/
    echo "Programa que imprime a tabela de multiplicação de 1 até 10 para um número fornecido.\nDigite um número para a multiplicação: ";
    $numero = trim(fgets(STDIN));

    for ($i = 1; $i <=10; $i++){
        $resultado = $numero * $i;
        echo "O resultado de $numero x $i: $resultado\n";
    }
?>

<?php
/*  Soma dos Elementos Pares de um Array
    Descrição: Desenvolva um programa que lê 5 números inteiros, armazena em um array e depois calcula a soma dos elementos que são pares.
*/
    echo "Programa que lê 5 números inteiros, armazena em um array e depois calcula a soma dos elementos que são pares.\n";

    $soma = 0;

    for ($i = 0; $i < 5; $i++){
        echo $i == 0 ? "Digite o 1° numero: " : "Digite o " . ($i + 1) . "° numero: ";
        $numeros[] = trim(fgets(STDIN));
        
        if ($numeros[$i] % 2 == 0){
            $soma = $numeros[$i] + $soma; 
        }
    }
    echo "O resultado da soma dos números pares é: $soma";
?>

<?php
/*  Invertendo um Array
    Descrição: Crie um programa que lê um array de 5 elementos e imprime o array em ordem inversa.
*/
    echo "Programa que lê um array de 5 elementos e imprime o array em ordem inversa.\n";

    for ($i = 1; $i <= 5; $i++){
        echo "Digite o " . $i . "° elemento: ";
        $elemento[] = trim(fgets(STDIN));
    }
    echo "\n";
    
    for ($i = 4; $i >= 0; $i--){
        echo "O " . ($i + 1) . "º elemento da lista é: " . $elemento[$i] . "\n";
    }
?>

<?php
/*  Duplicação de Elementos
    Descrição: Crie um programa que leia um array de 6 números e crie outro array onde cada elemento é o dobro do elemento correspondente no primeiro array.
*/
    echo "Programa que lê um array de 6 números e crie outro array onde cada elemento é o dobro do elemento correspondente no primeiro array.\n";

    for ($i = 1; $i <= 6; $i++){
        echo "Digite o " . $i . "° número: ";
        $lista[] = trim(fgets(STDIN));
    }
    echo "\n";
    
    for ($i = 0; $i <= 5; $i++){
        $listaDobrada[] = $lista[$i] * 2; 
        echo "O dobro do número da primeira lista de indice $i é: " . $listaDobrada[$i] . PHP_EOL;
    }
?>

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
