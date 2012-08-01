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
		
		<?php require_once(TEMPLATEPATH . "/incl/carousel.php"); ?>
		
		<?php require_once(TEMPLATEPATH . "/incl/actions.php"); ?>
		
	</div>
	
	<div class="inverted">

		<div class="posts">

			<h2>Latest Blog Posts</h2>
		
			<?php

				$posts = get_posts(array(
					"numberposts" => 5
				));
		
				if (count($posts) > 0) : ?>

			<ul>
				<?php foreach ($posts as $post) : setup_postdata($post); ?>
				<li class="post">
					<?php the_post_thumbnail("tmb"); ?>
					<div>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt(); ?>
					</div>
				</li>
				<?php endforeach; ?>
			</ul>

			<?php endif; ?>
		
		</div>

	</div><!-- end inverted -->

<?php
get_footer();
?>