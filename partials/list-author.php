				<?php // Author name
				// -------------------- 
				/*
				$auth_terms = get_the_terms( $submission->ID, 'author' ); 
				if ( $auth_terms && ! is_wp_error( $auth_terms ) ) : 
					$chap_number = array();
					foreach ( $auth_terms as $term ) {
						$chap_number[] = $term->name;
					}
					$auth_output = join( ", ", $chap_number );?>

					 <span><?php echo $auth_output; 
				endif; ?> */



	$terms = get_the_terms( $submission->ID, 'writers' ); 

	foreach ($terms as $term) {
	    $term_link = get_term_link( $term, 'writers' );
	    if( is_wp_error( $term_link ) )
	        continue;
	    echo '<a href="' . $term_link . '">' . $term->name . '</a>';
	      //echo '' . $term->name . '';
	}

	?>
