<?php

/*

$numeros = [12, 44, 23, 99, 102, 18];

$filtro = function($v) {
    return $v <= 50;
};

$saida = array_filter($numeros, $filtro);


var_dump($saida);

*/

$voceDecide = function($numero, $callback) {

    if(is_callable($callback)) {
        return $callback($numero);
    } else {
        throw new Exception("Callback precisa ser uma função");
    };
    
};

$multiplica = $voceDecide(10, function($n) {
    return $n* $n;
});

echo $multiplica;