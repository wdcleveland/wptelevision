<?php
/**
 * Template Name: Thank You Page
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<style>
.navbar {
  background: url('http://prospectus.flywheelsites.com/wp-content/uploads/2017/09/prospectus-hero-alt-1.png') no-repeat center center fixed;
}

.homepage-hero .container-fluid {
  background: url('http://prospectus.flywheelsites.com/wp-content/uploads/2017/09/prospectus-hero-alt-1.png') no-repeat center center fixed;
}
</style>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="homepage-hero">
    <div class="container-fluid">

    	<div align="center" class="row">
            <div class="container">
                <h1><?php the_field('headline'); ?></h1>
                <p><?php the_field('introduction_paragraph'); ?></p>

                <?php if(get_field('cta_buttons')): ?>

                <div class="button-fix">

                <?php while(has_sub_field('cta_buttons')): ?>

                    <a class="button button-secondary" href="<?php the_sub_field('button_url'); ?>"><?php the_sub_field('button_text'); ?></a>

                <?php endwhile; ?>

                </div>

                <?php endif; ?>
            </div>
            <!-- <a class="" href="#who-we-are"><i class="fa fa-angle-down"></i></a> -->
    	</div>

    </div>
</div>

<!-- <div id="who-we-are" class="anchor">
	<div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="column-right-margin">
                    <h2><?php the_field('who_title'); ?></h2>
                    <?php the_field('who_paragraph'); ?>
                    <div class="horizontal-green"></div>
                </div>
            </div>
            <div align="center" class="col-md-6 col-sm-12">
                <img src="<?php the_field('who_img'); ?>">
            </div>
        </div>
	</div>
</div>

<div id="how-can-we-help" class="anchor">
    <div class="container">
        <div class="row">
            <div id="desktop_img" align="center" class="col-md-6 col-sm-12">
                <img src="<?php the_field('how_img'); ?>">
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="column-left-margin">
                    <h2><?php the_field('how_title'); ?></h2>
                    <?php the_field('how_paragraph'); ?>
                    <div class="horizontal-green"></div>
                    <a class="button button-body" href="#contact">Register for Prospectus</a>
                </div>
            </div>
            <div id="mobile_img" align="center" class="col-md-6 col-sm-12">
                <img src="<?php the_field('how_img'); ?>">
            </div>
        </div>
    </div>
</div> -->

<!-- <div id="contact" class="anchor">
	<div class="container">
        <div align="" class="row">
            <div class="col-md-12">
                <h2>Thank You!</h2>
            </div>
        </div>
	</div>
</div> -->



<?php endwhile; ?>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>