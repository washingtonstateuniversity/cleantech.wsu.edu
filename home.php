<?php get_header(); ?>

<main class="spine-archive-template">

<?php if ( have_posts() ) : ?>

<?php get_template_part('parts/headers'); ?> 

<section class="row sidebar side-right gutter marginalize-ends">
<img src="/wp-content/uploads/sites/22/2014/08/LabBuilding.jpg" alt="Paccard Lab Building" width="600" height="300">
	<div class="column one">
	
		<?php while ( have_posts() ) : the_post(); ?>
				
			<?php get_template_part( 'articles/post', get_post_format() ); ?>

		<?php endwhile; ?>
		
	</div><!--/column-->

	<div class="column two">
		
		<?php get_sidebar(); ?>
		
	</div><!--/column two-->

</section>

<?php endif; ?>

</main>

<?php get_footer(); ?>