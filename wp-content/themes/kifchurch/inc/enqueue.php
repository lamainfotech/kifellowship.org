<?php

/**
 * @package kifchurch
 * 
 * ==========================
 * FRONTEND ENQUEUE FUNCTIONS
 * ==========================
 */

function kif_load_scripts() {
    wp_enqueue_style('kif-style-fancybox-css', get_template_directory_uri() . '/vendors/fancybox/jquery.fancybox.min.css');
    wp_enqueue_style( 'kif-style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'google-icons', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0', array(), '1.0.0', 'all' );
   
    wp_enqueue_script('kif-fancybox-js', get_template_directory_uri() . '/vendors/fancybox/jquery.fancybox.min.js', '', null, true);
    wp_enqueue_script('kif-style-bundle', get_template_directory_uri() . '/js/bundle.js', array('jquery'), null, true);
    // wp_enqueue_script( 'bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', array(), '5.2.0', false );
    // wp_enqueue_script( 'fontawesome-icon', 'https://kit.fontawesome.com/57ef5e3681.js', array(), '6.1.1', false );
}

add_action( 'wp_enqueue_scripts', 'kif_load_scripts' );
