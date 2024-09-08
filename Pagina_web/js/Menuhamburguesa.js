// Alternar menú hamburguesa
document.getElementById('hamburguesa').addEventListener('click', function() {
    var menu = document.querySelector('.enlaces');
    menu.classList.toggle('menu-activo'); // Alterna la clase que muestra u oculta el menú
});


// Validación del formulario de contacto
document.querySelector('form').addEventListener('submit', function(event) {
    var nombre = document.getElementById('nombre').value.trim();
    var telefono = document.getElementById('telefono').value.trim();
    var mensaje = document.getElementById('mensaje').value.trim();
    var telefonoPattern = /^[0-9]{7,10}$/; // Ejemplo de patrón de número de teléfono

    if (nombre === '' || telefono === '' || mensaje === '') {
        alert('Todos los campos son obligatorios.');
        event.preventDefault();
    } else if (!telefonoPattern.test(telefono)) {
        alert('Por favor, ingresa un número de teléfono válido (7-10 dígitos).');
        event.preventDefault();
    }
});

// Función de desplazamiento suave
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
