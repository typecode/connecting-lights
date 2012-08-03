<!doctype html>
<html <?php language_attributes(); ?>>

<head>

	<title><?php wp_title("&laquo;", true, "right"); ?> <?php bloginfo("name"); ?></title>

	<meta charset="<?php bloginfo("charset"); ?>" />

	<link rel="icon" type="image/x-icon" href="<?php bloginfo("template_url"); ?>/img/favicon.ico" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo("template_url"); ?>/img/favicon.ico" />
	
	<!-- TypeKit -->
	<script src="//use.typekit.net/lla2izs.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	
	<!-- Facebook -->
	<script src='http://connect.facebook.net/en_US/all.js'></script>

	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>" type="text/css"/>
	<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/webfonts/ss-social.css" type="text/css"/>
	<link rel="stylesheet/less" type="text/css" href="<?php bloginfo("template_url"); ?>/css/main.less" />

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
		page.features.push(function(app) {
			/*FB.init({appId: "395149550542429", status: true, cookie: true});
			
			function postToFeed() {
			
				// calling the API ...
			  	var obj = {
			    	method: 'feed',
			    	link: 'http://connectinglight.info/',
			    	picture: 'http://connectinglight.info/wp-content/themes/connecting-lights/img/logo.png',
			    	name: 'Connecting Light',
			    	caption: 'Connecting Light',
			    	description: 'Connecting Light - a 70-mile long digital art installation along Hadrian\'s Wall.'
				};
			
			 	function callback(response) {
			  	}
			
			  	FB.ui(obj, callback);
			}*/
		
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
		
			<a 	title="Share on Facebook"
				href="https://www.facebook.com/dialog/feed?
  					app_id=395149550542429&
  					link=http://connectinglight.info&
					picture=http://connectinglight.info/wp-content/uploads/2012/08/wall_illustration-small-2.jpeg&
  					name=Connecting%20Light&
  					caption=Connecting%20Light&
  					description=Connecting%20Light%20-%20a%20seventy%20mile%20long%20digital%20art%20installation%20along%20Hadrian's%20Wall%20World%20Heritage%20Site.&
  					redirect_uri=http://connectinglight.info" 
				class="ss-icon">Facebook</a>
				
			<a 	title="Share on Twitter" 
				class="popup ss-icon" 
				href="http://twitter.com/share?text=Connecting%20Light%20-%20a%20seventy%20mile%20long%20digital%20art%20installation%20along%20Hadrian's%20Wall%20World%20Heritage%20Site." 
				data-site-name="twitter">Twitter</a>
				
			<a title="Share on Tumblr" 
				href="http://www.tumblr.com/share/photo?
					source=http://connectinglight.info/wp-content/uploads/2012/08/wall_illustration-small-2.jpeg&
					caption=Connecting%20Light%20-%20a%20seventy%20mile%20long%20digital%20art%20installation%20along%20Hadrian's%20Wall%20World%20Heritage%20Site.&
					click_thru=http://connectinglight.info"
				class="ss-icon">Tumblr</a>
				
			<a 	title="Share on Pinterest" 
				href="javascript:void((function()%7Bvar%20e=document.createElement(&apos;script&apos;);e.setAttribute(&apos;type&apos;,&apos;text/javascript&apos;);e.setAttribute(&apos;charset&apos;,&apos;UTF-8&apos;);e.setAttribute(&apos;src&apos;,&apos;http://assets.pinterest.com/js/pinmarklet.js?r=&apos;+Math.random()*99999999);document.body.appendChild(e)%7D)());"
				class="ss-icon">Pinterest</a>
				
		</div>

	</header><!-- end main header -->
