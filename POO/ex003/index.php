<?php

include __DIR__ . "/coletivo.php";

$mapa = new Mapa;
$aves = new Aves;
$soldado = new Soldados;
$animais = new Animais;
$coletivos = array($mapa, $aves, $soldado, $animais);

foreach ($coletivos as $coletivo) {
  $coletivo->substantivoColetivo();
}
