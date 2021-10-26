<?php

session_start();

header('Content-type: image/jpeg');

$image = imagecreate(160, 40);

//Juntando dois arrays com o alfabeto em Maiúsculo e Minúsculo
// $caracteres = array_merge(range('a', 'z'), range ('A', 'Z'));
$caracteres = range('a', 'z');

//Embaralhar uma matriz
shuffle($caracteres);

// Retorna uma string contendo uma representação de string de todos os elementos da matriz na mesma ordem, com a string separadora entre cada elemento.
$palavra = implode($caracteres);

//Retorna parte de uma string, do indice 0 ao 3
$palavra = substr($palavra, 0, 5);

$_SESSION['captcha'] = $palavra;

imagecolorallocate($image, 235,235,236);

//Alocar uma cor para uma imagem, RGB
$cor = imagecolorallocate($image, 0, 0, 0);

//Pegar uma palavra e jogar dentro da imagem
//A imagem que eu desejo, tamanho da fonte, angulo da imagem, posição x e y (10x10), cor, arquivo da fonte e por ultimo o texto

imagettftext($image, 16, rand(0, 7), rand(30, 40), rand(30, 40), $cor, __DIR__.'/font-captcha.ttf', $palavra);

//Saída de imagem para navegador ou arquivo
imagejpeg($image);
imagedestroy($image);