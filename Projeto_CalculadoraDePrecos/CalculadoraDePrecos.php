<?php

class CalculadoraDePrecos
{
    public function __construct(TabeladePreco $tabela, ServicoDeEntrega $servico)
    {
    }
    public function calcula(Compra $produto)
    {
        $desconto = $tabela->descontoPara($produto->getValor());
        $frete = $this->entrega->para($produto->getCidade());

        return $produto->getValor() * (1 - $desconto) + $frete;
    }
}
