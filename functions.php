<?php
add_action('wp_enqueue_scripts', 'blog_styles');
add_action('wp_enqueue_scripts', 'blog_scripts');

function blog_styles() {
    wp_enqueue_style('blog-style', get_stylesheet_uri());
}

function blog_scripts() {
    wp_enqueue_script('blog-scripts', get_template_directory_uri().'/app.js', array(), null, true);
}

add_theme_support( 'menus' );

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);

function filter_nav_menu_link_attributes($atts, $item, $args){
    if ($args->menu === 'Main') {
        $atts['class'] = 'menu__link';
    }
    return $atts;
}

add_filter( 'nav_menu_css_class', 'filter_nav_menu_list_attributes', 10, 4 );

function filter_nav_menu_list_attributes( $atts, $item, $args ){
    if($args->menu === 'Main') {
        $atts['class'] = 'menu__item';

        if( $item->ID === 56 && (in_category('blog'))) {
            $atts['class'] .= ' menu__item--active';
        }

        if($item->ID === 57 && in_category('projects')) {
            $atts['class'] .= ' menu__item--active';
        }

        if ($item->current) {
            $atts['class'] .= ' menu__item--active';
        }
    }
    return $atts;
}
?>