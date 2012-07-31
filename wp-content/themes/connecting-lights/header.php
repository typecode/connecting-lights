<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo("name"); ?> <?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo("html_type"); ?>; charset=<?php bloginfo("charset"); ?>"/>
	<!--
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo("template_url"); ?>/img/favicon.ico" />
	-->
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>" type="text/css"/>
	<meta name="viewport" content="width=device-width; initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div class="page x12">

		<div class="masthead">
			<div class="top tier">
				<div class="logo col x9">
					<a href="<?php bloginfo("url"); ?>"></a>
				</div>
				<div class="date-info clearfix">
					<div class="date">
						<span class="month">Aug</span>
						<span class="day">31</span>
					</div>
					<div class="sep">&amp;</div>
					<div class="date">
						<span class="month">Sept</span>
						<span class="day">1</span>
					</div>
				</div>
			</div>

			<div class="nav tier">
				<?php wp_page_menu(); ?>
			</div>

			<div class="overview tier">
				<p>Connecting Light is a digital art installation along Hadrian's Wall World Heritage Site. The installation consists of hundreds of large-scale, light-filled balloons transmitting colors from one-to-another, creating a communication network spanning over one-hundred miles.</p>
				<div class="more">
					<p>Audience members are invited to participate by sending personalized messages along the light- lined wall at a number of viewing locations or, this Web site and companion mobile app.</p>
					<p>Connecting Light investigates borders, imagining them not as a line of division, but as a source of connection.</p>
					<p>The installation is open to the public from Friday, August 31st to Saturday, September 1st.</p>
				</div>

				<div>
					<a href="#" class="button">More</a>
				</div>	
			</div>

		</div><!-- end .masthead -->