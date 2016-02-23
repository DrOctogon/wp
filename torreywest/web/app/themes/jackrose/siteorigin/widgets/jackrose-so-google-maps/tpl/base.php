<?php
$id = jackrose_increment_number();
$latlong = explode( ',', $instance['center'] );
$latlong = array_map( 'trim', $latlong );
$center['lat'] = $latlong[0];
$center['long'] = $latlong[1];
?>
<div class="jr-so-google-maps" data-jr-id="<?php echo esc_attr( $id ); ?>">
	<div id="gmaps-<?php echo esc_attr( $id ); ?>"></div>
	<style type="text/css">
	#gmaps-<?php echo ( $id ); ?> {
		height: <?php echo $instance['height']; ?>px;
	}
	@media screen and ( max-width: 779px ) {
		#gmaps-<?php echo ( $id ); ?> {
			height: <?php echo $instance['height_mobile']; ?>px;
		}
	}
	</style>
	<script type="text/javascript">
	var jr_so_google_maps;
	if ( undefined == jr_so_google_maps ) {
		jr_so_google_maps = new Array();
	}
	jr_so_google_maps[<?php echo esc_js( $id ); ?>] = {
		map_div: '#gmaps-<?php echo esc_attr( $id ); ?>',
		generate_controls: false,
		locations: [
			<?php foreach ( $instance['pins'] as $pin ) : ?>
			<?php
			$latlong = explode( ',', $pin['latlong'] );
			$latlong = array_map( 'trim', $latlong );
			$pin['lat'] = $latlong[0];
			$pin['long'] = $latlong[1];
			?>
				{
					lat: <?php echo esc_js( ! empty( $pin[ 'lat' ] ) ? $pin[ 'lat' ] : '' ); ?>,
					lon: <?php echo esc_js( ! empty( $pin[ 'long' ] ) ? $pin[ 'long' ] : '' ); ?>,
					html: '<?php echo esc_js( $pin[ 'title' ] ); ?>',
					icon: '<?php echo esc_js( wp_get_attachment_url( $pin[ 'icon' ] ) ); ?>',
					animation: google.maps.Animation.DROP,
				},
			<?php endforeach; ?>
		],
		map_options: {
			scrollwheel: false,
			mapTypeControl: false,
			streetViewControl: false,
			zoomControlOptions: {
				style: google.maps.ZoomControlStyle.SMALL,
			},
			zoom: <?php echo esc_js( $instance['zoom'] ); ?>,
			set_center: [ <?php echo esc_js( $center['lat'] ); ?>, <?php echo esc_js( $center['long'] ); ?> ],
		},
		styles: {
			'gmaps-<?php echo esc_js( $id ); ?>': <?php echo ( ! empty( $instance['style'] ) ) ? html_entity_decode( $instance['style'] ): '[]'; ?>,
		},
	};
	</script>
</div><!-- .jr-so-google-maps -->