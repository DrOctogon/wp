<div class="jr-so-quote align-<?php echo esc_attr( $instance['alignment'] ); ?> slick">
	<?php foreach ( $instance['quotes'] as $quote ) : ?>
		<div class="jr-so-quote-item">
			<div class="jr-so-quote-text"><?php echo ( $quote['text'] ); ?></div>
			<div class="jr-so-quote-name"><?php echo ( $quote['name'] ); ?></div>
		</div><!-- .jr-so-quote-item -->
	<?php endforeach; ?>
</div><!-- .jr-so-quote -->