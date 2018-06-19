<?php

class CalculadoraDePrecos
{
    private $tabela;
    private $frete;

    public function __construct(TabeladePreco $tabela, ServicoDeEntrega $servico)
    {
        $this->tabela = $tabela;
        $this->entrega = $frete;
    }
    public function calcula(Compra $produto)
    {
        $desconto = $this->tabela->descontoPara($produto->getValor());
        $frete = $this->frete->para($produto->getCidade());

        return $produto->getValor() * (1 - $desconto) + $frete;
    }
}
