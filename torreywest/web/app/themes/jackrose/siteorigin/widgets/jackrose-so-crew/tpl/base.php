<div class="jr-so-crew jr-so-crew-<?php echo esc_attr( $instance['columns'] ); ?>-columns clear">
	<?php foreach ( $instance['members'] as $i => $member ) : ?>
		<div class="jr-so-crew-member <?php echo ( ! empty( $instance['animation'] ) ) ? 'jr-animation-' . esc_attr( $instance['animation'] ) : ''; ?>">
			<div class="jr-so-crew-member-photo"><?php echo wp_get_attachment_image( $member[ 'photo' ], 'full' ); ?></div>
			<div class="jr-so-crew-member-name typography-heading"><?php echo ( $member['name'] ); ?></div>
		</div><!-- .jr-so-crew-member -->
	<?php endforeach; ?>
</div><!-- .jr-so-crew -->