<?php
/*
Widget Name: Jack & Rose: Countdown
Description: Contdown block.
Author: Single Stroke
Author URI: https://singlestroke.io/
*/

class JackRose_SO_Countdown extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'jackrose-so-countdown',
			esc_html__( 'Jack & Rose: Countdown', 'jackrose' ),
			array(
				'description' => esc_html__( 'Contdown block.', 'jackrose' ),
				'panels_groups' => array( 'jackrose' ),
			),
			array(

			),
			array(
				'target' => array(
					'type' => 'text',
					'label' => esc_html__( 'Target Date/Time', 'jackrose' ),
					'description' => esc_html__( 'format: YYYY/MM/DD hh:mm:ss, e.g. 2016/02/14 17:30:00', 'jackrose' ),
				),
				'build' => array(
					'type' => 'select',
					'label' => esc_html__( 'Build', 'jackrose' ),
					'options' => array(
						'm_n_H_M_S' => esc_html__( 'months - days - hours - minutes - seconds', 'jackrose' ),
						'D_H_M_S' => esc_html__( 'days - hours - minutes - seconds', 'jackrose' ),
						'm_n' => esc_html__( 'months - days', 'jackrose' ),
					),
				),
				'months' => array(
					'type' => 'section',
					'label' => esc_html__( 'Months', 'jackrose' ),
					'hide' => true,
					'fields' => array(
						'label_singular' => array(
							'type' => 'text',
							'label' => esc_html__( 'Label Singular', 'jackrose' ),
							'default' => esc_html__( 'month', 'jackrose' ),
						),
						'label_plural' => array(
							'type' => 'text',
							'label' => esc_html__( 'Label Plural', 'jackrose' ),
							'default' => esc_html__( 'months', 'jackrose' ),
						),
					),
				),
				'days' => array(
					'type' => 'section',
					'label' => esc_html__( 'Days', 'jackrose' ),
					'hide' => true,
					'fields' => array(
						'label_singular' => array(
							'type' => 'text',
							'label' => esc_html__( 'Label Singular', 'jackrose' ),
							'default' => esc_html__( 'day', 'jackrose' ),
						),
						'label_plural' => array(
							'type' => 'text',
							'label' => esc_html__( 'Label Plural', 'jackrose' ),
							'default' => esc_html__( 'days', 'jackrose' ),
						),
					),
				),
				'hours' => array(
					'type' => 'section',
					'label' => esc_html__( 'Hours', 'jackrose' ),
					'hide' => true,
					'fields' => array(
						'label_singular' => array(
							'type' => 'text',
							'label' => esc_html__( 'Label Singular', 'jackrose' ),
							'default' => esc_html__( 'hour', 'jackrose' ),
						),
						'label_plural' => array(
							'type' => 'text',
							'label' => esc_html__( 'Label Plural', 'jackrose' ),
							'default' => esc_html__( 'hours', 'jackrose' ),
						),
					),
				),
				'minutes' => array(
					'type' => 'section',
					'label' => esc_html__( 'Minutes', 'jackrose' ),
					'hide' => true,
					'fields' => array(
						'label_singular' => array(
							'type' => 'text',
							'label' => esc_html__( 'Label Singular', 'jackrose' ),
							'default' => esc_html__( 'minute', 'jackrose' ),
						),
						'label_plural' => array(
							'type' => 'text',
							'label' => esc_html__( 'Label Plural', 'jackrose' ),
							'default' => esc_html__( 'minutes', 'jackrose' ),
						),
					),
				),
				'seconds' => array(
					'type' => 'section',
					'label' => esc_html__( 'Seconds', 'jackrose' ),
					'hide' => true,
					'fields' => array(
						'label_singular' => array(
							'type' => 'text',
							'label' => esc_html__( 'Label Singular', 'jackrose' ),
							'default' => esc_html__( 'second', 'jackrose' ),
						),
						'label_plural' => array(
							'type' => 'text',
							'label' => esc_html__( 'Label Plural', 'jackrose' ),
							'default' => esc_html__( 'seconds', 'jackrose' ),
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
			JACKROSE_SITEORIGIN_DIR . '/widgets/jackrose-so-countdown/'
		);
	}

	function initialize() {
		$this->register_frontend_scripts( array(
			array(
				'countdown',
				JACKROSE_SITEORIGIN . '/widgets/jackrose-so-countdown/js/jquery.countdown.min.js',
				array( 'jquery' ),
				'2.1.0',
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

siteorigin_widget_register( 'jackrose-so-countdown', __FILE__, 'JackRose_SO_Countdown' );