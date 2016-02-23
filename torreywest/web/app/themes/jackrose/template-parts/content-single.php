<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Jack_&_Rose
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title typography-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php jackrose_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="entry-thumbnail"><?php the_post_thumbnail( 'content' ); ?></div>
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jackrose' ),
				'after'  => '</div>',
			) );
		?>

		<?php
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'jackrose' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'jackrose' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php jackrose_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

