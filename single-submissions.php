<?php
/**
 * The Template for displaying Chapter single posts.
 *
 * @package Juxprose Visual Verse
 */

get_header(); ?>

	<div id="primary" class="content-area image-pages">
		<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); $count++ ?>
 
				<div class="entry-content">

					<?php // Get the connected post
					// ------------------------------
					$posts = get_field('image_connection');
					 
					if( $posts ): ?>
						<?php foreach( $posts as $post): ?>
							<?php setup_postdata($post); ?>


<div class="l-all m-all">
		<?php // The Volume
		// --------------------------------------
		include('partials/mod-volume.php'); ?>
</div>

<div class="l1-l6 m1-m6">

		<?php // The Image
		// --------------------------------------
		include('partials/featured-img.php'); ?>
	
		<?php // The Image
		// --------------------------------------
		include('partials/mod-img-credit.php'); ?>
</div>

						<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>

					<div class="box submission l7-l12 m7-m12">

						<div class="in">

							<?php // Title 
							// ---------------- ?>
							<h2><?php the_title(); ?></h2>

								<div class="author">
									<?php // Author name
									// ----------------------
									include('partials/list-author.php'); ?>
								</div>							

							<?php // Page 1
							// -------------------- 
							the_field('summary'); ?>

							<footer>


								<div id="page-num">
									<?php // Number
									// -------------------- 
									echo $count; ?>
								</div>
							</footer>

						</div>

					</div>

					<?php include('extra-pages.php'); ?>

 
				</div>
 
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
