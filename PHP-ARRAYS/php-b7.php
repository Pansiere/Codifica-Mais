<?php
    /*SISTEMA DE CONTROLE DE NOTAS
    Você foi contratado para desenvolver um sistema de controle de notas de uma turma. Sua tarefa é criar um programa que automatize o processo de cálculo da média das notas dos alunos e determine se cada aluno foi aprovado ou reprovado com base em critérios predefinidos. Aqui está o que o programa deve fazer:
    1 - Crie uma variável em array para armazenar as notas dos alunos. Utilize o array abaixo:
    $notasAlunos = [
    [8.5, 6.0, 7.8, 9.2, 5.5], // Aluno 1
    [7.0, 8.0, 6.5, 7.5, 8.5], // Aluno 2
    [6.5, 7.5, 4.5, 5.5, 7.0], // Aluno 3
    [5.0, 4.6, 7.8, 9.0, 6.0] // Aluno 4
    ];
    2 - Crie uma função chamada calcularMedia($notas) que receba as notas de cada aluno como parâmetro e retorne a média das notas.
    3 - Após calcular a média de cada aluno, utilize uma estrutura condicional para determinar se o aluno foi aprovado ou reprovado. Considere que a média mínima para aprovação é 7.0.
    4 - Imprima o resultado para cada aluno, indicando se ele foi aprovado ou reprovado, juntamente com sua média.
    5 - Imprima o total de alunos aprovados e reprovados.*/
    function calcularMedia(array $notas) : float {
        $somas = 0;
        for($i = 0; $i <= 4; $i++){
            $somas = $somas + $notas[$i];
        }
        $mediasDasNotas = $somas / 5;
        return $mediasDasNotas;
    }
    $notasAlunos = [
        [8.5, 6.0, 7.8, 9.2, 5.5], // Aluno 1
        [7.0, 8.0, 6.5, 7.5, 8.5], // Aluno 2
        [6.5, 7.5, 4.5, 5.5, 7.0], // Aluno 3
        [5.0, 4.6, 7.8, 9.0, 6.0]  // Aluno 4
    ];
    foreach ($notasAlunos as $indiceAluno => $notas) {
        $media = calcularMedia($notas);
        echo "A média do Aluno " . ($indiceAluno + 1) . " é de: " . $media . PHP_EOL;
    }
//passei umas 3hrs nesse código. acho q agr foi :')
?>