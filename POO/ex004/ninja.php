<?php

class NinjaAgua
{

  public function atacar()
  {
    echo "O ataque do ninja da água é extremamente letal quando bem executado" . "<br>";
  }
}

class NinjaFogo
{
  public function atacar()
  {
    echo "O ataque do ninja com a katana de fogo é capaz de queimar o inimigo até a morte" . "<br>";
  }
}

class NinjaAr
{
  public function atacar()
  {
    echo "O ataque do ninja de ar é mortífero, pois ensurdece o inimigo e também não permite que ele respire" . "<br>";
  }
}

$ninjaDeFogo = new NinjaFogo;
$ninjaDeAgua = new NinjaAgua;
$ninjaDeAr = new NinjaAr;
$ninjas = array($ninjaDeFogo, $ninjaDeAgua, $ninjaDeAr);

foreach ($ninjas as $ninja) {
  $ninja->atacar();
}
