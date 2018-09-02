<?php
if(isset($_POST['email'])) {
$nombre = $_POST['name'];
$apellido = $_POST['lastname']
$mail1 = $_POST['email'];
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
<console class="log"></console>
// require 'PHPMailerAutoload.php';
// include_once("class.phpmailer.php");
// include_once("class.smtp.php");

// $mail = new PHPMailer;

// $mail->SMTPDebug = 2;                               // Enable verbose debug output

// $mensaje = $email_message;
// $nombre = $_POST['name'];

// $mail->isSMTP();                                      // Set mailer to use SMTP
// $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
// $mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = 'thecatangel@gmail.com';                 // SMTP username
// $mail->Password = 'foxdie';                           // SMTP password
// $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 465;                                    // TCP port to connect to

// $mail->setFrom($mail1, 'Correo recibido desde mecanicars.cl');
// $mail->addAddress($email_to, $nombre);     

// $mail->Subject = $email_subject;
// $mail->Body    = $mensaje;

// if(!$mail->send()) {
//     echo 'Error, mensaje no enviado';
//     echo 'Error del mensaje: ' . $mail->ErrorInfo;
// } else {
//     echo 'El mensaje se ha enviado correctamente';
    
// }
?>