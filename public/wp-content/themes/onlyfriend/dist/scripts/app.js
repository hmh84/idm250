// -------------------------
// Toggling the Nav
// -------------------------

const nav_list = document.querySelector('#menu-header-nav');
const backdrop = document.querySelector('#backdrop');

if (nav_button) {
    nav_button.addEventListener('click', () => toggle_nav());
}

if (backdrop) {
    backdrop.addEventListener('click', () => toggle_nav());
    backdrop.style.display = 'none';
}

nav_list.style.top = '-420px';
nav_list.style.display = 'none';
nav_form.style.display = 'none';

function toggle_nav() {
    if (document.querySelector('.nav-opened')) {
        nav.classList.remove('nav-opened');
        nav_form.style.display = 'none';
        nav_list.style.top = '-420px';
        setTimeout(function() {
            // Everything in me takes 250
            nav_list.style.display = 'none';
        }, 0);
        // backdrop.style.display = 'none';
    } else {
        nav.classList.add('nav-opened');
        nav_list.style.display = 'flex';
        nav_form.style.display = 'block';
        setTimeout(function() {
            // Everything in me takes 250
        nav_list.style.top = '0';
        }, 0);
        // backdrop.style.display = 'block';
    }
};