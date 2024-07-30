<?php

namespace rp_cod_poo_03\Classes;

class FuncionarioMensalista extends FuncionarioBase
{
    public function calcularSalario(): float
    {
        $salarioBase = $this->salarioBase;

        return $salarioBase;
    }

    public function exibirInformacoes(): string
    {
        $mensagem =
            "Nome do funcionário: " . $this->nome . PHP_EOL .
            "Salário total: " . $this->calcularSalario();

        return $mensagem;
    }
}
