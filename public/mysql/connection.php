<?php

// Para apresentar o erro caso haja
$debug = true;

if ($debug) {
    /*
        MYSQLI_REPORT_ERROR
        MYSQLI_REPORT_OFF
        MYSQLI_REPORT_STRICT = Troca os erros para exceções
        MYSQLI_REPORT_INDEX = Informa se o indice foi utilizado em allguma query
        MYSQLI_REPORT_ALL = Que apresenta a função de todos apresentados a cima
    */
    // Apresenta o erro e o seu nível | Disponivel quando o php.ini estiver configurado 
    mysqli_report(MYSQLI_REPORT_ERROR);
} else {
    mysqli_report(MYSQLI_REPORT_OFF);
}

$conn = new mysqli('db.docker', 'root', '30112002docker', 'cursophp');

if($conn->connect_errno) {
    die('Falha ao conectar: ('. $conn->connect_errno .')' . $conn->connect_error);
}

return $conn;