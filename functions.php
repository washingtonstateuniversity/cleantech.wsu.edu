<?php

include_once( 'includes/wsu-cleantech-cards-shortcode.php' ); // Include shortcode plugin.
include_once( 'includes/wsu-cleantech-home.php' ); // Include shortcode plugin.
include_once( 'includes/wsu-cleantech-sidethumb.php' ); // Include shortcode plugin.

add_filter( 'spine_child_theme_version', 'wsu_cleantech_theme_version' );
/**
 * Provides a theme version for use in cache busting.
 *
 * @since 1.8.0
 */
function wsu_cleantech_theme_version() {
	return '1.8.0';
}

add_action( 'wp_enqueue_scripts', 'cleantech_enqueue_scripts' );
/**
 * Enqueue the script required by the Cleantech theme.
 *
 * @since 1.0.0
 * @since 1.8.0 Enqueue libraries.
 */
function cleantech_enqueue_scripts() {
	// Script only contains document.ready calls, load in the footer.
	if ( ! is_front_page() ) {
		wp_enqueue_script( 'cleantech-script', get_stylesheet_directory_uri() . '/js/scripts.js', array( 'jquery' ), wsu_cleantech_theme_version(), true );
	}

	if ( is_front_page() ) {
		wp_enqueue_script( 'home', get_stylesheet_directory_uri() . '/src/js/home.js', array( 'jquery' ), wsu_cleantech_theme_version(), true );
		wp_enqueue_script( 'parallax', get_stylesheet_directory_uri() . '/src/js/parallax.js', array( 'jquery' ), wsu_cleantech_theme_version(), true );
		wp_enqueue_script( 'scroll-fade', get_stylesheet_directory_uri() . '/src/js/scroll-fade.js', array( 'jquery' ), wsu_cleantech_theme_version(), true );
		wp_enqueue_script( 'scroll-scale', get_stylesheet_directory_uri() . '/src/js/scroll-scale.js', array( 'jquery' ), wsu_cleantech_theme_version(), true );
		wp_enqueue_script( 'stick-and-go', get_stylesheet_directory_uri() . '/src/js/stick-and-go.js', array( 'jquery' ), wsu_cleantech_theme_version(), true );
	}
}

add_filter( 'embed_oembed_html', 'alx_embed_html', 10, 3 );
add_filter( 'video_embed_html', 'alx_embed_html' ); // Jetpack
/**
 * Filter the output of video embeds.
 */
function alx_embed_html( $html ) {
	return '<div class="video-container">' . $html . '</div>';
}
