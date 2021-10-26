<?php


var_dump($nome, $email, $descricao);

php://input: Este é um fluxo somente leitura que nos permite ler dados brutos do órgão de solicitação. Ele retorna todos os dados brutos após os cabeçalhos HTTP da solicitação, independentemente do tipo de conteúdo.
$json = file_get_contents("php://input");
$json = json_decode($json, true);

var_dump($json['nome']);

