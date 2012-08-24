<?php
/*

Template Name: Redirect Page

*/

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>

	<title><?php wp_title("&laquo;", true, "right"); ?> <?php bloginfo("name"); ?></title>

	<meta charset="<?php bloginfo("charset"); ?>" />
	<?php if ( CL_MOBILE ) { ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<?php } ?>

	<link rel="icon" type="image/x-icon" href="<?php bloginfo("template_url"); ?>/img/favicon.ico" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo("template_url"); ?>/img/favicon.ico" />
	
	<!-- TypeKit -->
	<script src="//use.typekit.net/lla2izs.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>

	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>" type="text/css"/>
	<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/webfonts/ss-standard.css" type="text/css"/>
	<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/webfonts/ss-social.css" type="text/css"/>
	<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/main.css" type="text/css"/>


	<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/excanvas_r3/excanvas.compiled.js"></script>

	<!--[if lt IE 9]>
		<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/excanvas_r3/excanvas.compiled.js"></script>
		<script type="text/javascript" src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/excanvas.js"></script>
	<![endif]-->

	<?php wp_head(); ?>

</head>

<body class="mobile-redirect">

	<div class="inner">

		<header>
			<h1><a href="<?php bloginfo("url"); ?>"><img src="<?php bloginfo("template_url"); ?>/img/logo.png" alt="Connecting Light" /></a></h1>
		</header>

		<a href="/mobileapp" class="ca-button alt">Send A Message</a>

		<a href="<?php bloginfo('url') ?>" class="ca-button alt">Full Site</a>

	</div>

	<div class="image">
		<img src="<?php bloginfo("template_url"); ?>/img/redirect-bottom.jpg" />
	</div>

</body>

</html>