<!DOCTYPE html>
<html lang="es">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fontanería Servicios Emergencia</title>
    <link rel="stylesheet" href="../css/ServiciosEmergencias.css">
</head>

<body>

    <!-- Encabezado -->
    <?php include 'header.php'; ?>

    <section id="inicio">
        <div class="hero">
            <h1>Fontanería</h1>
        </div>
    </section>

    <section id="servicios">
        <h2>Acerca de Nuestros Servicios de Fontanería</h2>
        <p> Ofrecemos una amplia variedad de servicios de fontanería disponibles las 24 horas del día, adaptados a las necesidades de tu hogar o negocio. Nuestros expertos están capacitados para brindar soluciones rápidas y efectivas, desde reparaciones de fugas de agua hasta la instalación de sistemas completos de fontanería. </p>
        <div class="servicios-disponibles">
            <h3>Servicios Disponibles:</h3>
            <ul>
                <li>Reparación de fugas de agua en tuberías, grifos y sanitarios.</li>
                <li>Desatasco de tuberías y desagües.</li>
                <li>Instalación y mantenimiento de calentadores de agua.</li>
                <li>Reparación y sustitución de sanitarios y otros accesorios.</li>
                <li>Instalación de nuevos sistemas de fontanería.</li>
                <li>Inspección de tuberías con cámaras para detección de problemas.</li>
                <li>Atención de emergencias de fontanería las 24 horas.</li>
            </ul>
        </div>
        <p> Nuestro equipo de fontaneros expertos está listo para ofrecerte la mejor atención, con garantía de calidad y profesionalismo. Contáctanos para conocer más sobre nuestros servicios y cómo podemos ayudarte. </p>
    </section>

    <section id="expertos" class="expertos">
        <div class="contenedor">
            <h2>Conoce a Nuestros Expertos</h2>

        <!-- Primer Experto -->
        <div class="experto">
            <img src="https://cdn-icons-png.flaticon.com/512/307/307924.png" alt="Foto del Experto 1">
            <h3>Juan Pérez</h3>
            
            <!-- Formulario para la calificación -->
            <form method="POST" action="">
                <input type="hidden" name="expert" value="Juan Pérez">
                
                <div class="rating">
                    <input type="radio" id="star5-juan" name="rating-juan" value="5">
                    <label for="star5-juan">★</label>
                    <input type="radio" id="star4-juan" name="rating-juan" value="4">
                    <label for="star4-juan">★</label>
                    <input type="radio" id="star3-juan" name="rating-juan" value="3">
                    <label for="star3-juan">★</label>
                    <input type="radio" id="star2-juan" name="rating-juan" value="2">
                    <label for="star2-juan">★</label>
                    <input type="radio" id="star1-juan" name="rating-juan" value="1">
                    <label for="star1-juan">★</label>
                </div>
                <input type="submit" value="Calificar">

                <!-- Servicios -->
                <div class="Servicios_experto">
                    <h4>Servicios disponibles:</h4>
                    <div class="servicio-item">
                        <input type="checkbox" name="servicios-juan" id="fuga" class="checkbox-custom" data-precio="50000">
                        <label for="fuga">Reparación de fugas</label>
                        <span class="precio">$50.000</span>
                    </div>
                    <div class="servicio-item">
                        <input type="checkbox" name="servicios-juan" id="instalacion" class="checkbox-custom" data-precio="200000">
                        <label for="instalacion">Instalación de tuberías</label>
                        <span class="precio">$200.000</span>
                    </div>
                    <div class="servicio-item">
                        <input type="checkbox" name="servicios-juan" id="desatasco" class="checkbox-custom" data-precio="80000">
                        <label for="desatasco">Desatasco de tuberías</label>
                        <span class="precio">$80.000</span>
                    </div>
                    <div class="servicio-item">
                        <input type="checkbox" name="servicios-juan" id="mantenimiento" class="checkbox-custom" data-precio="70000">
                        <label for="mantenimiento">Mantenimiento preventivo de tuberías</label>
                        <span class="precio">$70.000</span>
                    </div>
                    <div class="servicio-item">
                        <input type="checkbox" name="servicios-juan" id="reemplazo" class="checkbox-custom" data-precio="150000">
                        <label for="reemplazo">Reemplazo de tuberías</label>
                        <span class="precio">$150.000</span>
                    </div>
                </div>
                <div class="total-section">
                    <strong>Total Seleccionado (Juan Pérez): </strong>
                    <span id="total-juan">$0</span>
                </div>
                <p>Juan es un experto en reparación de fugas y mantenimiento de sistemas de plomería con más de 15 años de experiencia.</p>
                <p><strong>Horario de trabajo:</strong> Lunes a Viernes de 8:00 am a 6:00 pm</p>
                <button type="submit" class="submit-button">Contratar Servicios</button>
            </form>
        </div>

        <!-- Segundo Experto -->
        <div class="experto">
            <img src="https://cdn-icons-png.flaticon.com/512/307/307924.png" alt="Foto del Experto 2">
            <h3>María Gómez</h3>

            <form method="POST" action="">
                <input type="hidden" name="expert" value="María Gómez">
                
                <div class="rating">
                    <input type="radio" id="star5-maria" name="rating-maria" value="5">
                    <label for="star5-maria">★</label>
                    <input type="radio" id="star4-maria" name="rating-maria" value="4">
                    <label for="star4-maria">★</label>
                    <input type="radio" id="star3-maria" name="rating-maria" value="3">
                    <label for="star3-maria">★</label>
                    <input type="radio" id="star2-maria" name="rating-maria" value="2">
                    <label for="star2-maria">★</label>
                    <input type="radio" id="star1-maria" name="rating-maria" value="1">
                    <label for="star1-maria">★</label>
                </div>
                <input type="submit" value="Calificar">

                <!-- Servicios -->
                <div class="Servicios_experto">
                    <h4>Servicios disponibles:</h4>
                    <div class="servicio-item">
                        <input type="checkbox" name="servicios-maria" id="calentador" class="checkbox-custom" data-precio="300000">
                        <label for="calentador">Instalación de calentador de agua</label>
                        <span class="precio">$300.000</span>
                    </div>
                    <div class="servicio-item">
                        <input type="checkbox" name="servicios-maria" id="limpieza" class="checkbox-custom" data-precio="65000">
                        <label for="limpieza">Limpieza de tuberías</label>
                        <span class="precio">$65.000</span>
                    </div>
                    <div class="servicio-item">
                        <input type="checkbox" name="servicios-maria" id="mantenimiento" class="checkbox-custom" data-precio="150000">
                        <label for="mantenimiento">Mantenimiento de plomería</label>
                        <span class="precio">$150.000</span>
                    </div>
                    <div class="servicio-item">
                        <input type="checkbox" name="servicios-maria" id="bomba-instalacion" class="checkbox-custom" data-precio="250000">
                        <label for="bomba-instalacion">Instalación de bomba de agua</label>
                        <span class="precio">$250.000</span>
                    </div>
                    <div class="servicio-item">
                        <input type="checkbox" name="servicios-maria" id="bomba-reparacion" class="checkbox-custom" data-precio="130000">
                        <label for="bomba-reparacion">Reparación de bomba de agua</label>
                        <span class="precio">$130.000</span>
                    </div>
                </div>
                <div class="total-section">
                    <strong>Total Seleccionado (María Gómez): </strong>
                    <span id="total-maria">$0</span>
                </div>
                <p>María es especialista en instalación de sistemas de fontanería para nuevas construcciones y reformas, con más de 10 años de experiencia.</p>
                <p><strong>Horario de trabajo:</strong> Martes a Sábado de 9:00 am a 5:00 pm</p>
                <button type="submit" class="submit-button">Contratar Servicios</button>
            </form>
        </div>

        <!-- Tercer Experto -->
        <div class="experto">
            <img src="https://cdn-icons-png.flaticon.com/512/307/307924.png" alt="Foto del Experto 3">
            <h3>Carlos Ruiz</h3>

            <form method="POST" action="">
                <input type="hidden" name="expert" value="Carlos Ruiz">
                
                <div class="rating">
                    <input type="radio" id="star5-carlos" name="rating-carlos" value="5">
                    <label for="star5-carlos">★</label>
                    <input type="radio" id="star4-carlos" name="rating-carlos" value="4">
                    <label for="star4-carlos">★</label>
                    <input type="radio" id="star3-carlos" name="rating-carlos" value="3">
                    <label for="star3-carlos">★</label>
                    <input type="radio" id="star2-carlos" name="rating-carlos" value="2">
                    <label for="star2-carlos">★</label>
                    <input type="radio" id="star1-carlos" name="rating-carlos" value="1">
                    <label for="star1-carlos">★</label>
                </div>
                <input type="submit" value="Calificar">

                <!-- Servicios -->
                <div class="Servicios_experto">
                    <h4>Servicios disponibles:</h4>
                    <div class="servicio-item">
                        <input type="checkbox" name="servicios-carlos" id="evaluacion" class="checkbox-custom" data-precio="55000">
                        <label for="evaluacion">Evaluación de sistemas de fontanería</label>
                        <span class="precio">$55.000</span>
                    </div>
                    <div class="servicio-item">
                        <input type="checkbox" name="servicios-carlos" id="instalacion-agua" class="checkbox-custom" data-precio="240000">
                        <label for="instalacion-agua">Instalación de sistema de agua potable</label>
                        <span class="precio">$240.000</span>
                    </div>
                    <div class="servicio-item">
                        <input type="checkbox" name="servicios-carlos" id="mantenimiento-sanitario" class="checkbox-custom" data-precio="100000">
                        <label for="mantenimiento-sanitario">Mantenimiento de sistemas sanitarios</label>
                        <span class="precio">$100.000</span>
                    </div>
                    <div class="servicio-item">
                        <input type="checkbox" name="servicios-carlos" id="instalacion-cloracion" class="checkbox-custom" data-precio="260000">
                        <label for="instalacion-cloracion">Instalación de sistemas de cloración</label>
                        <span class="precio">$260.000</span>
                    </div>
                    <div class="servicio-item">
                        <input type="checkbox" name="servicios-carlos" id="mantenimiento-cloracion" class="checkbox-custom" data-precio="145000">
                        <label for="mantenimiento-cloracion">Mantenimiento de sistemas de cloración</label>
                        <span class="precio">$145.000</span>
                    </div>
                </div>
                <div class="total-section">
                    <strong>Total Seleccionado (Carlos Ruiz): </strong>
                    <span id="total-carlos">$0</span>
                </div>
                <p>Carlos es experto en sistemas de tratamiento y cloración de agua, con más de 12 años de experiencia en proyectos de infraestructura sanitaria.</p>
                <p><strong>Horario de trabajo:</strong> Lunes, Miércoles y Viernes de 7:00 am a 3:00 pm</p>
                <button type="submit" class="submit-button">Contratar Servicios</button>
            </form>
        </div>

        <!-- Total de Servicios Seleccionados (General) -->
        <div class="total-section">
            <strong>Total Seleccionado (Todos los expertos): </strong>
            <span id="total-general">$0</span>
        </div>
    </div>
</section>

    <?php include 'footer.php'; ?>

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expert = $_POST['expert'];
    $serviciosSeleccionados = $_POST['servicios'];
    $totalPagar = 0;

    // Calcular el total sumando los precios de los servicios seleccionados
    foreach ($serviciosSeleccionados as $servicio) {
        $totalPagar += floatval(str_replace('.', '', $servicio));
    }

    // Mostrar el total (esto también se puede guardar en un archivo o base de datos)
    echo "<p>Total a pagar por los servicios seleccionados: $" . number_format($totalPagar, 0, ',', '.') . "</p>";
}
?>