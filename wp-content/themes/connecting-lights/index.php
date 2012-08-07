<?php

global $post;

get_header();

?>

	<div class="inverted">
		<div class="inner">
		
			<header>
				<!-- <h1><?php wp_title(''); ?></h1> -->
				<h1>Blog</h1>
			</header>
			
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
				<div class="detail-block">
					<!-- <article> -->
		
						<h3>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<span class="meta"><?php the_date(); ?> </span>
						</h3>
			
						<div class="details">
							<?php the_content(); ?>
						</div>
						
					<!-- </article> -->
				</div>
			<?php endwhile; else: ?>
			<?php endif; ?>
			
			
			<div class="pagination">
			<?php 
			
				if (! is_singular() ) {
				
				?>

					<div class="alignleft"><?php next_posts_link('&laquo; Previous Page') ?></div>
					<div class="alignright"><?php previous_posts_link('Next Page &raquo;') ?></div>
			
				<?php

				} else {
				
					$prev_post = get_previous_post();
					$next_post = get_next_post();
					
					if (! empty( $prev_post ) ) {
						echo '<a class="alignleft" href="'. $prev_post->guid .'">&laquo; '. $prev_post->post_title .'</a>';
					}
					
					if (! empty( $next_post ) ) {
						echo '<a class="alignright" href="'. $next_post->guid .'">'. $next_post->post_title .' &raquo;</a>';
					}
					
				}
				
			?>
			</div> 
			
		</div>
	</div>

	<div class="xFull">
		<?php require_once(TEMPLATEPATH . "/incl/actions.php"); ?>
	</div>

<?php
get_footer();
?>