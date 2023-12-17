<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopilar datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $fecha = $_POST["fecha"];
    $personas = $_POST["personas"];

    // Correo de destino (cambia esto con tu dirección de correo)
    $destinatario = "jhovakuyoc@gmail.com";

    // Asunto del correo
    $asunto = "Nueva Reserva desde el Sitio Web";

    // Mensaje del correo
    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Email: $email\n";
    $mensaje .= "Teléfono: $telefono\n";
    $mensaje .= "Fecha de Reserva: $fecha\n";
    $mensaje .= "Número de Personas: $personas\n";

    // Encabezados del correo
    $encabezados = "From: $email";

    // Enviar el correo
    mail($destinatario, $asunto, $mensaje, $encabezados);
}
?>
