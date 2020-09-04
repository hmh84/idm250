<?php

function add_post_thumbnails_support() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'add_post_thumbnails_support');

function include_css_files() {
    wp_enqueue_style('pacifico-font', 'https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

    wp_enqueue_style('normalize-css', get_template_directory_uri() . '/dist/css/normalize.css');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/dist/css/style.css');
}

add_action('wp_enqueue_scripts', 'include_css_files');

function include_js_files() {
    wp_enqueue_script('main-js', get_template_directory_uri() . '/dist/scripts/app.js', [], false, true);
}

add_action('wp_enqueue_scripts', 'include_js_files');

function register_theme_navigation() {
    register_nav_menus([
        'primary_menu' => 'Primary Menu',
    ]);
}

add_action('after_setup_theme', 'register_theme_navigation');