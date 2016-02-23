<?php
/*
Widget Name: Jack & Rose: Couple Intro
Description: Introduction block contains photos and event summary.
Author: Single Stroke
Author URI: https://singlestroke.io/
*/

class JackRose_SO_Couple_Intro extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'jackrose-so-couple-intro',
			esc_html__( 'Jack & Rose: Couple Intro', 'jackrose' ),
			array(
				'description' => esc_html__( 'Introduction block contains photos and event summary.', 'jackrose' ),
				'panels_groups' => array( 'jackrose' ),
			),
			array(

			),
			array(
				'order' => array(
					'type' => 'select',
					'label' => esc_html__( 'Order', 'jackrose' ),
					'options' => array(
						'groom-bride' => esc_html__( 'Groom - Bride', 'jackrose' ),
						'bride-groom' => esc_html__( 'Bride - Groom', 'jackrose' ),
					),
				),
				'groom' => array(
					'type' => 'section',
					'label' => esc_html__( 'Groom', 'jackrose' ),
					'fields' => array(
						'photo' => array(
							'type' => 'media',
							'label' => esc_html__( 'Groom\'s photo', 'jackrose' ),
							'description' => esc_html__( 'Please upload in actual size, recommended size is 240x240px.', 'jackrose' ),
							'library' => 'image',
						),
						'name' => array(
							'type' => 'text',
							'label' => esc_html__( 'Groom\'s name', 'jackrose' ),
						),
					),
				),
				'bride' => array(
					'type' => 'section',
					'label' => esc_html__( 'Bride', 'jackrose' ),
					'fields' => array(
						'photo' => array(
							'type' => 'media',
							'label' => esc_html__( 'Bride\'s photo', 'jackrose' ),
							'description' => esc_html__( 'Please upload in actual size, recommended size is 240x240px.', 'jackrose' ),
							'library' => 'image',
						),
						'name' => array(
							'type' => 'text',
							'label' => esc_html__( 'Bride\'s name', 'jackrose' ),
						),
					),
				),
				'separator' => array(
					'type' => 'media',
					'label' => esc_html__( 'Separator image', 'jackrose' ),
					'description' => esc_html__( 'Please upload in actual size.', 'jackrose' ),
					'library' => 'image',
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
			JACKROSE_SITEORIGIN_DIR . '/widgets/jackrose-so-couple-intro/'
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

siteorigin_widget_register( 'jackrose-so-couple-intro', __FILE__, 'JackRose_SO_Couple_Intro' );