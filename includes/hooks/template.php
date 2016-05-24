<?php
/**
 * Sensei Template Hooks
 *
 * Action/filter hooks used for Sensei functionality hooked into Sensei Templates
 */

// Prevent default Sensei styles from being loaded
add_filter( 'sensei_disable_styles', '__return_true' );



// Enqueue custom plugin scripes and styles
add_action( 'wp_enqueue_scripts', 'sensei_pro_enqueue_styles' );

function sensei_pro_enqueue_styles() {
	global $sensei_styles_dir;

	// Override front end styles
    wp_register_style( 'sensei-styles-pro-stylesheet', $sensei_styles_dir . 'assets/css/style.css' );
    wp_enqueue_style( 'sensei-styles-pro-stylesheet' );

    // Add custom JS
    wp_register_script( 'sensei-styles-pro-js', $sensei_styles_dir . 'assets/js/sensei-styles-pro.js' );
    wp_enqueue_script( 'sensei-styles-pro-js' );
}



// Replace default placeholder imager
function get_new_placeholder() {
	global $sensei_styles_dir;

	$placeholder_url = '<img src="' . $sensei_styles_dir . 'assets/images/placeholder.png" class="woo-image thumbnail alignleft" />';
	return $placeholder_url;
}
add_filter('sensei_course_placeholder_image_url', 'get_new_placeholder');
add_filter('sensei_lesson_placeholder_image_url', 'get_new_placeholder');