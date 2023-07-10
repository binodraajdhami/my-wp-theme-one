<?php
defined('MYTHEMEONE_VERSION') or define('MYTHEMEONE_VERSION', '1.1.2');

// add theme supports
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');

// add styles to theme
function my_wp_themes_one_enqueue_style()
{
    wp_enqueue_style('bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', array(), MYTHEMEONE_VERSION);
    wp_enqueue_style('wptheme-style', get_template_directory_uri() . '/css/style.css', array(), MYTHEMEONE_VERSION);
}
// add scprits to theme
function my_wp_themes_one_enqueue_script()
{
    wp_enqueue_script('jquery-script', 'https://code.jquery.com/jquery-3.7.0.slim.min.js', array(), MYTHEMEONE_VERSION);
    wp_enqueue_script('bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array(), MYTHEMEONE_VERSION);
    wp_enqueue_script('wptheme-script', get_template_directory_uri() . '/js/script.js', array(), MYTHEMEONE_VERSION);
}
add_action('wp_enqueue_scripts', 'my_wp_themes_one_enqueue_style');
add_action('wp_enqueue_scripts', 'my_wp_themes_one_enqueue_script');

// add custom post type