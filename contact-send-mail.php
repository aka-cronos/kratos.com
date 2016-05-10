<?php

if (empty($_POST['name'])) {
  header('Location: contact.html');
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

$mail->addAddress('contact@kratos.com');

$subject = $_POST["subject"];
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$company = $_POST["company"];
$country = $_POST["country"];
$state = $_POST["state"];
$comments = $_POST["message"];

$mail->Subject = $subject;
$mail->Body = "Nombre: $name<br />Correo: $email<br />Telefono: $phone<br />" .
  "Empresa: $company<br/ >Pais: $country<br />Estado: $estado<br />Comentarios: $comments";
$mail->AltBody = "Nombre: $name\nCorreo: $email\nTelefono: $phone\n" .
  "Empresa: $company\nPais: $country\nEstado: $estado\nComentarios: $comments";

if(!$mail->send()) {
  header('Location: error.html?error=' . $mail->ErrorInfo );
} else {
  header('Location: success.php?back=contact' );
}

?>
