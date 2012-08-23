<?php
/*
Plugin Name: Slimbox Plugin
Plugin URI: http://www.4mj.it/slimbox-wordpress-plugin/
Feed URI: 
Description: Used to overlay images on the current page. This plugin includes the new Slimbox 1.64 javascript written by Christophe Beils and got transformed into a Wordpress Plugin by me.
Version: 1.3
Author: Peppe Argento
Author URI: http://www.4mj.it
*/
// styles
function slimbox_styles() {
	$slimbox_path = get_option('siteurl')."/wp-content/plugins/slimbox-plugin/slimbox/";
	$slimboxscript.= "<link rel=\"stylesheet\" href=\"".$slimbox_path."slimbox.css\" type=\"text/css\" media=\"screen\" />\n";
	$slimboxscript.= "<script type=\"text/javascript\" src=\"".$slimbox_path."mootools.x.js\"></script>\n";
	$slimboxscript.= "<script type=\"text/javascript\" src=\"".$slimbox_path."slimbox.js\"></script>\n";
	print($slimboxscript);
}
//	function slimbox_create($content){
//	return preg_replace('/<a(.*?)href=(.*?).(jpg|jpeg|png|gif|bmp|ico)"(.*?)>/i', '<a$1href=$2.$3" $4 rel="lightbox[roadtrip]">', $content);
//	}
//	add_filter('the_content', 'slimbox_create', 2);
add_action('wp_head', 'slimbox_styles');
?>