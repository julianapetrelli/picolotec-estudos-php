<?php

$chovendo = false;

if ($chovendo) {
    echo "vou ficar em casa";
} else {
    echo "Vou para a piscina";
}

$a = 10;
$b = 8;

// Operadores de Comparação

//Igual
if ($a == $b) {
    echo "Esses números são iguais";
} else {
    echo "Esses números são diferentes";
}

//Diferente

if ($a != $b) {
    echo "Esses números são diferentes";
} else {
    echo "Esses números são iguais";
}

//Maior

if ($a > $b) {
    echo "A é maior que B";
} else {
    echo "A é menor que B";
}

//Menor

if ($a < $b) {
    echo "A é menor que B";
} else {
    echo "A é maior que B";
}

// Operadores Lógicos

$media = 7;
$frequencia = 75;

$media_aluno = 5;
$frequencia_aluno = 50;

//Todas as condições necessitam ser verdadeiras

if ($media_aluno >= $media && $frequencia_aluno >= $frequencia) {
    echo "Aprovado!";
} else {
    echo "Reprovado!";
}

//Uma das condições necessitam ser verdadeiras

if ($media_aluno >= $media || $frequencia_aluno >= $frequencia) {
    echo "Aprovado!";
} else {
    echo "Reprovado!";
}

?>