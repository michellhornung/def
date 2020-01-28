<?php

$email_remetente = "contato@defgerenciamento.com.br";
$headers = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/html; charset=UTF-8\n";
$headers .= "From: $email_remetente\n"; 
$headers .= "Return-Path: $email_remetente\n"; 

$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_subject = $_POST['subject'];
$field_message = $_POST['message'];

$mail_to = 'orcamentos@defgerenciamento.com.br';
$subject = 'Contato pelo Site DEF: '.$field_name;

$body_message = 'De: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Assunto: '.$field_subject. "\n";
$body_message .= 'Mensagem: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers, "-f$email_remetente");

?>