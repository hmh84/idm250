<?php
/**
* Register Basket CPT
* // Dash Icons https://developer.wordpress.org/resource/dashicons
* @link https://developer.wordpress.org/reference/functions/register_post_type/
* @return void
*/
function register_basket_custom_post_type() {
    $args = [
    'label'                 => 'Basket',
    'labels'                => [
        'name'                  => 'Baskets',
        'singular_name'         => 'Basket'
    ],
    'supports' => [
        'title',
        'editor',
        'author',
        'thumbnail',
        'excerpt',
        'trackbacks',
        'custom-fields',
        'comments',
        'revisions',
        'page-attributes',
        'post-formats'
    ],
    'taxonomies'            => ['featured', 'post_tag'],
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'show_in_rest'          => true,
    'menu_icon'             => 'dashicons-products'
    ];

    register_post_type('baskets', $args);
}
add_action('init', 'register_basket_custom_post_type');

// MOMENTS

function register_moment_custom_post_type() {
    $args = [
    'label'                 => 'Moment',
    'labels'                => [
        'name'                  => 'Moments',
        'singular_name'         => 'Moment'
    ],
    'supports' => [
        'title',
        'editor',
        'author',
        'thumbnail',
        'excerpt',
        'trackbacks',
        'custom-fields',
        'comments',
        'revisions',
        'page-attributes',
        'post-formats'
    ],
    'taxonomies'            => ['featured', 'post_tag'],
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_in_rest'          => true,
    'menu_icon'             => 'dashicons-heart'
    ];

    register_post_type('moments', $args);
}

add_action('init', 'register_moment_custom_post_type');