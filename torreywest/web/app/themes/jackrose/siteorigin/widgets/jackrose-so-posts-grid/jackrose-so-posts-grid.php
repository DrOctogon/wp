<?php
/*
Widget Name: Jack & Rose: Posts Grid
Description: Lists of posts in grid layout.
Author: Single Stroke
Author URI: https://singlestroke.io/
*/

class JackRose_SO_Posts_Grid extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'jackrose-so-posts-grid',
			esc_html__( 'Jack & Rose: Posts Grid', 'jackrose' ),
			array(
				'description' => esc_html__( 'Lists of posts in grid layout.', 'jackrose' ),
				'panels_groups' => array( 'jackrose' ),
			),
			array(
				
			),
			array(
				'posts' => array(
					'type' => 'posts',
					'label' => esc_html__( 'Posts Query', 'jackrose' ),
				),
				'columns' => array(
					'type' => 'slider',
					'label' => esc_html__( 'Number of columns', 'jackrose' ),
					'min' => 1,
					'max' => 4,
					'default' => 3,
					'integer' => true,
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
			JACKROSE_SITEORIGIN_DIR . '/widgets/jackrose-so-posts-grid/'
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

siteorigin_widget_register( 'jackrose-so-posts-grid', __FILE__, 'JackRose_SO_Posts_Grid' );