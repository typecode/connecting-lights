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
	  		
	  	});
	</script>

</head>

<body <?php body_class(); ?>>
