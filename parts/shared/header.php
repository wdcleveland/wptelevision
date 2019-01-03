<header id="masthead" class="site-header" role="banner">

	<nav class="navbar-top fixed-top" role="navigation">
		<div class="navbar navbar-default">
			<div class="container-fluid">
				<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="" rel="homepage"><img src="<?php the_field('main_logo', 'option'); ?>"></a>
				</div>

				<div class="navbar-collapse collapse navbar-responsive-collapse">
					<div class="nav navbar-nav navbar-right">
						<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
						<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
						<script src="http://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.4/moment-timezone-with-data.min.js"></script>
						<script>
							// document.getElementById("demo").innerHTML = 5 + 6;
						  // console.log(moment().format('MMMM Do YYYY, h:mm:ss a'))
							// document.write(moment().format('MMMM Do YYYY, h:mm:ss a'))
							var datetime = null,
							        date = null;

							var update = function () {
							    date = moment(new Date())
							    datetime.html(date.format('dddd, MMMM Do YYYY, h:mm:ss a'));
							};

							$(document).ready(function(){
							    datetime = $('#datetime')
							    update();
							    setInterval(update, 1000);
							});

						</script>
						<div id="datetime"></div>
					</div>
				</div>
			</div>
		</div>
	</nav>

</header><!-- #masthead -->
