<?php

add_action( 'wp_enqueue_scripts', 'softuni_enqueue_assets' );
function softuni_enqueue_assets() {
    // wp_enqueue_style( 'softuni', get_stylesheet_directory_url() . '/css/style.css' );
    wp_enqueue_style( 'softuni', get_stylesheet_directory_uri() . '/css/style.css' );
}