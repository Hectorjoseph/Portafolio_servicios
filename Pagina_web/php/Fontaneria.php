<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/Servicios_emergencias.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400&display=swap" rel="stylesheet">
  <title>Fontaneria Servicios Emergencia</title>
</head>

<body>

<header>
    <nav class="contenedor">
        <div class="logo">
            <img src="Imagenes/Logo.png" alt="Logo de Servicios de Emergencia">
        </div>

        <div class="enlaces">
            <a href="index.php">Inicio</a>
            <a href="#servicios">Acerca del Servicios</a>
            <a href="#expertos">Expertos</a>
        </div>

        <div class="hamburguesa">
            <img src="https://cdn-icons-png.flaticon.com/512/8777/8777583.png" alt="Menú" id="hamburguesa">
        </div>
    </nav>
</header>

<section id="inicio">
    <div class="hero">
        <h1>Fontaneria</h1>
    </div>
</section>

<section id="servicios">
    <h2>Acerca de Nuestros Servicios de Fontanería</h2>
    <p>
        Ofrecemos una amplia variedad de servicios de fontanería disponibles las 24 horas del día, adaptados a las necesidades de tu hogar o negocio.
    </p>
</section>

<section id="expertos" class="expertos">
    <div class="contenedor">
        <h2>Conoce a Nuestros Expertos</h2>
        
        <!-- Primer Experto -->
        <div class="experto">
            <img src="experto1.jpg" alt="Foto del Experto 1">
            <h3>Juan Pérez</h3>
            
            <!-- Formulario para la calificación -->
            <form method="POST" action="">
                <input type="hidden" name="expert" value="Juan Pérez">
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
                <p>Juan es un experto en reparación de fugas y mantenimiento de sistemas de plomería con más de 15 años de experiencia.</p>
                <p><strong>Horario de trabajo:</strong> Lunes a Viernes de 8:00 am a 6:00 pm</p>
            </form>
        </div>

        <!-- Segundo Experto -->
        <div class="experto">
            <img src="experto2.jpg" alt="Foto del Experto 2">
            <h3>María Gómez</h3>
            
            <form method="POST" action="">
                <input type="hidden" name="expert" value="María Gómez">
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
                <p>María es especialista en instalación de sistemas de fontanería para nuevas construcciones y reformas, con más de 10 años de experiencia trabajando en grandes proyectos residenciales.</p>
                <p><strong>Horario de trabajo:</strong> Martes a Sábado de 9:00 am a 5:00 pm</p>
            </form>
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
                <p>Carlos se especializa en la inspección de tuberías con cámaras y detección de problemas ocultos, brindando soluciones rápidas y efectivas para evitar daños mayores.</p>
                <p><strong>Horario de trabajo:</strong> Lunes, Miércoles y Viernes de 7:00 am a 3:00 pm</p>
            </form>
        </div>
    </div>
</section>

<footer>
    <p>&copy; 2024 Servicios de Emergencia. Todos los derechos reservados.</p>
</footer>

<script src="Menuhamburguesa.js"></script>
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

    // Abre el archivo ratings.txt y añade la calificación
    $file = fopen("ratings.txt", "a");
    fwrite($file, "Experto: $expert - Calificación: $rating\n");
    fclose($file);

    echo "Gracias por calificar a $expert con $rating estrellas.";
}
?>