const body = document.querySelector('body');
const footer = document.querySelector('footer');
const main = document.querySelector('main');
const header_text = document.querySelector('#header-text');

const section_single = document.querySelector('#single');
const table = document.querySelector('table');
    
    // Customize the Nav

    const wp_nav = document.querySelector('.menu');

    wp_nav.classList.add('nav');

    const nav_add_button = document.createElement('button');
    nav_add_button.setAttribute('id', 'menu-btn');
    nav_add_span_1 = document.createElement('span');
    nav_add_span_2 = document.createElement('span');
    nav_add_span_2.setAttribute('id', 'span-1');
    nav_add_button.appendChild(nav_add_span_1);
    nav_add_button.appendChild(nav_add_span_2);
    const nav_spans = document.querySelectorAll('.nav.span');
    wp_nav.appendChild(nav_add_button);

    const nav_add_nav_list = document.createElement('div');
    nav_add_nav_list.setAttribute('id', 'nav-list');
    nav_add_nav_list.style = 'display: none; top: -420px';
    wp_nav.appendChild(nav_add_nav_list);

    const init_page_ul = document.querySelectorAll('.menu ul');
    init_page_ul[0].remove();

    const new_nav_ul = document.createElement('ul');
    const new_nav_a = document.createElement('a');
    const new_nav_li = document.createElement('li');
    const new_nav_img = document.createElement('img');
    const new_nav_h2 = document.createElement('h2');

    new_nav_img.setAttribute('src', 'http://localhost:8888/wp-content/themes/onlyfriend/graphics/favicons/favicon.svg');
    new_nav_img.setAttribute('alt', 'Logo');

    new_nav_h2.setAttribute('id', 'header-text');
    new_nav_h2.innerHTML = 'Only Friend';

    new_nav_a.setAttribute('href', 'index.php');
    new_nav_a.setAttribute('rel', 'noopener noreferrer');
    
    new_nav_li.setAttribute('id', 'logo');
    
    new_nav_ul.appendChild(new_nav_a);
    new_nav_a.appendChild(new_nav_li);
    new_nav_li.appendChild(new_nav_img);
    new_nav_li.appendChild(new_nav_h2);

    const nav_a_1 = document.createElement('a');
    const nav_a_2 = document.createElement('a');
    const nav_a_3 = document.createElement('a');
    const nav_a_4 = document.createElement('a');

    nav_add_nav_list.appendChild(nav_a_1);
    nav_add_nav_list.appendChild(nav_a_2);
    nav_add_nav_list.appendChild(nav_a_3);
    nav_add_nav_list.appendChild(nav_a_4);

    const nav_as = document.querySelectorAll('.nav a');

    const nav_item_href = [
        'index.php',
        'build.php',
        'gallery.php',
        'contact.php'
    ]

    const nav_item_html = [
        'Home',
        'Build a Basket',
        'Gallery',
        'Contact'
    ]

    for (let i = 0; i < nav_as.length; i++) {
        nav_as[i].setAttribute('rel', 'noopener noreferrer');
        nav_as[i].setAttribute('href', nav_item_href[i]);
        var nav_list_item = document.createElement('li');
        nav_list_item.innerHTML = nav_item_html[i];
        nav_as[i].appendChild(nav_list_item);
    }

    nav_as.forEach(a => {
        a.setAttribute('rel', 'noopener noreferrer');

    });

    const nav_add_form = document.createElement('form');
    const nav_add_input = document.createElement('input');
    const nav_add_button_2 = document.createElement('button');

    nav_add_input.setAttribute('id', 'search-input');
    nav_add_input.setAttribute('type', 'search');
    nav_add_input.setAttribute('name', 'search');
    nav_add_input.setAttribute('placeholder', 'search');

    nav_add_form.setAttribute('id', 'search');
    nav_add_form.setAttribute('method', 'GET');
    nav_add_form.setAttribute('action', 'gallery.php');

    nav_add_button_2.setAttribute('id', 'search-btn');
    nav_add_button_2.setAttribute('type', 'submit');
    nav_add_button_2.innerHTML = 'Go';


    nav_add_nav_list.appendChild(nav_add_form);
    nav_add_form.appendChild(nav_add_input);
    nav_add_form.appendChild(nav_add_button_2);

    const new_header = document.createElement('header');
    body.insertBefore(new_header, body.firstChild);
    new_header.insertBefore(wp_nav, new_header.firstChild);
    wp_nav.appendChild(new_nav_ul);
    
    // Set main to correct vertical height

    window.onresize = responsivenessCheck;
    window.onload = initCheck;

    function initCheck() {
        responsivenessCheck();
        window.scrollTo(0, 0);
    }

    function responsivenessCheck() {
        var x = nav.clientHeight;
        if (!current_dir == '404.php') {
            main.style.paddingTop = x+'px';
        } else {
            main.style.minHeight = 'calc(100vh - ' + footer.clientHeight+'px)';
        }
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

    const nav = document.querySelector('.nav');
    const nav_list = document.querySelector('#nav-list');
    const nav_btn = document.querySelector('#menu-btn');
    const backdrop = document.querySelector('#backdrop');

    if (nav_btn) {
        nav_btn.addEventListener('click', () => toggle_nav());
    }

    if (backdrop) {
        backdrop.addEventListener('click', () => toggle_nav());
    }

    function toggle_nav() {
        if (nav.hasAttribute('id')) {
            nav.removeAttribute('id');
            nav_list.style.top = '-420px';
            setTimeout(function() {
                // Everything in me takes 200
                nav_list.style.display = 'none';
            }, 250);
            // backdrop.style.display = 'none';
        } else {
            nav.setAttribute('id', 'opened');
            nav_list.style.display = 'flex';
            setTimeout(function() {
                // Everything in me takes 200
                nav_list.style.top = '0';
            }, 250);
            // backdrop.style.display = 'block';
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

const header = document.querySelector('header');

    window.onload = function(){
        if ( $(window).scrollTop() >= 25 ) {
            header.classList.add("btm-shadow");
        } else {
            header.classList.remove("btm-shadow");
        }};