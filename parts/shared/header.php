<header id="masthead" class="site-header" role="banner">

	<nav class="navbar-top" role="navigation">
		<div class="navbar navbar-default">
			<div class="container">
				<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Prospectus" rel="homepage"><img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/indiciawp-bootstrap/images/prospectus-logo-lrg.png"></a>
				</div>

				<div class="navbar-collapse collapse navbar-responsive-collapse">
					<?php

					$args = array(
						'theme_location' => 'primary',
						'depth'      => 2,
						'container'  => false,
						'menu_class'     => 'nav navbar-nav navbar-right',
						'walker'     => new Bootstrap_Walker_Nav_Menu()
						);

					if (has_nav_menu('primary')) {
						wp_nav_menu($args);
					}

					?>

				</div>

			</div>
		</div>
	</nav>

</header><!-- #masthead -->
