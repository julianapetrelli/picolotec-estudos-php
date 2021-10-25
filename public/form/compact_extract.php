<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    //Criando variáveis para as chaves do array
    extract($_POST);
    var_dump($nome, $idade);

    // Transformar variáveis em chaves no array
    $data = compact('nome', 'idade', '_POST');
    
    exit;
}

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="nome">
        <input type="text" name="idade">
        <input type="submit" value="enviar">
    </form>
</body>
</html>