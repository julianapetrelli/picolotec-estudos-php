<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo 'O formulário foi enviado pela' . $_POST['nome'];
    echo 'Formulário enviado';
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
    <form action="" method="post">
        <input type="text" name="nome">
        <input type="submit" value="enviar">
    </form>
</body>
</html>