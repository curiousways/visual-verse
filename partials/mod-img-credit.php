<div class="the-image-credit">
	<?php // Artist name and link
	// -----------------------------------
	echo get_the_term_list( $post->ID, 'artist', 'Image by ', ', ', '' ); ?>
</div>
