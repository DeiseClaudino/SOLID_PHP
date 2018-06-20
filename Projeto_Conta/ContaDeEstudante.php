<?php
class ContaDeEstudante extends ContaComum
{
    private $m;
    private $milhas;

    public function __construct()
    {
        $m = new ManipuladorDeSaldo();
    }

    public function deposita($valor)
    {
        $m->deposita($valor);
        $this->milhas += (int) $valor;
    }

    public function getMilhas()
    {
        return $this->milhas;
    }
}
