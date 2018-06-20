<?php

class ContaComum
{
    private $manipulador;

    public function __construct()
    {
        $this->manipulador = new ManipuladorDeSaldo();
    }
}
