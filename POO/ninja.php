<?php

class Ninja
{
  public $traje;
  public $arma;

  public function setTraje($traje)
  {
    $this->traje = $traje;
  }

  public function getTraje()
  {
    return $this->traje;
  }

  public function setArma($arma)
  {
    $this->arma = $arma;
  }

  public function getArma()
  {
    return $this->arma;
  }

  public function atacar()
  {
    echo "o ninja está atacando" . "<br>";
  }

  public function defender()
  {
    echo "o ninja está defendendo" . "<br>";
  }
}
