<?php

//Quem vai receber o e-mail
$to = 'juliana@juliana.com';

//assunto
$subject = 'Email de teste com PHP';

// Mensagem a ser enviada
$message = "
   <p><strong> Nome </strong></p>
   <p><strong> URL </strong></p>
   <p><strong> Mensagem </strong></p>
   <p><strong> E-mail </strong></p>
 
"

//Os outros 2 parametros sçao opcionais

//O mail é responsável pelo envio de emails no php
// to, subject, message, additional_headers, additional_parameters
if (mail($to, $subject, $message)) {

    die('ok, email enviado');

}