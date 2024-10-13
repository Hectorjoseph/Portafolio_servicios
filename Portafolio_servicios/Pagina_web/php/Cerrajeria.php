<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ServiciosEmergencias.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Cerrajería Servicios Emergencia</title>
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
            <h1>Cerrajería</h1>
        </div>
    </section>

    <section id="servicios">
        <h2>Acerca de Nuestros Servicios de Cerrajería</h2>
        <p>
            Ofrecemos una amplia gama de servicios de cerrajería disponibles las 24 horas, adaptados a tus necesidades de seguridad. Nuestros expertos están capacitados para brindar soluciones rápidas y efectivas, desde aperturas de emergencia hasta la instalación de sistemas de seguridad avanzados.
        </p>
        <div class="servicios-disponibles">
            <h3>Servicios Disponibles:</h3>
            <ul>
                <li>Apertura de puertas por pérdida de llaves.</li>
                <li>Reparación y cambio de cerraduras dañadas.</li>
                <li>Instalación de cerraduras de alta seguridad.</li>
                <li>Sistemas de control de acceso para hogares y negocios.</li>
                <li>Duplicado de llaves y creación de llaves maestras.</li>
                <li>Instalación de puertas de seguridad y rejas.</li>
                <li>Atención de emergencias las 24 horas del día.</li>
            </ul>
        </div>
        <p>
            Nuestro equipo de cerrajeros certificados está siempre listo para ayudarte con soluciones seguras y eficientes. Contáctanos para conocer más sobre cómo mejorar la seguridad de tu hogar o negocio.
        </p>
    </section>

    <section id="expertos" class="expertos">
        <div class="contenedor">
            <h2>Conoce a Nuestros Expertos</h2>

            <!-- Primer Experto -->
            <div class="experto">
                <img src="experto1.jpg" alt="Foto del Experto 1">
                <h3>Pedro García</h3>

                <form method="POST" action="">
                    <input type="hidden" name="expert" value="Pedro García">
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
                <p>Pedro es un experto en aperturas de puertas y sistemas de seguridad con más de 12 años de experiencia.</p>
                <p><strong>Horario de trabajo:</strong> Lunes a Viernes de 9:00 am a 6:00 pm</p>
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
                <p>Lucía es especialista en instalación de cerraduras de alta seguridad y sistemas de control de acceso, con más de 8 años de experiencia.</p>
                <p><strong>Horario de trabajo:</strong> Martes a Sábado de 10:00 am a 7:00 pm</p>
            </div>

            <!-- Tercer Experto -->
            <div class="experto">
                <img src="experto3.jpg" alt="Foto del Experto 3">
                <h3>Andrés López</h3>
                
                <form method="POST" action="">
                    <input type="hidden" name="expert" value="Andrés López">
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
                <p>Andrés es especialista en puertas de seguridad y sistemas de protección avanzada, con más de 10 años brindando soluciones de alta calidad.</p>
                <p><strong>Horario de trabajo:</strong> Lunes, Miércoles y Viernes de 8:00 am a 4:00 pm</p>
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
