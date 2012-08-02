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

			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>

					<header>
						<h2><?php the_title(); ?></h2>
					</header>

					<div class="page-content">
						<?php the_content(); ?>
					</div>

				<?php endwhile; ?>
			<?php endif; ?>

		</div>
	</div>

	<div class="xFull">
		<?php require_once(TEMPLATEPATH . "/incl/actions.php"); ?>
	</div>

<?php
get_footer();
?>