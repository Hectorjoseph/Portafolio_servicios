const nav = document.querySelector("#nav");
const abrir = document.querySelector("#abrir");
const cerrar = document.querySelector("#cerrar");
const enlaces = document.querySelectorAll(".nav-list a");

abrir.addEventListener("click", () => {
    nav.classList.add("visible");
});

cerrar.addEventListener("click", () => {
    nav.classList.remove("visible");
});

document.addEventListener("click", (e) => {
    if (!nav.contains(e.target) && !abrir.contains(e.target)) {
        nav.classList.remove("visible");
    }
});

enlaces.forEach((enlace) => {
    enlace.addEventListener("click", () => {
        nav.classList.remove("visible");
    });
});




document.addEventListener('DOMContentLoaded', function() {
    function formatCurrency(number) {
        return new Intl.NumberFormat('es-CO', {
            style: 'currency',
            currency: 'COP',
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
        }).format(number);
    }

    function calcularTotal() {
        const checkboxes = document.querySelectorAll('.checkbox-custom');
        let total = 0;

        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                total += parseInt(checkbox.dataset.precio);
            }
        });

        document.getElementById('total').textContent = formatCurrency(total);
    }

    // Event listeners para checkboxes
    document.querySelectorAll('.checkbox-custom').forEach(checkbox => {
        checkbox.addEventListener('change', calcularTotal);
    });

    // Event listeners para los elementos servicio-item completos
    document.querySelectorAll('.servicio-item').forEach(item => {
        item.addEventListener('click', function(e) {
            // Evitar que se active cuando se hace clic directamente en el checkbox
            if (e.target.type !== 'checkbox') {
                const checkbox = this.querySelector('.checkbox-custom');
                checkbox.checked = !checkbox.checked;
                calcularTotal();
            }
        });
    });
});