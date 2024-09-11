<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $comentarios = $_POST['comentarios'];
    
    // Correo del destinatario (correo registrado)
    $correo_destinatario = "60643516@istelaredo.edu.pe";
    
    // Asunto del correo
    $asunto = "Nuevo mensaje de contacto";
    
    // Cuerpo del correo
    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Email: $email\n";
    $mensaje .= "Comentarios:\n$comentarios\n";
    
    // Encabezados del correo
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Enviar correo
    if (mail($correo_destinatario, $mensaje, $headers)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Error al enviar el mensaje.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
