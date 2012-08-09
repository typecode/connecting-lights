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

		$carousel_id = uniqid("carousel_");

?>
	
		<script>
				page.features.push(function(app) {
					app.runtime.<?php echo $carousel_id; ?> = new page.classes.Carousel({
						app: app,
						selector: "#<?php echo $carousel_id ?>"
					});
				});
			</script>
		<div id="<?php echo $carousel_id; ?>" class="carousel autoscroll">
			<div class="viewport">
				
				<!-- <div class="border">
				</div> -->

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
			<ul class="nav">
			<?php 

				for ($i = 0; $i < $carousel_slide_count; $i += 1) { ?>

					<li><a href="#"><?php echo ($i+1); ?></a> <span class="caption"></span></li>
			
			<?php } ?>
			</ul>
		</div>
