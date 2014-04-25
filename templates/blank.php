<?php

/* Template Name: Blank */
// Provides simply an unmodified <main> container

?>

<?php get_header(); ?>

<main class="spine-blank-template">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="article-header">
			<h1 class="article-title"><?php the_title(); ?></h1>
		</header>
		<?php the_content(); ?>
	</div><!-- #post -->

<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>