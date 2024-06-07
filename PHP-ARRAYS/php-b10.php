<?php
    function calcularSalarioTotal($salarioBase, $horasExtras, $valorHoraExtra){
        $salarioTotal = $salarioBase + ((($salarioBase / 160) * $valorHoraExtra) * $horasExtras);
        return $salarioTotal;
    }

    function listarFuncionarios($funcionarios){

        $listaDosFuncionarios = "";

        echo "Lista dos Funcionários:\n\n";

        foreach($funcionarios as $indice => $funcionario){
                $listaDosFuncionarios .= "Funcionario(a) " . $indice . PHP_EOL
                                    . "Salario: ". $funcionario['salarioBase'] . PHP_EOL
                                    . "Horas extras: ". $funcionario['horasExtras'] . PHP_EOL
                                    . "Salário total: " . calcularSalarioTotal($funcionario['salarioBase'], $funcionario['horasExtras'], $valorHoraExtra = 1.5) . PHP_EOL
                                    . PHP_EOL;
        }    
        echo $listaDosFuncionarios;
    }

    $listaFuncionarios = [
        'Pedro' => [
            'salarioBase' => 2500,
            'horasExtras' => 10
        ],
        'Renata' => [
            'salarioBase' => 3000,
            'horasExtras' => 5
        ],
        'Sérgio' => [
            'salarioBase' => 2800,
            'horasExtras' => 8
        ],
        'Vanessa' => [
            'salarioBase' => 3200,
            'horasExtras' => 12
        ],
        'André' => [
            'salarioBase' => 1700,
            'horasExtras' => 0
        ]
    ];
    $listaDosFuncionarios = listarFuncionarios($listaFuncionarios);
?>