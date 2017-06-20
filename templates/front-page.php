<?php

/* Template Name: Clean Tech Front page */
// Provides simply an unmodified <main> container

?>

<?php get_header(); ?>

<main class="spine-cleantech-home">
	<section class="row halves wide">
	<?php if ( have_posts() ) :
		while ( have_posts() ) : the_post();
		?>

		<div id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="column one gain">
				<?php the_content(); ?>
			</div>
			<div class="column two lose">
				<article>
				<h1 class="article-title"><?php the_title(); ?></h1>
				<?php
				$column = get_post_meta( get_the_ID(), 'column-two', true );
				if ( ! empty( $column ) ) {
					echo wp_kses_post( $column );
				}
				?>
				</article>
			</div>
		</div><!-- #post -->

		<?php
		endwhile;
	endif; ?>
	</section>
</main>

<?php get_footer(); ?>
