<?php

/**
 * Libelnet Template thema functies
 *
 */


// load stylesheets
function load_css()
{
    wp_register_style('main', get_template_directory_uri() . '/assets/scss/main.scss',
    array(), false, 'all');
    wp_enqueue_style('main.scss');

    wp_register_style('aos', get_template_directory_uri() . '/assets/css/aos.css',
    array(), false, 'all');
    wp_enqueue_style('aos.css'); // <-- AOS CSS Files


    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css',
        array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_enqueue_style( 'custom-fa', 'https://use.fontawesome.com/releases/v5.7.1/css/all.css' );

}
add_action('wp_enqueue_scripts','load_css', 1);


//load javascript
function load_js()
{
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',
        'jquery', false, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('aos', get_template_directory_uri() . '/assets/js/aos.js',
    'jquery', false, true);
    wp_enqueue_script('aos'); // <-- AOS Library

    wp_register_script('custom', get_template_directory_uri() . '/assets/js/custom.js',
    'jquery', false, true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts','load_js');


//theme options
add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('post-thumbnails');


// menus
register_nav_menus(

    array(

        'hoofdmenu' => 'Hoofdmenu'
    )
);

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


// sidebars registreren
function my_sidebars()
{

    register_sidebar(

        array(

            'name' => 'Footer Left',
            'id' => 'footer-left',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
            'before_widget' => '<div class="footer-left">',
            'after_widget' => '</div>'
        )
    );

    register_sidebar(

        array(

            'name' => 'Footer Center',
            'id' => 'footer-center',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
            'before_widget' => '<div class="footer-center">',
            'after_widget' => '</div>'
        )   
    );

    register_sidebar(

        array(

            'name' => 'Footer Right',
            'id' => 'footer-right',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
            'before_widget' => '<div class="footer-right">',
            'after_widget' => '</div>'
        )   
    );

    register_sidebar(

        array(

            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
            'before_widget' => '<div class="page-sidebar">',
            'after_widget' => '</div>'
        )   
    );

}
add_action('widgets_init','my_sidebars');