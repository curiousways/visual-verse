	<div class="box the-image">
	<?php // Image
	// ----------------------------------- 



	$attachment_id = get_field('the_image');
	$size = "full";
	$image = wp_get_attachment_image_src( $attachment_id, $size ); ?>
	<?php if ( is_post_type_archive('images') ) : ?>
		<a href="<?php echo get_permalink( $submission->ID ); ?>">
			<img src="<?php echo $image[0]; ?>">
		</a>
	<?php elseif (is_tax( 'author' ) || is_tax('artist')) : ?>

		<a href="<?php echo get_permalink( $submission->ID ); ?>">
			<img src="<?php echo $image[0]; ?>">
		</a>


	<?php else : ?>
		<img src="<?php echo $image[0]; ?>">
	<?php endif; ?>
	</div>
