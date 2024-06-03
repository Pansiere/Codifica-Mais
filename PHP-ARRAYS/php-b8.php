<?php
    /*Você está organizando um churrasco com amigos e precisa dividir os custos igualmente entre todos. Sua tarefa é criar um programa que calcule quanto cada pessoa deve pagar com base nos itens comprados e no número de participantes. Aqui está o que o programa deve fazer:
    1. Crie um array para armazenar os itens comprados no churrasco e outro array para armazenar o preço de cada item.
    2. Solicite número total de participantes do churrasco.
    3. Crie uma função que receba o valor total dos itens e o número de participantes como parâmetros, e retorne o valor que cada pessoa deve pagar.
    4. Após calcular o valor que cada pessoa deve pagar, imprima o resultado, indicando quanto cada uma deve contribuir para o churrasco.
    5. Imprima qual foi o item mais caro do churrasco.
    6. Se o número de participantes for igual ou menor que um, imprima uma mensagem. “O churrasco foi cancelado, todo mundo furou!”*/
    function valorPorPessoa($valorTodosItens, $numeroTotalParticipantes) {
        $valorCadaPessoaDevePagar = $valorTodosItens / $numeroTotalParticipantes;
        return $valorCadaPessoaDevePagar;
    }

    echo "Programa que calcula quanto cada pessoa deve pagar no churrasco, com base nos itens comprados e no número de participantes.\n";

    $itensComprados = ['carvao', 'carne', 'calabresa', 'refrigerantes', 'temperos'];
    $precoItens = [30, 60, 35, 30, 15];
    $totalPrecoItens = 0;
    $itemMaisCaro = $precoItens[0];

    for ($i = 0; $i < count($precoItens); $i++) {
        $totalPrecoItens = $precoItens[$i] + $totalPrecoItens;
        if($itemMaisCaro < $precoItens[$i]){
            $itemMaisCaro = $precoItens[$i];
            $indiceItemMaisCaro = $i;
        }
    }
    echo "Qual o numero total de participantes? ";
    $numeroParticipantes = trim(fgets(STDIN));

    if ($numeroParticipantes >= 2) {
        $resultado = valorPorPessoa($totalPrecoItens, $numeroParticipantes);
        echo "Cada pessoa deve contribuir para o churrasco com R$" . $resultado . ",00.\nO item mais caro do churrasco foi o(a) " . $itensComprados[$indiceItemMaisCaro] . ", que custou R$$itemMaisCaro,00.";
    }else {
        echo "O churrasco foi cancelado, todo mundo furou!";
    }
?>