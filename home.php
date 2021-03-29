<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Juxprose Visual Verse
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

        

		<?php if ( have_posts() ) : ?>

            		<div class="container">
				<div class="row">

                <div class="col-sm-12">
                    <h1 style="margin-bottom: 30px">News</h1>
                 </div>



			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

<div style="margin-bottom: 20px;" class="col-sm-12 col-lg-4">
    <?php the_post_thumbnail(); ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h2><?php the_title(); ?></h2></a>
<small><?php the_time('F jS, Y'); ?></small>
<p style="margin-top: -5px; margin-bottom: -5px;"><?php the_excerpt(); ?></p>


</div>
			<?php endwhile; ?>

        </div></div>

			<?php jxp_visual_verse_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
