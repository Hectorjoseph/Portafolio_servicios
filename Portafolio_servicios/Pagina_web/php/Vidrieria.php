<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ServiciosEmergencias.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title> Vidriería Servicios Emergencia </title>
</head>

<body>
    <header>
        <img class="logo" src="../Imagenes/Posible4.jpg" alt="Logo de Servicios Emergencia">
        <button id="abrir" class="abrir-menu"><i class="bi bi-list"></i></button>
        <nav class="nav" id="nav">
            <button class="cerrar-menu" id="cerrar"><i class="bi bi-x"></i></button>
            <ul class="nav-list">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="#servicios">Acerca de los Servicios</a></li>
                <li><a href="#expertos">Expertos</a></li>
            </ul>
        </nav>
    </header>

<section id="inicio">
    <div class="hero">
        <h1> Vidriería </h1>
    </div>
</section>

<section id="servicios">
    <h2>Acerca de Nuestros Servicios de Vidriería</h2>
    <p>
        Ofrecemos una amplia gama de servicios de vidriería disponibles las 24 horas, adaptados a las necesidades de tu hogar o negocio. Desde la instalación de nuevos ventanales hasta reparaciones de emergencia, estamos listos para ayudarte.
    </p>
    <div class="servicios-disponibles">
        <h3>Servicios Disponibles:</h3>
        <ul>
            <li>Instalación de ventanales y puertas de vidrio.</li>
            <li>Reparación de vidrios rotos o dañados.</li>
            <li>Vidrios templados y de seguridad para mayor protección.</li>
            <li>Espejos a medida para cualquier ambiente.</li>
            <li>Instalación de barandales de vidrio.</li>
            <li>Reemplazo de ventanas rotas o dañadas.</li>
            <li>Atención de emergencias de vidriería las 24 horas.</li>
        </ul>
    </div>
    <p>
        Nuestro equipo de vidrieros expertos está listo para ofrecerte atención de alta calidad, con garantía de seguridad y profesionalismo. Contáctanos para conocer más sobre nuestros servicios.
    </p>
</section>

<section id="expertos" class="expertos">
    <div class="contenedor">
        <h2>Conoce a Nuestros Expertos</h2>
        <!-- Primer Experto -->
        <div class="experto">
            <img src="experto1.jpg" alt="Foto del Experto 1">
            <h3>Andrés Martínez</h3>
            
            <form method="POST" action="">
                    <input type="hidden" name="expert" value="Andrés Martínez">
                    <div class="rating">
                        <input type="radio" id="star5-1" name="rating1" value="5">
                        <label for="star5-1">★</label>
                        <input type="radio" id="star4-1" name="rating1" value="4">
                        <label for="star4-1">★</label>
                        <input type="radio" id="star3-1" name="rating1" value="3">
                        <label for="star3-1">★</label>
                        <input type="radio" id="star2-1" name="rating1" value="2">
                        <label for="star2-1">★</label>
                        <input type="radio" id="star1-1" name="rating1" value="1">
                        <label for="star1-1">★</label>
                    </div>
                    <input type="submit" value="Calificar">
                </form>
                <p>Andrés es experto en la instalación de vidrios templados y de seguridad, con más de 15 años de experiencia.</p>
            <p><strong>Horario de trabajo:</strong> Lunes a Viernes de 8:00 am a 6:00 pm</p>
        </div>

        <!-- Segundo Experto -->
        <div class="experto">
            <img src="experto2.jpg" alt="Foto del Experto 2">
            <h3>Lucía Fernández</h3>
            
            <form method="POST" action="">
                    <input type="hidden" name="expert" value="Lucía Fernández">
                    <div class="rating">
                        <input type="radio" id="star5-2" name="rating2" value="5">
                        <label for="star5-2">★</label>
                        <input type="radio" id="star4-2" name="rating2" value="4">
                        <label for="star4-2">★</label>
                        <input type="radio" id="star3-2" name="rating2" value="3">
                        <label for="star3-2">★</label>
                        <input type="radio" id="star2-2" name="rating2" value="2">
                        <label for="star2-2">★</label>
                        <input type="radio" id="star1-2" name="rating2" value="1">
                        <label for="star1-2">★</label>
                    </div>
                    <input type="submit" value="Calificar">
                </form>
            <p>Lucía es especialista en la reparación de vidrios rotos y espejos a medida, con más de 10 años de experiencia en proyectos comerciales.</p>
            <p><strong>Horario de trabajo:</strong> Martes a Sábado de 9:00 am a 5:00 pm</p>
        </div>

        <!-- Tercer Experto -->
        <div class="experto">
            <img src="experto3.jpg" alt="Foto del Experto 3">
            <h3>Carlos Ruiz</h3>

            <form method="POST" action="">
                    <input type="hidden" name="expert" value="Carlos Ruiz">
                    <div class="rating">
                        <input type="radio" id="star5-3" name="rating3" value="5">
                        <label for="star5-3">★</label>
                        <input type="radio" id="star4-3" name="rating3" value="4">
                        <label for="star4-3">★</label>
                        <input type="radio" id="star3-3" name="rating3" value="3">
                        <label for="star3-3">★</label>
                        <input type="radio" id="star2-3" name="rating3" value="2">
                        <label for="star2-3">★</label>
                        <input type="radio" id="star1-3" name="rating3" value="1">
                        <label for="star1-3">★</label>
                    </div>
                    <input type="submit" value="Calificar">
                </form>
            <p>Carlos está especializado en la instalación de barandales de vidrio y reemplazo de ventanas, brindando soluciones modernas y seguras para el hogar.</p>
            <p><strong>Horario de trabajo:</strong> Lunes, Miércoles y Viernes de 7:00 am a 3:00 pm</p>
        </div>
    </div>
</section>


<footer>
        <p>&copy; 2024 Servicios de Emergencia. Todos los derechos reservados.</p>
        <div class="social-media">
            <a href="https://www.facebook.com/"><img src="../Imagenes/facebook.png" alt="Facebook" class="social-icon" style="width: 70px; height: 70px;"></a>
            <a href="https://x.com/"><img src="../Imagenes/X.png" alt="Twitter" class="social-icon" style="width: 70px; height: 70px;"></a>
            <a href="https://www.instagram.com/"><img src="../Imagenes/instagram.png" alt="Instagram" class="social-icon" style="width: 70px; height: 70px;"></a>
        </div>
        <p>Teléfono: 123-456-7890 | Dirección: Calle Falsa 123, Ciudad</p>
    </footer>

    <script src="../js/MenuHamburguesa.js"></script>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expert = $_POST['expert'];

    // Dependiendo del experto, recuperamos el rating adecuado
    if (isset($_POST['rating1'])) {
        $rating = $_POST['rating1'];
    } elseif (isset($_POST['rating2'])) {
        $rating = $_POST['rating2'];
    } elseif (isset($_POST['rating3'])) {
        $rating = $_POST['rating3'];
    } else {
        $rating = "No calificado";
    }

    // Abre el archivo ratings.txt y escribe el rating
    $file = fopen("ratings.txt", "a");
    fwrite($file, "Experto: $expert, Calificación: $rating\n");
    fclose($file);
}
?>
