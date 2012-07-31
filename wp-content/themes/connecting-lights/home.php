<?php
get_header();
?>

<div class="content">

	<div class="display tier">
		<!-- area for live stream, slideshow, etc -->
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

</div>

<?php
get_footer();
?>