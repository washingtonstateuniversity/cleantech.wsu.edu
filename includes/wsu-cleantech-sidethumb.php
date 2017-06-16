<?php
/*
Plugin Name: WSU Clean Tech Thumbnails
Plugin URI: http://ucomm.wsu.edu/
Description: Allows users to register for assets.
Author: washingtonstateuniversity, jeremyfelt
Author URI: http://web.wsu.edu/
Version: 0.1.3
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

class WSU_Cleantech_Thumbnails {

	/**
	 * Setup the hooks.
	 */
	public function __construct() {
		add_shortcode( 'wsu_cleantech_thumb', array( $this, 'wsu_cleantech_thumb_display' ) );
	}

	/**
	 * Handle the display of the svg_ shortcode.
	 *
	 * @return string HTML output
	 */
	public function wsu_cleantech_thumb_display() {
		// Build the output to return for use by the shortcode.
		ob_start();
		?>
		<figure><?php the_post_thumbnail( array( 270, 270 ) ); ?></figure>
		<?php
		$content = ob_get_contents();
		ob_end_clean();

		return $content;
	}
}
new WSU_Cleantech_Thumbnails();
