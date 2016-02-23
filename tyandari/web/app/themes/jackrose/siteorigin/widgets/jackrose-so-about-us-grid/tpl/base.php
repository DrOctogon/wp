<div class="jr-so-about-us-grid">
	<?php foreach ( $instance['items'] as $i => $item ) : ?>
		<div class="jr-so-about-us-grid-item jr-so-about-us-grid-item-photo-<?php echo ( $i % 2 == 0 ) ? 'left' : 'right'; ?> clear <?php echo ( ! empty( $instance['animation'] ) ) ? 'jr-animation-' . esc_attr( $instance['animation'] ) : ''; ?>"
			style="background-color: <?php echo esc_attr( $item['bg_color'] ); ?>">
			<div class="jr-so-about-us-grid-item-photo">
				<?php $img = wp_get_attachment_image_src( $item[ 'photo' ], 'grid' ); ?>
				<div class="jr-so-about-us-grid-item-photo-image" style="background-image: url(<?php echo esc_attr( $img[0] ); ?>);"></div>
			</div><!-- .jr-so-about-us-grid-item-photo -->
			<div class="jr-so-about-us-grid-item-text">
				<h4 class="jr-so-about-us-grid-item-name typography-heading"><?php echo ( $item['name'] ); ?></h4>
				<div class="jr-so-about-us-grid-item-content"><?php echo ( $item['description'] ); ?></div>
				<div class="jr-so-about-us-grid-item-links">
					<?php foreach ( $item['links'] as $link ) : ?>
						<a href="<?php echo esc_url( $link['url'] ); ?>">
							<span class="fa fa-<?php echo esc_attr( $link['type'] ); ?>"></span>
							<span class="screen-reader-text"><?php echo $link['type']; ?></span>
						</a>
					<?php endforeach; ?>
				</div><!-- .jr-so-about-us-grid-item-links -->
			</div><!-- .jr-so-about-us-grid-item-text -->
		</div><!-- .jr-so-about-us-grid-item -->
	<?php endforeach; ?>
</div><!-- .jr-so-about-us-grid -->