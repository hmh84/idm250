// -------------------------
// TOGGLING THE NAV
// -------------------------

var nav_button = document.querySelector('#header-btn');
var nav_list = document.querySelector('.nav-content');
var nav = document.querySelector('header');

var backdrop = document.querySelector('#backdrop');

if (nav_button) {
    nav_button.addEventListener('click', () => toggle_nav());
}

if (backdrop) {
    backdrop.addEventListener('click', () => toggle_nav());
    backdrop.style.display = 'none';
}

nav_list.style.top = '-130%';
nav_list.style.display = 'none';
// nav_form.style.display = 'none';

function toggle_nav() {
    if (document.querySelector('.nav-opened')) {
        nav.classList.remove('nav-opened');
        nav_list.style.top = '-140%';
        setTimeout(function() {
            // Everything in me takes 250
            nav_list.style.display = 'none';
        }, 250);
    } else {
        nav.classList.add('nav-opened');
        nav_list.style.display = 'block';
        setTimeout(function() {
            // Everything in me takes 250
            nav_list.style.top = 'unset';
        }, 250);
    }
};

// -------------------------
// NAV FUNCTION
// -------------------------

$(window).scroll(function() {     
    var scroll = $(window).scrollTop();
    if (scroll > 0) {
        $("header").addClass("btm-shadow");
    }
    else {
        $("header").removeClass("btm-shadow");
    }
});