<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Juxprose Visual Verse
 */
?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-content">
		<?php the_content(); ?>

		<?php if(get_field('page_content_boxes')): ?>
		 

		 
					<?php $gridcount = 0; while(has_sub_field('page_content_boxes')): $gridcount++;	 ?>

					<?php
					
					if($gridcount == 1) {
						$cols = "l1-l6 m1-m6";
					} 

					elseif($gridcount == 2) {
						$cols = "l7-l12 m7-m12";
					} ?>
<div class="box page-box <?php echo $cols ?> <?php the_sub_field('class'); ?>">

	<div class="in">
		<div class="page-content">
						<?php the_sub_field('content'); ?>
						</div>
				 </div>

		 
			</div>

		<?php // Reset Gridset Loop Counter at 3
		// --------------------------------------
		if ($gridcount >= 2) { $gridcount = 0; } ?>

					<?php endwhile; ?>


		 
		<?php endif; ?>

		
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'jxp_visual_verse' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
