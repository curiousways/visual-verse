<div class="list-sidebar">
	<h3>Authors</h3>
	<nav>
		<?php 
		$terms = get_terms('writers', 'number=10000');
		echo '<ul>';
		foreach ($terms as $term) {
		    $term_link = get_term_link( $term, 'writers' );
		    if( is_wp_error( $term_link ) )
		        continue;
		    echo '<li><a href="' . $term_link . '">' . $term->name . '</a></li>';
		      //echo '<li>' . $term->name . '</li>';
		}
		echo '</ul>'; 
		?>
	</nav>
</div>
