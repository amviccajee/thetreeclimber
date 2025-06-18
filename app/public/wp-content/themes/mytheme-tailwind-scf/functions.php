<?php
function mytheme_enqueue_assets() {
    // Check if Vite dev server is running
    $is_dev = wp_get_environment_type() === 'development';
    $vite_dev_server = 'http://localhost:5173';

    if ($is_dev && @file_get_contents($vite_dev_server)) {
        // Load CSS from Vite dev server
        wp_enqueue_style('vite-dev-style', $vite_dev_server . '/assets/css/style.css', [], time());
    } else {
        // Load compiled CSS
        $css_file = get_template_directory() . '/dist/css/style.css';
        $css_uri  = get_template_directory_uri() . '/dist/css/style.css';

        if (file_exists($css_file)) {
            wp_enqueue_style('tailwind', $css_uri, [], filemtime($css_file));
        }
    }
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');
