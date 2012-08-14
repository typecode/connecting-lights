<?php

if ( isset($_SERVER['HTTP_USER_AGENT']) ) {

	$mobile_agents = '!(phone|ipod)!i';

	if ( preg_match($mobile_agents, $_SERVER['HTTP_USER_AGENT']) ) {
	
		define("CL_MOBILE", true);
		
		$mobile_id = get_page_by_title("mobile")->ID;
		
		if (! is_page($mobile_id) ) {

			header("Location: ". get_permalink( $mobile_id ));
		
		}

	} else {
		
		define("CL_MOBILE", false);
		
	}

}

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>

	<title><?php wp_title("&laquo;", true, "right"); ?> <?php bloginfo("name"); ?></title>

	<meta charset="<?php bloginfo("charset"); ?>" />
	<?php if (CL_MOBILE ) { ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<?php } ?>

	<link rel="icon" type="image/x-icon" href="<?php bloginfo("template_url"); ?>/img/favicon.ico" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo("template_url"); ?>/img/favicon.ico" />
	
	<!-- TypeKit -->
	<script src="//use.typekit.net/lla2izs.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>

	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>" type="text/css"/>
	<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/webfonts/ss-social.css" type="text/css"/>
	<link rel="stylesheet/less" type="text/css" href="<?php bloginfo("template_url"); ?>/css/main.less" />

	<!--[if lt IE 9]>
		<script type="text/javascript" src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
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
		page.features.push(function(app) {
			
			<?php if (! CL_MOBILE ) { ?>	
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
  			  
  			  window.open(url, $(this).data("site-name"), opts);
  			
  			  return false;
  			});
  			<?php } ?>
	  		
	  	});
	</script>

</head>

<body <?php body_class(); ?>>

	<div id="wrap">
		<div id="main">

		<header>
	
			<h1><a href="<?php bloginfo("url"); ?>"><img src="<?php bloginfo("template_url"); ?>/img/logo.png" alt="Connecting Light" /></a></h1>
			
			<nav>
				<?php wp_nav_menu( array("menu" => "header_nav", "container" => false )); ?>
			</nav>
			
			<?php if ( CL_MOBILE ) { ?>
			<div class="mobile-nav">
				<div class="small-toggle"></div>
				<ul>
					<li><a href=''>About</a></li>
					<li><a href=''>Participate</a></li>
				</ul>
			</div>
			<?php } ?>
			
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
			
				<?php
					$share_url = urlencode("http://connectinglight.info"); 	
					$share_image = urlencode("http://connectinglight.info/wp-content/uploads/2012/08/homePageIllustration-new.jpg");
					$share_description = urlencode("Connecting Light - a seventy-three mile long digital art installation along Hadrian's Wall World Heritage Site."); 
					
				?>

				<a 	title="Share on Facebook"
					href="https://www.facebook.com/dialog/feed?
	  					app_id=395149550542429&
	  					link=<?php echo $share_url ?>&
						picture=<?php echo $share_image ?>&
	  					name=Connecting%20Light&
	  					caption=&
	  					description=<?php echo $share_description ?>&
	  					redirect_uri=<?php echo $share_url ?>" 
					class="ss-icon" target="_blank"><span>Facebook</span></a>
					
				<a 	title="Share on Twitter" 
					class="popup ss-icon" 
					href="http://twitter.com/share?text=<?php echo $share_description ?>"
					data-site-name="twitter" target="_blank"><span>Twitter</span></a>

				<a 	title="Share on Tumblr" 
					href="http://www.tumblr.com/share/photo?
						source=<?php echo $share_image ?>&
						caption=<?php echo $share_description ?>&
						click_thru=<?php echo $share_url ?>"
					class="ss-icon" target="_blank"><span>Tumblr</span></a>
						
				<a	title="Share on Pinterest"
					href="http://pinterest.com/pin/create/button/?
						url=<?php echo $share_url ?>&
						media=<?php echo $share_image ?>
						&description=<?php echo $share_description ?>" 
					class="ss-icon"><span>Pinterest</span></a>
					
			</div>
	
		</header><!-- end main header -->
