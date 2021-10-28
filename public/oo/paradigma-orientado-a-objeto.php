<?php

// A classe será um molde, onde podemos criar vários objetos
// O método será como uma função, que estara dentro da classe

class People 
{

    public function getHello($name) {
        return "Hello {$name}!";
    }

}

$p = new People;
echo $p->getHello("Juliana");