<?php
/**
 * Jack & Rose SiteOrigin functions and definitions.
 *
 * @package Jack_&_Rose
 */

/**
 * =====================================================
 * Add custom widgets.
 * =====================================================
 */
function jackrose_siteorigin_widgets_widget_folders( $folders ) {
	$folders[] = JACKROSE_SITEORIGIN_DIR . '/widgets/';
	return $folders;
}
add_filter( 'siteorigin_widgets_widget_folders', 'jackrose_siteorigin_widgets_widget_folders' );

/**
 * =====================================================
 * Add custom widget styles options.
 * =====================================================
 */
function jackrose_siteorigin_panels_row_style_fields( $fields ) {
	// Anchor ID.
	$fields['anchor'] = array(
		'name' => esc_html__( 'Anchor ID', 'jackrose' ),
		'type' => 'text',
		'group' => 'attributes',
		'description' => esc_html__( 'Used in Smooth Scrolling navigation. Please enter alphanumeric, dash ( _ ), and hyphen ( - ) only.', 'jackrose' ),
		'priority' => 11,
	);

	// Jackrose Parallax
	$fields['background_display']['options']['jr-parallax'] = esc_html__( 'Jackrose Parallax', 'jackrose' );

	return $fields;
}
add_filter( 'siteorigin_panels_row_style_fields', 'jackrose_siteorigin_panels_row_style_fields' );

function jackrose_siteorigin_panels_widget_style_fields( $fields ) {
	// Anchor ID.
	$fields['anchor'] = array(
		'name' => esc_html__( 'Anchor ID', 'jackrose' ),
		'type' => 'text',
		'group' => 'attributes',
		'description' => esc_html__( 'Used in Smooth Scrolling navigation. Please enter alphanumeric, dash ( _ ), and hyphen ( - ) only.', 'jackrose' ),
		'priority' => 11,
	);

	// Animation.
	$fields['animation'] = array(
		'name' => esc_html__( 'Animation', 'jackrose' ),
		'type' => 'select',
		'group' => 'attributes',
		'description' => esc_html__( 'Widget\'s enter (inview) animation.', 'jackrose' ),
		'options' => array(
			false => esc_html__( 'Disabled', 'jackrose' ),
			'fade-in' => esc_html__( 'Fade In', 'jackrose' ),
			'fade-in-up' => esc_html__( 'Fade In Up', 'jackrose' ),
		),
		'priority' => 12,
	);
	
	return $fields;
}
add_filter( 'siteorigin_panels_widget_style_fields', 'jackrose_siteorigin_panels_widget_style_fields' );

/**
 * =====================================================
 * Add custom widget attributes.
 * =====================================================
 */
function jackrose_siteorigin_panels_widget_style_attributes( $attributes, $args ) {
	if ( ! empty( $args['anchor'] ) ) {
		$attributes['id'] = esc_attr( $args['anchor'] );
		$attributes['data-jr-anchor'] = esc_attr( $args['anchor'] );
	}

	if ( ! empty( $args['animation'] ) ) {
		$attributes['class'][] = 'jr-animation-' . esc_attr( $args['animation'] );
	}

	if ( ! empty( $args['background_display'] ) && !empty( $args['background_image_attachment'] ) ) {
		$img = wp_get_attachment_image_src( $args['background_image_attachment'], 'full' );

		if( ! empty( $img ) ) {
			if( $args['background_display'] == 'jr-parallax' ) {
				$attributes['data-jr-parallax'] = '{"src":"' . $img[0] . '","width":"' . $img[1] . '","height":"' . $img[2] . '"}';
			}
		}
	}

	return $attributes;
}
add_filter( 'siteorigin_panels_widget_style_attributes', 'jackrose_siteorigin_panels_widget_style_attributes', 10, 2 );
add_filter( 'siteorigin_panels_row_style_attributes', 'jackrose_siteorigin_panels_widget_style_attributes', 10, 2 );

/**
 * =====================================================
 * Add dialog tabs
 * =====================================================
 */
function jackrose_siteorigin_panels_widget_dialog_tabs( $tabs ) {
	$tabs['jackrose'] = array(
		'title' => esc_html__( 'Jack & Rose', 'jackrose' ),
		'filter' => array(
			'groups' => array( 'jackrose' ),
		),
	);

	return $tabs;
}
add_filter( 'siteorigin_panels_widget_dialog_tabs', 'jackrose_siteorigin_panels_widget_dialog_tabs' );

/**
 * =====================================================
 * Force activate the custom widgets.
 * =====================================================
 */
function jackrose_siteorigin_widgets_active_widgets( $widgets ) {
	// Section heading.
	$widgets['jackrose-so-section-heading'] = true;

	// Couple intro.
	$widgets['jackrose-so-couple-intro'] = true;

	// Countdown.
	$widgets['jackrose-so-countdown'] = true;

	// About us grid.
	$widgets['jackrose-so-about-us-grid'] = true;

	// Event grid.
	$widgets['jackrose-so-event-grid'] = true;

	// Google maps.
	$widgets['jackrose-so-google-maps'] = true;

	// Gallery grid.
	$widgets['jackrose-so-gallery-grid'] = true;

	// Quote.
	$widgets['jackrose-so-quote'] = true;

	// Crew.
	$widgets['jackrose-so-crew'] = true;

	// Posts grid.
	$widgets['jackrose-so-posts-grid'] = true;

	// Buttons.
	$widgets['jackrose-so-buttons'] = true;

	// RSVP form.
	$widgets['jackrose-so-rsvp-form'] = true;

	return $widgets;
}
add_filter( 'siteorigin_widgets_active_widgets', 'jackrose_siteorigin_widgets_active_widgets' );

/**
 * =====================================================
 * Add prebuilt layouts.
 * =====================================================
 */
function jackrose_siteorigin_panels_prebuilt_layouts( $layouts ) {
	$layouts['home'] = array(
		'name' => esc_html__( 'Home', 'jackrose' ),
		'description' => esc_html__( 'Jack & Rose Home Layout', 'jackrose' ),
		'widgets' => 
		array (
			0 => 
			array (
				'order' => 'groom-bride',
				'groom' => 
				array (
					'photo' => 0,
					'name' => 'Jack Wilson',
					'so_field_container_state' => 'open',
				),
				'bride' => 
				array (
					'photo' => 0,
					'name' => 'Rose Marie',
					'so_field_container_state' => 'open',
				),
				'separator' => 0,
				'alignment' => 'center',
				'animation' => '0',
				'_sow_form_id' => '563078ce49bba',
				'panels_info' => 
				array (
					'class' => 'JackRose_SO_Couple_Intro',
					'grid' => 0,
					'cell' => 0,
					'id' => 0,
					'style' => 
					array (
						'widget_css' => 'margin-bottom: 2em;',
						'background_image_attachment' => false,
						'background_display' => 'tile',
						'animation' => 'fade-in',
					),
				),
			),
			1 => 
			array (
				'heading' => 'Are getting married',
				'heading_color' => '#dcc8b4',
				'subheading' => 'on 14 February, 2016 &mdash; Bali, Indonesia',
				'subheading_color' => '#888888',
				'alignment' => 'center',
				'_sow_form_id' => '563078f61262a',
				'panels_info' => 
				array (
					'class' => 'JackRose_SO_Section_Heading',
					'raw' => false,
					'grid' => 0,
					'cell' => 0,
					'id' => 1,
					'style' => 
					array (
						'background_display' => 'tile',
						'animation' => 'fade-in',
					),
				),
			),
			2 => 
			array (
				'target' => '2016/02/14 18:00:00',
				'build' => 'm_n_H_M_S',
				'months' => 
				array (
					'label_singular' => 'month',
					'label_plural' => 'months',
					'so_field_container_state' => 'closed',
				),
				'days' => 
				array (
					'label_singular' => 'day',
					'label_plural' => 'days',
					'so_field_container_state' => 'closed',
				),
				'hours' => 
				array (
					'label_singular' => 'hour',
					'label_plural' => 'hours',
					'so_field_container_state' => 'closed',
				),
				'minutes' => 
				array (
					'label_singular' => 'minute',
					'label_plural' => 'minutes',
					'so_field_container_state' => 'closed',
				),
				'seconds' => 
				array (
					'label_singular' => 'second',
					'label_plural' => 'seconds',
					'so_field_container_state' => 'closed',
				),
				'alignment' => 'center',
				'_sow_form_id' => '563118a88dd15',
				'panels_info' => 
				array (
					'class' => 'JackRose_SO_Countdown',
					'raw' => false,
					'grid' => 1,
					'cell' => 0,
					'id' => 2,
					'style' => 
					array (
						'background_display' => 'tile',
						'animation' => 'fade-in',
					),
				),
			),
			3 => 
			array (
				'heading' => 'Groom &amp; Bride',
				'heading_color' => '#dcc8b4',
				'subheading' => '',
				'subheading_color' => '#888888',
				'alignment' => 'center',
				'_sow_form_id' => '56318ddb8abeb',
				'panels_info' => 
				array (
					'class' => 'JackRose_SO_Section_Heading',
					'raw' => false,
					'grid' => 2,
					'cell' => 0,
					'id' => 3,
					'style' => 
					array (
						'background_display' => 'tile',
						'animation' => 'fade-in',
					),
				),
			),
			4 => 
			array (
				'items' => 
				array (
					0 => 
					array (
						'name' => 'Jack Wilson',
						'photo' => 0,
						'description' => '<p>Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>',
						'description_selected_editor' => 'tinymce',
						'links' => 
						array (
							0 => 
							array (
								'type' => 'facebook',
								'url' => '#',
							),
							1 => 
							array (
								'type' => 'twitter',
								'url' => '#',
							),
							2 => 
							array (
								'type' => 'instagram',
								'url' => '#',
							),
							3 => 
							array (
								'type' => 'linkedin',
								'url' => '#',
							),
						),
						'bg_color' => '#f6f4f2',
					),
					1 => 
					array (
						'name' => 'Rose Marie',
						'photo' => 0,
						'description' => '<p>Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>',
						'description_selected_editor' => 'tinymce',
						'links' => 
						array (
							0 => 
							array (
								'type' => 'facebook',
								'url' => '#',
							),
							1 => 
							array (
								'type' => 'twitter',
								'url' => '#',
							),
							2 => 
							array (
								'type' => 'instagram',
								'url' => '#',
							),
							3 => 
							array (
								'type' => 'linkedin',
								'url' => '#',
							),
						),
						'bg_color' => '#f6f4f2',
					),
				),
				'animation' => 'fade-in-up',
				'_sow_form_id' => '5635fdbbde18d',
				'panels_info' => 
				array (
					'class' => 'JackRose_SO_About_Us_Grid',
					'grid' => 2,
					'cell' => 0,
					'id' => 4,
					'style' => 
					array (
						'background_image_attachment' => false,
						'background_display' => 'tile',
					),
				),
			),
			5 => 
			array (
				'heading' => 'When &amp; Where',
				'heading_color' => '#c8b4a0',
				'subheading' => '',
				'subheading_color' => '#888888',
				'alignment' => 'center',
				'_sow_form_id' => '563217ca745e0',
				'panels_info' => 
				array (
					'class' => 'JackRose_SO_Section_Heading',
					'raw' => false,
					'grid' => 3,
					'cell' => 0,
					'id' => 5,
					'style' => 
					array (
						'background_display' => 'tile',
						'animation' => 'fade-in',
					),
				),
			),
			6 => 
			array (
				'events' => 
				array (
					0 => 
					array (
						'title' => 'Wedding Ceremony',
						'photo' => 0,
						'description' => '<p>Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>',
						'description_selected_editor' => 'tinymce',
						'summary' => 'Sunday, 14 February, 2016 &mdash; 10.00 AM &mdash; St. Peter Park, Kuta, Bali',
						'icon' => 0,
						'bg_color' => '#ffffff',
					),
					1 => 
					array (
						'title' => 'Wedding Party',
						'photo' => 0,
						'description' => '<p>Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>',
						'description_selected_editor' => 'tinymce',
						'summary' => 'Sunday, 14 February, 2016 &mdash; 18.00 AM &mdash; Grand Royale Resort, Seminyak, Bali',
						'icon' => 0,
						'bg_color' => '#ffffff',
					),
				),
				'columns' => 2,
				'animation' => 'fade-in-up',
				'_sow_form_id' => '563570b772d77',
				'panels_info' => 
				array (
					'class' => 'JackRose_SO_Event_Grid',
					'grid' => 3,
					'cell' => 0,
					'id' => 6,
					'style' => 
					array (
						'background_image_attachment' => false,
						'background_display' => 'tile',
					),
				),
			),
			7 => 
			array (
				'center' => '-8.727547, 115.169828',
				'pins' => 
				array (
					0 => 
					array (
						'title' => 'Wedding Ceremony: St. Peter Park',
						'latlong' => '-8.734045, 115.169603',
						'icon' => 0,
					),
					1 => 
					array (
						'title' => 'Wedding Party: Grand Royale Resort',
						'latlong' => '-8.720450, 115.169967',
						'icon' => 0,
					),
				),
				'height' => 600,
				'height_mobile' => 340,
				'zoom' => 15,
				'style' => '[{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}]',
				'_sow_form_id' => '56325e1a5be31',
				'panels_info' => 
				array (
					'class' => 'JackRose_SO_Google_Maps',
					'grid' => 4,
					'cell' => 0,
					'id' => 7,
					'style' => 
					array (
						'background_image_attachment' => false,
						'background_display' => 'tile',
						'animation' => 'fade-in',
					),
				),
			),
			8 => 
			array (
				'heading' => 'Gift Registry',
				'heading_color' => '#dcc8b4',
				'subheading' => '',
				'subheading_color' => '#888888',
				'alignment' => 'center',
				'_sow_form_id' => '563603d58c637',
				'panels_info' => 
				array (
					'class' => 'JackRose_SO_Section_Heading',
					'raw' => false,
					'grid' => 5,
					'cell' => 0,
					'id' => 8,
					'style' => 
					array (
						'background_display' => 'tile',
						'animation' => 'fade-in',
					),
				),
			),
			9 => 
			array (
				'title' => '',
				'text' => '<p style="text-align: center;">We\'re simply grateful for your presence to celebrate the occasion with us!<br /> If you would like to get us something, we\'d love that too... we are registered at here:</p><p style="text-align: center;"><a href="#"><img class="alignnone" src="http://placehold.it/180x60/" alt="" width="180" height="60" /></a>           <a href="#"><img class="alignnone" src="http://placehold.it/180x60/" alt="" width="180" height="60" /></a>           <a href="#"><img class="alignnone" src="http://placehold.it/180x60/" alt="" width="180" height="60" /></a>           <a href="#"><img class="alignnone" src="http://placehold.it/180x60/" alt="" width="180" height="60" /></a></p>',
				'text_selected_editor' => 'tmce',
				'autop' => true,
				'_sow_form_id' => '563604e51e693',
				'panels_info' => 
				array (
					'class' => 'SiteOrigin_Widget_Editor_Widget',
					'grid' => 5,
					'cell' => 0,
					'id' => 9,
					'style' => 
					array (
						'class' => 'jr-animation-fade-in-up',
						'background_image_attachment' => false,
						'background_display' => 'tile',
						'animation' => 'fade-in',
					),
				),
			),
			10 => 
			array (
				'heading' => 'Will You Attend?',
				'heading_color' => '#dcc8b4',
				'subheading' => 'Please sign your RSVP',
				'subheading_color' => '#888888',
				'alignment' => 'center',
				'_sow_form_id' => '563707dd400f9',
				'panels_info' => 
				array (
					'class' => 'JackRose_SO_Section_Heading',
					'raw' => false,
					'grid' => 6,
					'cell' => 1,
					'id' => 10,
					'style' => 
					array (
						'widget_css' => 'margin-bottom: -30px',
						'padding' => '3em',
						'background' => '#ffffff',
						'background_display' => 'tile',
					),
				),
			),
			11 => 
			array (
				'form' => '88',
				'_sow_form_id' => '563b3993b2b98',
				'panels_info' => 
				array (
					'class' => 'JackRose_SO_RSVP_Form',
					'grid' => 6,
					'cell' => 1,
					'id' => 11,
					'style' => 
					array (
						'padding' => '0em 3em 3em',
						'background' => '#ffffff',
						'background_image_attachment' => false,
						'background_display' => 'tile',
					),
				),
			),
			12 => 
			array (
				'heading' => 'The Groomsmen',
				'heading_color' => '#dcc8b4',
				'subheading' => '',
				'subheading_color' => '#888888',
				'alignment' => 'center',
				'_sow_form_id' => '563ad0c8d8a8e',
				'panels_info' => 
				array (
					'class' => 'JackRose_SO_Section_Heading',
					'raw' => false,
					'grid' => 7,
					'cell' => 0,
					'id' => 12,
					'style' => 
					array (
						'background_display' => 'tile',
						'animation' => 'fade-in',
					),
				),
			),
			13 => 
			array (
				'members' => 
				array (
					0 => 
					array (
						'name' => 'Donald Morrison',
						'photo' => 0,
					),
					1 => 
					array (
						'name' => 'Alexander Lawson',
						'photo' => 0,
					),
					2 => 
					array (
						'name' => 'Kyle Weaver',
						'photo' => 0,
					),
					3 => 
					array (
						'name' => 'Albert Garrett',
						'photo' => 0,
					),
				),
				'columns' => 4,
				'animation' => 'fade-in-up',
				'_sow_form_id' => '563ad0fb76fa5',
				'panels_info' => 
				array (
					'class' => 'JackRose_SO_Crew',
					'grid' => 7,
					'cell' => 0,
					'id' => 13,
					'style' => 
					array (
						'background_image_attachment' => false,
						'background_display' => 'tile',
					),
				),
			),
			14 => 
			array (
				'heading' => 'The Bridesmaids',
				'heading_color' => '#dcc8b4',
				'subheading' => '',
				'subheading_color' => '#888888',
				'alignment' => 'center',
				'_sow_form_id' => '563acf64cc9b9',
				'panels_info' => 
				array (
					'class' => 'JackRose_SO_Section_Heading',
					'raw' => false,
					'grid' => 7,
					'cell' => 0,
					'id' => 14,
					'style' => 
					array (
						'widget_css' => 'margin-top: 8em;',
						'background_display' => 'tile',
						'animation' => 'fade-in',
					),
				),
			),
			15 => 
			array (
				'members' => 
				array (
					0 => 
					array (
						'name' => 'Martha Pearson',
						'photo' => 0,
					),
					1 => 
					array (
						'name' => 'Christina Jenkins',
						'photo' => 0,
					),
					2 => 
					array (
						'name' => 'Tiffany Long',
						'photo' => 0,
					),
					3 => 
					array (
						'name' => 'Julia Matthews',
						'photo' => 0,
					),
				),
				'columns' => 4,
				'animation' => 'fade-in-up',
				'_sow_form_id' => '563ab7df24895',
				'panels_info' => 
				array (
					'class' => 'JackRose_SO_Crew',
					'grid' => 7,
					'cell' => 0,
					'id' => 15,
					'style' => 
					array (
						'background_image_attachment' => false,
						'background_display' => 'tile',
					),
				),
			),
			16 => 
			array (
				'quotes' => 
				array (
					0 => 
					array (
						'text' => 'I remember when I was in school, they would ask, \'What are you going to be when you grow up?\' and then you\'d have to draw a picture of it. I drew a picture of myself as a bride.',
						'name' => 'Gwen Stefani',
					),
					1 => 
					array (
						'text' => 'A man\'s got two shots for jewelry: a wedding ring and a watch. The watch is a lot easier to get on and off than a wedding ring.',
						'name' => 'John Mayer',
					),
				),
				'alignment' => 'center',
				'_sow_form_id' => '563aacddacbb0',
				'panels_info' => 
				array (
					'class' => 'JackRose_SO_Quote',
					'raw' => false,
					'grid' => 8,
					'cell' => 0,
					'id' => 16,
					'style' => 
					array (
						'background_display' => 'tile',
						'font_color' => '#ffffff',
						'animation' => 'fade-in',
					),
				),
			),
			17 => 
			array (
				'heading' => 'Captured Moments',
				'heading_color' => '#dcc8b4',
				'subheading' => '',
				'subheading_color' => '#888888',
				'alignment' => 'center',
				'_sow_form_id' => '5632e32232920',
				'panels_info' => 
				array (
					'class' => 'JackRose_SO_Section_Heading',
					'raw' => false,
					'grid' => 9,
					'cell' => 0,
					'id' => 17,
					'style' => 
					array (
						'background_display' => 'tile',
						'animation' => 'fade-in',
					),
				),
			),
			18 => 
			array (
				'photos' => 
				array (
					0 => 
					array (
						'image' => 0,
						'tags' => 'Engagement',
					),
					1 => 
					array (
						'image' => 0,
						'tags' => 'Pre-Wedding',
					),
					2 => 
					array (
						'image' => 0,
						'tags' => 'With Friends',
					),
					3 => 
					array (
						'image' => 0,
						'tags' => 'Engagement',
					),
					4 => 
					array (
						'image' => 0,
						'tags' => 'Engagement',
					),
					5 => 
					array (
						'image' => 0,
						'tags' => 'With Friends',
					),
					6 => 
					array (
						'image' => 0,
						'tags' => 'Pre-Wedding',
					),
				),
				'columns' => 4,
				'filter' => true,
				'label_all_photos' => 'All photos',
				'_sow_form_id' => '56331c809f928',
				'panels_info' => 
				array (
					'class' => 'JackRose_SO_Gallery_Grid',
					'grid' => 9,
					'cell' => 0,
					'id' => 18,
					'style' => 
					array (
						'background_image_attachment' => false,
						'background_display' => 'tile',
						'animation' => 'fade-in-up',
					),
				),
			),
			19 => 
			array (
				'heading' => 'Our Blog',
				'heading_color' => '#c8b4a0',
				'subheading' => '',
				'subheading_color' => '#888888',
				'alignment' => 'center',
				'_sow_form_id' => '563ad56a0e372',
				'panels_info' => 
				array (
					'class' => 'JackRose_SO_Section_Heading',
					'raw' => false,
					'grid' => 10,
					'cell' => 0,
					'id' => 19,
					'style' => 
					array (
						'background_display' => 'tile',
						'animation' => 'fade-in',
					),
				),
			),
			20 => 
			array (
				'posts' => 'post_type=post&orderby=date&order=DESC&posts_per_page=3&sticky=ignore&additional=',
				'columns' => 3,
				'animation' => 'fade-in-up',
				'_sow_form_id' => '5642b137d1734',
				'panels_info' => 
				array (
					'class' => 'JackRose_SO_Posts_Grid',
					'raw' => false,
					'grid' => 10,
					'cell' => 0,
					'id' => 20,
					'style' => 
					array (
						'background_display' => 'tile',
					),
				),
			),
			21 => 
			array (
				'buttons' => 
				array (
					0 => 
					array (
						'text' => 'More Blog Posts   <span class="fa fa-angle-right"></span>',
						'url' => '#',
					),
				),
				'alignment' => 'center',
				'animation' => 'fade-in',
				'_sow_form_id' => '563ae7e9b52cc',
				'panels_info' => 
				array (
					'class' => 'JackRose_SO_Buttons',
					'raw' => false,
					'grid' => 10,
					'cell' => 0,
					'id' => 21,
					'style' => 
					array (
						'background_display' => 'tile',
					),
				),
			),
		),
		'grids' => 
		array (
			0 => 
			array (
				'cells' => 1,
				'style' => 
				array (
					'bottom_margin' => '0px',
					'gutter' => '30px',
					'padding' => '100px 0px',
					'background_display' => 'tile',
					'anchor' => 'intro',
				),
			),
			1 => 
			array (
				'cells' => 1,
				'style' => 
				array (
					'bottom_margin' => '0px',
					'gutter' => '30px',
					'padding' => '60px 0px',
					'row_stretch' => 'full',
					'background' => '#ecf2f0',
					'background_display' => 'tile',
					'anchor' => 'countdown',
				),
			),
			2 => 
			array (
				'cells' => 1,
				'style' => 
				array (
					'bottom_margin' => '0px',
					'gutter' => '30px',
					'padding' => '100px 0px',
					'background_display' => 'tile',
					'anchor' => 'groom-bride',
				),
			),
			3 => 
			array (
				'cells' => 1,
				'style' => 
				array (
					'bottom_margin' => '0px',
					'gutter' => '30px',
					'padding' => '100px 0px',
					'row_stretch' => 'full',
					'background' => '#f6f4f2',
					'background_display' => 'tile',
					'anchor' => 'events',
				),
			),
			4 => 
			array (
				'cells' => 1,
				'style' => 
				array (
					'bottom_margin' => '0px',
					'gutter' => '30px',
					'padding' => '0px',
					'row_stretch' => 'full-stretched',
					'background' => '#f6f4f2',
					'background_display' => 'tile',
					'anchor' => 'location',
				),
			),
			5 => 
			array (
				'cells' => 1,
				'style' => 
				array (
					'bottom_margin' => '0px',
					'gutter' => '30px',
					'padding' => '100px 0px',
					'background_display' => 'tile',
					'anchor' => 'registry',
				),
			),
			6 => 
			array (
				'cells' => 3,
				'style' => 
				array (
					'cell_class' => 'jr-animation-fade-in-up',
					'bottom_margin' => '0px',
					'gutter' => '30px',
					'padding' => '60px 0px',
					'row_stretch' => 'full',
					'background' => '#b4d2c8',
					'background_display' => 'jr-parallax',
					'anchor' => 'rsvp',
				),
			),
			7 => 
			array (
				'cells' => 1,
				'style' => 
				array (
					'bottom_margin' => '0px',
					'gutter' => '30px',
					'padding' => '100px 0px',
					'background_display' => 'tile',
					'anchor' => 'crew',
				),
			),
			8 => 
			array (
				'cells' => 1,
				'style' => 
				array (
					'bottom_margin' => '0px',
					'gutter' => '30px',
					'padding' => '90px 0px 30px',
					'row_stretch' => 'full',
					'background' => '#c3bbab',
					'background_display' => 'jr-parallax',
					'anchor' => 'quote',
				),
			),
			9 => 
			array (
				'cells' => 1,
				'style' => 
				array (
					'bottom_margin' => '0px',
					'gutter' => '30px',
					'padding' => '100px 0px',
					'background_display' => 'tile',
					'anchor' => 'gallery',
				),
			),
			10 => 
			array (
				'cells' => 1,
				'style' => 
				array (
					'bottom_margin' => '0px',
					'gutter' => '30px',
					'padding' => '100px 0px',
					'row_stretch' => 'full',
					'background' => '#f6f4f2',
					'background_display' => 'tile',
					'anchor' => 'blog',
				),
			),
		),
		'grid_cells' => 
		array (
			0 => 
			array (
				'grid' => 0,
				'weight' => 1,
			),
			1 => 
			array (
				'grid' => 1,
				'weight' => 1,
			),
			2 => 
			array (
				'grid' => 2,
				'weight' => 1,
			),
			3 => 
			array (
				'grid' => 3,
				'weight' => 1,
			),
			4 => 
			array (
				'grid' => 4,
				'weight' => 1,
			),
			5 => 
			array (
				'grid' => 5,
				'weight' => 1,
			),
			6 => 
			array (
				'grid' => 6,
				'weight' => 0.200000000000000011102230246251565404236316680908203125,
			),
			7 => 
			array (
				'grid' => 6,
				'weight' => 0.59999999999999997779553950749686919152736663818359375,
			),
			8 => 
			array (
				'grid' => 6,
				'weight' => 0.200000000000000011102230246251565404236316680908203125,
			),
			9 => 
			array (
				'grid' => 7,
				'weight' => 1,
			),
			10 => 
			array (
				'grid' => 8,
				'weight' => 1,
			),
			11 => 
			array (
				'grid' => 9,
				'weight' => 1,
			),
			12 => 
			array (
				'grid' => 10,
				'weight' => 1,
			),
		),
	);
	return $layouts;

}
add_filter( 'siteorigin_panels_prebuilt_layouts', 'jackrose_siteorigin_panels_prebuilt_layouts' );