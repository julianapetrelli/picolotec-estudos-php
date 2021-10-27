<?php

//adicionando um & avisando que a passagem do parametro é por referencia e não por valor

function add(&$i) {
    
    // Foi aplicado o i++
    $i++;
    echo "interno:" .$i . "<br>";
}

// Não foi aplicado o i++

$numero = 1;
add($numero);

echo $numero;