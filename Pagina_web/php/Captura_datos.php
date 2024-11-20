<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar los datos enviados desde el formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Aquí puedes procesar los datos, como guardarlos en una base de datos o enviarlos por correo
    echo "<h2>Mensaje Enviado</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Teléfono:</strong> $telefono</p>";
    echo "<p><strong>Mensaje:</strong> $mensaje</p>";
    
    // Redirigir a una página de confirmación o mostrar un mensaje de éxito
    // header("Location: gracias.php");
} else {
    // Redirigir a la página principal si se accede directamente al archivo
    header("Location: index.php");
    exit();
}
?>
