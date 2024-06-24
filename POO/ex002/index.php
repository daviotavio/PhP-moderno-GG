<?php

include __DIR__ . "/carro.php";


$c1 = new Carro;
$c1->acelerar();
$c1->frear();
$c1->abrirVidro();
$c1->setCor("Verde");
echo "A cor do carro é: " . $c1->getCor() . "<br>";
$c1->setMarca("Chevrolet");
echo "A marca do carro é: " . $c1->getMarca() . "<br>";
$c1->setModelo("Celta");
echo "O modelo do carro é: " . $c1->getModelo() . "<br>";
