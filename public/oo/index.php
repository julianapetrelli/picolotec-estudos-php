<?php

require_once("Car.php");
require_once("Motorcycle.php");

//Ferrai é um objeto da classe Car com os atributos: Brand, Color, Engine
$ferrari = new Car("Ferrari", "Red");
$ferrari->engine = 488;
$ferrari->setDoors(2);

echo $ferrari->getDoors();

$mustang = new Car;
$mustang->brand = "Mustang";
$mustang->color = "Amarelo";
$mustang->engine = 300;
$mustang->setDoors(4);

$m = new Motocycle("Honda", "amarela");
$m->engine = 150;

echo $m->brand;
echo $m->color;

//Imprimindo o método
echo $mustang->getEngine();

