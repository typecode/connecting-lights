<?php

global $post;

$page_args = array(
	'numberposts'     => -1,
	'orderby'         => 'menu_order',
	'order'           => 'ASC',
	'post_type'       => 'page',
	'post_parent'     => $post->ID
);
$subpages = get_posts( $page_args );

get_header();

?>

	<div class="inverted">
		<div class="inner">
		
			<header>
				<h1><?php the_title(); ?></h1>
			</header>
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); if ($post->post_content != "") : ?>
				<div class="detail-block no-rules">			
					<h3><!--<?php the_title(); ?>--></h3>
					<div class="details">
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("full"); ?></a>
						<?php endif; ?>
						<?php the_content(); ?>
					</div>
				</div>
			<?php endif; endwhile; endif; wp_reset_query(); ?>
			
			<?php foreach( $subpages as $post ) : setup_postdata($post); ?>	
				<div class="detail-block">			
					<h3><?php the_title(); ?></h3>
					<div class="details">
						<?php the_content(); ?>
					</div>
				</div>
			<?php endforeach; ?>

			<?php wp_reset_query(); ?>

		</div>
	</div>

	<div class="xFull">
		<?php require_once(TEMPLATEPATH . "/incl/actions.php"); ?>
	</div>

<?php
get_footer();
?>