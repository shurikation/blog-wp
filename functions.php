<?php
add_action('wp_enqueue_scripts', 'blog_styles');
add_action('wp_enqueue_scripts', 'blog_scripts');

function blog_styles() {
    wp_enqueue_style('blog-style', get_stylesheet_uri());
}

function blog_scripts() {
    wp_enqueue_script('blog-scripts', get_template_directory_uri().'/app.js', array(), null, true);
}

add_theme_support( 'custom-logo' );

?>
