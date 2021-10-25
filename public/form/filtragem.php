<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $nome = (string)$_POST['nome'] ?? null;

    //Retire os espaços em branco (ou outros caracteres) do início e do final de uma string
    $nome = trim($nome);

    //Valida a utilização da barra invertida "\", remove apenas uma barra
    $nome = stripslashes($nome);

    //Converte os caracteres (<>"'&/)
    $nome = htmlspecialchars($nome);

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