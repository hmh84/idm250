<?php

// hook into the init action and call register_taxonomy_for_baskets when it fires
add_action('init', 'register_taxonomy_for_baskets');

function register_taxonomy_for_baskets() {
    $labels = [
    'name'              => _x('Featured', 'taxonomy general name'),
    'singular_name'     => _x('Featured', 'taxonomy singular name'),
    'search_items'      => __('Search Featured'),
    'all_items'         => __('All Featured'),
    'parent_item'       => __('Parent Featured'),
    'parent_item_colon' => __('Parent Featured:'),
    'edit_item'         => __('Edit Featured'),
    'update_item'       => __('Update Featured'),
    'add_new_item'      => __('Add New Featured'),
    'new_item_name'     => __('New Featured Name'),
    'menu_name'         => __('Featured'),
  ];

    // Now register the taxonomy
    register_taxonomy('featured', ['projects'], [
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'rewrite'           => ['slug' => 'featured'],
  ]);
}

add_action('init', 'register_taxonomy_tag_for_baskets');