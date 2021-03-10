<?php // Additional pages
// ------------------------
if(get_field('copy_boxes')): 
$gridcount = 0;
$count = 1; ?>

<?php while(has_sub_field('copy_boxes')): $gridcount++; $count++;
if($gridcount == 1) {
$cols = "l1-l6 m1-m6";
}
elseif($gridcount == 2) {
$cols = "l7-l12 m7-m12";
} ?>

<div class="box submission <?php echo $cols ?>">

<div class="in">

							<?php // Title 
							// ---------------- ?>
							<h2><?php the_title(); ?></h2>

															<div class="author">
									<?php // Author name
									// ----------------------
									include('partials/list-author.php'); ?>
								</div>

	<?php the_sub_field('copy'); ?>

							<footer>


								<div id="page-num">
									<?php // Number
									// -------------------- 
									echo $count; ?>
								</div>
							</footer>	

</div>

</div>			

<?php // Reset Gridset Loop Counter at 2
// --------------------------------------
if ($gridcount >= 2) { $gridcount = 0; } ?>							 
<?php endwhile; ?>

<?php endif; ?>
