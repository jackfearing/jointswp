<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<!-- .nav-container: add .full-width class to span nav 100%
	 .nav-container: add .center class to align center
-->
<?php
	$navMainWidth			= get_field('main_navigation_width','options');
	$navMainAlign			= get_field('main_navigation_alignment','options');
	$navMainBGColor			= get_field('main_navigation_background_color','options');
	$navMainBorderColor		= get_field('main_navigation_border_color','options');
?>

<div class="nav-container <?php echo $navMainWidth;?> <?php echo $navMainAlign;?>">
	<div class="top-bar show-for-large-up nav-table shadow" id="top-bar-menu" style="background:<?php echo $navMainBGColor;?>; border-bottom: 1px solid <?php echo $navMainBorderColor;?>;">

		<div class="nav-align-container">

			<div class="nav-custom">

				<div class="top-bar-left float-left">

					<div class="top-bar-left custom-logo">
						<?php
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						?>

						<?php if ($image) :?>
							<a href="<?php echo home_url(); ?>">
								<img src=<?php echo $image[0];?> alt="" />
							</a>
						<?php else :?>
							no logo
						<?php endif;?>

						<?php if ( get_bloginfo( 'description' )  !== '' ) : ?>
	<!-- 					    <h4 class="site-description"><?php bloginfo( 'description' ); ?></h4> -->
						<?php endif; ?>

					</div> <!-- end top-bar .custom-logo -->

				</div> <!-- end .top-bar-left -->

				<div class="show-for-large nav-cell">
					<?php joints_top_nav(); ?>
				</div>

			</div> <!-- end .nav-custom -->



			<?php
			// *************************************
			// OFF-CANVAS MENU
			// *************************************
			?>

			<div class="nav-cell">

				<div class="top-bar-right float-right hide-for-large">

					<ul class="menu">
						<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
						<!-- <li><a data-toggle="off-canvas">Menu</a></li> -->
						<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
					</ul>

					<div class="button_container" id="toggle">
						<span class="top"></span>
						<span class="middle"></span>
						<span class="bottom"></span>
					</div>
					<!-- end .button-container -->

					<div class="overlay" id="overlay">
						<nav class="overlay-menu">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Work</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">Home</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Work</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">Home</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Work</a></li>
								<li><a href="#">Contact</a></li>
								<?php //joints_top_nav(); ?>
							</ul>
						</nav> <!-- end .overlay-menu -->
					</div> <!-- end .overlay -->

				</div> <!-- end .top-bar-right .show-for-small-only -->

			</div> <!-- end .nav-cell -->

		</div> <!-- end .nav-align-container -->

	</div> <!-- end .top-bar -->
</div> <!-- end .nav-container -->



