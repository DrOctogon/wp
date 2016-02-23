<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Jack_&_Rose
 */

if ( ! function_exists( 'jackrose_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function jackrose_posted_on() {
	$posted_on = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$posted_on = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated screen-reader-text" datetime="%3$s">%4$s</time>';
	}

	$posted_on = sprintf( $posted_on,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

}
endif;

if ( ! function_exists( 'jackrose_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function jackrose_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: by line */
		printf(
			'<span class="byline">' . esc_html_x( 'Posted by %s', 'post author', 'jackrose' ) . '</span>',
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'jackrose' ) );
		if ( $categories_list ) {
			echo '<span class="cat-links">' . $categories_list . '</span>'; // WPCS: XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'jackrose' ), esc_html__( '1 Comment', 'jackrose' ), esc_html__( '% Comments', 'jackrose' ) );
		echo '</span>';
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'jackrose' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;

if ( ! function_exists( 'jackrose_hero_section' ) ) :
/**
 * Prints HTML for hero section.
 */
function jackrose_hero_section() {
	
	if ( is_page() && class_exists( 'Attachments' ) ) :
		global $wp_query;
		$attachments = new Attachments( 'jackrose_hero_slider', $wp_query->post->ID );

		if ( $attachments->exist() ) : ?>
			<div id="hero" class="hero-section">

				<div class="hero-slider slick" data-slick-autoplay="<?php echo esc_attr( jackrose_get_theme_mod( 'hero_slider_autoplay' ) ); ?>">
					<?php while( $attachment = $attachments->get() ) : ?>

						<?php if ( $attachments->type() == 'video' ) : ?>
							<div class="slide">
								<?php
								$subtype = $attachments->subtype();
								$url = $attachments->url();
								$filename = str_replace( basename( $url ), basename( $url, '.' . $subtype ), $url );
								$meta = wp_get_attachment_metadata( $attachments->id() );
								?>

								<div class="video-bg jr-parallax"
									<?php if ( $attachments->field( 'parallax' ) ) : ?>
										data-stellar-ratio="0.5"
									<?php endif; ?>>
									<video autoplay loop muted poster="<?php echo esc_url( $attachments->field( 'video_poster' ) ); ?>" height="<?php echo esc_attr( $meta['height'] ); ?>" width="<?php echo esc_attr( $meta['width'] ); ?>">
										<source type="video/mp4" src="<?php echo esc_attr( $filename ); ?>.mp4">
										<source type="video/ogg" src="<?php echo esc_attr( $filename ); ?>.ogv">
										<source type="video/webm" src="<?php echo esc_attr( $filename ); ?>.webm">
									</video>
								</div>
								<div class="slide-overlay" style="background-color: <?php echo esc_attr( $attachments->field( 'overlay' ) ); ?>"></div>
							</div><!-- .slide -->
						<?php elseif ( $attachments->type() == 'image' ) : ?>
							<div class="slide">
								<div class="image-bg jr-parallax"
									<?php if ( $attachments->field( 'parallax' ) ) : ?>
										data-stellar-ratio="0.5"
									<?php endif; ?>>
									<?php echo wp_get_attachment_image( $attachments->id(), 'full' ); ?>
								</div>
								<div class="slide-overlay" style="background-color: <?php echo esc_attr( $attachments->field( 'overlay' ) ); ?>"></div>
							</div><!-- .slide -->
						<?php endif; ?>

					<?php endwhile; ?>
				</div><!-- .hero-slider -->

				<?php
				$logo = jackrose_get_theme_mod( 'hero_logo' );
				$logo = ( is_integer( $logo ) ) ? $logo : jackrose_get_attachment_id_from_url( $logo );
				?>

				<?php if ( ! empty( $logo ) ) : ?>
					<div class="hero-logo">
						<div class="wrapper">
							<div class="hero-logo-image">
								<?php echo wp_get_attachment_image( $logo , 'full', 0, array(
									'alt' => esc_attr( get_bloginfo( 'name' ) ),
									'data-0' => 'opacity: 1;',
									'data-top-bottom' => 'opacity: 0;',
									'data-offset-target' => '#hero',
								) ); ?>
							</div>

							<?php
							$button_text = jackrose_get_theme_mod( 'hero_button_text' );
							$button_href = jackrose_get_theme_mod( 'hero_button_href' );
							?>

							<?php if ( ! empty( $button_text ) && ! empty( $button_href ) ) : ?>
							<div class="hero-action">
								<a href="<?php echo esc_url( $button_href ); ?>" class="hero-button anchor-link"><span><?php echo ( $button_text ); ?></span><i class="fa fa-angle-double-down"></i></a>
							</div>
							<?php endif; ?>
						</div><!-- .wrapper -->
					</div><!-- .hero-logo -->
				<?php endif; ?>

				<?php if( jackrose_get_theme_mod( 'hero_effect' ) ) : ?>
					<div id="hero-effect" class="hero-effect" data-jr-effect="<?php echo esc_attr( jackrose_get_theme_mod( 'hero_effect' ) ); ?>"></div>
				<?php endif; ?>

			</div><!-- #hero -->
		<?php endif;
	endif;
}
endif;
