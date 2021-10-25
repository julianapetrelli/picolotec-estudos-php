<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Tras todos os dados filtrados e dentro de um único array

    /*

    $search_html = filter_input(INPUT_GET, 'chavePesquisa', FILTER_SANITIZE_SPECIAL_CHARS);

    */

    $nome = filter_input_array(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

    var_dump($nome);
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
        <input type="submit" value="enviar">
    </form>
</body>
</html>