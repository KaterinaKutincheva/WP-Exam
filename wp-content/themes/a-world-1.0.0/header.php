<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title><?php wp_title(); ?></title>
   <meta name="keywords" content="">
   <meta name="description" content=""> 
   <meta name="author" content="">

   <?php wp_head(); ?>
</head>

<body>
   <!-- header section start -->
   <div class="header_section">
      <div class="header_main">
         <div class="mobile_menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo_mobile">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Logo">
                  </a>
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <?php 
                  wp_nav_menu( array(
                      'theme_location' => 'primary',
                      'container' => false, 
                      'menu_class' => 'navbar-nav', 
                      'depth' => 2,
                      'fallback_cb' => 'wp_page_menu',
                  ));
                  ?>
               </div>
            </nav>
         </div>
         <div class="container-fluid">
            <div class="logo">
               <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Logo">
               </a>
            </div>
            <div class="menu_main">
               <?php 
               wp_nav_menu( array(
                   'theme_location' => 'primary',
                   'container' => false,
                   'menu_class' => '',
                   'depth' => 2,
                   'fallback_cb' => 'wp_page_menu',
               ));
               ?>
            </div>
         </div>
      </div>
   </div>
   <!-- header section end -->