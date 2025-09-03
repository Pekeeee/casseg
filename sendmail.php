<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "cassegingenieria@gmail.com"; // tu correo
    $headers = "From: $email\r\n";
    $body = "Nombre: $name\nCorreo: $email\nAsunto: $subject\n\nMensaje:\n$message";

    if(mail($to, $subject, $body, $headers)){
        echo "✅ Mensaje enviado con éxito.";
    } else {
        echo "❌ Hubo un error al enviar.";
    }
}
?>
