<?php

class WSU_Cleantech_Cards_Shortcode {

	/**
	 * Setup hooks to include.
	 *
	 * @since 1.8.0
	 */
	public function __construct() {
		add_shortcode( 'wsu_cleantech_cards', array( $this, 'display_wsu_cleantech_cards' ) );
	}

	/**
	 * Displays cards.
	 *
	 * @since 1.8.0
	 */
	public function display_wsu_cleantech_cards( $atts ) {
		$defaults = array(
			'count' => 10,
			'site_category_slug' => '',
		);

		$atts = shortcode_atts( $defaults, $atts );

		if ( empty( $atts['site_category_slug'] ) ) {
			return '';
		}

		$args = array(
			'posts_per_page' => absint( $atts['count'] ),
			'orderby' => 'rand',
		);

		if ( $atts['site_category_slug'] ) {
			$args['category_name'] = sanitize_key( $atts['site_category_slug'] );
		}

		$query = new WP_Query( $args );

		if ( ! $query->have_posts() ) {
			return '';
		}

		ob_start();

		while ( $query->have_posts() ) {
			$query->the_post();
			$featured_image_src = spine_get_thumbnail_image_src( 'full' );
			$image_id = get_post_thumbnail_id( get_the_ID() );
			$image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
			?>
			<article class="content-card">

				<figure class="content-card--feature-image ui-stick-and-go ui-scroll-fade"
						data-desktop-image="<?php echo esc_url( spine_get_featured_image_src( 'full' ) ); ?>"
						data-mobile-image="<?php echo esc_url( $featured_image_src ); ?>">
					<div class="content-card--feature-image-wrapper">
						<img src="<?php echo esc_url( $featured_image_src ); ?>" alt="<?php echo esc_attr( $image_alt ) ?>" />
					</div>
				</figure>

				<div class="content-card--text">

					<header>
						<h2><?php the_title(); ?></h2>
					</header>

					<?php
						add_filter( 'the_content', 'wpautop' );
						the_content();
						remove_filter( 'the_content', 'wpautop' );
					?>

				</div>

			</article>
			<?php
		}

		$content = ob_get_clean();

		return $content;
	}
}
new WSU_Cleantech_Cards_Shortcode();
