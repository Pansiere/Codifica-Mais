<?php

namespace rp_cod_poo_02\Classes;

abstract class Mamifero implements Animal
{
    protected $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }
}
