<?php 

// Register Custom Post Type
function custom_post_type_cars() {
    $labels = array(
        'name' => 'Cars',
        'singular_name' => 'Car',
        'menu_name' => 'Cars',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Car',
        'edit_item' => 'Edit Car',
        'new_item' => 'New Car',
        'view_item' => 'View Car',
        'view_items' => 'View Cars',
        'search_items' => 'Search Cars',
        'not_found' => 'No cars found',
        'not_found_in_trash' => 'No cars found in Trash',
        'all_items' => 'All Cars',
        'archives' => 'Car Archives',
        'attributes' => 'Car Attributes',
        'insert_into_item' => 'Insert into car',
        'uploaded_to_this_item' => 'Uploaded to this car',
        'featured_image' => 'Car Image',
        'set_featured_image' => 'Set car image',
        'remove_featured_image' => 'Remove car image',
        'use_featured_image' => 'Use as car image',
        'filter_items_list' => 'Filter cars list',
        'items_list_navigation' => 'Cars list navigation',
        'items_list' => 'Cars list',
    );
    $args = array(
        'label' => 'Cars',
        'description' => 'A custom post type for cars',
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'cars'),
    );
    register_post_type('cars', $args);
}
add_action('init', 'custom_post_type_cars');

add_theme_support( 'post-thumbnails' );


include_once('taxonomy.php');

// Register js file

function enqueue_custom_scripts() { 
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/js/style.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


?>