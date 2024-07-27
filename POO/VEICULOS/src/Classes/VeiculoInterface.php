<?php

namespace exec_poo_a2\Classes;

interface VeiculoInterface
{
    public function acelerar(): void;

    public function frear(): void;

    public function exibiDetalhes(): void;
}
