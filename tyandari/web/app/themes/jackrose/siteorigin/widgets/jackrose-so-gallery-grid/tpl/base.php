<?php
$filters = array();
$tagged = array();
foreach ( $instance['photos'] as $i => $photo ) {
	$tags = explode( ',', $photo['tags'] );
	$tags = array_map( 'trim', $tags );
	$tagged[ $i ] = array();

	foreach ( $tags as $tag ) {
		if ( ! in_array( $tag, $filters ) ) {
			$filters[ sanitize_key( $tag ) ] = $tag;
		}
		$tagged[ $i ][] = 'jr-so-' . sanitize_key( $tag );
	}
}
asort( $filters );
?>
<div class="jr-so-gallery-grid">
	<?php if ( $instance['filter'] ) : ?>
		<div class="jr-so-gallery-grid-filters">
			<a href="#" class="jr-so-gallery-grid-filter active" data-filter="*"><?php echo ( $instance[ 'label_all_photos' ] ); ?></a>
			<?php foreach ( $filters as $key => $filter ) : ?>
				<a href="#" class="jr-so-gallery-grid-filter" data-filter=".jr-so-<?php echo esc_attr( $key ); ?>"><?php echo ( $filter ); ?></a>
			<?php endforeach; ?>
		</div><!-- .jr-so-gallery-grid-filters -->
	<?php endif; ?>
	<div class="jr-so-gallery-grid-items jr-so-gallery-grid-<?php echo esc_attr( $instance['columns'] ); ?>-columns lightgallery clear">
		<?php foreach ( $instance['photos'] as $i => $photo ) : ?>
			<?php if ( empty( $photo['image'] ) ) continue; ?>
			<div class="jr-so-gallery-grid-item <?php echo esc_attr( implode( ' ', $tagged[ $i ] ) ); ?>">
				<a href="<?php echo esc_url( wp_get_attachment_url( $photo['image'] ) ); ?>">
					<?php echo wp_get_attachment_image( $photo['image'], 'grid' ); ?>
				</a>
			</div><!-- .jr-so-gallery-grid-item -->
		<?php endforeach; ?>
	</div><!-- .jr-so-gallery-grid-items -->
</div><!-- .jr-so-gallery-grid -->