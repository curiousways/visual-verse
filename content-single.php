<?php
/**
 * @package Juxprose Visual Verse
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 style="margin-bottom: 5px;" class="entry-title"><?php the_title(); ?></h1>
		<p style="margin-bottom: 15px;">Posted by <?php the_author_posts_link(); ?> on <?php the_time('F jS, Y'); ?> </p>
	</header><!-- .entry-header -->

	<?php the_post_thumbnail(); ?>
	<div class="entry-content">


		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'jxp_visual_verse' ),
				'after'  => '</div>',
			) );
		?>




	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
