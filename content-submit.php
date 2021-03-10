<?php
/**
 * The template used for displaying page content in tmpl-submit.php
 *
 * @package Juxprose Visual Verse
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>




		<?php // Loop for "Images" post type
		// ----------------------------------- 

		$args = array( 'post_type' => 'images', 'posts_per_page' => 1 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post(); ?>

<div class="l-all m-all">
		<?php // The Volume
		// --------------------------------------
		include('partials/mod-volume.php'); ?>
</div>
<div class="l1-l6 m1-m6">
			<?php include('partials/featured-img.php');
		// The Image
		// --------------------------------------
		include('partials/mod-img-credit.php');

		endwhile; wp_reset_postdata(); ?>

</div> 

	<div class=" l7-l12 m7-m12">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'jxp_visual_verse' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'jxp_visual_verse' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
