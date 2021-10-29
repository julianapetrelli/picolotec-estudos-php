<?php

//Classes

//Criamos um arquivo para uma unica classe
//A primeira letra da classe deve ser maiúscula
//Classe sempre no singular


require_once("Ivehicle.php");

abstract class Vehicle implements Ivehicle
{
    //tributos

    public $brand;
    public $color;
    public $engine;

    // Construtor

    public function __construct($brand = null, $color = null)
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    //Método

    public function getEngine($type = " horsepower"){
        
        //Este motor, desta classe
        return $this->engine. $type;
    }
}