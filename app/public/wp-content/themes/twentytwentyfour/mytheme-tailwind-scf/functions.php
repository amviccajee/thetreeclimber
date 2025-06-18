<?php
function mytheme_enqueue_assets() {
    $css_file = get_template_directory() . '/dist/css/style.css';
    $css_uri  = get_template_directory_uri() . '/dist/css/style.css';

    if (file_exists($css_file)) {
        wp_enqueue_style('tailwind', $css_uri, [], filemtime($css_file));
    }
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');
