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

?>