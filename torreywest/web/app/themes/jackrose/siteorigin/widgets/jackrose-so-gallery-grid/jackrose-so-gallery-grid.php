<?php
/*
Widget Name: Jack & Rose: Gallery Grid
Description: Photo gallery in grid layout.
Author: Single Stroke
Author URI: https://singlestroke.io/
*/

class JackRose_SO_Gallery_Grid extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'jackrose-so-gallery-grid',
			esc_html__( 'Jack & Rose: Gallery Grid', 'jackrose' ),
			array(
				'description' => esc_html__( 'Photo gallery in grid layout.', 'jackrose' ),
				'panels_groups' => array( 'jackrose' ),
			),
			array(

			),
			array(
				'photos' => array(
					'type' => 'repeater',
					'label' => esc_html__( 'Photos', 'jackrose' ),
					'item_name' => esc_html__( 'Photo', 'jackrose' ),
					'item_label' => array(
						'selector' => "[id*='image']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'scroll_count' => 10,
					'fields' => array(
						'image' => array(
							'type' => 'media',
							'label' => esc_html__( 'Image', 'jackrose' ),
							'library' => 'image',
						),
						'tags' => array(
							'type' => 'text',
							'label' => esc_html__( 'Filter keywords', 'jackrose' ),
							'description' => esc_html__( 'Comma separated keywords, e.g. "Engagement, Selfie, Trip".', 'jackrose' ),
						),
					),
				),
				'columns' => array(
					'type' => 'slider',
					'label' => esc_html__( 'Number of columns', 'jackrose' ),
					'min' => 1,
					'max' => 4,
					'default' => 4,
					'integer' => true,
				),
				'filter' => array(
					'type' => 'checkbox',
					'label' => esc_html__( 'Show filter buttons', 'jackrose' ),
				),
				'label_all_photos' => array(
					'type' => 'text',
					'label' => esc_html__( 'Label for "All photos"', 'jackrose' ),
					'default' => esc_html__( 'All photos', 'jackrose' ),
				),
			),
			JACKROSE_SITEORIGIN_DIR . '/widgets/jackrose-so-gallery-grid/'
		);
	}

	function initialize() {
		$this->register_frontend_scripts( array(
			array(
				'isotope',
				JACKROSE_SITEORIGIN . '/widgets/jackrose-so-gallery-grid/js/isotope.pkgd.min.js',
				array( 'jquery' ),
				'2.2.2',
			),
			array(
				'lightgallery',
				JACKROSE_SITEORIGIN . '/widgets/jackrose-so-gallery-grid/js/lightgallery.min.js',
				array( 'jquery' ),
				'1.2.6',
			),
		) );
		$this->register_frontend_styles( array(
			array(
				'lightgallery',
				JACKROSE_SITEORIGIN . '/widgets/jackrose-so-gallery-grid/css/lightgallery.min.css',
				array(),
				'1.2.6',
			),
		) );
	}

	function get_template_name( $instance ) {
		return 'base';
	}

	function get_style_name( $instance ) {
		return false;
	}

	function get_less_variables( $instance ) {
		return array();
	}
}

siteorigin_widget_register( 'jackrose-so-gallery-grid', __FILE__, 'JackRose_SO_Gallery_Grid' );