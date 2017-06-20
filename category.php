<?php get_header(); ?>

<main class="spine-category-template">

<?php get_template_part( 'parts/headers' ); ?>

<section class="row sidebar side-right gutter marginalize-ends">

	<div class="column one">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'articles/post', get_post_format() ); ?>

		<?php endwhile; ?>

	</div><!--/column-->

	<div class="column two">

		<?php get_sidebar(); ?>

	</div><!--/column two-->

</section>

<?php
global $wp_query;

$big = 99164; // need an unlikely integer
$args = array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format'       => 'page/%#%',
	'show_all'     => false,
	'prev_next'    => true,
	'prev_text'    => __( '« Previous' ),
	'next_text'    => __( 'Next »' ),
	'add_args'     => false,
	'add_fragment' => '',
); ?>

<?php echo paginate_links( $args ); // @codingStandardsIgnoreLine ?>

</main>

<?php get_footer(); ?>
