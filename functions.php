<?php
require_once('custom_nav.php');
require_once('custom_nav_2.php');

function IRAWebsite_resources() {

    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0');

    wp_register_style('animate-css', get_stylesheet_directory_uri() . '/animate.min.css', array(), '3.5.0');
    wp_enqueue_style('animate-css');

    wp_register_style('mcmaster-brand', get_stylesheet_directory_uri() . '/mcmaster-brand.css', array(), '1.0');
    wp_enqueue_style('mcmaster-brand');

    wp_register_style('font-awesome', get_stylesheet_directory_uri() . '/font-awesome.min.css', array(), '4.5.0');
    wp_enqueue_style('font-awesome');

    wp_enqueue_script('roboto-google-font', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/jquery-1.12.0.min.js', array(), '1.12.0', true);
    wp_enqueue_script('test-isotope', get_template_directory_uri() . '/js/test_isotope.js', array('jquery'), '1.0');

    wp_enqueue_script('isotope', get_template_directory_uri() . '/isotope.pkgd.min.js', array(), '2.2.2', 'true');
}

add_action('wp_enqueue_scripts', 'IRAWebsite_resources');

// Navigation Menus
register_nav_menus(array(
    'primary' => __( 'Primary Menu'),
    'footer' => __( 'Footer Menu'),
    'sidebar' => __( 'Sidebar Menu'),
    'home-page' => __( 'Home Page Menu'),

));
