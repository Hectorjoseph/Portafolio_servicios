<?php 
$page_title = "Cerrajería Servicios Emergencia"; 
include 'header.php'; 
?>

<body>
    
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
                <img src="data:image/png;base64,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" alt="Foto del Experto 1">
                <h3>Pedro García</h3>

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
                            <option value="cambio_cerradura">Cambio de cerradura - $50.000</option>
                            <option value="instalacion_cerradura">Instalación de cerradura nueva - $70.000</option>
                            <option value="apertura_puerta">Apertura de puerta sin llave - $40.000</option>
                            <option value="reparacion_cerradura">Reparación de cerradura - $30.000</option>
                            <option value="copia_llave">Copia de llave - $5.000</option>
                        </select>
                        <p>Pedro es un experto en aperturas de puertas y sistemas de seguridad con más de 12 años de experiencia.</p>
                        <p><strong>Horario de trabajo:</strong> Lunes a Viernes de 9:00 am a 6:00 pm</p>
                    </div>
                </form>
            </div>

            <!-- Segundo Experto -->
            <div class="experto">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAABd1BMVEX///8AAAD/8IpT2Pb/2astk/T/xHL/tYBW3/7/946Phk2BgYFzc3MskfQoZ3ZV2/ahmFcMCwf/4bEhV2PS0tI7rfX29vZIPTAueYr/yHQXO0MCBgoqieNNyeVDrsf/9Y2vh05MSCoPKC4WFhb/u4RhYWFPT089PT1NzfYuJx8VRnV6Vz7t34AWEAthRTEiIiLvqXjm+P3/4oKcnJz/06T/9KmwsLDh4eGpeFVFNB/g03lmZmZz3vd8fHy/v7+RkZGhfEi2trY7Kh7J3NDttmorKyuPbkDLy8tBtvVCQkKf5/kbRlAdXZsJFxqwlnbryJ7j1nvEuGofHRF1bj8ZUogohNsOL04hbbU4pvUtKhgmY3EfUVxfUUCVakvJj2X/xJPBpYI9OiGupF7JvW2WjVE5lapjXTVGwPUznfQHFyhHutMkdsQQNllKx/UKIjh3ZVCchGhBNyxuTjfbu5OOeWDDkWp2ZE93WzVoYjnDllfdqmMhYYmclWctQBY8AAARCklEQVR4nO2di1sTSRLAnYRIgjwkYoyPMIsG8BGElT2jsBLxFlmXRwjoKshyoKCCK6h4yt7dH38zU9U93TM9mZ5HZnLe1Pftt06YR/+muqurq7trTp0KRwozk9Oj4/2KjPSPjzyYnC+E9ORIpFoblULjZWSyGnfBJeXuEx94IMPzcRdeQmav+ebTZXQgbgAXGfBTPXmZbusGORmYT5eZuDEcpTDCl3T/XG9RRjYWlvgLz8RN4iDVcaaQvy8+e5uVl/Rg8Spz9UjcLEKpmgW8vPis5931vrQXyWYPNsw7PGnDxlg1bejilUzPeU94CFnaaGMtFuZo/bySyfT86k2BlPHgMrnNdNxEVqFG5mnGP6CGmD5HblSLG4mXGinXcx3wvF9AnbFIbtVW/g21Mu91wBdNEX77UZfCz8bBz8bBj7+JEMfbydo8YTWYaa6k3+ASJIQDljCd7W2/bvEuMaIZnfBt8zrqSpjOvsT7tc9YA+3onwbgC5dG6E6YLqGP0x0fEi+z+MqfGYTXmwPKEGb32kyJc2wddVOhDGE6u9BWLZEY0oyUCtGW/uhoSw0ZxHvGzQZSM7v6TOadG6CcECW2R5+IlfRKJpA3YyHElvggbjhdqowhlaikkoLmdDRuOl1mWDsTUiU1+8R2sKZn2K7C1ZJKE2I1bYfA1LBRkv1Qm2GaWtPJuPFOkXHTYUbGY/MgpbbpEXHoi4bmQ1iA6fRSuzhuhfFWmFKtIUJkqg2G+gWIz9xsEeFw3HwJYUKYECaECeF3QzjfrZdi5G5L4o9tQDhgTqu3wo2Nn/CuwkgLanXshDOK0lrEuAmrikVCr6hxE3ZbCZWwzQ1L2NNz3cPMdnPpkyOkKlzrWm+REpHw8KYhG72hyZIUIZqZ9Uoup3bBv8OePi4EWyHkJm6EGCV6nUulUrkdOAi5msZM+ABOU1M6Ydf3SAiGpj9nEJ5NCBPC5oSXxUWMgXCElycBuw+T0OjzM+H0+QdBCK0SMOZq1tLnmaArTahk6aqatiLcB8ctBEAS8Fbc46UtJaxOTg8PDzMrLkNTYtZc3zauPWK4e9bReLSQcMC+mvswLO/7wF5Kp5XDrSOsiW4VkhIZFTIiXjksIhyiEoDwjPBl7YdjTgUqdEQUEaZyKJV+34Sz4jKEo0SxChXxfLCIsJJC8U9YcCgC9okBW2LJ6e6iYVGLCOmS/EeacIVYDK5Esy/UZUx7wo0mSmwRIa4vuT3R2dk5MQbPgJ+WrgTtE7NksRA+Q3tE59YqHAgW1baGECvpjc6ySfgZdXkzoBKzaVyz/xU0d1t/RnkCfhOsPWkNIcZG/tAfTghv3cOX/ueVQLPdB2RTQv2TSdhZvm0czEVFOAA3uscRlmmD3D88/P3wEkgxayim95Kk0K0lR3lGh53lz8bBeLyEW4pAeoHwpehvTaUegJAAqiETlm+FSLidD0B4h8hKuISksXAy/XdDRux/aSof8x0BCH85jfJLyISdnXYtHuU7NMlvegNc1q4KQHi6dYTlrU8hEG7W9Yvak7CzM19f/rK5eYHIpy9AePTpgpRsbn7c7jAuiZdQ2B8C4U8deV46oLgepKNDQOipPwxOeAputMr6NJQwLGEJSU/0RJLwIspp34S42ffRhGZAIyCkXa2kX3qfiuKXkJtXVlpKyInk2MIqfsaH9jh3FISiyGKr4jQztrtEQSg7xg+D0L4tPQJC4d6L1sXarE3xc6sJr4k3l7QwXlqd5u5yO2zCjjG+lB7ipaO8zPneb1u4W+ue7u6GVdCPwiasY2m7u6cfTM54inmHvRgDdDk2YRD+IzTCYyjtXZenR0GI0e+tcAnzH+G2bjtKoiDEngP88HJohDgccdsVFAVhtSWmpg6GRuCJRk9IoqcTYRLmt+GmrrvzIiGssdU0pIaY/wo3dd1hGQkhDoixvwiHsAO7QdeHR0KIw0VlqxxaNSWW1H3XUzSENdbWlMMgJCp0330YDSFZARmarckvww0FUYt4CNGtQSWGYWvQJ3VzaKIjHAi3Jea/wO1kkptERIg7ZZVH4Xhu6JJKLfaNipC0xD/CUGL+grwKIyOk68mNeloOBog9hTIr/+AICMnaheD1NE/qqFyygcgIaVTjc+B6SqIXcrkGoiOkyb7APfWvQjKJIxl6iJCQbnwI1BRJR+E+bIqe0FwnZSD6a4rEmZHPhxElIdkYEADRBJSyo5ETmnn3DETv1sYElI//RUto5k70hUg7Qi+JFKIlZHbK3fOBSIyMp41LERNSFxz9Nw9tMd9B5/rnvJQwakIG8fZE2QNi/pgG8Uc9FTByQgZxbMsDIm2CXrPPRk/I5qK9pc+CSzTG/PEFes2Ix+LFQMhYVKX/Xrnsqsa8aWJ87FOOg5AGNXRZ3epsrsY8U0H9bHCNh5CbIX50b6LspMZ8vv5x1Ty130eGPZZQjY7w1ACb2nvs1lb5p7wAr2ObWw3mtQkaYhLeiZSQcVIR8p+wWgrZtH/Ul79yp8gE1gSChBf1JVAXH0ZJaP+GwI2vX5a3j+v1+vH28pdN67c9/H4vIEZCbdg/rsjKE985LmMlZAYbLhIgdff/CKG/JmhIzISym6BD0KEh0RPCAz9v3RJ/M2j1aBv87QCJ9ZDwh8ffvn17+C1qQgyi/qG5blv3PvMrgG4cLdc1hwZWTcuGnQRiT20SZfJhdi1xuZzPH29rsqz9d1wnfSN0+RKzaA4yI/quTS0yJc7DA5l1KPxCZzpdf83nA4R8UTLiSpst57nh/BGc4iuXbnXYgU9/ZwHMswfBSH+T9WAk+OSHULBQmZVIPqpUcyfE+KGPbMEPLERjq5YfxiNIsoyWvNmaPpxo8v6FJ7aGDnU1plYqlcrK67NvWMZWZ1ku4FuGCTeH0CISXvM69GW8pa6VVE5VYbOa9v9X6xEhFuiG/aYL3uq0NJ7UaEYRujS8FCtqrmEytrCi3jUdtuaEprfjYXxB397OVC5lEzXVRdtiq8zNjBmMUpT7nU1Wg9WZE5VhyVc+Ty5YS6l2QD1g0yBntCbR8gA/pMDVw2LCY+5UpVvqndMayvCpuphHU74qv5zY++EJ58Vg+Y/WkyW8EZKxoovW0Fyq0nh19tVUhbbJHEHsDz0Dn7WbUtBrcyC0b0x0Natk+ucNAcyt0HR7Jw1Sb2lFDfnDWFzGkyVM/v/IeZIGm+HVInvdXPPpUXyHqxViV9bYi6ntIcnbwhxLFXg/ai/dh3vPHScwyKx9MVvqZS8dbWJWybqWRg5bnNWXOUt0i4oNJY1ioTpbG+YH9MV0ln59S1eisLMglvRA/6Yclw5DmeuuzVRFrx+jzUMEULEJtk9STwUbTz1JdX6ye8QWregtGbvUSZYSbYQoIiTLuy7BlvbBS9bbjI88mB2wYOKA6TW0t4odkGoxh0r079lUZ2ojwoDhwkEWk1yQurclmrugK0sGs5gSY/Cq4G79c8OTM7SnRDuzjhA7oucrU5BG8RUc+bI1Wq10/GjsJSwwq0RlSxDVJz3Fgpn2I7vnmNdupGZ89RnbOqiJMOhpoAeqM9SO73AK9hxBKMyfafZJ3L2sCWh+fMvYYs/xdRyRPx1wqU16xbdFyirGZVY4Y0L69SrxNaAOqzjS8GZN56ddQoQlPhnLAvn9a51hzOe36c79Ypa7YE98W17Wwcy8xkPT9CLiCah4F468NMTJJnhotfe4ArMpkb4e0w3pzKTTS/58kmGIGQMJ5ITLV8o0NGym0FmqaE2lPbeC0/eM799+/Ne/Ll6Egw1LidnEXWNHH5eXl7+wjsxC2iLQh2qW5HWja8iJEzoEdcg44BwzrhavwIFsj8gNGDiBve934OAyT8h+PFUgNkDU+VpO86VzudcOl+2qTDPklt9g9KuhMoSSxtTmcC4U9zApizFpcPoOek8lS5mzJVEfALJhBSTN8JXK9ufFvSLfV4IprUDD4LadDLDXozGV2iVb4Mzn0rm9Az0jNRD2IyGabktDTDPdolWcT0Wnc4Wcl82+eL94KCbkxoA4dmx4JWSWkChLvYNp6BHQUI4hIXnhtmJr7sqCYhd0fPgzsUqjb1mhb6LvRU8m82zxd/gBHbMd44Dr79BWTHmspQXTdbm6Z5YrC1VnFQlTeIa93Lq7wrudGt+B4DzSDE9UG+H5HiPbHfywBr3BCRyxvcEoUwdIJZeIDptVdC/N9udA+AgJc9jBWhsinJst7W0Qm3O1OJgW8dFkbXR8QKtF369ACKZ2CHw2klXXLCm6PPB3FduNewCIzu9sWMoFJuQ+IcQOdlBUdgMymz44GDwoGR9TF59SZCsZR/gWCLGacio2WyLJ9bALOkbb5xr+mSWAi9Zy8YTExRA0RFnBWtFP85GZd/wAhE/hF3DLCALG6ap0AF5hnbp+VxWSy57bvtUMVeY2IcRX+tI/YQnq8RvVTpgGwvfwCzREZvA0NzxtpowFFZJm6BpvIy9m0f7pv8scIfExrgobopRgMzRjTHCs50Tre5dhTA1WU3GeCDK0Qg27rRknUYObgk//wV++EUJyywNh6SWENMPXFh3qniAxNTdZNZn1lJH+Cj86dhtaYAezf0WQltRCSDxde0cuS4hdykqKJzyn3/ADV01pU7UhrqKZIvCulRR7iuei7LkcoVnxe303RDBdO2ZoF4L+0LLfASJ6NmskpkZHwSBvUIOCoZVY0M/bF34zHf72mBCmcuBGXfULWOILrxUTbrigE5I+/zmWvEEQK4wadxr0WhyXuC6LRzuzKPxOrI0QnQyfpoa43Q2qQxWKCaGq60BIlGh2mrnKq5Oh9fWdN7tTNLJPxvfu3T1WUj0p6Ttb2lX420NKqDo633KEvZaip9QdhtBwTc2WqIxVzPNyaqpCpxFZC+TaCtGSHvbIETo731KCwyxzxgwJ0dUlSkRzqtkUwdyacZlKK65rjIb5nLH9W78lK2FKVdgSeRa4+g1DOMTejygxs0/K3xAi5ipD5AR3lxT7iveShDm8tS8+m9tNCZfwjRElPiMAylrFxqiqpnWVGDfhVJk4/bFAh8T59vWJJ1t/T+wFiYyQXp82Ra1f5Ke51VyuQRUo9aldGBgeigkxyPQDQ4id0KVzfgQnclh9oHGmtR77RNpl6HLS0CpPTg/rqKmpXWaRoNQEMJzqkMKaI7xoFEk4j+BNhhiVEJNICa9nMlYt6rKz1rW729U1xP0o9eV5DD8+FRKSWsUSpviH+JEupmURm0gnCsgwUWuLh81vIxlDRI9GmEueAHKEIk/YozRYHZJpThORNEWz0xDKNclAN0auRJ88oIDKXwyh2nB6pLRUUgJCBvE8RXy/73gT6WlR7A6f2QlNwPuQ7xUJBTOW3mSHs/zm7USITx3u4WHx5awTIQt4kSHUHd7+IMK43Y6ItKIKCb19b3XSgdAOSAlDlpwI8W0PMC7CH84Mk2jnkzPO+QfFUhMTCgC1AXCEiNehX8ReUY+lFapV4bS/JOEVnjBKQDFiOv2rrkYkDLIEUUgYLaADYt/1Fz09IRCeERFGDKiZmxUT0TR2fR9evA+L8DJHWIoakLWoXICkb7C1hNEBMhWVDwG1ljBKQBMxSsIfogSkY+s4CKMBjJEwIsAYCSMCTAgTwoQwIUwIE8KEMCFMCBPChDAhTAgTwoQwIUwIE8KEMCFMCBPChDAhTAgTwoQwIUwIE8KE0EIIewYooSE5OSH5qdgDVfJaECTkti+ERqg8NeTfRRD47fNjQ7rkBPdQ7BoHkPAg9UryWkN2YY/XUpGVjdAIgwtu+YTNdrDtR33jco20tAUh7vQBRZx8j4T/+ZshSAgH3xch7g6ABDC4W6dJGmBvkhD+vxH+F9CxaqCTng79AAAAAElFTkSuQmCC" alt="Foto del Experto 2">
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
                            <option value="llave_duplicada">Duplicado de llave con chip - $15.000</option>
                            <option value="cambio_combustible">Cambio de cerradura para combustible - $80.000</option>
                            <option value="cierre_automatico">Instalación de cierre automático - $90.000</option>
                            <option value="cerradura_segura">Instalación de cerradura seguridad - $120.000</option>
                            <option value="servicio_urgente">Servicio de cerrajería urgente - $100.000</option>
                        </select>
                        <p>Lucía es especialista en instalación de cerraduras de alta seguridad y sistemas de control de acceso, con más de 8 años de experiencia.</p>
                        <p><strong>Horario de trabajo:</strong> Martes a Sábado de 10:00 am a 7:00 pm</p>
                    </div>
                </form>
            </div>

            <!-- Tercer Experto -->
            <div class="experto">
                <img src="data:image/png;base64,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" alt="Foto del Experto 3">
                <h3>Andrés López</h3>
                
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
                            <option value="cerradura_fiat">Instalación de cerradura para Fiat - $70.000</option>
                            <option value="cerradura_puerta_garaje">Instalación de cerradura para garaje - $85.000</option>
                            <option value="mantenimiento_cerraduras">Mantenimiento de cerraduras - $25.000</option>
                            <option value="reparacion_llave">Reparación de llave doblada - $10.000</option>
                            <option value="servicio_llave_maestra">Servicio de llave maestra - $150.000</option>
                        </select>
                        <p>Andrés es especialista en puertas de seguridad y sistemas de protección avanzada, con más de 10 años brindando soluciones de alta calidad.</p>
                        <p><strong>Horario de trabajo:</strong> Lunes, Miércoles y Viernes de 8:00 am a 4:00 pm</p>
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
