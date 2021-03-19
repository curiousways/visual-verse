<div class="list-sidebar">
	<h3>Artists</h3>



	<nav>
		
<?php
$terms = get_terms('artist');



if ( !empty( $terms ) && !is_wp_error( $terms ) ){    
$term_list = [];    
foreach ( $terms as $term ){

    $first_letter = sanitize_title($term->name[0]);
    $term_list[$first_letter][] = $term;
	
}

echo '<div class="my_term-archive">';

    foreach ( $term_list as $key=>$value ) {
		echo '<details>';
        echo '<summary>' . $key . '</summary>';

        foreach ( $value as $term ) {

		    $term_link = get_term_link( $term, 'artist' );
		    if( is_wp_error( $term_link ) )
		        continue;

           echo '<li style="list-style-type: none"><a href="' . $term_link . '">' . $term->name . '</a></li>';
        }
		echo '</details>';
    }

echo '</div>';
} 

  ?>
 




	</nav>
</div>

	</nav>
</div>
