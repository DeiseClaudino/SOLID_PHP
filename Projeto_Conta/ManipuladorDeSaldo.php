<?php

class ManipuladorDeSaldo
{
    private $saldo;


    public function saca($valor)
    {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
        } else {
            throw new \Exception("Valor inválido para saque");
        }
    }

    public function deposita($valor)
    {
        $this->saldo += $valor;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function rende()
    {
        $this->saldo *= $taxa;
    }
}
