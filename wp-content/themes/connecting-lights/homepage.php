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

		<script>
			page.features.push(function(app) {
				var $e = $("#overview"),
					$more = $e.find(".more"),
					$toggle = $e.find(".toggle"),
					$expand = $toggle.find(".expand"),
					$collapse = $toggle.find(".collapse");

				$toggle.click(function(e) {
					e.preventDefault();
					if ($more.is(":visible")) {
						$more.slideUp(300);
						$expand.show();
						$collapse.hide();
					} else {
						$more.slideDown(300);
						$expand.hide();
						$collapse.show();
					}
				});
			});
		</script>
		<div id="overview" class="overview">
			
			<div>
	
				<p>Connecting Light is a digital art installation along Hadrian&rsquo;s Wall World Heritage Site.</p>
				<p>The installation consists of hundreds of large-scale, light-filled balloons transmitting colors from one-to-another, creating a communication network spanning over seventy miles.</p>
		
				<div class="more">
					<p>Audience members are invited to participate by sending personalized messages along the light- lined wall at a number of viewing locations or, this Web site and companion mobile app.</p>
					<p>Connecting Light investigates borders, imagining them not as a line of division, but as a source of connection.</p>
					<p>The installation is open to the public from Friday, August 31st to Saturday, September 1st.</p>
				</div>
			
			</div>

			<a href="#" class="toggle">
				<span class="expand">Learn More <span>&#9662;</span></span>
				<span class="collapse">Less &#9652;</span>
			</a>
	
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
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("tin"); ?></a>
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
				<?php foreach ($partners as $post) : setup_postdata($post); ?>
					<li><?php the_post_thumbnail("partner"); ?></li>
				<?php endforeach; wp_reset_query(); ?>
				</ul>
			</div>

		</div>
	</div><!-- end inverted -->

<?php
get_footer();
?>
