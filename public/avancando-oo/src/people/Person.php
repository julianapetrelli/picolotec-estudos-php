<?php

namespace Juliana\people;

class Person {

    //Criando um array private
    private $data = [];

    public function setName(string $name) {
        
        //Tornando meu array publico e a atribuindo valor a ele
        $this->data[] = $name;
    }

    public function setAge(int $age) {
        $this->data[] = $age;
    }

    public function setWeight(float $weight) {
        $this->data[] = $weight;
    }
}