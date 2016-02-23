<?php
/**
 * Template part for displaying page content in one-page page template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Jack_&_Rose
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( ! is_front_page() ) : ?>
		<header class="entry-header screen-reader-text">
			<?php the_title( '<h1 class="entry-title typography-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	<?php endif; ?>
	
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jackrose' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

