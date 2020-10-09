<?php
add_action('wp_enqueue_scripts', 'blog_styles');
add_action('wp_enqueue_scripts', 'blog_scripts');

function blog_styles() {
    wp_enqueue_style('blog-style', get_stylesheet_uri());
    wp_enqueue_style('prism-style', get_template_directory_uri() . '/prism.css');
}

function blog_scripts() {
    wp_enqueue_script('blog-scripts', get_template_directory_uri().'/app.js', array(), null, true);
}



add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
add_theme_support('custom-background');

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3); //3 аргумента, 10 - приоритет станартный

//Этот хук отловит все аттрибуты у наших динамических ссылок
function filter_nav_menu_link_attributes($atts, $item, $args)
{
    if ($args->menu === 'Main') //если это главное меню

    {
        $atts['class'] = 'menu__link'; //таким образом добавляем класс в аттрибу ссылок
    }
    return $atts;
}
//atts - html-аттрибуты ссылок
//item - каждая отдельная ссылка
//args - все аргументы меню (все что есть в wp_nav_menu())

//Этот хук отловит все аттрибуты у наших динамических ли-шек
add_filter( 'nav_menu_css_class', 'filter_nav_menu_list_attributes', 10, 4 );
function filter_nav_menu_list_attributes( $atts, $item, $args ){
    if($args->menu === 'Main') {
        $atts['class'] = 'menu__item';

        //Если я нахожусь в категории БЛОГ, и в цикле мы выводим меню с ID который соотвествует блогу,то
        if( $item->ID === 56 && (in_category('blog'))) {
            $atts['class'] .= ' menu__item--active';
        }

        if($item->ID === 57 && in_category('projects')) {
            $atts['class'] .= ' menu__item--active';
        }

        //чтобы подсвечивать активную ссылку
        if ($item->current) //если текущая страница, на которой находимся, является активной, то берем ссылку и назначаем ей новый класс
        {
            $atts['class'] .= ' menu__item--active';
        }
    }
    return $atts;
}


?>

