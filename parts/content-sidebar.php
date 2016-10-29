<?php if( get_row_layout() == 'sidebar_content' ): // layout: ?>

	<?php
		$attachment_id_sb = get_sub_field('sidebar_image');
		$image_thumbnail_sb = wp_get_attachment_image_src( $attachment_id_sb, "callout-mobile-small" );
		$image_medium_sb = wp_get_attachment_image_src( $attachment_id_sb, "callout-mobile-medium" );
		$image_large_sb = wp_get_attachment_image_src( $attachment_id_sb, "callout-desktop-large" );
		$alt_sb = get_post_meta($attachment_id_sb , '_wp_attachment_image_alt', true);

		$radioButtonSidebar = get_sub_field('sidebar_link_select'); // sub field:
		$sidebarPageLink = get_sub_field('sidebar_page_link');
		$sidebarPageButton = get_sub_field('sidebar_page_link_button');
		$sidebarFile = get_sub_field('sidebar_file_link');
		$sidebarFileButton = get_sub_field('sidebar_file_link_button');
	?>

	<?php // conditional statement using radio button for section header
		if (get_sub_field('sidebar_link_select') =='sidebar-link') :?>

			<?php //echo get_sub_field ('sidebar_link_select'); // Display sidebar field name ?>

			<?php echo '<a href="'.$sidebarPageLink ['url'].'" target="'.$sidebarPageLink['target'].'">';?>

				<?php // Module: Sidebar (Options)
					include(locate_template('parts/modules/nested-module-sidebar.php'));
				?>

			<?php //echo '<button>', $sidebarPageButton ,'</button></a>'; // Display sidebar field name	?>
			<?php echo '</a>';	?>

		<?php elseif (get_sub_field('sidebar_link_select') =='sidebar-file') :?>

			<?php //echo get_sub_field ('sidebar_link_select'); // Display sidebar field name ?>

			<?php if( $sidebarFile ): ?>

				<?php echo '<a href="' , $sidebarFile['url'] ,'" target="_blank">' ;?>

					<?php // Module: Sidebar (Options)
						include(locate_template('parts/modules/nested-module-sidebar.php'));
					?>

				<?php //echo '', $sidebarFileButton ,'</a>'; // Display sidebar field name ?>
				<?php echo '</a>'; ?>

			<?php endif ;?>

		<?php else :?>
			<div class="no-link">

				<?php //echo get_sub_field ('sidebar_link_select'); // Display sidebar field name ?>

				<?php // Module: Sidebar (Options)
					include(locate_template('parts/modules/nested-module-sidebar.php'));
				?>

			</div> <!-- end .no-link -->

	<?php endif; // end header-featured ?>

<?php endif; // sidebar_image ?>

