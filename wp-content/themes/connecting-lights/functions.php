<?php

//^^^^^ media ^^^^^

add_theme_support("post-thumbnails");



//^^^^^ javascript stuff ^^^^^

function cl_js_init() {
	global $pagenow;

	if (!is_admin() && $pagenow != "wp-login.php") {

		wp_deregister_script("jquery");
		wp_enqueue_script("jquery", "http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js",
			array(), NULL, true);

	}

}
add_action("init", "cl_js_init");



//^^^^^ misc ^^^^^

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');



?>