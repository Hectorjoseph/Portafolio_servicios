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
            </ul>
        </nav>
    </header>

    <!-- Sección de Inicio -->
    <section id="inicio">
        <div class="hero">
            <h1>Servicios de Emergencia a tu Alcance</h1>
            <p>Rápidos, confiables y siempre disponibles para ti.</p>
            <button>Llamar Ahora</button>
        </div>
    </section>

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
                    <li>Instalación de iluminación</li>
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
        <!-- Agrega más preguntas y respuestas según sea necesario -->
    </section>

    <!-- Pie de Página -->
    <footer>
        <p>&copy; 2024 Servicios de Emergencia. Todos los derechos reservados.</p>
        <div class="social-media">
            <a href="https://www.facebook.com/"><img src="../Imagenes/facebook.png" alt="Facebook" class="social-icon" style="width: 70px; height: 70px;"></a>
            <a href="https://x.com/"><img src="../Imagenes/X.png" alt="Twitter" class="social-icon" style="width: 70px; height: 70px;"></a>
            <a href="https://www.instagram.com/"><img src="../Imagenes/instagram.png" alt="Instagram" class="social-icon" style="width: 70px; height: 70px;"></a>
        </div>
        <p>Teléfono: 123-456-7890 | Dirección: Calle Falsa 123, Ciudad</p>
    </footer>

    <!-- Script para el menú hamburguesa -->
    <script src="../js/MenuHamburguesa.js"></script>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener y sanitizar los datos del formulario
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
?>
