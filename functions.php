<?php

function my_theme_enqueue_styles()
{
  wp_enqueue_style(
    'my-theme-style', // Handle (a unique identifier)
    get_stylesheet_uri(), // Path to the main style.css file
    array(), // Dependencies (optional, leave empty if none)
    wp_get_theme()->get('Version') // Version (recommended for cache busting)
  );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
