document.getElementById('hamburguesa').addEventListener('click', function() {
    var menu = document.querySelector('.enlaces');
    if (menu.style.display === 'block') {
        menu.style.display = 'none';
    } else {
        menu.style.display = 'block';
    }
});
