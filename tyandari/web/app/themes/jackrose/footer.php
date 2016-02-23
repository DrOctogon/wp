<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jack_&_Rose
 */

?>
		
				</div><!-- .wrapper -->
			</div><!-- #content -->

			<footer id="colophon" class="footer-section site-footer" role="contentinfo">
				<div class="wrapper">
					<?php
					$logo = jackrose_get_theme_mod( 'footer_logo' );
					$logo = ( is_integer( $logo ) ) ? $logo : jackrose_get_attachment_id_from_url( $logo );
					?>

					<?php if ( ! empty( $logo ) ) : ?>
						<div class="footer-logo">
							<?php echo wp_get_attachment_image( $logo , 'full', 0, array(
								'alt' => esc_attr( get_bloginfo( 'name' ) ),
							) ); ?>
						</div><!-- .footer-logo -->
					<?php endif; ?>

					<?php
					$copyright = jackrose_get_theme_mod( 'footer_copyright_text' );
					?>

					<?php if ( ! empty( $copyright ) ) : ?>
						<div class="footer-copyright site-info">
							<?php echo html_entity_decode( $copyright ); ?>
						</div><!-- .site-info -->
					<?php endif; ?>

				</div><!-- .wrapper -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
