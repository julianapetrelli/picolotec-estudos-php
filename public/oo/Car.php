<?php

// Carro é um veículo
// Carro ira herdar atributos e métodos de veículo

require_once("Vehicle.php");

class Car extends Vehicle  
{
    // Public: É possivel utiliza-lo, modifica-lo e atribuir valor a ele, fora da classe
    
    private $doors;

    public function setDoors($doors) {

        // Tornando meu atributo publico
        $this->doors = $doors;
    }

    public function getDoors() {

        // Retornando o valor da porta, para que sejá possivel acessar o valor da porta
        return $this->doors;
    }

}


