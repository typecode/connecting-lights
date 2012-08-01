<?php

		$carousel_args = array(
			'post_type' => 'attachment',
			'post_mime_type' => 'image',
			'numberposts'     => -1,
	    	'orderby' => 'menu_order',
	    	'order' => 'ASC',
			'post_status' => null,
			'post_parent' => $postparent,
			'meta_query' => array(
				array(
					'key' => '_cl_is_slide',
					'value' => true,
				)
			)
		);
			
		$carousel_slides = get_posts( $carousel_args );

?>

		<div class="carousel autoscroll">
			<div class="viewport">
				<div class="scroll">
				<?php
					
					$carousel_slide_count = 0;
					
					if ( $carousel_slides ) {
					
						foreach ( $carousel_slides as $slide ) {
						
							$carousel_slide_count += 1;

							echo '<div class="slide">'. wp_get_attachment_image( $slide->ID, 'full' ) .'</div>';

						}
					
					}

				?>
				</div>
			</div>
			<div class="caption"></div>
			<ul class="nav">
			<?php 

				for ($i = 0; $i < $carousel_slide_count; $i += 1) { ?>

					<li><a href="#"><?php echo ($i+1); ?></a></li>
			
			<?php } ?>
			</ul>
		</div>
