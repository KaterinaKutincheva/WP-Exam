<?php
/**
 * Plugin Name: Softuni Practice
 * Plugin Author: Katerina Kutincheva
 * Author URI: https://softuni.bg
 * Description: This is a plugin for Softuni practice.
 */

/**
 * This function will be called when the plugin is activated.
 * It will create a new post with the title "Hello, Softuni!".
 * The post will be published and will have the content "This is a new post created by the Softuni Practice plugin."
 * The post will be assigned to the category with the name "Softuni".
 * The post will have the tag "Softuni Practice".
 * The post will have the author with the username "admin".
 * The post will have the featured image with the URL "https://softuni.bg/wp-content/uploads/2019/03/softuni-logo.png".
 *  
 * @return void
 */

function change_the_title( $title ) {
     return 'The title of ' . $title . ' is changed!';
 }

 add_filter( 'the_title', 'change_the_title' );

/**
 * 
 * @return void
 */

 function add_greetings_to_content( $content ) {
     return 'Hello, ' . $content;
 }

 add_filter( 'the_content', 'add_greetings_to_content' );

