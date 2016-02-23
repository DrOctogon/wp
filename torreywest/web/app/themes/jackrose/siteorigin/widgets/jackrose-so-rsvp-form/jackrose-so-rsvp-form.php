<?php
/*
Widget Name: Jack & Rose: RSVP Form
Description: RSVP form via Contact Form 7
Author: Single Stroke
Author URI: https://singlestroke.io/
*/

class JackRose_SO_RSVP_Form extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'jackrose-so-rsvp-form',
			esc_html__( 'Jack & Rose: RSVP Form', 'jackrose' ),
			array(
				'description' => esc_html__( 'RSVP form via Contact Form 7', 'jackrose' ),
				'panels_groups' => array( 'jackrose' ),
			),
			array(

			),
			array(
				'form' => array(
					'type' => 'select',
					'label' => esc_html__( 'Form', 'jackrose' ),
					'description' => sprintf( esc_html__( 'Please install %s plugin and create a new form, and then select the form here.', 'jackrose' ), '<a href="https://wordpress.org/plugins/contact-form-7/>' . esc_html__( 'Contact Form 7', 'jackrose' ) . '</a>' ),
					'options' => jackrose_get_contact_form_7_posts(),
					'default' => 'center',
				),
			),
			JACKROSE_SITEORIGIN_DIR . '/widgets/jackrose-so-rsvp-form/'
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

siteorigin_widget_register( 'jackrose-so-rsvp-form', __FILE__, 'JackRose_SO_RSVP_Form' );

function jackrose_get_contact_form_7_posts() {
	$array = get_posts( array(
		'post_type' => 'wpcf7_contact_form',
		'orderby' => 'title',
	) );
	$return = array();

	foreach ( $array as $form ) {
		$return[ $form->ID ] = $form->post_title;
	}

	return $return;
}