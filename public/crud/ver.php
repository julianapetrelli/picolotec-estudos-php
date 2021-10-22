<?php

$conn = require('connection.php');

$id = $_GET['id'] ?? null;

$stmt = $conn->prepare('SELECT * FROM users WHERE id=?');
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();

$user = $result->fetch_assoc();

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
    <h1> <?php echo $user['email']; ?> </h1>

    <p>O ID desse usuário é <?php echo $user['id']; ?> </p>

    <div>
        <a href="/crud/editar.php?id=<?php echo $user['id']; ?>">Editar</a>
        <a href="/crud/excluir.php?id=<?php echo $user['id']; ?>">Excluir</a>
    </div>

    <div>
        <a href="/crud/index.php">Voltar</a>
    </div>
    
</body>
</html>