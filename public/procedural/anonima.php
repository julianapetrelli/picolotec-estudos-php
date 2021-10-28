<?php

/*

Função comum

function soma($a, $b) {
}

$soma = function($a, $b) {
    return $a + $b;
};

$resultado = $soma(2,2);

echo $resultado;
*/

$a = 2;

$soma = function($b) use($a){
    return $a + $b;
};

echo $soma(4);