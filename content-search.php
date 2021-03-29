<?php
/**
 * @package Juxprose Visual Verse
 */
?>



<div class="col-sm-12 col-lg-4" style="padding:50px" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		 <?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?> 
		 <?php include('partials/list-author.php'); ?>

<?php $posts_submitted = get_field('image_connection');
	 
					if( $posts_submitted ) :

						foreach( $posts_submitted as $post_object): ?>

							<div class="box the-image">
								<?php $attachment_id = get_field('the_image', $post_object->ID);
								$size = "full"; // (thumbnail, medium, large, full or custom size)
	 							$image = wp_get_attachment_image_src( $attachment_id, $size );?>
								<img src="<?php echo $image[0]; ?>" />
							</div>

						<?php endforeach; ?>

					<?php endif; ?>




		
		
</div><!-- #post-<?php the_ID(); ?> -->

