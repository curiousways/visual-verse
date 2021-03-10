<?php
/**
 * The template for displaying Image listings.
 *
 * @package Juxprose Visual Verse
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<div class="sidebar l1-l3 m1-m3">
				<?php include('partials/list-authors.php'); ?>
			</div>

			<div class="l4-l12">
				
			<?php if ( have_posts() ) : 

				$gridcount = 0;
				while ( have_posts() ) : the_post(); 
					$gridcount++;	
					
					if($gridcount == 1) {
						$cols = "l4-l6 m4-m6";
					} 

					elseif($gridcount == 2) {
						$cols = "l7-l9 m7-m9";
					}

					elseif($gridcount == 3) {
						$cols = "l10-l12 m10-m12";
					} 			
					?>				

					<div class="<?php echo $cols ?>">

					<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>

					<div class="author">
						<?php // Author name
						// ----------------------
						include('partials/list-author.php'); ?>
					</div>					

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

				</div>

				<?php // Reset Gridset Loop Counter at 3
				// --------------------------------------
				if ($gridcount >= 3) { $gridcount = 0; } ?>

				<?php endwhile; ?>

				<?php jxp_visual_verse_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'archive' ); ?>

			<?php endif; ?>

			</div>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_footer(); ?>
