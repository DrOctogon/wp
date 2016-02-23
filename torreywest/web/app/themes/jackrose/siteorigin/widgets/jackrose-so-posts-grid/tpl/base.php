<?php
$the_query = new WP_Query( siteorigin_widget_post_selector_process_query( $instance['posts'] ) );
?>
<div class="jr-so-blog-grid jr-so-blog-grid-<?php echo esc_attr( $instance['columns'] ); ?>-columns clear">
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class="jr-so-blog-post <?php echo ( ! empty( $instance['animation'] ) ) ? 'jr-animation-' . esc_attr( $instance['animation'] ) : ''; ?>">

			<?php if ( has_post_thumbnail() ) : ?>
				<a class="jr-so-blog-post-thumbnail" href="<?php the_permalink(); ?>" rel="bookmark">
					<?php the_post_thumbnail( 'grid' ); ?>
				</a>
			<?php endif; ?>

			<div class="jr-so-blog-post-text">
				<h4 class="jr-so-blog-post-title typography-heading">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h4>

				<div class="jr-so-blog-post-content">
					<?php echo apply_filters( 'the_excerpt', wp_trim_words( get_the_content(), 30 ) ); ?>
				</div>
			</div>

		</div>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
</div>