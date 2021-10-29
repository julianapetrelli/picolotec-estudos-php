<?php

require_once("Vehicle.php");

class Motocycle extends Vehicle
{

    // Como chamar um método do classe pai

    public function __construct($brand = null, $color = null)
    {
        // Modificando apenas onde necessita haver mudanças
        parent::__construct($brand, strtoupper($color));
    }


}

