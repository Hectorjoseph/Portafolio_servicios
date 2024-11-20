<?php 
$page_title = "Vidriería Servicios Emergencia"; 
include 'header.php'; 
?>

<body>
    
    <section id="inicio">
        <div class="hero">
            <h1> Vidriería </h1>
        </div>
    </section>
    
    <section id="servicios">
        <h2>Acerca de Nuestros Servicios de Vidriería</h2>
        <p> Ofrecemos una amplia gama de servicios de vidriería disponibles las 24 horas, adaptados a las necesidades de tu hogar o negocio. Desde la instalación de nuevos ventanales hasta reparaciones de emergencia, estamos listos para ayudarte. </p>
        
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
        <p> Nuestro equipo de vidrieros expertos está listo para ofrecerte atención de alta calidad, con garantía de seguridad y profesionalismo. Contáctanos para conocer más sobre nuestros servicios. </p>
    </section>

    <section id="expertos" class="expertos">
        <div class="contenedor">
            <h2>Conoce a Nuestros Expertos</h2>

            <!-- Primer Experto -->
            <div class="experto">
                <img src="https://us.123rf.com/450wm/wahidmart/wahidmart2409/wahidmart240912598/234974817-illustration-of-painting-activity.jpg?ver=6" alt="Foto del Experto 1">
                <h3>Andrés Martínez</h3>
            
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
                    <div class="Servicios_experto">
                        <label for="servicio1">Selecciona el servicio:</label>
                        <select name="servicio" id="servicio1">
                            <option value="instalacion_vidrio_doble">Instalación de vidrio doble - $220.000</option>
                            <option value="reparacion_vidrio_puerta">Reparación de vidrios de puertas - $50.000</option>
                            <option value="desmontaje_vidrio">Desmontaje de vidrio existente - $30.000</option>
                            <option value="tratamiento_vidrio">Tratamiento de protección para vidrios - $45.000</option>
                            <option value="reparacion_vidrio_fijo">Reparación de vidrios fijos - $70.000</option>
                        </select>
                        <p>Andrés es experto en la instalación de vidrios templados y de seguridad, con más de 15 años de experiencia.</p>
                        <p><strong>Horario de trabajo:</strong> Lunes a Viernes de 8:00 am a 6:00 pm</p>
                    </div>
                </form>
            </div>

            <!-- Segundo Experto -->
            <div class="experto">
                <img src="https://us.123rf.com/450wm/wahidmart/wahidmart2409/wahidmart240912598/234974817-illustration-of-painting-activity.jpg?ver=6" alt="Foto del Experto 2">
                <h3>Lucía Fernández</h3>
            
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

                    <div class="Servicios_experto">
                        <label for="servicio1">Selecciona el servicio:</label>
                        <select name="servicio" id="servicio1">
                            <option value="reparacion_vidrio">Reparación de vidrios rotos - $30.000</option>
                            <option value="instalacion_vidrio">Instalación de vidrio nuevo - $120.000</option>
                            <option value="corte_vidrio">Corte de vidrio a medida - $40.000</option>
                            <option value="sellado_vidrio">Sellado de vidrios - $25.000</option>
                            <option value="reemplazo_vidrio">Reemplazo de vidrio templado - $180.000</option>
                        </select>
                        <p>Lucía es especialista en la reparación de vidrios rotos y espejos a medida, con más de 10 años de experiencia en proyectos comerciales.</p>
                        <p><strong>Horario de trabajo:</strong> Martes a Sábado de 9:00 am a 5:00 pm</p>
                    </div>
                </form>
            </div>

            <!-- Tercer Experto -->
            <div class="experto">
                <img src="https://us.123rf.com/450wm/wahidmart/wahidmart2409/wahidmart240912598/234974817-illustration-of-painting-activity.jpg?ver=6" alt="Foto del Experto 3">
                <h3>Carlos Ruiz</h3>

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

                    <div class="Servicios_experto">
                        <label for="servicio1">Selecciona el servicio:</label>
                        <select name="servicio" id="servicio1">
                            <option value="reparacion_vidrio">Reparación de vidrios rotos - $30.000</option>
                            <option value="instalacion_vidrio">Instalación de vidrio nuevo - $120.000</option>
                            <option value="corte_vidrio">Corte de vidrio a medida - $40.000</option>
                            <option value="sellado_vidrio">Sellado de vidrios - $25.000</option>
                            <option value="reemplazo_vidrio">Reemplazo de vidrio templado - $180.000</option>
                        </select>
                        <p>Carlos está especializado en la instalación de barandales de vidrio y reemplazo de ventanas, brindando soluciones modernas y seguras para el hogar.</p>
                        <p><strong>Horario de trabajo:</strong> Lunes, Miércoles y Viernes de 7:00 am a 3:00 pm</p>
                    </div>
                </form>
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

    if (isset($_POST['rating1'])) {
        $rating = $_POST['rating1'];
    } elseif (isset($_POST['rating2'])) {
        $rating = $_POST['rating2'];
    } elseif (isset($_POST['rating3'])) {
        $rating = $_POST['rating3'];
    } else {
        $rating = "No calificado";
    }

    $file = fopen("ratings.txt", "a");
    fwrite($file, "Experto: $expert, Calificación: $rating\n");
    fclose($file);
}
?>
