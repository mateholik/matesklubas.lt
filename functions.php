<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */

function addScripts() {
    $cssTime = filemtime(get_stylesheet_directory() . '/style.css' );
    $jsTime = filemtime(get_stylesheet_directory() . '/main.js' );
    //TODO istrint stuliu registracija, nes defaultu storefront pakrauna is childo stilius. dbr palieku kad versijos skirtusi css failo
    wp_enqueue_style( 'child-theme-style', get_template_directory_uri() . '/style.css', array(), $cssTime, false);
    wp_enqueue_script('child-theme-script', get_stylesheet_directory_uri() . '/main.js', array(), $jsTime, true);
}
add_action( 'wp_enqueue_scripts', 'addScripts' );

function footer_menu() {
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'footer_menu' );

include_once ('inc/header.php');
include_once ('inc/homepage.php');
include_once ('inc/woo.php');


add_image_size( 'home-slide', 300, 200, true );