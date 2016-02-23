<?php
/**
 * Jack & Rose Theme Customizer.
 *
 * @package Jack_&_Rose
 */

global $jackrose_data;

/**
 * Customizer options.
 */
$theme_data = is_child_theme() ? wp_get_theme( 'jackrose' ) : wp_get_theme();

// Preloader.
jackrose_add_option( array(
	'settings'    => 'preloader',
	'section'     => 'preloader',
	'type'        => 'multicheck',
	'label'       => esc_html__( 'Show preloader on', 'jackrose' ),
	'choices'     => array(
		'one-page' => esc_html__( 'One Page template pages', 'jackrose' ),
		'standard' => esc_html__( 'Standard pages', 'jackrose' ),
	),
	'default'     => array( 'one-page' ),
) );
jackrose_add_option( array(
	'settings'    => 'color_preloader_bg',
	'section'     => 'preloader',
	'type'        => 'color',
	'label'       => esc_html__( 'BG color', 'jackrose' ),
	'default'     => '#b4d2c8',
) );
jackrose_add_option( array(
	'settings'    => 'preloader_logo',
	'section'     => 'preloader',
	'type'        => 'image',
	'label'       => esc_html__( 'Preloader logo', 'jackrose' ),
	'description' => esc_html__( 'Recommended to have the same dimension as hero logo.', 'jackrose' ),
	'default'     => '',
) );

// Color.
jackrose_add_option( array(
	'settings'    => 'animation',
	'section'     => 'styles',
	'type'        => 'checkbox',
	'label'       => esc_html__( 'Page builder animation', 'jackrose' ),
	'description' => esc_html__( 'Jack & Rose Page Builder elements has option to enable "animation" (when element entering the page). Uncheck this option would disable all animations configured in the Page Builder.', 'jackrose' ),
	'default'     => '1',
) );
jackrose_add_option( array(
	'settings'    => 'color_accent',
	'section'     => 'styles',
	'type'        => 'color',
	'label'       => esc_html__( 'Color accent', 'jackrose' ),
	'default'     => '#b4d2c8',
) );
jackrose_add_option( array(
	'settings'    => 'color_button_bg',
	'section'     => 'styles',
	'type'        => 'color',
	'label'       => esc_html__( 'Button BG color', 'jackrose' ),
	'default'     => '#b4d2c8',
) );
jackrose_add_option( array(
	'settings'    => 'color_button_text',
	'section'     => 'styles',
	'type'        => 'color',
	'label'       => esc_html__( 'Button text color', 'jackrose' ),
	'default'     => '#ffffff',
) );
jackrose_add_option( array(
	'settings'    => 'color_button_bg_hover',
	'section'     => 'styles',
	'type'        => 'color',
	'label'       => esc_html__( 'Button BG color (hover)', 'jackrose' ),
	'default'     => '#bcd7ce',
) );
jackrose_add_option( array(
	'settings'    => 'color_button_text_hover',
	'section'     => 'styles',
	'type'        => 'color',
	'label'       => esc_html__( 'Button text color (hover)', 'jackrose' ),
	'default'     => '#ffffff',
) );
jackrose_add_option( array(
	'settings'    => 'typography_subsets',
	'section'     => 'styles',
	'type'        => 'multicheck',
	'label'       => esc_html__( 'Font subsets', 'jackrose' ),
	'choices'     => jackrose_font_subsets(),
	'default'     => array( 'latin' ),
) );
jackrose_add_option( array(
	'settings'    => 'typography_body_font_family',
	'section'     => 'styles',
	'type'        => 'select',
	'label'       => esc_html__( 'Body font family', 'jackrose' ),
	'description' => esc_html__( 'Used in normal paragraphs.', 'jackrose' ),
	'choices'     => jackrose_font_choices(),
	'default'     => 'serif',
) );
jackrose_add_option( array(
	'settings'    => 'typography_section_heading_font_family',
	'section'     => 'styles',
	'type'        => 'select',
	'label'       => esc_html__( 'Section heading font family', 'jackrose' ),
	'description' => esc_html__( 'Used in section heading.', 'jackrose' ),
	'choices'     => jackrose_font_choices(),
	'default'     => 'Alex Brush',
) );
jackrose_add_option( array(
	'settings'    => 'typography_headings_font_family',
	'section'     => 'styles',
	'type'        => 'select',
	'label'       => esc_html__( 'Headings font family', 'jackrose' ),
	'description' => esc_html__( 'Used in normal headings (h1 - h6).', 'jackrose' ),
	'choices'     => jackrose_font_choices(),
	'default'     => 'serif',
) );
jackrose_add_option( array(
	'settings'    => 'typography_menu_font_family',
	'section'     => 'styles',
	'type'        => 'select',
	'label'       => esc_html__( 'Menu & button font family', 'jackrose' ),
	'description' => esc_html__( 'Used in header navigation and button.', 'jackrose' ),
	'choices'     => jackrose_font_choices(),
	'default'     => 'serif',
) );
jackrose_add_option( array(
	'settings'    => 'note_advanced_styles',
	'section'     => 'styles',
	'type'        => 'custom',
	'label'       => esc_html__( 'Changing font sizes etc.', 'jackrose' ),
	'default'     => sprintf( esc_html__( 'To customize font size, line height, etc, please use Custom CSS. Adding those options into this Theme Options page will make the page bloated and hurt performance. We also recommend %s plugin for customizing CSS with a nice visual preview.', 'jackrose' ), '<a href="https://siteorigin.com/css/">' . esc_html__( 'SiteOrigin CSS Editor', 'jackrose' ) . '</a>' ),
) );

// Header.
jackrose_add_option( array(
	'settings'    => 'color_header_bg',
	'section'     => 'header_styles',
	'type'        => 'color',
	'label'       => esc_html__( 'BG color', 'jackrose' ),
	'default'     => '#ffffff',
) );
jackrose_add_option( array(
	'settings'    => 'color_header_border',
	'section'     => 'header_styles',
	'type'        => 'color',
	'label'       => esc_html__( 'Border color', 'jackrose' ),
	'default'     => '#e5e5e5',
) );
jackrose_add_option( array(
	'settings'    => 'color_header_link',
	'section'     => 'header_styles',
	'type'        => 'color',
	'label'       => esc_html__( 'Link color', 'jackrose' ),
	'default'     => '#888888',
) );
jackrose_add_option( array(
	'settings'    => 'color_header_link_hover',
	'section'     => 'header_styles',
	'type'        => 'color',
	'label'       => esc_html__( 'Link hover color', 'jackrose' ),
	'default'     => '#444444',
) );
jackrose_add_option( array(
	'settings'    => 'color_header_link_border',
	'section'     => 'header_styles',
	'type'        => 'color',
	'label'       => esc_html__( 'Link hover border', 'jackrose' ),
	'default'     => '#b4d2c8',
) );
jackrose_add_option( array(
	'settings'    => 'color_header_ribbon_bg',
	'section'     => 'header_styles',
	'type'        => 'color',
	'label'       => esc_html__( 'Ribbon BG', 'jackrose' ),
	'default'     => '#b4d2c8',
) );
jackrose_add_option( array(
	'settings'    => 'color_header_ribbon_text',
	'section'     => 'header_styles',
	'type'        => 'color',
	'label'       => esc_html__( 'Ribbon text', 'jackrose' ),
	'default'     => '#ffffff',
) );
jackrose_add_option( array(
	'settings'    => 'header_logo',
	'section'     => 'header_content',
	'type'        => 'image',
	'label'       => esc_html__( 'Header logo', 'jackrose' ),
	'description' => esc_html__( 'Max width: 60px, max height: 50px;', 'jackrose' ),
	'default'     => '',
) );
jackrose_add_option( array(
	'settings'    => 'header_ribbon_text',
	'section'     => 'header_content',
	'type'        => 'text',
	'label'       => esc_html__( 'Ribbon text', 'jackrose' ),
	'description' => esc_html__( 'Leave it blank to hide the ribbon.', 'jackrose' ),
	'default'     => '',
) );
jackrose_add_option( array(
	'settings'    => 'header_ribbon_href',
	'section'     => 'header_content',
	'type'        => 'text',
	'label'       => esc_html__( 'Ribbon target URL', 'jackrose' ),
	'default'     => '',
) );

// Hero Section.
jackrose_add_option( array(
	'settings'    => 'hero_position',
	'section'     => 'hero',
	'type'        => 'select',
	'label'       => esc_html__( 'Hero section position', 'jackrose' ),
	'choices'     => array(
		'below-header' => esc_html__( 'Below header', 'jackrose' ),
		'above-header' => esc_html__( 'Above header', 'jackrose' ),
	),
	'default'     => 'above-header',
) );
jackrose_add_option( array(
	'settings'    => 'hero_logo',
	'section'     => 'hero',
	'type'        => 'image',
	'label'       => esc_html__( 'Hero logo', 'jackrose' ),
	'description' => esc_html__( 'Only displayed in a page with hero images or videos.', 'jackrose' ),
	'default'     => '',
) );
jackrose_add_option( array(
	'settings'    => 'hero_slider_autoplay',
	'section'     => 'hero',
	'type'        => 'number',
	'label'       => esc_html__( 'Hero slider autoplay (seconds)', 'jackrose' ),
	'description' => esc_html__( 'Set to 0 to disable autoplay', 'jackrose' ),
	'default'     => '5',
) );
jackrose_add_option( array(
	'settings'    => 'hero_effect',
	'section'     => 'hero',
	'type'        => 'select',
	'label'       => esc_html__( 'Effect', 'jackrose' ),
	'choices'     => array(
		false => esc_html__( 'No effect', 'jackrose' ),
		'sakura' => esc_html__( 'Sakura petal', 'jackrose' ),
		'snow' => esc_html__( 'Snow', 'jackrose' ),
	),
	'default'     => 'sakura',
) );
jackrose_add_option( array(
	'settings'    => 'color_hero_effect',
	'section'     => 'hero',
	'type'        => 'color-alpha',
	'label'       => esc_html__( 'Effect color', 'jackrose' ),
	'default'     => '#ffffff',
) );
jackrose_add_option( array(
	'settings'    => 'hero_button_text',
	'section'     => 'hero',
	'type'        => 'text',
	'label'       => esc_html__( 'Hero button text', 'jackrose' ),
	'description' => esc_html__( 'Leave it blank to hide the button.', 'jackrose' ),
	'default'     => esc_html__( 'Enter Site', 'jackrose' ),
) );
jackrose_add_option( array(
	'settings'    => 'hero_button_href',
	'section'     => 'hero',
	'type'        => 'text',
	'label'       => esc_html__( 'Hero button target URL', 'jackrose' ),
	'description' => esc_html__( 'Fill with #[section-id] to enable smooth scrolling to the targeted section, e.g. #contact or #rsvp.', 'jackrose' ),
	'default'     => '#intro',
) );
jackrose_add_option( array(
	'settings'    => 'color_hero_button',
	'section'     => 'hero',
	'type'        => 'color',
	'label'       => esc_html__( 'Hero button color', 'jackrose' ),
	'default'     => '#ffffff',
) );

// Sidebar.
jackrose_add_option( array(
	'settings'    => 'sidebar',
	'section'     => 'sidebar',
	'type'        => 'multicheck',
	'label'       => esc_html__( 'Show sidebar on default pages', 'jackrose' ),
	'choices'     => array(
		'home' => esc_html__( 'Posts index home page', 'jackrose' ),
		'archive' => esc_html__( 'Archive pages', 'jackrose' ),
		'search' => esc_html__( 'Search page', 'jackrose' ),
		'single' => esc_html__( 'Single post page', 'jackrose' ),
		'index' => esc_html__( 'Other default pages', 'jackrose' ),
	),
	'default'     => array( 'home', 'archive', 'search', 'single', 'index' ),
) );
jackrose_add_option( array(
	'settings'    => 'note_page_sidebar',
	'section'     => 'sidebar',
	'type'        => 'custom',
	'label'       => esc_html__( 'Sidebar on pages', 'jackrose' ),
	'default'     => esc_html__( 'To disable sidebar on Pages, please select "One Page" or "Full Width" page template in the Page editor.', 'jackrose' ),
) );

// Footer.
jackrose_add_option( array(
	'settings'    => 'color_footer_bg',
	'section'     => 'footer_styles',
	'type'        => 'color',
	'label'       => esc_html__( 'BG color', 'jackrose' ),
	'default'     => '#ffffff',
) );
jackrose_add_option( array(
	'settings'    => 'color_footer_text',
	'section'     => 'footer_styles',
	'type'        => 'color',
	'label'       => esc_html__( 'Text color', 'jackrose' ),
	'default'     => '#888888',
) );
jackrose_add_option( array(
	'settings'    => 'color_footer_link',
	'section'     => 'footer_styles',
	'type'        => 'color',
	'label'       => esc_html__( 'Link color', 'jackrose' ),
	'default'     => '#444444',
) );
jackrose_add_option( array(
	'settings'    => 'footer_bg_image',
	'section'     => 'footer_styles',
	'type'        => 'image',
	'label'       => esc_html__( 'BG image', 'jackrose' ),
	'default'     => '',
) );
jackrose_add_option( array(
	'settings'    => 'footer_bg_size',
	'section'     => 'footer_styles',
	'type'        => 'select',
	'label'       => esc_html__( 'BG size', 'jackrose' ),
	'choices'     => array(
		'auto' => esc_html__( 'auto', 'jackrose' ),
		'cover' => esc_html__( 'cover', 'jackrose' ),
		'contain' => esc_html__( 'contain', 'jackrose' ),
	),
	'default'     => 'cover',
) );
jackrose_add_option( array(
	'settings'    => 'footer_bg_repeat',
	'section'     => 'footer_styles',
	'type'        => 'select',
	'label'       => esc_html__( 'BG repeat', 'jackrose' ),
	'choices'     => array(
		'no-repeat' => esc_html__( 'no repeat', 'jackrose' ),
		'repeat-x' => esc_html__( 'repeat X', 'jackrose' ),
		'repeat-y' => esc_html__( 'repeat Y', 'jackrose' ),
		'repeat' => esc_html__( 'repeat both', 'jackrose' ),
	),
	'default'     => 'no-repeat',
) );
jackrose_add_option( array(
	'settings'    => 'footer_bg_position',
	'section'     => 'footer_styles',
	'type'        => 'select',
	'label'       => esc_html__( 'BG position', 'jackrose' ),
	'choices'     => array(
		'left top' => esc_html__( 'left top', 'jackrose' ),
		'left center' => esc_html__( 'left center', 'jackrose' ),
		'left bottom' => esc_html__( 'left bottom', 'jackrose' ),
		'center top' => esc_html__( 'center top', 'jackrose' ),
		'center center' => esc_html__( 'center center', 'jackrose' ),
		'center bottom' => esc_html__( 'center bottom', 'jackrose' ),
		'right top' => esc_html__( 'right top', 'jackrose' ),
		'right center' => esc_html__( 'right center', 'jackrose' ),
		'right bottom' => esc_html__( 'right bottom', 'jackrose' ),
	),
	'default'     => 'center center',
) );
jackrose_add_option( array(
	'settings'    => 'footer_padding',
	'section'     => 'footer_styles',
	'type'        => 'text',
	'label'       => esc_html__( 'Padding', 'jackrose' ),
	'description' => esc_html__( 'Follows the standard CSS format for padding attribute.', 'jackrose' ),
	'default'     => '6em 0 3em',
) );
jackrose_add_option( array(
	'settings'    => 'footer_logo',
	'section'     => 'footer_content',
	'type'        => 'image',
	'label'       => esc_html__( 'Logo', 'jackrose' ),
	'default'     => '',
) );
jackrose_add_option( array(
	'settings'    => 'footer_copyright_text',
	'section'     => 'footer_content',
	'type'        => 'textarea',
	'label'       => esc_html__( 'Copyright text', 'jackrose' ),
	'default'     => sprintf(
		esc_html__( 'Copyright &copy; 2015 &mdash; designed by %s', 'jackrose' ),
		'<a href="' . esc_url( $theme_data->get( 'AuthorURI' ) ) . '">' . $theme_data->get( 'Author' ) . '</a>'
	),
	'sanitize_callback' => 'jackrose_unfiltered_sanitize',
) );

// Custom Scripts.
jackrose_add_option( array(
	'settings'    => 'custom_css',
	'section'     => 'custom_css',
	'type'        => 'code',
	'label'       => esc_html__( 'Custom CSS', 'jackrose' ),
	'description' => esc_html__( 'Your custom CSS to override the default style or anything which can not be configured via this Customizer', 'jackrose' ),
	'default'     => '',
	'choices'     => array(
		'language' => 'css',
		'theme'    => 'elegant',
		'height'   => 200,
	),
	'sanitize_callback' => 'jackrose_unfiltered_sanitize',
) );
jackrose_add_option( array(
	'settings'    => 'note_custom_css',
	'section'     => 'custom_css',
	'type'        => 'custom',
	'label'       => esc_html__( 'Using visual CSS editor', 'jackrose' ),
	'default'     => sprintf( esc_html__( 'We recommend %s plugin if you want to make custom CSS changes with interactive UI to select the elements.', 'jackrose' ), '<a href="https://siteorigin.com/css/">' . esc_html__( 'SiteOrigin CSS Editor', 'jackrose' ) . '</a>' ),
) );

/**
 * Register Customizer sections.
 */
function jackrose_customize_register( $wp_customize ) {
	if ( class_exists( 'Kirki' ) ) {
		global $jackrose_data;
		$i = 160;

		// Register sections and panels.
		Kirki::add_section( 'preloader', array(
			'title'    => esc_html__( 'Preloader', 'jackrose' ),
			'priority' => ++$i,
		) );

		Kirki::add_section( 'styles', array(
			'title'    => esc_html__( 'Styles', 'jackrose' ),
			'priority' => ++$i,
		) );

		Kirki::add_panel( 'header', array(
			'title'    => esc_html__( 'Header', 'jackrose' ),
			'priority' => ++$i,
		) );

			Kirki::add_section( 'header_styles', array(
				'title'    => esc_html__( 'Styles', 'jackrose' ),
				'panel'    => 'header',
				'priority' => ++$i,
			) );

			Kirki::add_section( 'header_content', array(
				'title'    => esc_html__( 'Content', 'jackrose' ),
				'panel'    => 'header',
				'priority' => ++$i,
			) );

		Kirki::add_section( 'hero', array(
			'title'    => esc_html__( 'Hero Section', 'jackrose' ),
			'priority' => ++$i,
		) );

		Kirki::add_section( 'sidebar', array(
			'title'    => esc_html__( 'Sidebar', 'jackrose' ),
			'priority' => ++$i,
		) );

		Kirki::add_panel( 'footer', array(
			'title'    => esc_html__( 'Footer', 'jackrose' ),
			'priority' => ++$i,
		) );

			Kirki::add_section( 'footer_styles', array(
				'title'    => esc_html__( 'Styles', 'jackrose' ),
				'panel'    => 'footer',
				'priority' => ++$i,
			) );

			Kirki::add_section( 'footer_content', array(
				'title'    => esc_html__( 'Content', 'jackrose' ),
				'panel'    => 'footer',
				'priority' => ++$i,
			) );

		Kirki::add_section( 'social_media', array(
			'title'    => esc_html__( 'Social Media Settings', 'jackrose' ),
			'priority' => ++$i,
		) );

		Kirki::add_section( 'custom_css', array(
			'title'    => esc_html__( 'Custom CSS', 'jackrose' ),
			'priority' => ++$i,
		) );
	}
}
add_action( 'customize_register', 'jackrose_customize_register' );

/**
 * Kirki not installed notification.
 */
function jackrose_no_kirki_found() {
	if ( ! class_exists( 'Kirki' ) ) : ?>
		<div id="no-kirki" class="error" style="display: none; margin: 10px;">
			<p><?php esc_html_e( 'Please install Kirki Toolkit plugin to customize this theme', 'jackrose' ); ?></p>
		</div>
		<script type="text/javascript">
			;jQuery.noConflict();

			(function( $ ) {
				"use strict";

				$( document ).on( 'ready', function() {

					$( '#no-kirki' ).insertAfter( '#customize-theme-controls' ).show();

				});

			})( jQuery );
		</script>
	<?php endif;
}
add_action( 'customize_controls_print_footer_scripts', 'jackrose_no_kirki_found' );

/**
 * Register Customizer fields.
 */
if ( ! function_exists( 'jackrose_kirki_fields' ) ) :
function jackrose_kirki_fields( $fields ) {
	global $jackrose_data;

	// Filter: jackrose_data_customizer.
	// Use this filter to add or change customizer options.
	return array_merge( $fields, apply_filters( 'jackrose_data_customizer', $jackrose_data['customizer'] ) );
}
endif; // jackrose_kirki_fields
add_filter( 'kirki/fields', 'jackrose_kirki_fields' );