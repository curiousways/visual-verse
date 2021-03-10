<?php 
// Gridset Loop Counter - define
// -----------------------------
$gridcount = 0; ?>

<?php // WHILE { ?>

	<?php // Grisdet Loop Counter	- determine classes
	// ----------------------------------------------
	$gridcount++;

	if($gridcount == 1) {
			$cols = "l1-l3 m1-m3";
	}
	elseif($gridcount == 2) {
		$cols = "l4-l6 m4-m6";
	}
	elseif($gridcount == 3) {
		$cols = "l7-l9 m7-m9";
	} 
	?>

	<?php // Reset Gridset Loop Counter at 3
	// --------------------------------------
	if ($gridcount >= 3) { $gridcount = 0; } ?>

<?php // END WHILE ?>	
