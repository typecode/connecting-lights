<!doctype html>
<!--

	Styleguide
	----------
	
	Double quotes ("), not single quotes (').
	
	Thank you.

-->
<html <?php language_attributes(); ?>>
<head>

	<title><?php wp_title("&laquo;", true, "right"); ?> <?php bloginfo("name"); ?></title>

	<meta charset="<?php bloginfo("charset"); ?>" />

	<!--
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo("template_url"); ?>/img/favicon.ico" />
	-->
	
	<!-- TypeKit -->
	<script src="//use.typekit.net/lla2izs.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>

	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>" type="text/css"/>
	<link rel="stylesheet/less" type="text/css" href="<?php bloginfo("template_url"); ?>/styles/main.less" />

	<meta name="viewport" content="width=device-width; initial-scale=1" />

	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>

	<script src="<?php bloginfo("template_url"); ?>/js/mods/less-1.3.0.min.js"></script>

	<script>
		this.page = {
			classes: {},
			features: []
		};
	</script>

</head>

<body <?php body_class(); ?>>

	<header>

		<h1><img src="<?php bloginfo("template_url"); ?>/img/logo.png" alt="Connecting Light" /></h1>
		
		<nav>
			<?php wp_nav_menu( array("menu" => "header_nav" )); ?>
		</nav>
		
		<div class="date-info">
			<div class="date">
				<span class="month">Aug</span>
				<span class="day">31</span>
			</div>
			<div class="sep">+</div>
			<div class="date">
				<span class="month">Sept</span>
				<span class="day">1</span>
			</div>
		</div>

	</header><!-- end main header -->
	
	<div class="overview">

		<p>Connecting Light is a digital art installation along Hadrian&rsquo;s Wall World Heritage Site.</p>
		<p>The installation consists of hundreds of large-scale, light-filled balloons transmitting colors from one-to-another, creating a communication network spanning over one-hundred miles.</p>

		<div class="more">
			<p>Audience members are invited to participate by sending personalized messages along the light- lined wall at a number of viewing locations or, this Web site and companion mobile app.</p>
			<p>Connecting Light investigates borders, imagining them not as a line of division, but as a source of connection.</p>
			<p>The installation is open to the public from Friday, August 31st to Saturday, September 1st.</p>
		</div>

		<a href="#" class="button">Learn More &raquo;</a>

	</div><!-- end overview -->