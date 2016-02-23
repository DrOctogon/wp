<?php
/*
Widget Name: Jack & Rose: About Us Grid
Description: Lists of personal description in grid layout.
Author: Single Stroke
Author URI: https://singlestroke.io/
*/

class JackRose_SO_About_Us_Grid extends SiteOrigin_Widget {
	function __construct() {
		global $jackrose_data;

		parent::__construct(
			'jackrose-so-about-us-grid',
			esc_html__( 'Jack & Rose: About Us Grid', 'jackrose' ),
			array(
				'description' => esc_html__( 'Lists of personal description in grid layout.', 'jackrose' ),
				'panels_groups' => array( 'jackrose' ),
			),
			array(
				
			),
			array(
				'items' => array(
					'type' => 'repeater',
					'label' => esc_html__( 'People List', 'jackrose' ),
					'item_name' => esc_html__( 'Person', 'jackrose' ),
					'item_label' => array(
						'selector' => "[id*='name']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'name' => array(
							'type' => 'text',
							'label' => esc_html__( 'Name', 'jackrose' ),
						),
						'photo' => array(
							'type' => 'media',
							'label' => esc_html__( 'Photo', 'jackrose' ),
							'library' => 'image',
						),
						'description' => array(
							'type' => 'tinymce',
							'label' => esc_html__( 'Description', 'jackrose' ),
							'rows' => 3,
						),
						'links' => array(
							'type' => 'repeater',
							'label' => esc_html__( 'Social media links', 'jackrose' ),
							'item_name' => esc_html__( 'Link', 'jackrose' ),
							'item_label' => array(
								'selector' => "[id*='type']",
								'update_event' => 'change',
								'value_method' => 'val',
							),
							'fields' => array(
								'type' => array(
									'type' => 'select',
									'label' => esc_html__( 'Type', 'jackrose' ),
									'options' => $jackrose_data['social_media_links'],
								),
								'url' => array(
									'type' => 'link',
									'label' => esc_html__( 'URL', 'jackrose' ),
								),
							),
						),
						'bg_color' => array(
							'type' => 'color',
							'label' => esc_html__( 'BG Color', 'jackrose' ),
						),
					),
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
			JACKROSE_SITEORIGIN_DIR . '/widgets/jackrose-so-about-us-grid/'
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

siteorigin_widget_register( 'jackrose-so-about-us-grid', __FILE__, 'JackRose_SO_About_Us_Grid' );