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
	
				<p><span class="lighter">Connecting Light is a digital art installation along Hadrian&rsquo;s Wall World Heritage Site.</span><br />
				The installation consists of hundreds of large-scale, light-filled balloons transmitting colors from one-to-another, creating a communication network spanning over seventy miles.</p>
		
				<div class="more">
					<p>Audience members are invited to participate by sending personalized messages along the light-lined wall at a number of viewing locations or, this Web site and companion mobile app.</p>
					<p>Connecting Light investigates borders, imagining them not as a line of division, but as a source of connection.</p>
					<p>The installation is open to the public from Friday, August 31st to Saturday, September 1st.</p>
				</div>
			
			</div>

			<a href="#" class="toggle">
				<span class="expand"><span>Learn more</span> <span class="ss-standard ss-navigatedown"></span></span>
				<span class="collapse"><span>Less</span> <span class="ss-standard ss-navigateup"></span></span>
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
					<li class="post clearfix">
						<a class="thumblink" href="<?php the_permalink(); ?>"><?php the_post_thumbnail("tin"); ?></a>
						<div>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php the_excerpt(); ?>
						</div>
					</li>
				<?php endforeach; wp_reset_query(); ?>
				</ul>
			</div>
			
			<div class="partners">
				<h2 class="lighter">Official Partners</h2>
				<ul>
					<?php foreach ($partners as $post) : setup_postdata($post); ?>
						<li><?php the_post_thumbnail("partner"); ?></li>
					<?php endforeach; wp_reset_query(); ?>
					
					<li>
						<a href="http://www.ncl.ac.uk/culturelab/" target="_blank">
							<img src="<?php bloginfo("template_url"); ?>/img/logos/culturelab.png" />
						</a>
					</li>
					<li>
						<a href="hadrians-wall.org" target="_blank">
							<img src="<?php bloginfo("template_url"); ?>/img/logos/hadrian-un-combined.png" />
						</a>
					</li>
					<li>
						<a href="http://www.artscouncil.org.uk/" target="_blank">
							<img src="<?php bloginfo("template_url"); ?>/img/logos/artscouncil.png" />
						</a>
					</li>
					<li>
						<a href="http://www.digi.com/" target="_blank">
							<img src="<?php bloginfo("template_url"); ?>/img/logos/digi.png" />
						</a>
					</li>

				</ul>

				<div class="twit-widget">
					<h2 class="lighter twitter">Twitter</h2>
					<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
					<script>
						new TWTR.Widget({
							version: 2,
							type: 'profile',
							rpp: 4,
							interval: 30000,
							width: 'auto',
							height: 300,
							theme: {
								shell: {
									background: '#ffffff',
									color: '#8c8c8c'
								},
								tweets: {
									background: '#ffffff',
									color: '#666666',
									links: '#8accb0'
								}
							},
							features: {
								scrollbar: false,
								loop: false,
								live: false,
								behavior: 'all'
							}
						}).render().setUser('connectinglight').start();
					</script>
				</div>
			</div>

		</div>
	</div><!-- end inverted -->

<?php
get_footer();
?>
