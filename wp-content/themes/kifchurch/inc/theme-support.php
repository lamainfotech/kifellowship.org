<?php

/**
 * @package kifchurch
 * 
 * =====================
 * THEME SUPPORT OPTIONS
 * =====================
 */

add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );
add_theme_support(
    'custom-logo',
    array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    )
);

// Activate Nav Menu Option
function kif_register_nav_menu() {
    register_nav_menu( 'primary', 'Primary' );
}

add_action( 'after_setup_theme', 'kif_register_nav_menu' );


