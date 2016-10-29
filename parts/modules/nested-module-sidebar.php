<div class="large-12 medium-6 columns">

<div class="sidebar-callout" data-equalizer-watch>

	<?php if (get_sub_field('sidebar_image')) :?>

	    <img data-interchange="
		    [<?php echo $image_thumbnail_sb[0]; ?>, only screen and (min-width: 1px)] alt='<?php echo $alt_sb; ?>' width='<?php echo $image_thumbnail_sb[1]; ?>' height='<?php echo $image_thumbnail_sb[2]; ?>',
		    [<?php echo $image_medium_sb[0]; ?>, only screen and (min-width: 641px)] alt='<?php echo $alt_sb; ?>' width='<?php echo $image_medium_sb[1]; ?>' height='<?php echo $image_medium_sb[2]; ?>',
		    [<?php echo $image_large_sb[0]; ?>, only screen and (min-width: 929px)] alt='<?php echo $alt_sb; ?>' width='<?php echo $image_large_sb[1]; ?>' height='<?php echo $image_large_sb[2]; ?>'"
			src="<?php echo $image_thumbnail_sb[0]?>"
		/>

		<?php else :?>

		<!--<h2>NO IMAGE UPLOADED</h2> -->

	<?php endif ;?>

	<?php if (get_sub_field('sidebar_headline', 'options')) {
		echo '<h3>' , get_sub_field('sidebar_headline') , '</h3>'; // sub field:
		}
	?>

	<?php if (get_sub_field('sidebar_description', 'options')) {
		echo the_sub_field('sidebar_description'); // sub field:
		}
	?>
</div>

</div>
