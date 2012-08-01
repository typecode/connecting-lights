<?php

/*
Template Name: Homepage
*/

get_header();
?>

	<div class="xFull">

		<div class="overview">
			
			<div>
	
				<p>Connecting Light is a digital art installation along Hadrian&rsquo;s Wall World Heritage Site.</p>
				<p>The installation consists of hundreds of large-scale, light-filled balloons transmitting colors from one-to-another, creating a communication network spanning over one-hundred miles.</p>
		
				<div class="more">
					<p>Audience members are invited to participate by sending personalized messages along the light- lined wall at a number of viewing locations or, this Web site and companion mobile app.</p>
					<p>Connecting Light investigates borders, imagining them not as a line of division, but as a source of connection.</p>
					<p>The installation is open to the public from Friday, August 31st to Saturday, September 1st.</p>
				</div>
			
			</div>

			<a href="#" class="button">Learn More &raquo;</a>
	
		</div><!-- end overview -->
		
		<img src="<?php bloginfo("template_url"); ?>/img/splash.png" class="splash" />
		
		<div class="actions">
			<a href=""><img src="<?php bloginfo("template_url"); ?>/img/biglink_sendamsg.png" alt="Send a Message" /></a>
			<a href=""><img src="<?php bloginfo("template_url"); ?>/img/biglink_purchasetix.png" alt="Purchase Tickets" /></a>
			<a href=""><img src="<?php bloginfo("template_url"); ?>/img/biglink_findlocs.png" alt="Find Locations" /></a>
		</div>
		
		<!--
		
		<div class="display tier">
		</div>
	
		<div class="widgets tier">
	
			<div class="col x4">
				send a message
			</div>
	
			<div class="col x4">
				find locations
			</div>
	
			<div class="col x4">
				purchase tickets
			</div>
	
		</div>
	
		<div class="tier">
	
			<div class="col x8">
	
				<h2>Latest Blog Posts</h2>
	
				<?php
				$posts = get_posts(array(
					"numberposts" => 5
				));
	
				if (count($posts) > 0) : ?>
					<ul>
					<?php foreach ($posts as $post) : setup_postdata($post); ?>
						<li class="post">
							<div class="col x2">
	
							</div>
							<div class="col x6">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	
								<div class="foot">
									<a href="<?php the_permalink(); ?>">Read more</a>
								</div>
							</div>
						</li>
					<?php endforeach; ?>
					</ul>
				<?php endif; ?>
	
			</div>
		
			<div class="col x4">
	
			</div>
		
		</div>
		
		-->
	
	</div><!-- end wrap -->

<?php
get_footer();
?>