<?php

function include_css_files() {
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
}

add_action( 'wp_enqueue_scripts', 'include_css_files' );

function include_script_files() {
    wp_enqueue_script('main-js', get_template_directory_uri() . '/scripts/main.js');
}

// add_action('wp_enqueue_scripts', 'include_script_files');

function register_theme_navigation() {
    register_nav_menus([
        'header-nav' => 'Primary Menu',
    ]);
}

add_action('after_setup_theme', 'register_theme_navigation');