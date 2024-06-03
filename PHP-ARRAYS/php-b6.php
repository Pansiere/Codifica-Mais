<?php
    /*
    CALCULADORA DE IMC (ÍNDICE DE MASSA CORPORAL)
    Solicite ao usuário seu peso (em quilogramas) e altura (em metros) e calcule o IMC utilizando a fórmula: IMC = peso / (altura * altura). */
    echo "Calculadora de IMC (ÍNDICE DE MASSA CORPORAL)\nDigite o seu peso: ";
    $peso = trim(fgets(STDIN));
    echo "Agora, digite sua altura: ";
    $altura = trim(fgets(STDIN));
    $imc = $peso / $altura ** 2;

    if ($imc < 17) { // Muito abaixo do peso.
        echo "\nSeu IMC é de $imc.\nEsta muito abaixo do peso. Procure um médico. Algumas pessoas têm um baixo peso por características do seu organismo e tudo bem. Outras podem estar enfrentando //problemas, como a desnutrição. É preciso saber qual é o caso.";
        } elseif ($imc == 17 || $imc <= 18.4) {
            echo "\nSeu IMC é de $imc.\nEsta abaixo do peso. Procure um médico. Algumas pessoas têm um baixo peso por características do seu organismo e tudo bem. Outras podem estar enfrentando problemas, como a desnutrição. É preciso saber qual é o caso.";
        } elseif ($imc == 18.5 || $imc <= 24.9) {
            echo "\nSeu IMC é de $imc.\nQue bom que você está com o peso normal! E o melhor jeito de continuar assim é mantendo um estilo de vida ativo e uma alimentação equilibrada.";
        } elseif ($imc == 25 || $imc <= 29.99) {
            echo "\nSeu IMC é de $imc.\nEsta acima do peso. Ele é, na verdade, uma pré-obesidade e muitas pessoas nessa faixa já apresentam doenças associadas, como diabetes e hipertensão. Importante rever hábitos e buscar ajuda antes de, por uma série de fatores, entrar na faixa da obesidade pra valer.";
        } elseif ($imc == 30 || $imc <= 34.9) {
            echo "\nSeu IMC é de $imc.\nEsta em Obesidade I. Sinal de alerta! Chegou na hora de se cuidar, mesmo que seus exames sejam normais. Vamos dar início a mudanças hoje! Cuide de sua alimentação. Você precisa iniciar um acompanhamento com nutricionista e/ou endocrinologista.";
        } elseif ($imc == 35 || $imc <= 40) {
            echo "\nSeu IMC é de $imc.\nEsta em Obesidade II(severa). Mesmo que seus exames aparentem estar normais, é hora de se cuidar, iniciando mudanças no estilo de vida com o acompanhamento próximo de profissionais de saúde.";
        } else {
            echo "\nSeu IMC é de $imc.\nEsta em Obesidade III(mórbida). Aqui o sinal é vermelho, com forte probabilidade de já existirem doenças muito graves associadas. O tratamento deve ser ainda mais urgente.";
    }
?>