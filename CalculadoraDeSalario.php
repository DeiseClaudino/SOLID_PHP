<?php

class CalculadoraDeSalario
{
    public function calcula(Funcionario $funcionario)
    {
        if ($funcionario->getCargo() instanceof Desenvolvedor) {
            return $this->dezOuVinteECincoPorcento($funcionario);
        } elseif ($funcionario->getCargo() instanceof Tester || $funcionario->getCargo() instanceof DBA) {
            return $this->quinzeOuVintePorcento($funcionario);
        }
    }

}
