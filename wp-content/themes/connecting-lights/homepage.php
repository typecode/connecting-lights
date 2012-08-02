<?php

/*
Template Name: Homepage
*/

global $post;

$post_args = array(
	'numberposts'     => 5
);
$posts = get_posts( $post_args );

$partner_args = array(
	'numberposts'     => 3,
	'orderby'         => 'menu_order',
	'order'           => 'ASC',
	'post_type'       => 'partner'
);
$partners = get_posts( $partner_args );

get_header();

?>

	<div class="xFull">

		<div class="overview">
			
			<div>
	
				<p>Connecting Light is a digital art installation along Hadrian&rsquo;s Wall World Heritage Site.</p>
				<p>The installation consists of hundreds of large-scale, light-filled balloons transmitting colors from one-to-another, creating a communication network spanning over seventy miles.</p>
		
				<div class="more">
					<p>Audience members are invited to participate by sending personalized messages along the light- lined wall at a number of viewing locations or, this Web site and companion mobile app.</p>
					<p>Connecting Light investigates borders, imagining them not as a line of division, but as a source of connection.</p>
					<p>The installation is open to the public from Friday, August 31st to Saturday, September 1st.</p>
				</div>
			
			</div>

			<a href="#" class="button">Learn More &raquo;</a>
	
		</div><!-- end overview -->
		
		<?php require_once(TEMPLATEPATH . "/incl/carousel.php"); ?>
		
		<?php require_once(TEMPLATEPATH . "/incl/actions.php"); ?>
		
	</div>
	
	<div class="inverted">
		<div class="inner">

			<div class="posts">
				<h2>Latest Blog Posts</h2>
				<ul>
				<?php foreach ($posts as $post) : setup_postdata($post); ?>
					<li class="post">
						<?php the_post_thumbnail("tin"); ?>
						<div>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php the_excerpt(); ?>
						</div>
					</li>
				<?php endforeach; wp_reset_query(); ?>
				</ul>
			</div>
			
			<div class="partners">
				<h2>Official Partners</h2>
				<ul>
				<?php foreach ($partner as $post) : setup_postdata($post); ?>
					<li><?php the_post_thumbnail("partner"); ?></li>
				<?php endforeach; wp_reset_query(); ?>
				</ul>
			</div>

		</div>
	</div><!-- end inverted -->

<?php
get_footer();
?>
