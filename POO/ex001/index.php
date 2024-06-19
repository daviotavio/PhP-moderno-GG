<?php

include __DIR__ . "/ninja.php";


$ninja = new Ninja();
$ninja->setTraje("Traje de malha");
$ninja->setArma("Katana");
$ninja->atacar();
$ninja->defender();
echo "O ninja está armado com: " . $ninja->getArma() . "<br>";
echo "O ninja está vestido com: " . $ninja->getTraje();
