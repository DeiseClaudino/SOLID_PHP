<?php

class CalculadoraDeSalario
{
    public function calcula(Funcionario $funcionario)
    {
        $funcionario->getCargo()->getRegra()->calcula($funcionario);
        if ($funcionario->getCargo() instanceof Desenvolvedor) {
            $regra = new DezOuVintePorcento($funcionario);
            return $regra->calcula($funcionario);
        } elseif ($funcionario->getCargo() instanceof Tester || $funcionario->getCargo() instanceof DBA) {
            $regra = new QuinzeOuVinteECincoPorcento($funcionario);
            return $regra->calcula($funcionario);
        }
    }
}
