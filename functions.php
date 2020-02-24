<?php 

// Theme support
function fc_theme_support() {
    // ADd featured image support
    add_theme_support( 'post-thumbnails' );
    // Nav menus
    register_nav_menus( array(
        'primary' => __('Primary Menu')
    ));
}
add_action( 'after_setup_theme', 'fc_theme_support' );