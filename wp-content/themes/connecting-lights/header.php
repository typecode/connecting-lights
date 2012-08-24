<?php

global $post;

$current_id = $post->ID;

$mobile_id = get_page_by_title("mobile")->ID;
$redirect_id = get_page_by_title("redirect")->ID;

if (! isset($_COOKIE["cl_cookie"]) ) {

	include(TEMPLATEPATH . "/incl/mobile-detect.php");

	$detect = new Mobile_Detect();

	if ( $detect->isMobile() ) {

		setcookie("cl_cookie", 1, time()+3600);

		header("Location: ". get_permalink($redirect_id));

		exit();

	} else {

		setcookie("cl_cookie", 0, time()+3600);

	}

} else {

	define("CL_MOBILE", $_COOKIE["cl_cookie"]);

	if ( CL_MOBILE && is_front_page() ) {

		header("Location: ". get_permalink($mobile_id));

		exit();

	}

	if ( is_page($mobile_id) && (! CL_MOBILE) ) {

		header("Location: ". get_bloginfo('url'));

		exit();

	}

}

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

	<!--<script src="<?php bloginfo("template_url"); ?>/js/mods/less-1.3.0.min.js"></script> -->

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
			
			<?php if ( CL_MOBILE ) { 
			
				function mobile_title() {
					$title = get_the_title();
					
					if ($title == 'Mobile') {
						$title = 'Participate';
					}
					
					return $title;
					
				}
			
				$mobile_pages_args = array(
					'numberposts'     => -1
				); 
			
				$mobile_pages = get_pages( $mobile_pages_args );
			
			?>
			<div class="mobile-nav small-button">
				<div class="small-toggle"></div>
				<span><?php echo mobile_title(); ?></span>
			</div>
			<select class="mobile-select" onchange='document.location.href=this.options[this.selectedIndex].value;'>
				<option value=""><?php echo mobile_title(); ?></option>
			<?php
				$options = '';
				foreach ( $mobile_pages as $page ) {
					if ( $page->ID != $current_id ) {
						$options .= '<option value="' . get_page_link( $page->ID ) . '">';
						if ($page->ID != $mobile_id ) {
							$options .= $page->post_title;
						} else {
							$options .= 'Participate';
						}
						$options .= '</option>';
					}
				}
				echo $options;
			?>
			</select>
			<?php } ?>
			
			<div class="schedule">
				<div class="clearfix">
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
				<div class="dusk-til-witchinghour">
					<span class="light">&#124;</span> dusk until midnight <span class="light">&#124;</span>
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
					class="ss-icon ss-social"><span>Pinterest</span></a>
					
			</div>
	
		</header><!-- end main header -->
