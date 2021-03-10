	<ul class="list-inline list-volume">
		<?php // Volume
		// -----------------------------
		foreach((get_the_category()) as $category) { ?>
		<li><?php echo $category->cat_name . ' '; ?></li>
		<?php }

		// Chapter
		// ----------------------------- ?>
		<li>Chapter <?php the_field('chapter_number'); ?></li>
	</ul>
