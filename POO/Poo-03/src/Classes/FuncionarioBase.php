<?php

namespace rp_cod_poo_03\Classes;

abstract class FuncionarioBase implements Funcionario
{
    protected string $nome;
    protected float $salarioBase;

    function __construct(string $nome, float $salarioBase)
    {
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
    }
}
