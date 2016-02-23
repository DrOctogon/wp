<?php
/*
Widget Name: Jack & Rose: Google Maps
Description: Gooble Maps with pin locations.
Author: Single Stroke
Author URI: https://singlestroke.io/
*/

class JackRose_SO_Google_Maps extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'jackrose-so-google-maps',
			esc_html__( 'Jack & Rose: Google Maps', 'jackrose' ),
			array(
				'description' => esc_html__( 'Gooble Maps with pin locations.', 'jackrose' ),
				'panels_groups' => array( 'jackrose' ),
			),
			array(

			),
			array(
				'center' => array(
					'type' => 'text',
					'label' => esc_html__( 'Default center point coordinate', 'jackrose' ),
					'description' => esc_html__( 'Format: [latitude], [longitude]. e.g. "-7.966620, 112.632632"', 'jackrose' ),
				),
				'pins' => array(
					'type' => 'repeater',
					'label' => esc_html__( 'Pins', 'jackrose' ),
					'item_name' => esc_html__( 'Location', 'jackrose' ),
					'item_label' => array(
						'selector' => "[id*='title']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'title' => array(
							'type' => 'text',
							'label' => esc_html__( 'Name', 'jackrose' ),
						),
						'latlong' => array(
							'type' => 'text',
							'label' => esc_html__( 'Coordinate', 'jackrose' ),
							'description' => esc_html__( 'Format: [latitude], [longitude]. e.g. "-7.966620, 112.632632"', 'jackrose' ),
						),
						'icon' => array(
							'type' => 'media',
							'label' => esc_html__( 'Icon', 'jackrose' ),
							'library' => 'image',
						),
					),
				),
				'height' => array(
					'type' => 'slider',
					'label' => esc_html__( 'Height', 'jackrose' ),
					'min' => 0,
					'max' => 800,
					'default' => 600,
					'integer' => true,
				),
				'height_mobile' => array(
					'type' => 'slider',
					'label' => esc_html__( 'Height (mobile)', 'jackrose' ),
					'min' => 0,
					'max' => 800,
					'default' => 340,
					'integer' => true,
				),
				'zoom' => array(
					'type' => 'slider',
					'label' => esc_html__( 'Zoom level', 'jackrose' ),
					'min' => 0,
					'max' => 18,
					'default' => 15,
					'integer' => true,
				),
				'style' => array(
					'type' => 'textarea',
					'label' => esc_html__( 'Style JSON', 'jackrose' ),
					'description' => sprintf( esc_html__( 'Get pre-styled JSON from %s or create your own.', 'jackrose' ), '<a href="https://snazzymaps.com/">' . esc_html__( 'Snazzy Maps', 'jackrose' ) . '</a>' ),
					'default' => '[{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}]',
				),
			),
			JACKROSE_SITEORIGIN_DIR . '/widgets/jackrose-so-google-maps/'
		);
	}

	function initialize() {
		$this->register_frontend_scripts( array(
			array(
				'google-maps-api',
				'https://maps.googleapis.com/maps/api/js',
				array(),
				'3',
			),
		) );
		$this->register_frontend_scripts( array(
			array(
				'maplace',
				JACKROSE_SITEORIGIN . '/widgets/jackrose-so-google-maps/js/maplace-0.1.3.min.js',
				array( 'google-maps-api' ),
				'0.1.3',
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

siteorigin_widget_register( 'jackrose-so-google-maps', __FILE__, 'JackRose_SO_Google_Maps' );