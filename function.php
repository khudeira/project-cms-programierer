<?php
// Enable support for post thumbnails
add_theme_support('post-thumbnails');

// Register navigation menu
function khadhira_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'khadhira'),
    ));
}
add_action('init', 'khadhira_register_menus');

// Enqueue styles and scripts
function khadhira_enqueue_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'khadhira_enqueue_scripts');

// Register a Custom Post Type for Portfolio
function khadhira_create_portfolio_post_type() {
    $labels = array(
        'name' => 'Projects',
        'singular_name' => 'Project',
        'menu_name' => 'Portfolio',
        'add_new_item' => 'Add New Project',
        'edit_item' => 'Edit Project',
        'new_item' => 'New Project',
        'view_item' => 'View Project',
        'all_items' => 'All Projects',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-portfolio', // Icon for the admin menu
        'rewrite' => array('slug' => 'projects'),
    );

    register_post_type('project', $args);
}
add_action('init', 'khadhira_create_portfolio_post_type');

?>
