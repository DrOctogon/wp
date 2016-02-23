<?php
/*
Widget Name: Jack & Rose: Section Heading
Description: Big heading on sections.
Author: Single Stroke
Author URI: https://singlestroke.io/
*/

class JackRose_SO_Section_Heading extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'jackrose-so-section-heading',
			esc_html__( 'Jack & Rose: Section Heading', 'jackrose' ),
			array(
				'description' => esc_html__( 'Big heading on sections.', 'jackrose' ),
				'panels_groups' => array( 'jackrose' ),
			),
			array(

			),
			array(
				'heading' => array(
					'type' => 'text',
					'label' => esc_html__( 'Heading', 'jackrose' ),
					'default' => esc_html__( 'Section Heading', 'jackrose' ),
				),
				'heading_color' => array(
					'type' => 'color',
					'label' => esc_html__( 'Heading color', 'jackrose' ),
					'default' => '#444444',
				),
				'subheading' => array(
					'type' => 'textarea',
					'label' => esc_html__( 'Subheading', 'jackrose' ),
				),
				'subheading_color' => array(
					'type' => 'color',
					'label' => esc_html__( 'Subheading color', 'jackrose' ),
					'default' => '#888888',
				),
				'alignment' => array(
					'type' => 'select',
					'label' => esc_html__( 'Alignment', 'jackrose' ),
					'options' => array(
						'left' => esc_html__( 'Left', 'jackrose' ),
						'center' => esc_html__( 'Center', 'jackrose' ),
						'right' => esc_html__( 'Right', 'jackrose' ),
					),
					'default' => 'center',
				),
			),
			JACKROSE_SITEORIGIN_DIR . '/widgets/jackrose-so-section-heading/'
		);
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

siteorigin_widget_register( 'jackrose-so-section-heading', __FILE__, 'JackRose_SO_Section_Heading' );