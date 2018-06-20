<?php
class ContaDeEstudante
{
    private $m;
    private $milhas;

    public function __construct()
    {
        $this->m = new ManipuladorDeSaldo();
    }

    public function deposita($valor)
    {
        $this->m->deposita($valor);
        $this->milhas += $valor;
    }

    public function getMilhas()
    {
        return $this->milhas;
    }
}
