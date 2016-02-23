<?php
/*
Widget Name: Jack & Rose: Buttons
Description: Pre-styled button.
Author: Single Stroke
Author URI: https://singlestroke.io/
*/

class JackRose_SO_Buttons extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'jackrose-so-button',
			esc_html__( 'Jack & Rose: Buttons', 'jackrose' ),
			array(
				'description' => esc_html__( 'Pre-styled button.', 'jackrose' ),
				'panels_groups' => array( 'jackrose' ),
			),
			array(

			),
			array(
				'buttons' => array(
					'type' => 'repeater',
					'label' => esc_html__( 'Buttons List', 'jackrose' ),
					'item_name' => esc_html__( 'Button', 'jackrose' ),
					'item_label' => array(
						'selector' => "[id*='text']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'text' => array(
							'type' => 'text',
							'label' => esc_html__( 'Button Text', 'jackrose' ),
						),
						'url' => array(
							'type' => 'link',
							'label' => esc_html__( 'Button Link', 'jackrose' ),
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
				'animation' => array(
					'type' => 'select',
					'label' => esc_html__( 'Item Animation', 'jackrose' ),
					'description' => esc_html__( 'Custom enter animation for each item.', 'jackrose' ),
					'options' => array(
						false => esc_html__( 'Disabled', 'jackrose' ),
						'fade-in' => esc_html__( 'Fade In', 'jackrose' ),
						'fade-in-up' => esc_html__( 'Fade In Up', 'jackrose' ),
					),
					'default' => 'none',
				),
			),
			JACKROSE_SITEORIGIN_DIR . '/widgets/jackrose-so-button/'
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

siteorigin_widget_register( 'jackrose-so-button', __FILE__, 'JackRose_SO_Buttons' );