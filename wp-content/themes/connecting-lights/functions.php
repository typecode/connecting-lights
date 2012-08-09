<?php



//^^^^^ media ^^^^^

add_theme_support("post-thumbnails");
add_image_size("tin", 164, 164, true);
add_image_size("tmb", 220, 220, true);
add_image_size("ptmb", 268, 222, true);
add_image_size("partner", 242, 100);



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



//^^^^^ menus stuff ^^^^^

register_nav_menus( 
	array(
		'header_nav' => 'Header Navigation'
	)
);



//^^^^^ body class ^^^^^

function cl_body_class($classes) {

	if ( CL_MOBILE ) {
	
		$classes[] = 'mobile';
	
	}

	return $classes;

}
add_filter('body_class', 'cl_body_class');



//^^^^^ homepage / post pages ^^^^^

$front = get_page_by_title( 'Homepage' );
update_option( 'page_on_front', $front->ID );
update_option( 'show_on_front', 'page' );

$blog  = get_page_by_title( 'Blog' );
update_option( 'page_for_posts', $blog->ID );

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



//^^^^^ post types ^^^^^

require_once(TEMPLATEPATH . "/incl/post-types.php");

add_action("admin_head", "post_icons");
function post_icons() { ?>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/admin.css" />
<?php }



//^^^^^ meta ^^^^^
	
function cl_image_attachment_fields_to_edit($form_fields, $post) {
	$checked = get_post_meta($post->ID, "_cl_is_slide", true) ? "CHECKED" : "";
	$form_fields["cl_is_slide"] = array(
		'label' => __("Slideshow Image"),
		'input' => 'html',
		'html'  => "<input type='checkbox' name='attachments[{$post->ID}][cl_is_slide]' id='attachments[{$post->ID}][cl_is_slide]' value='1' {$checked}/><br />"
	);
	return $form_fields;
}
add_filter("attachment_fields_to_edit", "cl_image_attachment_fields_to_edit", null, 2);

function cl_image_attachment_fields_to_save($post, $attachment) {
	if( isset($attachment['cl_is_slide']) ){
		update_post_meta($post['ID'], '_cl_is_slide', $attachment['cl_is_slide']);
	} else {
		update_post_meta($post['ID'], '_cl_is_slide', 0);
	}
	return $post;
}
add_filter("attachment_fields_to_save", "cl_image_attachment_fields_to_save", null , 2);



//^^^^^ excerpt ^^^^^

function cl_excerpt_more($more) {
	global $post;
	return " <a class='more-link' href='". get_permalink($post->ID) . "'>Read More &raquo;</a>";
}
add_filter('excerpt_more', 'cl_excerpt_more');



//^^^^^ misc ^^^^^

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');



?>