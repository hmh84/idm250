// Set main to correct vertical height

const header = document.querySelector('header');
const footer = document.querySelector('footer');
const main = document.querySelector('main');
const header_text = document.querySelector('#header-text');

const section_single = document.querySelector('#single');
const table = document.querySelector('table');

window.onresize = responsivenessCheck;
window.onload = initCheck;

function initCheck() {
    responsivenessCheck();
    window.scrollTo(0, 0);
}

function responsivenessCheck() {
    var x = header.clientHeight;
    main.style.paddingTop = x+'px';
    nav_list.style.marginTop = x+'px';

    header_text.style.marginTop = (x/2 - (header_text.offsetHeight / 2)) + 'px';

    if (current_dir = 'single.php' && $(window).width() >= 864) {
        // If the current page is single.php & if window has min with of 864px...
            var x = '100vh - '+(header.offsetHeight + footer.offsetHeight);
            if (section_single) {
                section_single.style.height = 'calc('+x+'px)';
            }
            if (table) {
                table.style.paddingBottom = footer.offsetHeight+'px';
                table.style.transform = 'unset';
                table.style.position = 'fixed';
            }
        
    } else {
        // If at least 1 of 2 of the conditions are false...
            if (section_single) {
                section_single.style.height = 'unset';
            }
            if (table) {
                table.style.position = 'unset';
                table.style.transform = 'translateY(2rem)';
                table.style.paddingBottom = 'unset';
            }
    }
}

// Toggling the Nav

const nav = document.querySelector('nav');
const nav_list = document.querySelector('#nav-list');
const nav_btn = document.querySelector('#menu-btn');
const backdrop = document.querySelector('#backdrop');

nav_btn.addEventListener('click', () => toggle_nav());
backdrop.addEventListener('click', () => toggle_nav());

function toggle_nav() {
    if (nav.hasAttribute('id')) {
        nav.removeAttribute('id');
        nav_list.style.top = '-420px';
        setTimeout(function() {
            // Everything in me takes 200
            nav_list.style.display = 'none';
        }, 250);
        backdrop.style.display = 'none';
    } else {
        nav.setAttribute('id', 'opened');
        nav_list.style.display = 'flex';
        setTimeout(function() {
            // Everything in me takes 200
            nav_list.style.top = '0';
        }, 250);
        backdrop.style.display = 'block';
    }
};

// Color current page nav element red

const active_page = document.querySelector(`#nav-list a[href="${current_dir}"] li`);

if (!active_page) {
    console.log('This page is not in the nav list');
} else {
    active_page.style.color = 'var(--pink)';
}

// Add header shadow after scrolling down

$(window).scroll(function() {
    if ( $(window).scrollTop() >= 25 ) {
        header.classList.add("btm-shadow");
    } else {
        header.classList.remove("btm-shadow");
    }
});