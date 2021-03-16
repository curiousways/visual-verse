<div class="list-sidebar">
	<h3>Authors</h3>
	<nav>


<?php
$terms = get_terms('writers');



if ( !empty( $terms ) && !is_wp_error( $terms ) ){    
$term_list = [];    
foreach ( $terms as $term ){

    $first_letter = sanitize_title($term->name[0]);
    $term_list[$first_letter][] = $term;
	
}

echo '<div class="my_term-archive">';

    foreach ( $term_list as $key=>$value ) {
		echo '<details>';
        echo '<summary style="margin-top: 15px; margin-bottom: 15px; padding: 10px 10px 7px 10px; background-color: grey; border-radius: 10px; text-transform: uppercase;">' . $key . '</summary>';

        foreach ( $value as $term ) {

		    $term_link = get_term_link( $term, 'writers' );
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


<!-- <details>
    <summary>Details</summary>
    Something small enough to escape casual notice.
</details> -->