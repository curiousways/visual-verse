<div class="list-sidebar">

	<h3>Authors</h3>

          <!-- <?php echo do_shortcode('[wpes_search_form wpessid="33014"]'); ?>   -->


        <!-- 33014 local -->
        <!-- 33267 live -->

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
        echo '<summary>' . $key . '</summary>';

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