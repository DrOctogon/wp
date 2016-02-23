<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jack_&_Rose
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class( jackrose_get_theme_mod( 'animation' ) ? 'jr-enable-animations' : 'jr-disable-animations' ); ?>>

		<?php
		$preloader = jackrose_get_theme_mod( 'preloader' );
		$embed = false;
		if ( is_page_template( 'page-templates/one-page.php' ) ) {
			if ( in_array( 'one-page', $preloader ) ) $embed = true;
		} else {
			if ( in_array( 'standard', $preloader ) ) $embed = true;
		}
		?>

		<?php if ( $embed ) : ?>
			<div id="preloader" class="preloader">
				<div class="wrapper">
					<div class="preloader-content">
						<?php
						$logo = jackrose_get_theme_mod( 'preloader_logo' );
						$logo = ( is_integer( $logo ) ) ? $logo : jackrose_get_attachment_id_from_url( $logo );
						?>

						<?php if ( ! empty( $logo ) ) : ?>
							<?php
							$meta = wp_get_attachment_metadata( $logo );
							$type = pathinfo( wp_get_attachment_url( $logo ), PATHINFO_EXTENSION );
							$data = file_get_contents( wp_get_attachment_url( $logo ) );
							$base64 = base64_encode( $data );
							?>
							<img src="<?php echo esc_attr( 'data:image/' . $type . ';base64,' . $base64 ); ?>" width="<?php echo esc_attr( $meta['width'] ); ?>" height="<?php echo esc_attr( $meta['height'] ); ?>" alt="">
						<?php endif; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>

		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jackrose' ); ?></a>
			<div id="top"></div>

			<?php if ( 'above-header' == jackrose_get_theme_mod( 'hero_position' ) ) {
				jackrose_hero_section();
			} ?>

			<div class="header-anchor"></div>
			<header id="masthead" class="header-section site-header header-floating" role="banner">
				<div class="wrapper">

					<?php if ( is_front_page() && ! is_paged() ) : ?>
						<h1 class="header-logo site-branding">
					<?php else : ?>
						<p class="header-logo site-branding">
					<?php endif; ?>

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">

							<?php
							$logo = jackrose_get_theme_mod( 'header_logo' );
							$logo = ( is_integer( $logo ) ) ? $logo : jackrose_get_attachment_id_from_url( $logo );
							?>

							<?php if ( ! empty( $logo ) ) : ?>
								<?php echo wp_get_attachment_image( $logo , 'full', 0, array( 'alt' => esc_attr( get_bloginfo( 'name' ) ) ) ); ?>
							<?php else : ?>
								<span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span>
							<?php endif; ?>
						</a>

					<?php if ( is_front_page() && ! is_paged() ) : ?>
						</h1><!-- .site-branding -->
					<?php else : ?>
						</p><!-- .site-branding -->
					<?php endif; ?>


					<nav id="site-navigation" class="header-navigation main-navigation clear" role="navigation">
						
						<button class="header-navigation-toggle menu-toggle">
							<span class="fa fa-navicon"></span>
							<span class="screen-reader-text"><?php esc_html_e( 'Primary Menu', 'jackrose' ); ?></span>
						</button>

						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

					</nav><!-- #site-navigation -->

					<?php
					$ribbon_text = jackrose_get_theme_mod( 'header_ribbon_text' );
					$ribbon_href = jackrose_get_theme_mod( 'header_ribbon_href' );
					?>

					<?php if ( ! empty( $ribbon_text ) && ! empty( $ribbon_href ) ) : ?>
						<a class="ribbon-menu" href="<?php echo esc_url( $ribbon_href ); ?>">
							<span><?php echo ( $ribbon_text ); ?></span>
						</a>
					<?php endif; ?>

				</div><!-- .wrapper -->
			</header><!-- #masthead -->

			<?php if ( 'below-header' == jackrose_get_theme_mod( 'hero_position' ) ) {
				jackrose_hero_section();
			} ?>

			<div id="content" class="site-content content-section">
				<div class="wrapper">