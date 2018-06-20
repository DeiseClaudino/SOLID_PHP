<?php

class ContaComum
{
    public function __construct($saldo)
    {
        $this->saldo = 0;
    }

    public function rende()
    {
        $this->saldo *= 1.1;
    }
}
