<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Juxprose Visual Verse
 */

get_header(); ?>



		<?php if ( have_posts() ) : ?>
			
			<header class="page-header">
				<h1 style="margin-bottom: 20px;" class="page-title"><?php printf( __( 'Search Results for: %s', 'jxp_visual_verse' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

						<div class="container">
				<div class="row">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			
			
				<?php get_template_part( 'content', 'search' ); ?>
			

			<?php endwhile; ?>
			</div>
		</div>

		<?php else : ?>

			<h2>No results.<br><br><a style="text-decoration: underline;" href="<?php bloginfo('url'); ?>/images/">Return to Archive</a>

		<?php endif; ?>


<?php get_footer(); ?>
