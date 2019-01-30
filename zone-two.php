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

  <?php if( get_field('zone_slides') ): ?>

    <div class="carousel-inner" role="">

      <?php while( has_sub_field("zone_slides") ): ?>

        <?php if(get_row_layout() == "welcome_screen"): // layout: welcome_screen ?>

          <div id="" class="carousel-item active">
            <div align="left" class="row" style="background: url('<?php the_sub_field('bg_img'); ?>') no-repeat center center fixed;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
              <div class="col-md-6">
              </div>
              <div id="welcome_health" align="left" class="col-md-6" style="height: 100vh; background-color: rgba(182,0,80,0.85);">
                <div style="padding: 60px; position: absolute; top: 20%; left: 20%;">
                  <h1 style="color: #ffffff; text-transform: uppercase; font-weight: 800; font-size: 4rem; padding-bottom: 20px; border-bottom: 3px solid #f0b310; margin-bottom: 20px;"><?php the_sub_field('text'); ?></h1>
                  <h2 style="color: #ffffff; font-size: 2rem; margin-bottom: 0px;"><?php the_sub_field('subtext'); ?></h2>
                </div>
              </div>
            </div>
          </div>

        <?php elseif(get_row_layout() == "did_you_know"): // layout: did you know? ?>

          <!-- <div id="" class="carousel-item"  style="text-shadow: #000000 3px; width: 100vw; height: 100vh; background: url('<?php the_sub_field('dyk_img'); ?>') no-repeat center center fixed;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; ">
            <div align="left" class="row">
              <div class="" style="width: 100vw; height: 100vh; margin: 150px 60px ;">
                <div style="padding: 30px; position: absolute; top: 25%; left: 50px;">
                  <h1><?php the_sub_field('dyk_title'); ?></h1>
                  <h2 style="color: #ffffff; font-size: 2rem; margin-bottom: 0px; max-width: 75%;"><?php the_sub_field('dyk_fact'); ?></h2>
                  <img style="max-width: 250px; margin-top: 30px;" src="<?php the_field('main_logo', 'option'); ?>">
                </div>
              </div>
            </div>
          </div> -->
          <div id="" class="carousel-item" style="background: url('<?php the_sub_field('dyk_img'); ?>') no-repeat center center fixed;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
            <div align="left" class="row">
              <div id="dyk_health" align="left" class="col-md-4" style="height: 100vh; background-color: rgba(182,0,80,0.85);">
                <div style="padding: 60px; position: absolute; top: 20%; left: 5%;">
                  <h1 style="color: #ffffff; text-transform: uppercase; font-weight: 800; font-size: 3rem; padding-bottom: 20px; border-bottom: 3px solid #f0b310; margin-bottom: 20px;"><?php the_sub_field('dyk_title'); ?></h1>
                  <h2 style="color: #ffffff; font-size: 1.5rem; margin-bottom: 0px;"><?php the_sub_field('dyk_fact'); ?></h2>
                  <!-- <img style="max-width: 200px; margin-top: 20px;" src="<?php the_field('main_logo', 'option'); ?>"> -->
                </div>
                <div style="padding: 60px; position: absolute; bottom: 20%; left: 5%;">
                  <h2 style="color: #ffffff; font-size: 1rem; font-weight: 200; font-style: italic; margin-bottom: 0px;">Excerpt and/or facts with go here.</h2>
                </div>
              </div>
              <div class="col-md-8">
              </div>
            </div>
          </div>

        <?php elseif(get_row_layout() == "custom"): // layout: custom ?>

          <div id="" class="carousel-item"  style="width: 100vw; height: 100vh; background: url('<?php the_sub_field('full_size_img'); ?>') no-repeat center center fixed;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; ">
          </div>

        <?php elseif(get_row_layout() == "two_thirds_left_curved"): // layout: left curved ?>

          <div id="" class="carousel-item"  style="width: 100vw; height: 100vh; background: url('<?php the_sub_field('image_right'); ?>') no-repeat center center fixed;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
            <div align="left" class="row" style="background-color: rgba(182,0,80,.85);">
              <div class="col-md-4">
                <div style="padding: 60px; position: absolute; top: 15%; left: 5%;">
                  <h1 style="color: #ffffff; text-transform: uppercase; font-weight: 800; font-size: 3.25rem; padding-bottom: 20px; border-bottom: 3px solid #f0b310; margin-bottom: 20px;"><?php the_sub_field('intro_left'); ?></h1>
                  <h2 style="color: #ffffff; font-size: 2.25rem; margin-bottom: 0px;"><?php the_sub_field('excerpt_left'); ?></h2>
                </div>
                <div style="padding: 30px 60px; position: absolute; bottom: 10%; left: 5%;">
                  <!-- <img style="max-width: 200px; margin-top: 0px;" src="<?php the_field('main_logo', 'option'); ?>"> -->
                </div>
              </div>
              <div id="curved_left" class="col-md-8" style="height: 100vh; border: 9px solid #ffffff; background: url('<?php the_sub_field('image_right'); ?>') no-repeat center center fixed;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
              </div>
            </div>
          </div>


        <?php elseif(get_row_layout() == "two_thirds_right_curved"): // layout: right curved ?>

          <div id="" class="carousel-item"  style="width: 100vw; height: 100vh; background: url('<?php the_sub_field('image_left'); ?>') no-repeat center center fixed;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
            <div align="left" class="row" style="background-color: rgba(240,179,16,.85);">
              <div id="curved_right" class="col-md-9" style="; height: 100vh; border: 9px solid #ffffff; background: url('<?php the_sub_field('image_left'); ?>') no-repeat center center fixed;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
              </div>
              <div class="col-md-3" style="">
                <div style="padding: 60px; position: absolute; top: 15%; left: -65%;">
                  <h1 style="color: #ffffff; text-transform: uppercase; font-weight: 800; font-size: 3.25rem; padding-bottom: 20px; border-bottom: 3px solid #b60050; margin-bottom: 20px;"><?php the_sub_field('intro_right'); ?></h1>
                  <h2 style="color: #ffffff; font-size: 2.25em; margin-bottom: 0px;"><?php the_sub_field('excerpt_right'); ?></h2>
                </div>
                <div style="padding: 30px 60px; position: absolute; bottom: 10%; right: 5%;">
                  <!-- <img style="max-width: 200px; margin-top: 0px;" src="<?php the_field('main_logo', 'option'); ?>"> -->
                </div>
              </div>
            </div>
          </div>

        <?php endif; ?>

      <?php endwhile; ?>

    </div>

    <?php endif; ?>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
