<?php

function carregaClasse($classe)
{
    require $classe.".php";
}

spl_autoload_register("carregaClasse");

$fatura = new Fatura();

$fatura->setValorMensal(1000);

$gerador = new GeradorNotaFiscal(new EnviadorDeEmail(), new NotaFiscalDao());

$gerador->gera($fatura);
