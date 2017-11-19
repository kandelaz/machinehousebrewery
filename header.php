
<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
	<head>
		<!-- meta info -->
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="description" content="<?php get_my_page_description() ?>" />
		<meta name="google-site-verification" content="Bnu7td9XpY3kv3Y3Xq16SiJAXh0bea8TUTQuxczcLNY" />
		<meta name="googlebot" content="index, follow">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

		<title><?php get_my_title_tag() ?></title>

		<!-- stylesheets -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />

		<!-- fonts -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Fjalla+One" type="text/css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" type="text/css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css" type="text/css">


		<!-- menu for small screens  -->
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

		<!-- site jquery  -->
		<script src="js/site.js"></script>

		<!-- twitter -->
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- favicon -->
		<link rel="shortcut icon" href="images/icons/favicon.ico">

		<!-- start wp head -->
		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

	<?php include_once("analyticstracking.php") ?>

		<!-- header begins -->
		<header>

			<div id="menu-section">

				<div class="centered">
					<!-- site logo -->
					<div class="logo">
					 	<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/machine-house-brewery-logo.png" alt="<?php bloginfo('name'); ?> | Seattle Beer in Georgetown"></a>
					</div>

					<div class="brewery-name"><h1>Machine House Brewery | Seattle Beer | Seattle Brewery</h1></div>
					<div class="tagline"><h2>Fine English-style Ales<br>Brewed in the Heart of Georgetown</h2></div>

					<!-- mixed menu -->
					<div id="nav-mixed" class="main-menu">
						<!-- menu for small screens -->
						<script>
						$(document).ready(function() {
							$('body').addClass('js');
							var $menu = $('#menu'),
							$menulink = $('.menu-link');

							$menulink.click(function() {
							$menulink.toggleClass('active');
							$menu.toggleClass('active');
							return false;
						});});
						</script>

						<!-- main menu -->
						<a href="#menu" class="menu-link"><img src="<?php bloginfo('template_directory'); ?>/images/ham-menu.png" alt=""></a>

						<nav id="menu" class="main-nav" role="navigation">

							<?php
							wp_nav_menu(array(
								'theme_location' => 'main-menu',
								'container' => ''
								));
							?>

							<div class="social-icons">
								<ul>
									<li><a href="https://www.facebook.com/MachineHouseBrewery?fref=ts" target="_blank" class="fa fa-facebook"></a></li>
		                            <li><a href="http://twitter.com/machinehouse" target="_blank" class="fa fa-twitter"></a></li>
		                            <li><a href="https://plus.google.com/102524576340361134166" target="_blank" class="fa fa-google-plus"></a></li>
		                            <li><a href="https://instagram.com/machinehouse/" target="_blank" class="fa fa-instagram"></a></li>
								</ul>
							</div>

						</nav>

					</div><!-- main-menu nav-mixed -->

				</div><!-- centered -->
			</div><!-- #menu-section -->
		</header>
		<!-- header ends -->
