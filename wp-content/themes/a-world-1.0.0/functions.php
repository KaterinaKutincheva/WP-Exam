<?php

if ( ! defined( 'A_WORLD_1_0_0_VER' ) ) {
    define( 'A_WORLD_1_0_0_VER', '1.0.0' );
}

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_post_type_support( 'excerpt', array() );

// Enqueue assets
add_action( 'wp_enqueue_scripts', 'a_world_enqueue_assets' );

function a_world_enqueue_assets() {
    // Enqueue all CSS files
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), A_WORLD_1_0_0_VER );
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/css/style.css', array(), A_WORLD_1_0_0_VER );
    wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/css/responsive.css', array(), A_WORLD_1_0_0_VER );
    wp_enqueue_style( 'fevicon', get_template_directory_uri() . '/images/fevicon.png', array(), A_WORLD_1_0_0_VER );
    wp_enqueue_style( 'jquery.mCustomScrollbar.min-css', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.min.css', array(), A_WORLD_1_0_0_VER );
    wp_enqueue_style( 'font-awesome-css', 'https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css', array(), A_WORLD_1_0_0_VER );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap', array(), A_WORLD_1_0_0_VER );
    wp_enqueue_style( 'owl-carousel-min-css', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), A_WORLD_1_0_0_VER );
    wp_enqueue_style( 'owl-theme-default-min-css', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), A_WORLD_1_0_0_VER );
    wp_enqueue_style( 'fancybox-min-css', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css', array(), A_WORLD_1_0_0_VER );

    // Enqueue all JS files
    wp_enqueue_script( 'jquery' ); // WordPress default jQuery
    wp_enqueue_script( 'popper-min-js', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), A_WORLD_1_0_0_VER, true );
    wp_enqueue_script( 'bootstrap-bundle-min-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), A_WORLD_1_0_0_VER, true );
    wp_enqueue_script( 'plugin-js', get_template_directory_uri() . '/js/plugin.js', array('jquery'), A_WORLD_1_0_0_VER, true );
    wp_enqueue_script( 'jquery.mCustomScrollbar.concat-min-js', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', array('jquery'), A_WORLD_1_0_0_VER, true );
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), A_WORLD_1_0_0_VER, true );
    wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), A_WORLD_1_0_0_VER, true );
    wp_enqueue_script( 'fancybox-min-js', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js', array('jquery'), A_WORLD_1_0_0_VER, true );
}

// Register navigation menus
function a_world_register_menus() {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'a-world'),
            'footer'  => __('Footer Menu', 'a-world')
        )
    );
}
add_action('after_setup_theme', 'a_world_register_menus');

// Set homepage template
function set_homepage_template( $template ) {
    if ( is_front_page() ) {
        $template = locate_template( 'home.php' );
    }
    return $template;
}
add_filter( 'template_include', 'set_homepage_template' );
?>
