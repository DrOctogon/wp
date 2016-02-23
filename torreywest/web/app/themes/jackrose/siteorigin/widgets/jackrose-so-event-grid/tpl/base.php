<div class="jr-so-event-grid jr-so-event-grid-<?php echo esc_attr( $instance['columns'] ); ?>-columns clear">
	<?php foreach ( $instance['events'] as $event ) : ?>
		<div class="jr-so-event-grid-item <?php echo ( ! empty( $instance['animation'] ) ) ? 'jr-animation-' . esc_attr( $instance['animation'] ) : ''; ?>">
			<div class="jr-so-event-grid-item-wrapper" style="background-color: <?php echo esc_attr( $event['bg_color'] ); ?>">
				<?php if ( ! empty( $event['photo'] ) ) : ?>
					<div class="jr-so-event-grid-item-photo"><?php echo wp_get_attachment_image( $event['photo'], 'grid' ); ?></div>
				<?php endif; ?>

				<?php if ( ! empty( $event['icon'] ) ) : ?>
					<div class="jr-so-event-grid-item-icon"><?php echo wp_get_attachment_image( $event['icon'], 'full' ); ?></div>
				<?php endif; ?>
				
				<?php if ( ! empty( $event['title'] ) ) : ?>
					<h4 class="jr-so-event-grid-item-title typography-heading"><?php echo ( $event['title'] ); ?></h4>
				<?php endif; ?>

				<?php if ( ! empty( $event['description'] ) ) : ?>
					<div class="jr-so-event-grid-item-description"><?php echo ( $event['description'] ); ?></div>
				<?php endif; ?>

				<?php if ( ! empty( $event['summary'] ) ) : ?>
					<div class="jr-so-event-grid-item-summary"><?php echo ( $event['summary'] ); ?></div>
				<?php endif; ?>
			</div><!-- .jr-so-event-grid-item-wrapper -->
		</div><!-- .jr-so-event-grid-item -->
	<?php endforeach; ?>
</div><!-- .jr-so-event-grid -->