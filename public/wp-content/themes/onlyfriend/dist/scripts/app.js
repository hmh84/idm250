// -------------------------
// Add to Nav
// -------------------------

const nav = document.querySelector('#menu-header-nav');
const nav_wrap = document.querySelector('.menu-header-nav-container');
const nav_top = document.createElement('div');

// Nav Img

const nav_img = document.createElement('img');
nav_img.setAttribute('src', 'graphics/favicons/favicon.svg');
nav_img.setAttribute('id', 'nav-img');
nav_top.appendChild(nav_img);

// Nav Title

const nav_title = document.createElement('h2');
nav_title.setAttribute('id', 'nav-title');
nav_title.innerHTML = 'Care by Kay & Jay';
nav_top.appendChild(nav_title);

// Nav Button

const nav_button = document.createElement('button');
nav_button.setAttribute('id', 'nav-btn');
nav_span_1 = document.createElement('span');
nav_span_2 = document.createElement('span');
nav_span_2.setAttribute('id', 'span-1');
nav_button.appendChild(nav_span_1);
nav_button.appendChild(nav_span_2);
nav_top.setAttribute('class', 'nav-top');

nav_top.appendChild(nav_button);
nav_wrap.insertBefore(nav_top, nav_wrap.firstChild);

// Search

const nav_form = document.createElement('form');
const nav_input = document.createElement('input');
const nav_search_button = document.createElement('button');

nav_form.setAttribute('method', 'GET');
nav_form.setAttribute('action', 'gallery.php');
nav_form.classList.add('nav-form');

nav_input.setAttribute('type', 'search');
nav_input.setAttribute('type', 'search');
nav_input.setAttribute('placeholder', 'Search');

nav_search_button.setAttribute('type', 'submit');
nav_search_button.innerHTML = "Go";

nav_form.appendChild(nav_input);
nav_form.appendChild(nav_search_button);
nav_wrap.appendChild(nav_form);

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