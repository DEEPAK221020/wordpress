<?php


// Register Taxonomy Brand
function custom_taxonomy_brand() {
    $labels = array(
        'name' => 'Brands',
        'singular_name' => 'Brand',
        'menu_name' => 'Brands',
        'edit_item' => 'Edit Brand',
        'update_item' => 'Update Brand',
        'add_new_item' => 'Add New Brand',
        'new_item_name' => 'New Brand Name',
        'search_items' => 'Search Brands',
        'popular_items' => 'Popular Brands',
        'all_items' => 'All Brands',
        'parent_item' => null,
        'parent_item_colon' => null,
        'separate_items_with_commas' => 'Separate brands with commas',
        'add_or_remove_items' => 'Add or remove brands',
        'choose_from_most_used' => 'Choose from the most used brands',
        'not_found' => 'No brands found',
        'menu_name' => 'Brands',
    );
    $args = array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'brand'),
    );
    register_taxonomy('brand', 'cars', $args);
}
add_action('init', 'custom_taxonomy_brand');



// Register Taxonomy Year
function custom_taxonomy_year() {
    $labels = array(
        'name' => 'Years',
        'singular_name' => 'Year',
        'menu_name' => 'Years',
        'edit_item' => 'Edit Year',
        'update_item' => 'Update Year',
        'add_new_item' => 'Add New Year',
        'new_item_name' => 'New Year Name',
        'search_items' => 'Search Year',
        'popular_items' => 'Popular Year',
        'all_items' => 'All Year',
        'parent_item' => null,
        'parent_item_colon' => null,
        'separate_items_with_commas' => 'Separate Year with commas',
        'add_or_remove_items' => 'Add or remove Year',
        'choose_from_most_used' => 'Choose from the most used Year',
        'not_found' => 'No Year found',
        'menu_name' => 'Years',
    );
    $args = array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'year'),
    );
    register_taxonomy('year', 'cars', $args);
}
add_action('init', 'custom_taxonomy_year');


// Register Taxonomy Model
function custom_taxonomy_model() {
    $labels = array(
        'name' => 'Models',
        'singular_name' => 'Model',
        'menu_name' => 'Models',
        'edit_item' => 'Edit Model',
        'update_item' => 'Update Model',
        'add_new_item' => 'Add New Model',
        'new_item_name' => 'New Model Name',
        'search_items' => 'Search Model',
        'popular_items' => 'Popular Model',
        'all_items' => 'All Model',
        'parent_item' => null,
        'parent_item_colon' => null,
        'separate_items_with_commas' => 'Separate Model with commas',
        'add_or_remove_items' => 'Add or remove Model',
        'choose_from_most_used' => 'Choose from the most used Model',
        'not_found' => 'No Model found',
        'menu_name' => 'Models',
    );
    $args = array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'model'),
    );
    register_taxonomy('model', 'cars', $args);
}
add_action('init', 'custom_taxonomy_model');


?>