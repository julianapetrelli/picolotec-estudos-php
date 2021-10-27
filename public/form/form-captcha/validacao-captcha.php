<?php 

$captcha = $_SESSION['captcha'] ?? false;

if(!$captcha or $captcha !== filter_input(INPUT_POST, '_captcha')) {
    die('Falha ao realizar o envio: Insira o captcha correntamente');
} else {
    die('E-mail enviado, agraecemos o seu feedback');
}

var_dump($_SESSION['captcha']);
