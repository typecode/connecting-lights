<?php

	function cl_js_init() {
		global $pagenow;

		if (!is_admin() && $pagenow != "wp-login.php") {

			wp_deregister_script("jquery");
			wp_enqueue_script("jquery", "http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js",
				array(), NULL, true);
			
		}

	}
	add_action("init", "cl_js_init");


	// menus

	register_nav_menus( 
		array(
			'header_nav' => 'Header Navigation'
		)
	);


	// homepage / posts pages

	$front = get_page_by_title( 'Homepage' );
	update_option( 'page_on_front', $front->ID );
	update_option( 'show_on_front', 'page' );

	$blog  = get_page_by_title( 'Blog' );
	update_option( 'page_for_posts', $blog->ID );


	// wordpress garbage bag

	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');

	function cl_unregister_widgets() {
		unregister_widget( 'WP_Widget_Pages' );
		unregister_widget( 'WP_Widget_Calendar' );
		unregister_widget( 'WP_Widget_Archives' );
		unregister_widget( 'WP_Widget_Links' );
		unregister_widget( 'WP_Widget_Categories' );
		unregister_widget( 'WP_Widget_Recent_Posts' );
		unregister_widget( 'WP_Widget_Recent_Comments' );
		unregister_widget( 'WP_Widget_Search' );
		unregister_widget( 'WP_Widget_Tag_Cloud' );
		unregister_widget( 'WP_Widget_RSS' );
		unregister_widget( 'WP_Widget_Meta' );
	}
	add_action( 'widgets_init', 'cl_unregister_widgets' );

?>