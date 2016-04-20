<?php

if (empty($_POST['name'])) {
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

$mail->addAddress('company@kratos.com');

// $mail->addAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);

$name = $_POST["name"];
$comments = $_POST["message"];

$mail->Subject = "$name has sent you a message";
$mail->Body = "Nombre: $name<br />Comentarios: $comments";
$mail->AltBody = "Nombre: $name\nComentarios: $comments";

if(!$mail->send()) {
  header('Location: careers.html?error=' . $mail->ErrorInfo );
} else {
  header('Location: success.php?back=company' );
}

?>
