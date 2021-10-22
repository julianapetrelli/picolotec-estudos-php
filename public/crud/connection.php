<?php

$conn = new mysqli('db.docker', 'root', '30112002docker', 'cursophp');

if($conn->connect_errno) {
    die('Falha ao conectar: ('. $conn->connect_errno .')' . $conn->connect_error);
}

return $conn;