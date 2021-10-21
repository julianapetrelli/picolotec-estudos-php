<?php

$email = $_GET['email'] ?? 0;

$conn = new mysqli('db.docker', 'root', '30112002docker', 'cursophp');

$stmt = $conn->prepare('SELECT * FROM users WHERE id > ?');

$stmt->bind_param('i', $id);

$stmt->execute();
$result = $stmt->get_result();

// $result = $conn->prepare('INSERT INTO users (email) VALUES ("' . $email . '")');

var_dump($result);