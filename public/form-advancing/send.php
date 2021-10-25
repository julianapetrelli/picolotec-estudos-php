<?php

/*

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');
$descricao = filter_input(INPUT_POST, 'descricao');

var_dump($nome, $email, $descricao);

*/

$json = file_get_contents("php://input");
$json = json_encode($json);

var_dump($json);


