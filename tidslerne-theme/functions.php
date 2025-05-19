<?php
function tidslerne_enqueue_styles() {
    wp_enqueue_style('tidslerne-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap', false);
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
    wp_enqueue_style('tidslerne-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'tidslerne_enqueue_styles');

