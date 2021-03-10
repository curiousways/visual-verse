<div class="list-sidebar">
	<h3>Artists</h3>
	<nav>
		<?php 
		$terms = get_terms('artist', 'number=500');
		echo '<ul>';
		foreach ($terms as $term) {
		    $term_link = get_term_link( $term, 'artist' );
		    if( is_wp_error( $term_link ) )
		        continue;
		    echo '<li><a href="' . $term_link . '">' . $term->name . '</a></li>';
		}
		echo '</ul>'; 
		?>
	</nav>
</div>
