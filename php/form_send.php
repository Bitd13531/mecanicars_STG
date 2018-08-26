<?php
if(isset($_POST['email'])) {
$nombre = $_POST['name'];
$apellido = $_POST['lastname']
$mail = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['message'];

$email_to = "atencion@mecanicars.cl";
$email_subject = "Tienes un mensaje desde el sitio Web www.mecanicars.cl - Datos de formulario de contacto";

if(!isset($_POST['name']) ||
!isset($_POST['lastname']) ||
!isset($_POST['email']) ||
!isset($_POST['telefono']) ||
!isset($_POST['message'])) {
echo "<b>Ocurrió un error inesperado y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}
$email_message = "Hola, has recibido un nuevo mensaje del Sitio Web mecanicars.cl\n\n";
$email_message = "Detalles de Contacto del Cliente Interesado:\n\n";
$email_message .= "Nombre: " . $_POST['name'] . "\n";
$email_message .= "Apellido: " . $_POST['lastname'] . "\n";
$email_message .= "Correo: " . $_POST['email'] . "\n";
$email_message .= "Telefono: " . $_POST['telefono'] . "\n";
$email_message .= "Mensaje: " . $_POST['message'] . "\n\n";
$email_message .= "Enviado el " . date ('d/m/Y', time ());

$headers = 'From: '.$mail."\r\n".
'Reply-To: '.$mail."\r\n" .
'X-Mailer: PHP/' . phpversion();
if(@mail($email_to, $email_subject, $email_message, $headers));
echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente');</script>";
echo "<script type='text/javascript'>window.location.href='index.html';</script>";
}
?>