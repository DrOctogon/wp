<?php
/**
 * Template Name: One Page
 *
 * The template for displaying one page layout. Please use Page Builder to fill the sections.
 *
 * @package Jack_&_Rose
 */

get_header(); ?>

	<div id="primary" class="content-area no-sidebar">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'one-page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
