<?php

namespace rp_cod_poo_03\Classes;

class FuncionarioHorista extends FuncionarioBase
{
    protected int $horas;
    protected int $taxa;

    public function __construct(string $nome, float $salarioBase, int $horas, int $taxa)
    {
        parent::__construct($nome, $salarioBase);
        $this->horas = $horas;
        $this->taxa = $taxa;
    }


    public function calcularSalario(): float
    {
        $calculo = $this->horas * $this->taxa;

        return $calculo;
    }

    public function exibirInformacoes(): string
    {
        $mensagem =
            "Nome do funcionário: " . $this->nome . PHP_EOL .
            "Salário total: " . $this->calcularSalario();

        return $mensagem;
    }
}
