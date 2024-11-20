<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Servicios Emergencia</title>
    <link rel="icon" href="../Imagenes/Posible4.jpg" type="image/png">
</head>

<body>
    <!-- Encabezado con Navegación -->
    <header>
        <img class="logo" src="../Imagenes/Posible4.jpg" alt="Logo">
        <button id="abrir" class="abrir-menu"><i class="bi bi-list"></i></button>
        <nav class="nav" id="nav">
            <button class="cerrar-menu" id="cerrar"><i class="bi bi-x"></i></button>
            <ul class="nav-list">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#servicios">Acerca de los Servicios</a></li>
                <li><a href="#contacto">Contacto Directo</a></li>
                <li><a href="#faq">Preguntas y Respuestas</a></li>
                <li><a href="inicioSesion.php">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sección de Inicio -->
    <section id="inicio">
        <div class="hero">
            <h1>Servicios de Emergencia a tu Alcance</h1>
            <p>Rápidos, confiables y siempre disponibles para ti.</p>
            <button onclick="window.open('https://chat.whatsapp.com/Eeizl6ueOChCdRaIYiPVxQ', '_blank')">Llamar Ahora</button>
        </div>
    </section>

    <!-- Sección de Servicios -->
    <section id="servicios">
        <h2>Acerca de Nuestros Servicios</h2>
        <p>Ofrecemos una variedad de servicios de emergencia para el hogar, disponibles las 24 horas del día.</p>

        <!-- Servicios -->
        <div class="servicios-detalle">
            <div class="servicio">
                <h3><a href="Fontaneria.php">Fontanería </h3>
                <ul>
                    <li>Reparación de fugas de agua</li>
                    <li>Desatasco de tuberías</li>
                    <li>Instalación y mantenimiento de calentadores</li>
                    <li>Reparación de sanitarios</li>
                </ul>
            </div> </a>
            <div class="servicio">
                <h3><a href="Electricidad.php">Electricidad </h3>
                <ul>
                    <li>Reparación de cortocircuitos y fallos eléctricos</li>
                    <li>Instalación de nuevas tomas de corriente</li>
                    <li>Mantenimiento de instalaciones eléctricas</li>
                </ul>
            </div> </a>
            <div class="servicio">
                <h3><a href="Cerrajeria.php">Cerrajería</h3>
                <ul>
                    <li>Apertura de puertas bloqueadas</li>
                    <li>Cambio de cerraduras</li>
                    <li>Reparación de puertas dañadas</li>
                    <li>Instalación de sistemas de seguridad</li>
                </ul>
            </div> </a>
            <div class="servicio">
                <h3><a href="Vidrieria.php">Vidriería</h3>
                <ul>
                    <li>Reemplazo de vidrios rotos</li>
                    <li>Instalación de cristales de seguridad</li>
                    <li>Reparación de marcos de ventanas y puertas</li>
                    <li>Colocación de espejos y paneles de vidrio</li>
                </ul>
            </div> </a>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section id="contacto">
        <h2>Contacto Directo</h2>
        <form action="enviar_mensaje.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required pattern="[A-Za-záéíóúÁÉÍÓÚÑñ\s]+" title="Solo se permiten letras">

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required pattern="[0-9]+" title="Solo se permiten números">

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </section>

    <!-- Sección de Preguntas y Respuestas Frecuentes -->
    <section id="faq">
        <h2>Preguntas y Respuestas Frecuentes</h2>
        <details>
            <summary>¿Cuál es el tiempo de respuesta?</summary>
            <p>Nuestro tiempo de respuesta promedio es de 30 minutos a 1 hora, dependiendo de tu ubicación.</p>
        </details>
        <details>
            <summary>¿Cuáles son los horarios de servicio?</summary>
            <p>Estamos disponibles las 24 horas, todos los días del año.</p>
        </details>

        <!-- Nuevo formulario para enviar preguntas sugeridas -->
        <h3 class="pregunta-titulo">¿Tienes una pregunta que te gustaría que te solucionemos?</h3>
        <form action="" method="POST" class="form-pregunta">
            <label for="pregunta">Escribe tu pregunta:</label>
            <textarea id="pregunta" name="pregunta" rows="4" required class="input-pregunta"></textarea>
            <button type="submit" name="enviar_pregunta" class="submit-pregunta">Enviar Pregunta</button>
        </form>
    </section>

    <!-- Pie de Página -->
    <?php include 'footer.php'; ?>

    <!-- Script para el menú hamburguesa -->
    <script src="../js/MenuHamburguesa.js"></script>
</body>
</html>


<?php
// Procesar el formulario de contacto
if (isset($_POST['nombre']) && isset($_POST['telefono']) && isset($_POST['mensaje'])) {
    // Obtener y sanitizar los datos del formulario de contacto
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $telefono = htmlspecialchars(trim($_POST['telefono']));
    $mensaje = htmlspecialchars(trim($_POST['mensaje']));

    // Validación del nombre (solo letras)
    if (!preg_match("/^[A-Za-záéíóúÁÉÍÓÚÑñ\s]+$/", $nombre)) {
        die("Error: El nombre solo debe contener letras.");
    }

    // Validación del teléfono (solo números)
    if (!preg_match("/^[0-9]+$/", $telefono)) {
        die("Error: El teléfono solo debe contener números.");
    }

    // Formatear el mensaje a guardar
    $contenido = "Nombre: $nombre\nTeléfono: $telefono\nMensaje: $mensaje\n\n";

    // Guardar el mensaje en un archivo de texto
    $archivo = 'mensajes.txt'; // Nombre del archivo donde se guardarán los mensajes
    if (file_put_contents($archivo, $contenido, FILE_APPEND | LOCK_EX) !== false) {
        echo "Mensaje enviado correctamente y guardado en el archivo.";
    } else {
        echo "Error: No se pudo guardar el mensaje. Verifique los permisos del archivo.";
    }
}

// Procesar el formulario de preguntas sugeridas
if (isset($_POST['enviar_pregunta'])) {
    // Obtener y sanitizar la pregunta sugerida
    $pregunta = htmlspecialchars(trim($_POST['pregunta']));

    // Verificar que la pregunta no esté vacía
    if (!empty($pregunta)) {
        // Formatear la pregunta a guardar
        $contenido = "Pregunta sugerida: $pregunta\n\n";

        // Guardar la pregunta en un archivo de texto
        $archivo = 'preguntas_sugeridas.txt'; // Nombre del archivo donde se guardarán las preguntas
        if (file_put_contents($archivo, $contenido, FILE_APPEND | LOCK_EX) !== false) {
            // Llamada a la función de JavaScript para mostrar la notificación
            echo "<script>mostrarNotificacion('Pregunta enviada correctamente y guardada en el archivo.');</script>";
        } else {
            echo "<script>mostrarNotificacion('Error: No se pudo guardar la pregunta.');</script>";
        }
    } else {
        echo "<script>mostrarNotificacion('Error: La pregunta no puede estar vacía.');</script>";
    }
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>