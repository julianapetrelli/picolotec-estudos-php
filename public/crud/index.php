<?php

$conn = require 'connection.php';

$result = $conn->query('SELECT * FROM users');

$users = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.17/tailwind.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>E-mail</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td>
                    <a href="/crud/ver.php?id=<?php echo $user['id']; ?>">Ver</a>
                </td>
            </tr>
        <?php }; ?>
        </tbody>
    </table>

    <a href="/crud/adicionar.php?id=<?php echo $user['id']; ?>">Adicionar</a>
</body>
</html>