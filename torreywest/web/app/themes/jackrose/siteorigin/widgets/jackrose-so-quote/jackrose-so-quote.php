<?php
/*
Widget Name: Jack & Rose: Quote
Description: Blockquote with citation.
Author: Single Stroke
Author URI: https://singlestroke.io/
*/

class JackRose_SO_Quote extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'jackrose-so-quote',
			esc_html__( 'Jack & Rose: Quote', 'jackrose' ),
			array(
				'description' => esc_html__( 'Blockquote with citation.', 'jackrose' ),
				'panels_groups' => array( 'jackrose' ),
			),
			array(

			),
			array(
				'quotes' => array(
					'type' => 'repeater',
					'label' => esc_html__( 'Quotes', 'jackrose' ),
					'item_name' => esc_html__( 'Quote', 'jackrose' ),
					'item_label' => array(
						'selector' => "[id*='text']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'text' => array(
							'type' => 'textarea',
							'label' => esc_html__( 'Quote text', 'jackrose' ),
						),
						'name' => array(
							'type' => 'text',
							'label' => esc_html__( 'Name', 'jackrose' ),
						),
					),
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
			JACKROSE_SITEORIGIN_DIR . '/widgets/jackrose-so-quote/'
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

siteorigin_widget_register( 'jackrose-so-quote', __FILE__, 'JackRose_SO_Quote' );