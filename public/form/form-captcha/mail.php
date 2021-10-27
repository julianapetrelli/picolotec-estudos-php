<?php

//Quem vai receber o e-mail
$to = 'juliana@juliana.com';

//assunto
$subject = 'Email de teste com PHP';

// Mensagem a ser enviada
$message = "
   <p><strong> Nome </strong> {$nome}</p>
   <p><strong> Mensagem </strong> {$mensagem} </p>
   <p><strong> E-mail </strong> ${email} </p>
";

//Quem enviou e a quem responder
$additional_headers .= 'From: ' . $email . '\r\n';
$additional_headers .= 'Reply-to ' . $email . '\r\n';

//Os outros 2 parametros são opcionais

//O mail é responsável pelo envio de emails no php
// to, subject, message, additional_headers, additional_parameters
if (mail($to, $subject, $message)) {

    die('ok, email enviado');

} else {
    
    die('Falha ao enviar');

}