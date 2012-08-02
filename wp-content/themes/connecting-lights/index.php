<?php
get_header();
?>

	<div class="inverted">
		<div class="inner">
		
			<header>
				<h1>Blog</h1>
			</header>
			
			<div>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
				
				<article>
	
					<header>
						<h1><?php the_title(); ?></h1>
					</header>
		
					<div class="content">
						<?php the_content(); ?>
					</div>
					
				</article>
			
			<?php endwhile; else: ?>
			<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="xFull">
		<?php require_once(TEMPLATEPATH . "/incl/actions.php"); ?>
	</div>

<?php
get_footer();
?>