<?php

interface ProdutoInterface
{
    public function getSku(): string;
    public function getNome(): string;
    public function getQuantidade(): int;
    public function getUnidadeDeMedida(): string;
    public function getPreco(): float;
    public function setQuantidade($quantidade): void;
}
