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
				
				<?php include('partials/list-artists.php'); ?>
			</div>
				
			<?php if ( have_posts() ) : ?>

				<?php $gridcount = 0;  ?>
				<?php while ( have_posts() ) : the_post(); $gridcount++; ?>

			<?php 
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

		<?php // The Volume
		// --------------------------------------
		include('partials/mod-volume.php'); ?>
		<?php // The Image
		// --------------------------------------
		include('partials/featured-img.php'); ?>


</div>




				

		<?php // Reset Gridset Loop Counter at 3
		// --------------------------------------
		if ($gridcount >= 3) { $gridcount = 0; } ?>

				<?php endwhile; ?>

				<?php jxp_visual_verse_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'archive' ); ?>

			<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_footer(); ?>
