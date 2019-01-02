<footer>
	<div class="navbar-bottom">
		<div class="container">
			<div class="row">
				<div style="" class="col-lg-6 col-md-12 col-sm-12">
					<img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/indiciawp-bootstrap/images/prospectus-logo-lrg.png">
				</div>
				<div style="" class="col-lg-6 col-md-12 col-sm-12 footer-nav">
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
				<div class="col-lg-12">
					&copy; MERIDA/PROSPECTUS 2017, ALL RIGHTS RESERVED.
				</div>
			</div>
		</div>
	</div>
</footer>
