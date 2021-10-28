<?php

//Programação funcional, utilizando funções para execultar determinadas tarefas

$input = array(22, 34, 17, 18, 13, 22, 25, 14, 6);

$filtro = function(int $age) {
    return ($age >= 18);
};

$output = array_filter($input, $filtro);

print_r($output);