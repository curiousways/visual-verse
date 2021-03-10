<div class="l-all m-all">
		<?php // The Volume
		// --------------------------------------
		include('mod-volume.php'); ?>
</div>

<div class="l1-l6 m1-m6">

		<?php // The Image
		// --------------------------------------
		include('featured-img.php'); ?>
	
		<?php // The Image
		// --------------------------------------
		include('mod-img-credit.php'); ?>
</div>

	<?php // Get connected posts
 	// -----------------------------------
 	$count = 0;
 	$gridcount = 1; 
	$submissions = get_posts(array(
		'post_type' => 'submissions',
		'posts_per_page'   => 1000,
		'meta_query' => array(
			array(
				'key' => 'image_connection', 
				'value' => '"' . get_the_ID() . '"',
				'compare' => 'LIKE'
			)
		)
	)); ?>

	<?php if( $submissions ): ?>

		<?php foreach( $submissions as $submission ): $count++; $gridcount++; ?>

			<?php if($gridcount == 1) {
					$cols = "l1-l6 m1-m6";
			}
			elseif($gridcount == 2) {
				$cols = "l7-l12 m7-m12";
			}
			
			// Get the submission content
			// ------------------------------------
			include('cpt-submission.php'); ?>

		<?php // Reset Gridset Loop Counter at 2
		// --------------------------------------
		if ($gridcount >= 2) { $gridcount = 0; } ?>

		<?php endforeach; ?>

	<?php endif; ?>
