<?php

// Global version tracker.


include_once( 'includes/wsu-cleantech-home.php' ); // Include shortcode plugin.

add_action( 'wp_enqueue_scripts', 'cleantech_enqueue_scripts' );
/**
 * Enqueue the script required by the Cleantech theme.
 */
function cleantech_enqueue_scripts() {
	// Script only contains document.ready calls, load in the footer.
	wp_enqueue_script( 'cleantech-script', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), spine_get_script_version(), true );
}