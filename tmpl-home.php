<?php
/**
 * Template name: Home
 *
 * This is the homepage template file
 *
 * @package Juxprose Visual Verse
 */

get_header(); ?>

	<div class="content-area">
		<div class="site-content" role="main">

		<?php // Loop for "Images" post type
		// ----------------------------------- 

		$args = array( 'post_type' => 'images', 'posts_per_page' => 1 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();

			include("partials/cpt-image.php");

		endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
