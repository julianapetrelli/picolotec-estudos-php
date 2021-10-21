<?php

session_start();

$_SESSION['usuario'] = [
    'nome' => 'Juliana',
    'idade' => 32,
    'ativo' => true,
    'pontuacao' => 10
];

var_dump($_SESSION['usuario']);