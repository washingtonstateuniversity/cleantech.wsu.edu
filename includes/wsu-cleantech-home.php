<?php
/*
Plugin Name: WSU Clean Tech Home
Plugin URI: http://ucomm.wsu.edu/
Description: Allows users to register for assets.
Author: washingtonstateuniversity, jeremyfelt
Author URI: http://web.wsu.edu/
Version: 0.1.3
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

class WSU_Cleantech_Home {

	/**
	 * Setup the hooks.
	 */
	public function __construct() {

		add_shortcode( 'wsu_cleantech_home', array( $this, 'wsu_cleantech_home_display' ) );
	}

	/**
	 * Handle the display of the svg_ shortcode.
	 *
	 * @return string HTML output
	 */
	public function wsu_cleantech_home_display() {
		// Build the output to return for use by the shortcode.
		ob_start();
		?>
		<nav>
		<aside class="tile" style="background: url('<?php echo esc_url( get_stylesheet_directory_uri() . '/img/LabBuilding.jpg' ); ?>'); background-size: cover; width: 100%;"><a href="/home-page/clean-technology-laboratory-building/"><header>
		<h3 class="title">Paccar Environmental Technology Building</h3>
		<h4>Fostering the synergy needed to drive innovation</h4>
		</header></a></aside>
		<aside class="tile" style="background: url('<?php echo esc_url( get_stylesheet_directory_uri() . '/img/renewable.jpg' ); ?>'); background-size:cover;">
			<a href="/home-page/renewable-biofuels-and-bioproducts/">
			<header>
				<h3 class="title">Renewable Biofuels and Bioproducts</h3>
				<h4>Developing cost-effective alternatives</h4>
			</header>
			</a>
		</aside>
		<aside class="tile" style="background: url('<?php echo esc_url( get_stylesheet_directory_uri() . '/img/sustainable.jpg' ); ?>'); background-size:cover;">
			<a href="/home-page/sustainable-design/">
			<header>
				<h3 class="title">Sustainable Design</h3>
				<h4>Preserving resources in the built environment</h4>
			</header>
			</a>
		</aside>
		<aside class="tile" style="background: url('<?php echo esc_url( get_stylesheet_directory_uri() . '/img/smart.jpg' ); ?>'); background-size:cover;">
			<a href="/home-page/smart-grid/">
			<header>
				<h3 class="title">Smart Grid</h3>
				<h4>Managing shared energy systems</h4>
			</header>
			</a>
		</aside>
		<aside class="tile" style="background: url('<?php echo esc_url( get_stylesheet_directory_uri() . '/img/advanced.jpg' ); ?>'); background-size:cover;">
			<a href="/home-page/advance-materials/">
			<header>
				<h3 class="title">Advanced Materials</h3>
				<h4>Improving materials that form our infrastructure</h4>
			</header>
			</a>
		</aside>
		<aside class="tile" style="background: url('<?php echo esc_url( get_stylesheet_directory_uri() . '/img/farming.jpg' ); ?>'); background-size:cover;">
			<a href="/home-page/precision-agriculture/">
			<header>
				<h3 class="title">Precision Agriculture</h3>
				<h4>Reducing environmental impact</h4>
			</header>
			</a>
		</aside><aside class="tile" style="background: url('<?php echo esc_url( get_stylesheet_directory_uri() . '/img/wave.jpg' ); ?>'); background-size:cover;">
			<a href="/home-page/air-and-water/">
			<header>
				<h3 class="title">Air and Water</h3>
				<h4>Advancing energy-related policies and practices</h4>
			</header>
			</a>
		</aside>
		</nav>
		<?php
		$content = ob_get_contents();
		ob_end_clean();

		return $content;
	}
}
new WSU_Cleantech_Home();
