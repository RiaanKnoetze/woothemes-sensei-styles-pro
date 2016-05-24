<?php
/**
 * Sensei Template Hooks
 *
 * Action/filter hooks used for Sensei functionality hooked into Sensei Templates
 */

add_filter( 'sensei_disable_styles', '__return_true' );
add_action( 'wp_head', 'sensei_pro_enqueue_styles' );

function sensei_pro_enqueue_styles() {
	global $sensei_styles_dir;

    wp_register_style( 'sensei-styles-pro', $sensei_styles_dir . 'assets/css/style.css' );
    wp_enqueue_style( 'sensei-styles-pro' );
}