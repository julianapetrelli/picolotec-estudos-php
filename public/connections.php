<?php

$conn = new mysqli('db.docker', 'root', '30112002docker', 'cursophp');

if($conn->connect_errno) {
    die('Falha ao conectar: ('. $conn->connect_errno .')' . $conn->connect_error);
}

echo $conn->host_info;

$sql = 'CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL
)';

$result = $conn->query($sql);

