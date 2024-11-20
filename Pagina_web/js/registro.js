document.getElementById('registerForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    fetch('registro.php', {
        method: 'POST',
        body: new FormData(this)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert(data.message);
            window.location.href = 'dashboard.php'; // Redirigir al panel de usuario
        } else {
            alert(data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Error al procesar el registro');
    });
});