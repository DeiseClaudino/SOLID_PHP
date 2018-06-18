<?php

class CalculadoraDeSalario
{
    public function calcula(Funcionario $funcionario)
    {
        $funcionario->getCargo()->getRegra()->calcula($funcionario);
      
    }
}
