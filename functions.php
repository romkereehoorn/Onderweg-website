<?php

function load_stylesheets() {

    wp_register_style('ui_kit', get_template_directory_uri() . '/css/uikit.min.css', array(), false, 'all');
    wp_enqueue_style('ui_kit');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');


function load_jquery() {

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', '', 1, true);

    add_action('wp_enqueue_scripts', 'jquery');

    

}

add_action('wp_enqueue_scripts', 'load_jquery');


function loadjs() {

    wp_register_script('customjs', get_template_directory_uri() . '/js/script.js', '', 1, true);
    wp_enqueue_script('customjs');

}

add_action('wp_enqueue_scripts', 'loadjs');




add_theme_support('menus');


register_nav_menus(

    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
    )

);




