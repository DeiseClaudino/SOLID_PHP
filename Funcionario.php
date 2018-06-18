<?php

class Funcionario
{
    private $id;
    private $nome;
    private $cargo;
    private $dataAdmissao;
    private $salario;

    public function __construct(Cargo $cargo, $salario)
    {
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function getDataAdmissao()
    {
        return $this->dataAdmissao;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setCargo(Cargo $cargo)
    {
        $this->cargo = $cargo;
    }

    public function setDataAdmissao(DateTime $data)
    {
        $this->dataAdmissao = $data;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;
    }
}
