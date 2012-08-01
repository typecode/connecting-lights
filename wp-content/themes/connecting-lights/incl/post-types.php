<?php



	// official partner
	
	add_action( 'init', 'partner_post_type' );
	function partner_post_type() {
		register_post_type( 'partner',
			array(
				'labels' => array(
					'name' => __( 'Partners' ),
					'singular_name' => __( 'Partner' )
				),
			'public' => true,
			'has_archive' => false,
			'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' )
			)
		);
	}



?>