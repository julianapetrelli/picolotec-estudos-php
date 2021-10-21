<?php

require __DIR__.'/session.php';

$user = $_SESSION['user'] ?? null;

if (!$_SESSION) {
    header('Location: login.php');
    exit;
}

?>

<h1> Pagina protegida </h1>

<p>Olá, <?php echo $user['email']; ?></p>