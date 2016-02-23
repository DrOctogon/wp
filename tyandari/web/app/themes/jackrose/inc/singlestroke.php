<?php
/**
 * Theme dashboard page and other branding attributes.
 *
 * @package SingleStroke
 */

function singlestroke_customizer_upsell_box() {

	if ( is_child_theme() ) {
		$child_data = wp_get_theme();
		$theme_data = wp_get_theme( $child_data->get( 'Template' ) );
	} else {
		$theme_data = wp_get_theme();
	}

	?>
	<div id="singlestroke-customizer-upsell-box">
		<a id="singlestroke-customizer-upsell-link" href="<?php echo $theme_data->get( 'AuthorURI' ); ?>" target="_blank">
			<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASsAAAAtCAIAAAB56NpKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo4RTBDQjRGMzQ4M0VFNTExQUJFNUY2QjUxQkIwRjQzRCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyMkY4MUY3RDNFNEMxMUU1QjE2QUFFQjJFM0Q2RkMwOCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyMkY4MUY3QzNFNEMxMUU1QjE2QUFFQjJFM0Q2RkMwOCIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjk3MENCNEYzNDgzRUU1MTFBQkU1RjZCNTFCQjBGNDNEIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjhFMENCNEYzNDgzRUU1MTFBQkU1RjZCNTFCQjBGNDNEIi8+IDwvcmRmOkRlc2NyaXB0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%3D" alt="designed by Single Stroke">
		</a>
		<a id="singlestroke-customizer-rate-link" href="<?php echo esc_url( add_query_arg( 'action', 'rate', trailingslashit( $theme_data->get( 'ThemeURI' ) ) ) ); ?>" class="button" target="_blank">
			<span class="dashicons dashicons-star-filled"></span> <?php esc_html_e( 'Rate this theme!', 'singlestroke' ); ?>
		</a>
	</div>
	<style type="text/css">
		#singlestroke-customizer-upsell-box {
			display: none;
		}
		#singlestroke-customizer-upsell-link {
			position: absolute;
			bottom: 0;
			left: 0;
			width: 299px;
			height: 45px;
		}
		#singlestroke-customizer-rate-link {
			position: absolute;
			bottom: 8px;
			right: 8px;
		}
		#singlestroke-customizer-rate-link span {
		    font-size: 14px;
			line-height: 16px;
			vertical-align: middle;
		}
		.wp-full-overlay.section-open #singlestroke-customizer-upsell-link {
			display: none;
		}
		@media ( max-width: 639px ) {
			#singlestroke-customizer-upsell-box {
				display: none !important;
			}
		}
		@media ( min-width: 640px ) {
			#customize-controls .wp-full-overlay-sidebar-content {
				bottom: 90px;
			}
			.wp-full-overlay.section-open #customize-controls .wp-full-overlay-sidebar-content {
				bottom: 45px;
			}
			#singlestroke-customizer-upsell-link {
				bottom: 45px;
			}
		}
	</style>
	<script type="text/javascript">
		( function( exports, $ ) {

			"use strict";

			// Check if customizer exists
			if ( ! wp || ! wp.customize ) return;

			var api = wp.customize;

			// On document ready
			$( function() {

				// Initialize Layers Previewer
				$( '#singlestroke-customizer-upsell-box' ).insertAfter( '#customize-footer-actions' ).show();
			} );

		} )( wp, jQuery );
	</script>
	<?php
}
add_action( 'customize_controls_print_footer_scripts', 'singlestroke_customizer_upsell_box' );


function singlestroke_add_dashboard_page() {

	if ( is_child_theme() ) {
		$child_data = wp_get_theme();
		$theme_data = wp_get_theme( $child_data->get( 'Template' ) );
	} else {
		$theme_data = wp_get_theme();
	}

	$page = add_theme_page(
		sprintf( esc_html__( '%s Dashboard', 'singlestroke' ), $theme_data->get( 'Name' ) ),
		$theme_data->get( 'Name' ),
		'edit_theme_options', 
		$theme_data->get( 'TextDomain' ) . '-dashboard', 'singlestroke_dashboard_page'
	);

}
add_action( 'admin_menu', 'singlestroke_add_dashboard_page' );


function singlestroke_dashboard_page() {

	if ( is_child_theme() ) {
		$child_data = wp_get_theme();
		$theme_data = wp_get_theme( $child_data->get( 'Template' ) );
	} else {
		$theme_data = wp_get_theme();
	} ?>

	<div class="wrap ss-dashboard-wrap">

		<h1><?php printf( esc_html__( 'Welcome to %s %s', 'singlestroke' ), $theme_data->get( 'Name' ), $theme_data->get( 'Version' ) ); ?></h1>

		<div class="ss-dashboard-tagline">
			<?php echo apply_filters( 'singlestroke_dashboard_tagline', esc_html__( 'Thanks for choosing us! We at Single Stroke are very confident that you\'ll be delighted with our design and features. We couldn\'t be happier knowing our customers love our products.', 'singlestroke' ) ); ?>
		</div>

		<?php if ( is_child_theme() ) : ?>
			<div class="updated"><p><?php printf( esc_html__( 'You are running a Child Theme version of %s.', 'singlestroke' ), $theme_data->get( 'Name' ) ); ?></p></div>
		<?php endif; ?>

		<hr>

		<div class="ss-dashboard-features ss-dashboard-row">

			<div class="ss-dashboard-feature ss-dashboard-col">
				<h2><span class="ss-dashboard-feature-icon dashicons dashicons-lightbulb"></span><?php esc_html_e( 'Features List', 'singlestroke' ); ?></h2>
				<p><?php esc_html_e( 'Check the features list and the demo site to get you more familiar with the theme\'s features.', 'singlestroke' ); ?></p>
				<p><a href="<?php echo esc_url( $theme_data->get( 'ThemeURI' ) ); ?>" class="button"><?php esc_html_e( 'See Features and Demo', 'singlestroke' ); ?></a></p>
			</div>

			<div class="ss-dashboard-feature ss-dashboard-col">
				<h2><span class="ss-dashboard-feature-icon dashicons dashicons-editor-help"></span><?php esc_html_e( 'Documentation', 'singlestroke' ); ?></h2>
				<p><?php esc_html_e( 'Our documentation page helps you to get started and includes some short tutorials on setting up the theme.', 'singlestroke' ); ?></p>
				<p><a href="javascript:alert( '<?php esc_html_e( 'Documentation page is included in the download package.', 'singlestroke' ); ?>' );" class="button"><?php esc_html_e( 'Read Documentation', 'singlestroke' ); ?></a></p>
			</div>

			<div class="ss-dashboard-feature ss-dashboard-col">
				<h2><span class="ss-dashboard-feature-icon dashicons dashicons-sos"></span><?php esc_html_e( 'Need help?', 'singlestroke' ); ?></h2>
				<p><?php esc_html_e( 'If you need more specific helps, we are always on hand to help you. Feel free to ask for supports.', 'singlestroke' ); ?></p>
				<p><a href="<?php echo esc_url( add_query_arg( 'action', 'support', trailingslashit( $theme_data->get( 'ThemeURI' ) ) ) ); ?>" class="button"><?php esc_html_e( 'Ask for Support', 'singlestroke' ); ?></a></p>
			</div>

			<div class="ss-dashboard-feature ss-dashboard-col">
				<h2><span class="ss-dashboard-feature-icon dashicons dashicons-thumbs-up"></span><?php esc_html_e( 'Get featured now', 'singlestroke' ); ?></h2>
				<p><?php esc_html_e( 'Feel satisfied with the final result? Drop us a line, we would feature your site in our "Best Showcases" section.', 'singlestroke' ); ?></p>
				<p><a href="<?php echo esc_url( add_query_arg( 'action', 'rate', trailingslashit( $theme_data->get( 'ThemeURI' ) ) ) ); ?>" class="button"><?php esc_html_e( 'Rate / Comment', 'singlestroke' ); ?></a></p>
			</div>

			<div class="ss-dashboard-feature ss-dashboard-col">
				<h2><span class="ss-dashboard-feature-icon dashicons dashicons-email"></span><?php esc_html_e( 'Subscribe Updates', 'singlestroke' ); ?></h2>
				<p><?php esc_html_e( 'Get instant updates and info about our products directly right into your inbox. Don\'t worry, we don\'t spam.', 'singlestroke' ); ?></p>
				<p><a href="<?php echo $theme_data->get( 'AuthorURI' ); ?>subscribe/" class="button"><?php esc_html_e( 'Sign Up Newsletter', 'singlestroke' ); ?></a></p>
			</div>

			<div class="ss-dashboard-feature ss-dashboard-col">
				<h2><span class="ss-dashboard-feature-icon dashicons dashicons-twitter"></span><?php esc_html_e( 'Connect with us', 'singlestroke' ); ?></h2>
				<p><?php esc_html_e( 'We are also sharing good stuffs on Facebook, Twitter, Instagram, and Pinterest. Follow us and keep in touch.', 'singlestroke' ); ?></p>
				<p>
					<a href="https://www.facebook.com/singlestroke/" class="button"><?php esc_html_e( 'Facebook', 'singlestroke' ); ?></a>
					<a href="https://twitter.com/singlestroke_io/" class="button"><?php esc_html_e( 'Twitter', 'singlestroke' ); ?></a>
					<a href="https://instagram.com/singlestroke_io/" class="button"><?php esc_html_e( 'Instagram', 'singlestroke' ); ?></a>
					<a href="https://pinterest.com/singlestroke/" class="button"><?php esc_html_e( 'Pinterest', 'singlestroke' ); ?></a>
				</p>
			</div>

		</div>

		<p>
			<a href="<?php echo esc_url( $theme_data->get( 'AuthorURI' ) ); ?>">
				<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPAAAAAgCAYAAAAsa/W9AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RDI3NDBCQkM3MkZDMTFFNUI4ODlGOUI3QjZDNEQ0NzQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RDI3NDBCQkQ3MkZDMTFFNUI4ODlGOUI3QjZDNEQ0NzQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpEMjc0MEJCQTcyRkMxMUU1Qjg4OUY5QjdCNkM0RDQ3NCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpEMjc0MEJCQjcyRkMxMUU1Qjg4OUY5QjdCNkM0RDQ3NCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PsTfWnIAAAlWSURBVHja7FyNcaM8EFVu0gBXAi4Bl4BLgBJwCVACLgFKMCWYEkIJoYRQQs7+ZnfyvLP6sePkyH3aGSYxRkJa7dufh/DT6XQyUVYrxfk40v/j+difjzmqJQrLr6iC1UoF4L1Ifj5ezkcWVRMlAnjd0p6PTpxbzkdC30WJ8p9TjwBeJ3hrAdzt+ejpc0ZAjvL/lIxs5PViBxHA60ubEbyXundzPiYA7eVvKtqlEdT/lMj1Tcg2Xuio6ZrsKZJYq1q0VwHeHSzgG/0/UUTGxX2l68tvHvPFkAazfmItEQ4upTGvcdwdgXVH0Tanwygl1fY54mY1gpF3AvByZGYZZB0EUTmhhfUZswm4zlt/Qbq/ozHf47QKGlNz5zhOpJOR+uMjg/81uYD3ACBJQS8jjWf+5HpO1FeIHngNK5gXOvMBeBEuq+YI4HWlzyx7AbjaAeAUjG4JNPiUUvPPgDiF8bXC4diun+n6gubLjHp/QyStQVcjAPDeaKfdo6B+N5bvRg+4uU415CQajyPU0uCe7sEZTgvgLfn+sQZeZ80zCU+egDHMlsUOAUFmPkiw4oFj9gGopjT/hUqBDsC7Fw7LZeivoA8Ek08muscWdJuKaNzDsYhoyPd/obF3Hs6hEHPPHZnQZfxP5Cxm4cRxvXNyBL9xzhHA65BZRMNUib4LLagWuWu4LicDSz1RPnNEuZaA9ibaGEt7X6pZWdr8DnQ8HKUSAORAf30g3pgPFj+3zPsAjmRSgJhD5sKf30RmZAOw5viO1D4Tc0wB1LLNQVv/COD1CKbGrQBtT0a4KIaSChBxenpSooQvUrZgmBzlOouh5paMwTjGiDXdNjCFZ4NnfTQQKbd0cGRisBqLc+HoOouxDzTXk4iui7i/7LO1OITUkYm8AMATCweC6fqLuSY3r+RZ8bCzxQNoiy9rgVp4kUHxShoJkwMBMwiD4LSvVyJACv2FjLEQSgutHQsFDAO0q2jMIeO2yQHuwyDsPfVTJeaJek5pPRr4nCrX81g7YYwL3f+g6CdTdBxKzpU3kkMnUUIcHOXGIupaaWsL1eq5cJILgTRX1uQkAM0O4gi17s7hJHmuuItObouVTm4i0CYwj8EG4A4mwQstFc1p2awoZIYJ5cKoG1B4qyi1pvOLaIesZkVHbq4fk/C54YYxtuaaqU2BFBg9kUm2qyGK8EJugag5UZ+hAJ5JXx0QLItt4YTDWszHs2LNqzcOwyqUms6377pygEhelylOL6c2oREY19JHclUexzKZ691sE9muTHtL6isV4J+hXaY4s0IZE5JUjeKEasdnJwn2CxS7oWNHNz1aosQGDox+hdLPwRM9WjJw7LO0GERhwrYR2saIRrCBdGukuaaefrFdIwDUCCfVivOh0gudHR11lmaotro3UVLeifo+CvA2wlBvJd3wmlZZwzdRT4YQUNj+CA7V51gGj+NjsBRinRu6byX0MikkVBIAYAOB4qBcn1nsbeezoWdLytmTknLhxSQz14M3nyAFHB2RA1ONWWEgRwcwaweZ4xujzTg4dS08/aKB5KLUWCB6tnTdvW8ONdRfK6J/4zCU0UFMJbCWOG/pELVMJIdoOYhzLvBm4Djk+QXIosqTZTAbewInhNnaYCGdjCPCF44MaA/z7xRM+PgE1zbXBuaJG3NsjjyEmTfPjmijedrCUQeW5oMyZ+NwpaaZo2ZaFIX1kLr6SBPbGG+ZqwaEGq4dRVrNLCfvTurN/SLLjlpEdFnPDp45VEpJcVS8Pc8xA14C71F60ucaSqdK0TNvuOByx7V7rAVnvaXrcygTOD0vgWzKPNHXKNE2Ad0lFoD2DqDOgSRhBf2ws5SlywykJfaJm02uvv/lMFYtGsr0dFE82AZqw87Dumr7eisHuEuoWZLAFNpXN6UBTKpMoTfgTLTsYTSfl4PoBwnC3OKgsoDMo1fA1RPJciLgSNIOI0KiADil9hWtvaYX3vV0BNKvDGSvZ3Iwe5hrAg7T5ri1rA83j2wVEkzahZYh1JaMMRcRV8MUjm8UmcYGAsERyo2WxlPKdX1W0s6MlNErKaBMTydYwKOS0iyeNIEfd/TUNjf+TfmcUhWWFNU2Ri0iJRDRQyJm5ViQr5BeGAVnNbnH6IxSpxtg3FOFJCmUPmRaKWtpJuxehdFmCnBkRAvhBxJFHxM5CyPI0kzMc7ZEdVmq2J5nL0bfmlqArhYxj9xRCibK5wKuHYCwzZSIvLhSaFTwbKHrNbash1qPSRF82N54WNct1I0ttOs97Uqjbz9zjRGNvBPe9RBgTKnIKKbAdp+RxVJ32QwlFfXfQYnWtULYGPL+tbneAigfIRUOouoAPIVtLk5jVCI7p42z4pAz4VRyCxC1zI6zlkIpLRDgnXCCclcV6kdj+WdHhifHe1IyqN6XGV7eRkqVG4cwj0YQCsZcP8aYHWycq2+tXRLYn2+M8jHLEmhMieJBXXp6xFsuvIlCe7yBGxt+w3fvkG5qzx97hVnFersW5YLUzatFx3twutojmR4iXqi8AXnXm+uXE2qHTvjzYOkP592BPgYlpXf9AspeBJoTgJLfJMP+8e0y1lOq9H+Trp5vMLaQ61yAWO7s29bncscYF3PfBv5b2j0CvNqzWTaCTBAhRiGj5O6jDgy3UtLKSjjEnTJf7c0ejblOhZEPd+p8BDI0g1ItV8BbKGSZti4ZOASjlBK2cs2IzPKg3EPjH2bRfwYRNfew4CYUwFHWIymwrZpBlxB9toqz6C11I9ZsGIVbC9k0WQDANfkMhrxYsqnGfI6J30OaW1jSXX4c1TmcmoEMrhEASRw8CZ/fQmk4GPvOvQGuGZS6F51vqnxX3uPo4gv96xHe2JIA8JAUlLvHljucw2w+HvPloj5rzGPY85cH9oX14gyk0qykx8bc/ooklwS+V/7ulYz0gZlRIdaZeYG7MrcI4HUI1p+8G+srfy2CH0lNjujzk+SWrZlGcAYYab9ybUdRhvD2191nOo8A/vsp8xGiwE/4eZp/Sd5F3XyAWvmRTo03uOCLPg/5je/4OuHfE35VjFnjPoL326WHWpV/NO4rfraXNxeV5uM9gYesdYzAf0f41b3QZ9BRvjb95j3W408rJyIL/f0pc/UNNW6UcBnNYwm3COB/VHhDuvboJUqUWAOvvN5dInijxAj8M9PmMQI3ylfI0/v7e9RClCg/VP4IMAAH3TMtLgaojQAAAABJRU5ErkJggg%3D%3D" alt="designed by Single Stroke">
			</a>
		</p>

	</div>
	<style type="text/css">
	.ss-dashboard-wrap *, .ss-dashboard-wrap *:before, .ss-dashboard-wrap *:after {
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}
	.ss-dashboard-wrap {
		position: relative;
		margin: 25px 40px 0 20px;
		max-width: 1050px; /* readability */
	}
	.ss-dashboard-wrap p {
		font-size: 15px;
	}
	.ss-dashboard-wrap h1 {
		margin: 0.2em 0 0 0;
		padding: 0;
		color: #32373c;
		line-height: 1.2em;
		font-size: 2.8em;
		font-weight: 400;
	}
	.ss-dashboard-wrap h2 {
		margin: 0 0 1em;
		padding: 0;
		color: #23282d;
		line-height: 1.5em;
		font-size: 1.3em;
		font-weight: 600;
	}
	.ss-dashboard-wrap hr {
		margin: 2em 0;
	}
	.ss-dashboard-tagline {
		margin: 1em 0;
		color: #777;
		font-weight: normal;
		font-size: 19px;
		line-height: 1.6em;
	}
	.ss-dashboard-feature {
		margin: 20px 0;
	}
	.ss-dashboard-row {
		overflow: hidden;
		margin-left: -20px;
		margin-right: -20px;
	}
	.ss-dashboard-col {
		width: 33.33%;
		float: left;
		padding-left: 20px;
		padding-right: 20px;
	}
	.ss-dashboard-col:nth-child(3n+1) {
		clear: both;
	}
	.ss-dashboard-note {
		font-style: italic;
		color: #aaa;
	}
	.ss-dashboard-feature-icon {
		font-size: 1.4em;
		margin-right: 0.6em;
	}
	</style>

	<?php
}