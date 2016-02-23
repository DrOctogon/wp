<?php
/**
 * Generated CSS from customizer options.
 *
 * @package Jack_&_Rose
 */

?>

body {
	font-family: <?php echo jackrose_format_font_family_css( esc_html( jackrose_get_theme_mod( 'typography_body_font_family' ) ) ); ?>;
}

.typography-menu,
.button,
button,
input[type="button"],
input[type="reset"],
input[type="submit"],
.header-section,
.nav-links,
#cancel-comment-reply-link {
	font-family: <?php echo jackrose_format_font_family_css( esc_html( jackrose_get_theme_mod( 'typography_menu_font_family' ) ) ); ?>;
}
.typography-section-heading {
	font-family: <?php echo jackrose_format_font_family_css( esc_html( jackrose_get_theme_mod( 'typography_section_heading_font_family' ) ) ); ?>;
}
.typography-title,
.typography-heading,
h1, h2, h3, h4, h5, h6,
.comment-reply-title,
.comments-title {
	font-family: <?php echo jackrose_format_font_family_css( esc_html( jackrose_get_theme_mod( 'typography_headings_font_family' ) ) ); ?>;
}

a {
	color: <?php echo esc_html( jackrose_get_theme_mod( 'color_accent' ) ); ?>;
}

.button,
button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
	background-color: <?php echo esc_html( jackrose_get_theme_mod( 'color_button_bg' ) ); ?>;
	border-color: <?php echo esc_html( jackrose_get_theme_mod( 'color_button_bg' ) ); ?>;
	color: <?php echo esc_html( jackrose_get_theme_mod( 'color_button_text' ) ); ?>;
}
.button:hover,
button:hover,
input[type="button"]:hover,
input[type="reset"]:hover,
input[type="submit"]:hover,
.button:focus,
button:focus,
input[type="button"]:focus,
input[type="reset"]:focus,
input[type="submit"]:focus,
.button:active,
button:active,
input[type="button"]:active,
input[type="reset"]:active,
input[type="submit"]:active {
	background-color: <?php echo esc_html( jackrose_get_theme_mod( 'color_button_bg_hover' ) ); ?>;
	color: <?php echo esc_html( jackrose_get_theme_mod( 'color_button_text_hover' ) ); ?>;
}

#preloader,
.pace-progress {
	background-color: <?php echo esc_html( jackrose_get_theme_mod( 'color_preloader_bg' ) ); ?>;
}

.header-section {
	background-color: <?php echo esc_html( jackrose_get_theme_mod( 'color_header_bg' ) ); ?>;
	border-color: <?php echo esc_html( jackrose_get_theme_mod( 'color_header_border' ) ); ?>;
	color: <?php echo esc_html( jackrose_get_theme_mod( 'color_header_link' ) ); ?>;
}
.header-section a,
.header-navigation-toggle {
	color: <?php echo esc_html( jackrose_get_theme_mod( 'color_header_link' ) ); ?>;
}
.header-section a:hover, .header-section a:focus,
.header-navigation-toggle:hover, .header-navigation-toggle:focus {
	color: <?php echo esc_html( jackrose_get_theme_mod( 'color_header_link_hover' ) ); ?>;
}
.header-navigation > div > ul > li > a:hover:after,
.header-navigation > div > ul > li > a.focus:after {
	background-color: <?php echo esc_html( jackrose_get_theme_mod( 'color_header_link_border' ) ); ?>;
}
.header-navigation ul ul {
	background-color: <?php echo esc_html( jackrose_get_theme_mod( 'color_header_bg' ) ); ?>;
	border-color: <?php echo esc_html( jackrose_get_theme_mod( 'color_header_border' ) ); ?>;
}
.header-navigation ul ul li {
	border-color: <?php echo esc_html( jackrose_get_theme_mod( 'color_header_border' ) ); ?>;
}
.header-section .ribbon-menu, .header-section .ribbon-menu:hover, .header-section .ribbon-menu:focus {
	background-color: <?php echo esc_html( jackrose_get_theme_mod( 'color_header_ribbon_bg' ) ); ?>;
	color: <?php echo esc_html( jackrose_get_theme_mod( 'color_header_ribbon_text' ) ); ?>
}
.header-section .ribbon-menu:after {
	border-left-color: <?php echo esc_html( jackrose_get_theme_mod( 'color_header_ribbon_bg' ) ); ?>;
	border-right-color: <?php echo esc_html( jackrose_get_theme_mod( 'color_header_ribbon_bg' ) ); ?>;
}
@media screen and ( max-width: 1023px ) {
	.header-navigation > div {
		background-color: <?php echo esc_html( jackrose_get_theme_mod( 'color_header_bg' ) ); ?>;
	}
	.header-navigation > div > ul {
		border-color: <?php echo esc_html( jackrose_get_theme_mod( 'color_header_border' ) ); ?>;
	}
	.header-navigation li {
		border-color: <?php echo esc_html( jackrose_get_theme_mod( 'color_header_border' ) ); ?>;
	}
}

.hero-button, .hero-button:hover, .hero-button:focus {
	color: <?php echo esc_html( jackrose_get_theme_mod( 'color_hero_button' ) ); ?>;
}

.footer-section {
	padding: <?php echo esc_html( jackrose_get_theme_mod( 'footer_padding' ) ); ?>;
	background-color: <?php echo esc_html( jackrose_get_theme_mod( 'color_footer_bg' ) ); ?>;
	background-image: url(<?php echo esc_html( jackrose_get_theme_mod( 'footer_bg_image' ) ); ?>);
	background-repeat: <?php echo esc_html( jackrose_get_theme_mod( 'footer_bg_repeat' ) ); ?>;
	background-position: <?php echo esc_html( jackrose_get_theme_mod( 'footer_bg_position' ) ); ?>;
	background-size: <?php echo esc_html( jackrose_get_theme_mod( 'footer_bg_size' ) ); ?>;
	color: <?php echo esc_html( jackrose_get_theme_mod( 'color_footer_text' ) ); ?>;
}
.footer-section a, .footer-section a:hover, .footer-section a:focus {
	color: <?php echo esc_html( jackrose_get_theme_mod( 'color_footer_link' ) ); ?>;
}

.jr-so-gallery-grid-filters a.active {
	border-color: <?php echo esc_html( jackrose_get_theme_mod( 'color_accent' ) ); ?>;
}

.hero-effect-item {
	background-color: <?php echo esc_html( jackrose_get_theme_mod( 'color_hero_effect' ) ); ?>;
}