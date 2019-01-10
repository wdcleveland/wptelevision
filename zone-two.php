<?php
/**
 * Template Name: Zone 2 Page
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

  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

      <?php if(have_rows('slides')): ?>

        <div class="carousel-inner" role="listbox">

          <?php while(have_rows('slides')): the_row(); ?>

            <div id="" class="carousel-item <?php the_sub_field('starting_slide'); ?>" style="background-color: <?php the_sub_field('bg_color'); ?>;">

              <div class="row">
                <div class="" style="width: 100vw; height: 100vh; margin: 170px 60px; border-radius: 0px; border: 3px solid #ffffff; background: url('<?php the_sub_field('bg_img'); ?>') no-repeat center center fixed;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; ">
                  <div style="padding: 30px; position: absolute; top: 400; left: 50; border-radius: 0px 0px 9px 0px; border-right: 3px solid #ffffff; border-bottom: 3px solid #ffffff; background-color: <?php the_sub_field('overlay_color'); ?>;">
                    <img style="max-width: 150px;" src="<?php the_field('white_logo', 'option'); ?>">
                  </div>
                  <div style="padding: 30px; position: absolute; bottom: 100px; right: 48px; border-radius: 9px 0px 0px 0px; border-left: 3px solid #ffffff; border-top: 3px solid #ffffff; background-color: <?php the_sub_field('overlay_color'); ?>;">
                    <h1 style="color: #ffffff; font-size: 30px; margin-bottom: 0px;">Be the difference.</h1>
                  </div>
                </div>
              </div>
            </div>

          <?php endwhile; ?>

        </div>

      <?php endif; ?>

    </div>

  <?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
