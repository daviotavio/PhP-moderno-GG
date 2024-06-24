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


$m1 = new Moto;
$m1->garupa();
$m1->setCor("Vermelha");
echo "A cor da moto é: " . $c1->getCor() . "<br>";
$c1->setMarca("Honda");
echo "A marca da moto é: " . $c1->getMarca() . "<br>";
$c1->setModelo("CB 300f Twister");
echo "O modelo da moto é: " . $c1->getModelo() . "<br>";
