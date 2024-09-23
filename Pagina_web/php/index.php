<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/estilo.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400&display=swap" rel="stylesheet">
  <title>Servicios Emergencia</title>
</head>

<body>
    <!-- Encabezado con Navegación -->
    <header>
        <nav class="contenedor">
            <div class="logo">
                <img src="Imagenes/Logo.png" alt="Logo de Servicios de Emergencia">
            </div>

            <div class="enlaces">
                <a href="#inicio">Inicio</a>
                <a href="#servicios">Acerca de los Servicios</a>
                <a href="#contacto">Contacto Directo</a>
                <a href="#faq">Preguntas y Respuestas</a>
            </div>

            <div class="hamburguesa">
                <img src="https://cdn-icons-png.flaticon.com/512/8777/8777583.png" alt="Menú" id="hamburguesa">
            </div>
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
            <h3> <a href="Fontaneria.php"> Fontanería</h3>
              <ul>
                <li>Reparación de fugas de agua</li>
                <li>Desatasco de tuberías</li>
                <li>Instalación y mantenimiento de calentadores</li>
                <li>Reparación de sanitarios</li>
            </ul> </a>
          </div>
          <div class="servicio">
              <h3> <a href="Electricidad.php"> Electricidad</h3>
              <ul>
                  <li>Reparación de cortocircuitos y fallos eléctricos</li>
                  <li>Instalación de nuevas tomas de corriente</li>
                  <li>Mantenimiento de instalaciones eléctricas</li>
                  <li>Instalación de iluminación</li>
              </ul> </a>
          </div>
          <div class="servicio">
              <h3> <a href="Cerrajeria.php"> Cerrajería</h3>
              <ul>
                  <li>Apertura de puertas bloqueadas</li>
                  <li>Cambio de cerraduras</li>
                  <li>Reparación de puertas dañadas</li>
                  <li>Instalación de sistemas de seguridad</li>
              </ul> </a>
          </div>
          <div class="servicio">
              <h3> <a href="Vidrieria.php"> Vidriería</h3>
              <ul>
                  <li>Reemplazo de vidrios rotos</li>
                  <li>Instalación de cristales de seguridad</li>
                  <li>Reparación de marcos de ventanas y puertas</li>
                  <li>Colocación de espejos y paneles de vidrio</li>
              </ul> </a>
          </div>
      </div>
  </section>  

    <!-- Sección de Contacto -->
    <section id="contacto">
        <h2>Contacto Directo</h2>
        <form action="enviar_mensaje.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            
            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>

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
            <a href="#"><img src="icono-facebook.png" alt="Facebook"></a>
            <a href="#"><img src="icono-twitter.png" alt="Twitter"></a>
            <a href="#"><img src="icono-instagram.png" alt="Instagram"></a>
        </div>
        <p>Teléfono: 123-456-7890 | Dirección: Calle Falsa 123, Ciudad</p>
    </footer>

    <!-- Script para el menú hamburguesa -->
    <script src="Menuhamburguesa.js"></script>
</body>

</html>