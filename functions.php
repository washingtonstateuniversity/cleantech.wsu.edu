<?php

// Global version tracker.

include_once( 'includes/wsu-clean-tech-cards-shortcode.php' ); // Include shortcode plugin.
include_once( 'includes/wsu-cleantech-home.php' ); // Include shortcode plugin.
include_once( 'includes/wsu-cleantech-sidethumb.php' ); // Include shortcode plugin.

add_action( 'wp_enqueue_scripts', 'cleantech_enqueue_scripts' );
/**
 * Enqueue the script required by the Cleantech theme.
 */
function cleantech_enqueue_scripts() {
	// Script only contains document.ready calls, load in the footer.
	wp_enqueue_script( 'cleantech-script', get_stylesheet_directory_uri() . '/js/scripts.js', array( 'jquery' ), spine_get_script_version(), true );
}

add_filter( 'embed_oembed_html', 'alx_embed_html', 10, 3 );
add_filter( 'video_embed_html', 'alx_embed_html' ); // Jetpack
/**
 * Filter the output of video embeds.
 */
function alx_embed_html( $html ) {
	return '<div class="video-container">' . $html . '</div>';
}
