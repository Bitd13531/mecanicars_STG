<?php
if (isset($_POST["g-recaptcha-response"])){
    
    $secret = "6LdupW0UAAAAAN0F90SdJDRpFpRQXa8ZDxz6TWFl";
    $response = $_POST["g-recaptcha-response"];
    $ip = $_SERVER["REMOTE_ADDR"];
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $return = file_get_contents($url."?secret=".$secret."&response=".$response."&remoteip=".$ip);
    $jsonResponse = json_decode($return);
        if($jsonResponse->success){
            //Enviar correo ------------------------------------------------
            //-------------------------------------------------------------
            
            if(isset($_POST['email'])) {
                $nombre = $_POST['name'];
                $apellido = $_POST['lastname'];
                $mail = $_POST['email'];
                $telefono = $_POST['telefono'];
                $mensaje = $_POST['message'];
                // Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
                $email_to = "atencion@mecanicars.cl";
                $email_subject = "Tienes un mensaje desde el sitio Web Mecanicars - Datos de contacto";
                // Aquí se deberían validar los datos ingresados por el usuario
                if(!isset($_POST['name']) ||
                !isset($_POST['lastname']) ||
                !isset($_POST['email']) ||
                !isset($_POST['telefono']) ||
                !isset($_POST['message'])) {
                echo $_POST['email'];
                echo "<b>Ocurrió un error inesperado y el formulario no ha sido enviado. </b><br />";
                echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
                die();
                }
                $email_message = "Hola, has recibido un nuevo mensaje del Sitio Web Mudanzas Ladino\n\n";
                $email_message = "Detalles de Contacto del Cliente Interesado:\n\n";
                $email_message .= "Nombre: " . $_POST['name'] . "\n";
                $email_message .= "Apellido: " . $_POST['lastname'] . "\n";
                $email_message .= "Correo: " . $_POST['email'] . "\n";
                $email_message .= "Telefono: " . $_POST['telefono'] . "\n";
                $email_message .= "Mensaje: " . $_POST['message'] . "\n\n";
                $email_message .= "Enviado el " . date ('d/m/Y', time ());
                // Ahora se envía el e-mail usando la función mail() de PHP
                $headers = 'From: '.$mail."\r\n".
                'Reply-To: '.$mail."\r\n" .
                'X-Mailer: PHP/' . phpversion();
                if(@mail($email_to, $email_subject, $email_message, $headers));
                echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente');</script>";
                echo "<script type='text/javascript'>window.location.href='index.html';</script>";
                }
        } else{
            echo 'Debe rellenar la informacion del captcha';
            echo "<SCRIPT>window.location='index.html';</SCRIPT>"; 
        }
        
}

?>