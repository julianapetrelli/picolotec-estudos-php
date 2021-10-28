<?php

require_once("Car.php");
require_once("Motorcycle.php");

//Ferrai é um objeto da classe Car com os atributos: Brand, Color, Engine
$ferrari = new Car("Ferrari", "Red");
$ferrari->engine = 488;
$ferrari->doors = 4;

echo $ferrari->brand;

$mustang = new Car;
$mustang->brand = "Mustang";
$mustang->color = "Amarelo";
$mustang->engine = 300;
$mustang->doors = 3;

$m = new Motocycle;
$m->brand = "Honda";
$m->color = "Azul";
$m->engine = 150;

//Imprimindo o método
echo $mustang->getEngine();

