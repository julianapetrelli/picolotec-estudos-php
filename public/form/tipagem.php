<?php

    //Forçar o tipo de uma váriavel

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //Verificar se a variável existe, se existir então transforma-la em inteiro, caso não, então transforme em null
        
        $idade = (isset($_POST['idade'])) ? (int)$_POST['idade'] : null;
        
        if(is_null($idade) || empty($idade)) {
            die('Informe sua idade');
        }

        if($idade < 18) {
            die('Você é menor de idade');
        }
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
        <input type="text" name="idade">
        <input type="submit" value="enviar">
    </form>
</body>
</html>