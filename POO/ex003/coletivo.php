<?php

interface Coletivo
{
  public function substantivoColetivo();
}

class Mapa implements Coletivo
{
  public function substantivoColetivo()
  {
    echo "Atlas ";
  }
}

class Aves implements Coletivo
{
  public function substantivoColetivo()
  {
    echo "Bando ";
  }
}

class Soldados implements Coletivo
{
  public function substantivoColetivo()
  {
    echo "Batalhão ";
  }
}

class Animais implements Coletivo
{
  public function substantivoColetivo()
  {
    echo "Fauna ";
  }
}
