<?php

session_start();

include 'index.php';

/*

\ escape
^ incio
$ fim
. qualquer caracter
* 0 ou mais
+ 1 ou mais
{n} quantidade especifica
{n, m} um número mínimo e um número máximo
[a-z] Intervalo de caractere

*/

//Quero analisar requisitos especificos
//Toda expressão regular necessitar estar entre '//'

$url = filter_input(INPUT_POST, 'url');
     
// A expressão matches apresenta a url sem os https ou http

            //Pode haver de 0 a 3 w  
if (preg_match('/w{0,3}\.[a-z]+\.[a-z]+[a-z\.]*$/', $url, $matches)) {
   
    //pegando o primeiro elemento do array
    $url = $matches[0];

} else {

    die('URL IS ENVALID');

}

var_dump($url);