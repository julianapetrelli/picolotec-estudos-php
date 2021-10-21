<?php

//Função com parametros

function escreva_nome($nome) {
    //corpo da minha função

    echo "Olá querido aluno $nome! <br>";

}

escreva_nome("Juliana");

//Função com retorno

function soma ($a = null, $b = null) {
    return $a + $b;

    //Ao ler o return, será lido somente o que estiver a sua frente e o resto da função não sera mais execultada!
}

// É necessário atribuir uma váriavel que será responsável em armazenar o valor resultante da função
// Uma função com return armazena a informação para que você possa adiciona-la a uma variável como por exemplo. Ao utilizar um return tudo que vier depois dele não terá nenhum valor e não será executado.

$resultado = soma(2, 3);

