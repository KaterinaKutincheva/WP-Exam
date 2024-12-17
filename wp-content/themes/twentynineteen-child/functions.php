<?php
add_action( 'wp_enqueue_scripts', 'twentynineteen_child_enque_styles' );

function twentynineteen_child_enque_styles() {
	wp_enqueue_style( 
		'twenynineteen-parent-style', 
		get_parent_theme_file_uri( 'style.css' )
	);
}