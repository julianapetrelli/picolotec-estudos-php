<?php

$numeros = [1, 3, 5, 8, 9];

//Gere um valor aleatório de 1 a 10
$aleatorio = mt_rand(1, 10);

// O retorno dessa função precisa ser um inteiro

function temNumero(int $aleatorio, array $numeros) : int {

    // Verifique se existe um valor em uma matriz
    
    if(in_array($aleatorio, $numeros)) {
        return $aleatorio;
    } else {
        return false;
    }

}

$resultado = temNumero($aleatorio, $numeros);
var_dump($aleatorio);
var_dump($resultado);

//Caso o valor ser falso, será retornado um 0 - false