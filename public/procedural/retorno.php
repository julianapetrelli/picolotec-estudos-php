<?php

/*

function abc() {

    // Ao rodar a função e a mesma chegar no return, a função será encerrada e o valor informado na frente dela, será apresentado
    return "123";
}

$valor = abc();
echo $valor;


*/

function execultarTeste($nota, $media = 5) {
    if($nota >= $media) {
        return "Aprovado";
    } else {
        return "Reprovado";
    }
}

echo "<h1>Exame de alunos</h1>" . "<br>" ; 

$resultado = execultarTeste(8);
echo "Resultado da Maria: " . $resultado . "<br>";

$resultado = execultarTeste(4);
echo "Resulado do João: " . $resultado . "<br>";


