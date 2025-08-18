<?php
// Enqueue compiled CSS & JS
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('mytheme-style', get_stylesheet_directory_uri() . '/style.css', [], filemtime(get_stylesheet_directory() . '/style.css'));
    wp_enqueue_style('custom', get_template_directory_uri() . 'custom.css', ['tailwind']);
    wp_enqueue_script('mytheme-scripts', get_stylesheet_directory_uri() . '/dist/main.js', [], filemtime(get_stylesheet_directory() . '/dist/main.js'), true);
});

function mytheme_enqueue_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Fira+Sans:wght@200;400;500;700&family=Lora:wght@400;500;700&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_fonts' );

// functions.php
function enqueue_glightbox_assets() {
    wp_enqueue_style('glightbox-css', 'https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/css/glightbox.min.css');
    wp_enqueue_script('glightbox-js', 'https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/js/glightbox.min.js', array(), '3.2.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_glightbox_assets');



?>
