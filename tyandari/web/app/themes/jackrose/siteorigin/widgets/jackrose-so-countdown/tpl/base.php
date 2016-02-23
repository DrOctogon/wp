<div class="jr-so-countdown align-<?php echo esc_attr( $instance['alignment'] ); ?>" data-jr-target="<?php echo esc_attr( $instance['target'] ); ?>" data-jr-build="<?php echo esc_attr( $instance['build'] ); ?>">
	<?php
	$builds = explode( '_', $instance['build'] );
	?>
	<?php foreach ( $builds as $build ) : ?>
		<?php switch ( $build ) {
			case 'm':
				$type = 'months';
				break;
			case 'D': case 'n':
				$type = 'days';
				break;
			case 'H':
				$type = 'hours';
				break;
			case 'M':
				$type = 'minutes';
				break;
			case 'S':
				$type = 'seconds';
				break;
		} ?>
		<div class="jr-so-countdown-fragment jr-so-countdown-<?php echo esc_attr( $type ); ?>"
		data-jr-format="<?php echo esc_attr( $build ); ?>"
		data-jr-singular="<?php echo esc_attr( $instance[ $type ]['label_singular'] ); ?>"
		data-jr-plural="<?php echo esc_attr( $instance[ $type ]['label_plural'] ); ?>">
			<big></big><small></small>
		</div><!-- .jr-so-countdown-fragment -->
	<?php endforeach; ?>
</div><!-- .jr-so-countdown -->