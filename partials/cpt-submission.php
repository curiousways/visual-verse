<div class="box submission <?php echo $cols ?>">

	<div class="in">

		<?php // Title 
		// ---------------- ?>
		<h2><a href="<?php echo get_permalink( $submission->ID ); ?>"><?php echo get_the_title( $submission->ID ); ?></a></h2>

		<div class="author">
			<?php // Author name
			// ----------------------
			include('list-author.php'); ?>
		</div>		

		<?php // Summary text 
		// -------------------- 
		$summary = get_field('summary', $submission->ID); echo $summary; 
		$copy_box = get_field('copy_boxes', $submission->ID);
		
		if($copy_box) { ?>
			<a class="read-more" href="<?php echo get_permalink( $submission->ID ); ?>">Read more &#62;</a>
		<?php }  ?>

		<footer>

			<div id="page-num">
				<?php // Number
				// -------------------- 
				echo $count; ?>
			</div>
			
		</footer>

	</div>
</div>
