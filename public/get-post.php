<?php

// Método GET e POST

var_dump($_GET);
var_dump($_POST);

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

    <!-- <h2> <?php echo $_GET['nome'] ?> </h2> -->

    <h3>Form PHP method GET</h3>
    <p>Digite o seu nome:</p>

    <form action="http://localhost:8000/recebe-info.php" method="get">
        <input type="text" name="nome">
        <button type="submit">Enviar</button>
    </form>

    <h3>Form PHP method POST</h3>
    <p>Digite o seu e-mail:</p>

    <form action="http://localhost:8000/recebe-info.php" method="post">
        <input type="text" name="nome">
        <button type="submit">Enviar</button>
    </form>

</body>
</html>