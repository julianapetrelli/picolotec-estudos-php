<?php

$conn = require('connection.php');

$save = true;

$conn->query('TRUNCATE posts');

$sql = file_get_contents(__DIR__.'/insert_posts.sql');

// Dando a possibilidade de escolha se o SQL deve ser utilizado
$conn->begin_transaction();
$conn->query($sql);

// Com o rollback o SQL não é utilizado
// $conn->rollback();

if ($save) {
    // Com o commit é efetivada a query
    $conn->commit();
} else {
    $conn->rollback();
}

$result = $conn->query('SELECT * FROM posts');

$posts = $result->fetch_All(MYSQLI_ASSOC);

foreach ($posts as $post) {
    echo $post['title']. PHP_EOL;
    echo $post['body']. PHP_EOL;
    echo PHP_EOL;
}