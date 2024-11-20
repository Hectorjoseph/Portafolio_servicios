<?php 
$page_title = "Electricista Servicios Emergencia"; 
include 'header.php'; 
?>

<body>

    <section id="inicio">
        <div class="hero">
            <h1>Electricidad</h1>
        </div>
    </section>

    <section id="servicios">
        <h2>Acerca de Nuestros Servicios Eléctricos</h2>
        <p>Ofrecemos una variedad de servicios eléctricos disponibles las 24 horas del día, diseñados para solucionar cualquier emergencia eléctrica en tu hogar o negocio. Nuestros técnicos están capacitados para resolver problemas de instalaciones eléctricas, cortocircuitos y mantenimiento general.</p>
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
        <p>Nuestro equipo de electricistas certificados está disponible para ofrecer soluciones rápidas y eficientes, garantizando tu seguridad y satisfacción. Contáctanos para más información sobre cómo podemos ayudarte con tus necesidades eléctricas.</p>
    </section>

    <section id="expertos" class="expertos">
        <div class="contenedor">
            <h2>Conoce a Nuestros Expertos</h2>

            <!-- Primer Experto -->
            <div class="experto">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRe1kr5vAJDxw2qb_fV_aAsyPYmNR7h6_rDQ&s" alt="Foto del Experto Roberto Sánchez">
                <h3>Roberto Sánchez</h3>

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
                            <option value="cortocircuito">Reparación de cortocircuitos - $100.000</option>
                            <option value="instalacion-cableado">Instalación de cableado eléctrico - $250.000</option> 
                            <option value="revision-general">Revisión general del sistema eléctrico - $80.000</option>
                            <option value="mantenimiento-electrico">Mantenimiento preventivo eléctrico - $120.000</option>
                            <option value="reemplazo-toma">Reemplazo de tomas de corriente - $60.000</option>
                        </select>
                        <p>Roberto es un técnico especializado en instalaciones eléctricas residenciales y comerciales, con más de 12 años de experiencia en el sector.</p>
                        <p><strong>Horario de trabajo:</strong> Lunes a Viernes de 8:00 am a 5:00 pm</p>
                    </div>
                </form>
            </div>

            <!-- Segundo Experto -->
            <div class="experto">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRe1kr5vAJDxw2qb_fV_aAsyPYmNR7h6_rDQ&s" alt="Foto del Experto Ana Martínez">
                <h3>Ana Martínez</h3>

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
                            <option value="instalacion-panel">Instalación de paneles eléctricos - $300.000</option>
                            <option value="reparacion-luces">Reparación de luces o lámparas - $70.000</option>
                            <option value="instalacion-focos">Instalación de focos - $50.000</option>
                            <option value="instalacion-tablero">Instalación de tableros eléctricos - $400.000</option>
                            <option value="reparacion-tablero">Reparación de tableros eléctricos - $180.000</option>
                        </select>
                        <p>Ana es especialista en energía renovable, con un enfoque en la instalación de paneles solares y sistemas de automatización, con más de 8 años de experiencia en el campo.</p>
                        <p><strong>Horario de trabajo:</strong> Martes a Sábado de 9:00 am a 6:00 pm</p>
                    </div>
                </form>
            </div>

            <!-- Tercer Experto -->
            <div class="experto">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRe1kr5vAJDxw2qb_fV_aAsyPYmNR7h6_rDQ&s" alt="Foto del Experto José García">
                <h3>José García</h3>
                
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
                            <option value="instalacion-tierra">Instalación de sistema de tierra física - $220.000</option>
                            <option value="instalacion-interruptor">Instalación de interruptores de luz - $60.000</option>
                            <option value="reparacion-tendido">Reparación de tendido eléctrico - $150.000</option>
                            <option value="instalacion-sensor">Instalación de sensores de movimiento - $90.000</option>
                            <option value="instalacion-alarma">Instalación de alarmas eléctricas - $200.000</option>
                        </select>
                        <p>José se especializa en la detección de fallos eléctricos mediante equipos de diagnóstico avanzado, ayudando a prevenir daños en sistemas críticos.</p>
                        <p><strong>Horario de trabajo:</strong> Lunes, Miércoles y Viernes de 7:00 am a 4:00 pm</p>
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

