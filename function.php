<?php function enqueue_custom_styles() {
wp_enqueue_style('custom-styles', get_stylesheet_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');