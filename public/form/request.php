<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        var_dump($_POST);
        var_dump($_GET);

        // O resquest trás o valor intependente se veio via GET ou POST
        var_dump($_REQUEST);

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
        <input type="text" name="">
    </form>
    
</body>
</html>