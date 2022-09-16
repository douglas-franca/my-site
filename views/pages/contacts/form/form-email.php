

<?php

$nome = addslashes($_POST['name']);
$last_name = addslashes($_POST['last_name']);
$email = addslashes($_POST['email']);
$message = addslashes($_POST['message']);

$to = "douglas@dofranca.com";
$subject = "Contato - Douglas França";
$body = "Nome: " . $nome . "\n\r" .
    "Sobrenome: " . $last_name . "\n\r" .
    "Email:" . $email . "\n\r" .
    "Mensagem: " . $message;

$header = "From: douglas@dofranca.com" . "\r\n" . "Replay-to:" . $email . "\r\n" . "X=Mailer:PHP/" . phpversion();
if(mail($to, $subject, $body, $header)){
    echo ("Email enviado com sucesso");
} else{
    echo ("Email não pode ser enviado");
}