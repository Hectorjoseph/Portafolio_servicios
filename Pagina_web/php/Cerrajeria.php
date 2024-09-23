<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/Servicios_emergencias.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400&display=swap" rel="stylesheet">
  <title> Cerrajería Servicios Emergencia </title>
</head>

<body>

<header>
    <nav class="contenedor">
        <div class="logo">
            <img src="Imagenes/Logo.png" alt="Logo de Servicios de Emergencia">
        </div>

        <div class="enlaces">
            <a href="index.php">Inicio</a>
            <a href="#servicios">Acerca del Servicio</a>
            <a href="#expertos">Expertos</a>
        </div>

        <div class="hamburguesa">
            <img src="https://cdn-icons-png.flaticon.com/512/8777/8777583.png" alt="Menú" id="hamburguesa">
        </div>
    </nav>
</header>

<section id="inicio">
    <div class="hero">
        <h1> Cerrajería </h1>
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
            
            <!-- Rating interactivo -->
            <div class="rating" data-expert="1">
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
            <p>Pedro es un experto en aperturas de puertas y sistemas de seguridad con más de 12 años de experiencia.</p>
            <p><strong>Horario de trabajo:</strong> Lunes a Viernes de 9:00 am a 6:00 pm</p>
        </div>

        <!-- Segundo Experto -->
        <div class="experto">
            <img src="experto2.jpg" alt="Foto del Experto 2">
            <h3>Lucía Fernández</h3>
            
            <!-- Rating interactivo -->
            <div class="rating" data-expert="1">
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

            <p>Lucía es especialista en instalación de cerraduras de alta seguridad y sistemas de control de acceso, con más de 8 años de experiencia.</p>
            <p><strong>Horario de trabajo:</strong> Martes a Sábado de 10:00 am a 7:00 pm</p>
        </div>

        <!-- Tercer Experto -->
        <div class="experto">
            <img src="experto3.jpg" alt="Foto del Experto 3">
            <h3>Andrés López</h3>

            <!-- Rating interactivo -->
            <div class="rating" data-expert="1">
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
            
            <p>Andrés es especialista en puertas de seguridad y sistemas de protección avanzada, con más de 10 años brindando soluciones de alta calidad.</p>
            <p><strong>Horario de trabajo:</strong> Lunes, Miércoles y Viernes de 8:00 am a 4:00 pm</p>
        </div>
    </div>
</section>

<footer>
    <p>&copy; 2024 Servicios de Emergencia. Todos los derechos reservados.</p>
    <div class="social-media">
        <a href="#"><img src="icono-facebook.png" alt="Facebook"></a>
        <a href="#"><img src="icono-twitter.png" alt="Twitter"></a>
        <a href="#"><img src="icono-instagram.png" alt="Instagram"></a>
    </div>
    <p>Teléfono: 123-456-7890 | Dirección: Calle Falsa 123, Ciudad</p>
</footer>

<script src="Menuhamburguesa.js"></script>
</body>
</html>
