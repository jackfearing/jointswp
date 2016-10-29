
<?php if( get_row_layout() == 'tabs_component' ): // nested layout: ?>

	<?php
			$tabsWidth 	= get_sub_field('tabs_width');
			$tabsRows 	= get_sub_field('tabs_rows');
	?>


	<div class="custom-tabs tab-container">

		<ul class="tabs" data-tabs id="example-tabs">

		<?php
			$count_01 = 0;

			foreach(get_sub_field('tabs_module') as $relationship) {

				echo   '<li class="tabs-title';

				if($count_01 == 0){ echo " is-active";}

				echo '"><a href="#tab-'.$i.'-'.$outerCounter.'-'.$count_01.'" ';

				if($count_01 == 0){ echo 'aria-selected="true"';}

				echo '>'.$relationship->post_title.'</a></li>';

				$count_01++;
			}
		?>

		</ul><!-- .tabs -->


		<div class="tabs-content" data-tabs-content="example-tabs">
					<div class="row <?php echo $tabsWidth; ?> <?php echo $tabsRows; ?>">
                    	                    <div class="large-12 columns">


		    <?php
            	//$i=0;
				$posts = get_sub_field('tabs_module');
				if( $posts ): $temp_post = $post;

				$count_01 = 0;

				foreach( $posts as $post): setup_postdata($post);
			?>
            		  <div class="tabs-panel<?php if($count_01 == 0){ echo " is-active";} ?>" id="<?php echo 'tab-'.$i.'-'.$outerCounter.'-'.$count_01;?>">
	            		  <?php the_title('<h2>','</h2>'); ?>
                          <?php the_content(); ?>
                      </div>

            <?php
				$count_01++;

				endforeach;
				wp_reset_postdata();
                $post = $temp_post;
				endif;
			?>
            	</div>
			</div>
		</div> <!-- end .tabs-content -->



	</div> <!-- end .custom-tabs .tab-container -->

	<?php else : ?>

		<?php //if (get_sub_field('full_width_content')) :?>
			<?php //the_sub_field('full_width_content'); ?>
		<?php //endif; ?>

<?php endif; ?>