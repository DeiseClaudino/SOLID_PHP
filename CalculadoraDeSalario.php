<?php

class CalculadoraDeSalario
{
    public function calcula(Funcionario $funcionario)
    {
        if ($funcionario->getCargo() instanceof Desenvolvedor) {
            return $this->dezOuVintePorcento($funcionario);
        } elseif ($funcionario->getCargo() instanceof Tester || $funcionario->getCargo() instanceof DBA) {
            return $this->quinzeOuVintePorcento($funcionario);
        }
    }

    private function dezOuVintePorcento(Funcionario $funcionario)
    {
        if ($funcionario->getSalario() > 3000) {
            return $funcionario->getSalario() * 0.8;
        }
        return $funcionario->getSalario() * 0.9;
    }

    private function quinzeOuVintePorcento(Funcionario $funcionario)
    {
        if ($funcionario->getSalario() > 2000) {
            return $funcionario->getSalario() * 0.75;
        }
        return $funcionario->getSalario() * 0.85;
    }
}
