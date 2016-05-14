<?php

if (empty($_POST['mail'])) {
  header('Location: company.html');
  exit;
}

require 'mailer/config.php';
require 'mailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = "$mail_host";
$mail->SMTPAuth = true;
$mail->Username = "$mail_username";
$mail->Password = "$mail_password";
$mail->SMTPSecure = "$mail_security";
$mail->Port = $mail_port;
$mail->setFrom('contact-form@kratos.com', 'Contact Form');

$mail->addAddress('jorge@tonico.mx');

$email = $_POST["mail"];
$comments = $_POST["message"];

$mail->Subject = "$email has sent you a message";
$mail->Body = "Mail: $email<br />Comentarios: $comments";
$mail->AltBody = "Mail: $email\nComentarios: $comments";

if(!$mail->send()) {
  header('Location: error.php?back=company');
} else {
  header('Location: success.php?back=company' );
}

?>
