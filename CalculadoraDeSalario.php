<?php

class CalculadoraDeSalario
{
    public function calcula(Funcionario $funcionario)
    {
        if ($funcionario->getCargo() instanceof Desenvolvedor) {
            $regra = new DezOuVintePorcento($funcionario);
            return $regra->dezOuVinteECincoPorcento($funcionario);
        } elseif ($funcionario->getCargo() instanceof Tester || $funcionario->getCargo() instanceof DBA) {
            $regra = new QuinzeOuVinteECincoPorcento($funcionario);
            return $regra->quinzeOuVintePorcento($funcionario);
        }
    }
}
