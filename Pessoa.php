<?php

class Pessoa{

  private $nome;
  private $idade;
  private $peso;
  private $sexo;

  public function getSexo()
  {
  return $this->sexo;
  }

  public function setSexo($sexo)
  {
  $this->sexo = $sexo;
  }

  public function getPeso()
  {
  return $this->peso;
  }

  public function setPeso($peso)
  {
  $this->peso = $peso;
  }



  public function getIdade()
  {
  return $this->idade;
  }


  public function setIdade($idade)
  {
  $this->idade = $idade;
  }



  public function getNome()
  {
  return $this->nome;
  }


  public function setNome($nome)
  {
  $this->nome = $nome;
  }
}

?>
