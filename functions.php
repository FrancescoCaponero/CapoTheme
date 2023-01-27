<?php


/**
 * Theme reg and enqueue scripts and styles
 */


function CapoTheme_scripts_and_styles() {
        wp_register_script( 'app', get_template_directory_uri() . '/js/app.js', array('jquery'), '1.0.0', 'all');
        wp_enqueue_script( 'app' );
        wp_register_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'style' );
}
add_action( 'wp_enqueue_scripts', 'CapoTheme_scripts_and_styles' );


