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
echo "Programa que calcula quanto cada pessoa deve pagar no churrasco, com base nos itens comprados e no número de participantes.\n\n";
$numeroTotalParticipantes = readline("Digite o número total de participantes: ");
$itensChurrasco = [
    "carvao" => 30,
    "carne" => 60,
    "calabresa" => 35,
    "refrigerantes" => 30,
    "temperos" => 15
    ];
$totalPrecoItens = 0;
$itemMaisCaro = 0;
$ValorItemMaisCaro = 0;
foreach($itensChurrasco as $indice => $precoItem){
    $totalPrecoItens += $precoItem;
   
    if($precoItem > $ValorItemMaisCaro){
        $itemMaisCaro = $indice;
        $ValorItemMaisCaro = $precoItem;
    }
}
$valorCadaPessoaDevePagar = valorPorPessoa($totalPrecoItens, $numeroTotalParticipantes);
echo "Cada partifipante devera pagar R$$valorCadaPessoaDevePagar.\nO item mais caro do churrasco foi a $itemMaisCaro que custou R$$ValorItemMaisCaro.";  
?>