<?php get_header(); ?>

<main class="spine-category-template">

<?php get_template_part('parts/headers'); ?> 

<section class="row sidebar side-right gutter marginalize-ends">

	<div class="column one">
		<header class="article-header">
			<div class="article-title">
			<h1>Going up!</h1>
		</div>
	</header>
			<p>The PACCAR Environmental Technology Building will not only serve as a hub for multiple interdisciplinary science and engineering programs, it will also be an example of the progress science has made toward sustainable and efficient technology. The PACCAR building is expected to reach LEED gold certification and will include multiple systems to reduce its environmental impact, everything from permeable pavement to wood composite materials. Learn more about the building, the science behind it, and what sustainability means to WSU here in Going up! </p>
		
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
	// 'total'        => 5,
	// 'current'      => 0,
	'show_all'     => False,
	// 'end_size'     => 3,
	// 'mid_size'     => 4,
	'prev_next'    => True,
	'prev_text'    => __('« Previous'),
	'next_text'    => __('Next »'),
	// 'type'         => 'plain',
	'add_args'     => False,
	'add_fragment' => ''
); ?>

<?php echo paginate_links( $args ); ?>

</main>

<?php get_footer(); ?>