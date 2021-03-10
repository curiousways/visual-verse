<?php
/**
 *
 * @package Juxprose Visual Verse
 */

get_header(); ?>

	<div class="content-area">
		<div class="site-content" role="main">

		<?php // Loop for "Images" post type
		// ----------------------------------- 


			include("partials/cpt-image.php");

 ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
