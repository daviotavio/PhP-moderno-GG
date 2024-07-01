<?php

class Circulo
{
  public $raio;


  public function setRaio($raio)
  {
    $this->raio = $raio;
  }

  public function getRaio()
  {
    return "Raio do círculo: " . $this->raio . "<br>";
  }

  public function calcularArea()
  {
    return "Área do círculo; " . 3.14 * ($this->raio * $this->raio) . "<br>";
  }

  public function calcularPerimetro()
  {
    return "Perímetro do círculo: " . (2 * 3.14) * $this->raio . "<br>";
  }
}
