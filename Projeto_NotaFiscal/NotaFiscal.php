<?php

class Nota Fiscal{
  private $id;
  private $valorBruto;
  private $impostos;

  public function __construct($valorBruto, $impostos, $id = null)
  {
    $this->id = $id;
    $this->valorBruto = $valorBruto;
    $this->impostos = $impostos;
  }

  public function getId()
  {
    return $this->id;
  }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getValorBruto())
      {
        return $this->valorBruto;
      }


      public function setValorBruto($valorBruto)
      {
          $this->valorBruto = $valorBruto;
      }

      public function getImpostos()
      {
          return $this->impostos;
      }


      public function setImpostos($impostos)
      {
          $this->impostos = $impostos;
      }

      public function getValorLiquido()
      {
        return $this->valorBruto - $this->impostos;
      }
}
