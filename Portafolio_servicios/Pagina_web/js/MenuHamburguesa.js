const nav = document.querySelector("#nav");
const abrir = document.querySelector("#abrir");
const cerrar = document.querySelector("#cerrar");
const enlaces = document.querySelectorAll(".nav-list a");

// Función para abrir el menú
abrir.addEventListener("click", () => {
    nav.classList.add("visible");
});

// Función para cerrar el menú
cerrar.addEventListener("click", () => {
    nav.classList.remove("visible");
});

// Cerrar el menú cuando se hace clic fuera de él
document.addEventListener("click", (e) => {
    if (!nav.contains(e.target) && !abrir.contains(e.target)) {
        nav.classList.remove("visible");
    }
});

// Cerrar el menú al hacer clic en un enlace del menú
enlaces.forEach((enlace) => {
    enlace.addEventListener("click", () => {
        nav.classList.remove("visible");
    });
});
