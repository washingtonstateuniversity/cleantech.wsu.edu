<?php /* Template Name: Halves */ ?>

<?php get_header(); ?>

<main>

<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

<?php get_template_part('parts/headers'); ?> 

<section class="row halves">

	<div class="column one">
	
		<?php get_template_part('articles/article'); ?>
		</div><!--/column-->
	
	<div class="column two">
		<?php 
		$column = get_post_meta( get_the_ID(), 'column-two', true );
		if( ! empty( $column ) ) { echo $column; }
		?>
		</div>

</section>
<?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>