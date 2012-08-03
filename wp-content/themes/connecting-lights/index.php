<?php

global $post;

get_header();

?>

	<div class="inverted">
		<div class="inner">
		
			<header>
				<h1><?php wp_title(''); ?></h1>
			</header>
			
			<div>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
				
				<article>
	
					<header>
						<a href="<?php the_permalink(); ?>">
							<?php if (! is_singular() ) { ?><h1><?php the_title(); ?></h1><?php } ?>
							<?php the_post_thumbnail("ptmb"); ?>
						</a>
					</header>
		
					<div class="content">
						<?php if (! is_singular() ) { the_excerpt(); } else { the_content(); } ?>
					</div>
					
				</article>
			
			<?php endwhile; else: ?>
			<?php endif; ?>
			</div>
			
			<div class="pagination">
			<?php 
			
				if (! is_singular() ) {
				
				?>

					<div class="alignleft"><?php next_posts_link('&laquo; Previous Page') ?></div>
					<div class="alignright"><?php previous_posts_link('Next Page &raquo;') ?></div>
			
				<?php

				} else {

				?>

					<div class="alignleft"><?php next_post_link( '%link', '&laquo; %title'); ?></div>
					<div class="alignright"><?php previous_post_link( '%link', '%title &raquo;'); ?></div>

				<?php

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