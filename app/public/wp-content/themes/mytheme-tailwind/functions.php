<?php
// Enqueue compiled CSS & JS
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('mytheme-style', get_stylesheet_directory_uri() . '/style.css', [], filemtime(get_stylesheet_directory() . '/style.css'));
    wp_enqueue_script('mytheme-scripts', get_stylesheet_directory_uri() . '/dist/main.js', [], filemtime(get_stylesheet_directory() . '/dist/main.js'), true);
});
