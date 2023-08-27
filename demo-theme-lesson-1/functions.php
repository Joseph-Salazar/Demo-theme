<?php
function demo_theme_enqueue_styles() {
    $stylesheet_uri = get_template_directory_uri() . '/style.css';
    $version = filemtime(get_template_directory() . '/style.css');

    wp_enqueue_style('demo-theme-style', $stylesheet_uri, array(), $version);
}

add_action('wp_enqueue_scripts', 'demo_theme_enqueue_styles');
