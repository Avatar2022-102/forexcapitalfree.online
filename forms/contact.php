<?php
// Datos del formulario
$name    = $_POST['name'] ?? '';
$email   = $_POST['email'] ?? '';
$subject = $_POST['subject'] ?? 'Mensaje desde ForexCapitalFree';
$message = $_POST['message'] ?? '';

// Dirección de destino
$to = 'forexcapitalfree@gmail.com'; // tu correo real

// Cabeceras del correo
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Cuerpo del mensaje
$body = "Nombre: $name\n";
$body .= "Email: $email\n";
$body .= "Asunto: $subject\n\n";
$body .= "Mensaje:\n$message\n";

// Enviar el correo
if (mail($to, $subject, $body, $headers)) {
  echo "Mensaje enviado correctamente.";
} else {
  echo "Error al enviar el mensaje.";
}
?>
