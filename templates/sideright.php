<?php /* Template Name: Sideright */ ?>

<?php get_header(); ?>

	<main class="spine-sideright-template">

		<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

			<?php get_template_part('parts/headers'); ?>

			<section class="row sidebar">

				<div class="column one">

					<?php get_template_part('articles/article'); ?>

				</div><!--/column-->

				<div class="column two">
					<aside>
						<figure><?php the_post_thumbnail(array(270,270)); ?></figure>
						<?php
						$column = get_post_meta( get_the_ID(), 'column-two', true );
						if( ! empty( $column ) ) { echo $column; }
						?>
					</aside>
				</div>
			</section>
		<?php endwhile; endif; ?>
	</main>

<?php get_footer(); ?>