<?php
/**
 * Template Name: Front Page
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

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Pizza');
    data.addColumn('number', 'Populartiy');
    data.addRows([
      ['Cultivation & Retail', 34],
      ['Biotech/Pharma', 28],
      ['Miscellaneous', 17],
      ['Investments/ M & A', 12],
      ['Infused Products & Extracts', 3],
      ['Software/Media', 3],
      ['Consulting Services', 3]
      // ['Agriculture Technology', 3],
      // ['Consumption Devices', 1],
      // ['Hemp', 1]
    ]);

    var options = {
      // title: 'My Daily Activities',
      pieHole: 0.35,
      legend: 'labeled',
      'width': 1000,
      'height': 500,
      // is3D: true,
      colors: ['#333333', '#6c792f', '#bed754', '#163146']
    };

    var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
    chart.draw(data, options);
  }
</script>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div id="homepage_hero" class="homepage-hero">
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

<div id="who-we-are" class="anchor">
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
                    <a class="button button-body" href="/register/torch-sign-up/ ">Register for Prospectus</a>
                </div>
            </div>
            <div id="mobile_img" align="center" class="col-md-6 col-sm-12">
                <img src="<?php the_field('how_img'); ?>">
            </div>
        </div>
    </div>
</div>

<div id="rss_feed" class="anchor">
	<div class="container">
        <div align="" class="row">
            <h2><?php the_field('rss_title'); ?></h2>
            <div class="col-md-12">
                <div id="feed_container">
                    <?php the_field('rss_field'); ?>
                </div>
            </div>
            <div class="col-md-12">
                <div align="center" class="row">
                <!-- <img src="<?php the_field('map_img'); ?>"> -->
                <div id="donutchart" style="margin-top: -100px;"></div>

                </div>
            </div>
        </div>
	</div>
</div>
<?php endwhile; ?>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
