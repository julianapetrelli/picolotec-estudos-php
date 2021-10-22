<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $conn = require('connection.php');
    
    $email = $_POST['email'] ?? null;
    
    $stmt = $conn->prepare('INSERT INTO users (email) VALUES (?)');
    $stmt->bind_param('s', $email);
    $stmt->execute();

    header('location: /crud/index.php');
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Adicionar um novo usuário</h1>

    <form action="" method="post">
        <input type="text" name="email">
        <input type="submit" value="enviar">
    </form>
</body>
</html>

