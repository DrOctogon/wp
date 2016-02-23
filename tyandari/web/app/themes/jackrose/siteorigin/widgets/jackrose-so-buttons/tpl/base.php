<div class="jr-so-buttons align-<?php echo esc_attr( $instance['alignment'] ); ?> <?php echo ( ! empty( $instance['animation'] ) ) ? 'jr-animation-' . esc_attr( $instance['animation'] ) : ''; ?>">
	<?php foreach ( $instance['buttons'] as $button ) : ?>
		<a class="jr-so-button button" href="<?php echo esc_url( $button['url'] ); ?>">
			<?php echo ( $button['text'] ); ?>
		</a>
	<?php endforeach; ?>
</div>