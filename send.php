<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = strip_tags($_POST['Nombre']);
    $correo = strip_tags($_POST['Correo']);
    $mensaje = strip_tags($_POST['Mensaje']);

    $destinatario = "1026257381@gmail.com";
    $asunto = "Nuevo mensaje desde tu portafolio (Contacto)";
    
    $cuerpo = "Has recibido un mensaje desde tu formulario:\n\n".
              "Nombre: $nombre\n".
              "Correo: $correo\n".
              "Mensaje:\n$mensaje\n";

    $headers = "From: $correo\r\n";
    $headers .= "Reply-To: $correo\r\n";

    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        echo "<script>alert('Mensaje enviado correctamente. ¡Gracias por contactarme!'); window.location='contacto.html';</script>";
    } else {
        echo "<script>alert('Hubo un error al enviar el mensaje.'); window.location='contacto.html';</script>";
    }
}
?>
