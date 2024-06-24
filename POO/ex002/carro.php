<?php

class Carro
{
  private $cor;
  private $marca;
  private $modelo;


  public function setCor($cor)
  {
    if (is_string($cor) && !empty($cor)) {
      $this->cor = $cor;
    } else {
      throw new Exception("Cor inválida.");
    }
  }

  public function getCor()
  {
    return $this->cor;
  }

  public function setMarca($marca)
  {
    if (is_string($marca) && !empty($marca)) {
      $this->marca = $marca;
    } else {
      throw new Exception("Marca inválida.");
    }
  }

  public function getMarca()
  {
    return $this->marca;
  }

  public function setModelo($modelo)
  {
    if (is_string($modelo) && !empty($modelo)) {
      $this->modelo = $modelo;
    } else {
      throw new Exception("Modelo inválido.");
    }
  }

  public function getModelo()
  {
    return $this->modelo;
  }

  public function acelerar()
  {
    echo "o carro está acelerando" . "<br>";
  }

  public function frear()
  {
    echo "o carro está freando" . "<br>";
  }

  public function abrirVidro()
  {
    echo "o carro está abrindo o vidro" . "<br>";
  }
}

class Moto extends Carro
{


  public function garupa()
  {
    echo "a moto está com garupa" . "<br>";
  }
}
