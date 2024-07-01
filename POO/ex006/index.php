<?php

include __DIR__ . "/circulo.php";

$c1 = new Circulo();
$c1->setRaio(25);
echo $c1->getRaio();
echo $c1->calcularArea();
echo $c1->calcularPerimetro();
