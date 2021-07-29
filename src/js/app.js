document.addEventListener('DOMContentLoaded', function () {
    eventListeners();

    darkMode();
});

function darkMode() {

    const preferDarkMode = window.matchMedia('(prefers-color-scheme: dark)');

    if (preferDarkMode.matches) {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }

    if (localStorage.getItem('theme')) document.body.classList.add('dark-mode');


    preferDarkMode.addEventListener('change', () => {
        if (preferDarkMode.matches) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    })

    const botonDarkMode = document.querySelector('.dark-mode-boton');

    botonDarkMode.addEventListener('click', () => {
        if (document.body.classList.contains('dark-mode')) {
            localStorage.removeItem('theme');
            document.body.classList.remove('dark-mode');
        } else {
            localStorage.setItem('theme', 'ok');
            document.body.classList.add('dark-mode');
        }
    });
}


function eventListeners() {
    document.querySelector('.mobile-menu').addEventListener('click', menuResponsive);
}


function menuResponsive(e) {
    const nav = document.querySelector('.navegacion');

    nav.classList.toggle('mostrar');
}