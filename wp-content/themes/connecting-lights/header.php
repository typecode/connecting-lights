<!doctype html>
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
	<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/webfonts/ss-social.css" type="text/css"/>
	<link rel="stylesheet/less" type="text/css" href="<?php bloginfo("template_url"); ?>/css/main.less" />

	<link rel="icon" href="<?php bloginfo("template_url"); ?>/img/favicon.png" /> 
	<link rel="shortcut icon" href="<?php bloginfo("template_url"); ?>/img/favicon.png" />

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
	
	<script>
		$(document).ready(
  			$('.popup').click(function(event) {
  			  var width  = 575,
  			      height = 400,
  			      left   = ($(window).width()  - width)  / 2,
  			      top    = ($(window).height() - height) / 2,
  			      url    = this.href,
  			      opts   = 'status=1' +
  			               ',width='  + width  +
  			               ',height=' + height +
  			               ',top='    + top    +
  			               ',left='   + left;
  			  
  			  window.open(url, 'twitter', opts);
  			
  			  return false;
  			});
  		);
	</script>

</head>

<body <?php body_class(); ?>>

	<header>

		<h1><a href="<?php bloginfo("url"); ?>"><img src="<?php bloginfo("template_url"); ?>/img/logo.png" alt="Connecting Light" /></a></h1>
		
		<nav>
			<?php wp_nav_menu( array("menu" => "header_nav", "container" => false )); ?>
		</nav>
		
		<div class="schedule">
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
		
		<div class="connect">
			<a href="" class="ss-icon">Facebook</a>
			<a class="twitter popup ss-icon" href="http://twitter.com/share?text=This%20is%20so%20easy">Twitter</a>
			<a href="" class="ss-icon">Tumblr</a>
			<a href="" class="ss-icon">Pinterest</a>
		</div>

	</header><!-- end main header -->
