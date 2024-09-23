<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/Servicios_emergencias.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400&display=swap" rel="stylesheet">
  <title>Electricidad Servicios Emergencia</title>
</head>

<body>

<header>
    <nav class="contenedor">
        <div class="logo">
            <img src="Imagenes/Logo.png" alt="Logo de Servicios de Electricidad">
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
        <h1>Electricidad</h1>
    </div>
</section>

<section id="servicios">
    <h2>Acerca de Nuestros Servicios Eléctricos</h2>
    <p>
        Ofrecemos una variedad de servicios eléctricos disponibles las 24 horas del día, diseñados para solucionar cualquier emergencia eléctrica en tu hogar o negocio. Nuestros técnicos están capacitados para resolver problemas de instalaciones eléctricas, cortocircuitos y mantenimiento general.
    </p>
    <div class="servicios-disponibles">
        <h3>Servicios Disponibles:</h3>
        <ul>
            <li>Reparación de cortocircuitos y sobrecargas eléctricas.</li>
            <li>Instalación de sistemas eléctricos para viviendas y empresas.</li>
            <li>Reemplazo de cableado defectuoso.</li>
            <li>Instalación de sistemas de iluminación y automatización.</li>
            <li>Instalación de paneles solares y sistemas de energía renovable.</li>
            <li>Revisión y mantenimiento preventivo de instalaciones eléctricas.</li>
            <li>Servicio de emergencia eléctrica las 24 horas.</li>
        </ul>
    </div>
    <p>
        Nuestro equipo de electricistas certificados está disponible para ofrecer soluciones rápidas y eficientes, garantizando tu seguridad y satisfacción. Contáctanos para más información sobre cómo podemos ayudarte con tus necesidades eléctricas.
    </p>
</section>

<section id="expertos" class="expertos">
    <div class="contenedor">
        <h2>Conoce a Nuestros Expertos</h2>
        <!-- Primer Experto -->
        <div class="experto">
            <img src="experto1.jpg" alt="Foto del Experto 1">
            <h3>Roberto Sánchez</h3>
            
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
            <p>Roberto es un técnico especializado en instalaciones eléctricas residenciales y comerciales, con más de 12 años de experiencia en el sector.</p>
            <p><strong>Horario de trabajo:</strong> Lunes a Viernes de 8:00 am a 5:00 pm</p>
        </div>

        <!-- Segundo Experto -->
        <div class="experto">
            <img src="experto2.jpg" alt="Foto del Experto 2">
            <h3>Ana Martínez</h3>
            
            <!-- Rating interactivo -->
            <div class="rating" data-expert="2">
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

            <p>Ana es especialista en energía renovable, con un enfoque en la instalación de paneles solares y sistemas de automatización, con más de 8 años de experiencia en el campo.</p>
            <p><strong>Horario de trabajo:</strong> Martes a Sábado de 9:00 am a 6:00 pm</p>
        </div>

        <!-- Tercer Experto -->
        <div class="experto">
            <img src="experto3.jpg" alt="Foto del Experto 3">
            <h3>José García</h3>

            <!-- Rating interactivo -->
            <div class="rating" data-expert="3">
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
            
            <p>José se especializa en la detección de fallos eléctricos mediante equipos de diagnóstico avanzado, ayudando a prevenir daños en sistemas críticos.</p>
            <p><strong>Horario de trabajo:</strong> Lunes, Miércoles y Viernes de 7:00 am a 4:00 pm</p>
        </div>
    </div>
</section>

<footer>
    <p>&copy; 2024 Servicios Eléctricos. Todos los derechos reservados.</p>
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
