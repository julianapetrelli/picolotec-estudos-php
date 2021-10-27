<?php

function converteDataParaBr($data) {

    // Pegando uma string (variável do tipo caracteres, texto) e separar elas, utilizando um separador.
    $data = explode("-", $data);

    //Invertendo a ordem dos indices
    $data = array_reverse($data);

    // Retorna uma string contendo os elementos da matriz na mesma ordem com uma ligação entre cada elemento.
    $data = implode("/", $data);

    echo $data;
}

function converteData ($formato, $data) {

    if($formato == "br") {
        $data = explode("-", $data);
        $data = array_reverse($data);
        $data = implode("/", $data);
    } else {
        $data = explode("/", $data);
        $data = array_reverse($data);
        $data = implode("-", $data);
    }

    echo $data;
}

converteData('br', '2018-05-15');


function digaOi($nome) {
    echo "Oi " . $nome;
}

digaOi("Juliana");

echo "<br>";

digaOi("Nicollas");