<script>
	page.features.push(function(app) {
		app.runtime.sendMessage = new page.classes.SendMessage({
			app: app,
			is_mobile: <?php if (CL_MOBILE) { echo "true"; } else { echo "false"; } ?>,
			$e: ($("#send-message").detach().show()),
			$trigger: $("#send-message-trigger"),
			color_picker_src: "<?php bloginfo("template_url"); ?>/img/color-picker.png",
			service_dir: "<?php bloginfo("url"); ?>/hwBackend/api/"
		});
	});
</script>

<div id="send-message" class="send-message merlin" style="display: none;">
	<div class="step send-message-info">
		<h2>Your message will travel across Hadrian's Wall in the form of pulses of light.</h2>

		<p>Prior to the event, we're collecting messages which will pre-populate the messaging system and be some of the first ones to be seen by the public.</p>

		<p>We've come up with some sentences about connection we'd love for you to fill out, or feel free to make the message your own.</p>

		<p>You can send any message you want, but we ask that you please think about making a message that you'd like to send across the country and for everyone of all ages to read and enjoy.</p>

		<div class="center">
			<a class="ca-button alt next"><span>Send a Message</span></a>
		</div>
	</div>
	<div class="step send-message-compose">

		<div class="tier">
			<div class="tc-field">
				<textarea name="m"></textarea>
				<div class="load-prompt"><a class="ss-standard ss-replay" href="#">load a different prompt</a></div>
				<span class="count"></span>
			</div>
		</div>

		<?php if (CL_MOBILE) { ?>

			<div class="tier control-bar">
				<div class="inner">
					<span class="small-button cancel"><span href="#">Cancel</span></span>
					<div class="color-picker">
						<div class="handle"></div>
						<canvas></canvas>
					</div>
					<span class="small-button next"><span href="#">Next</span></span>
				</div>
			</div>

		<?php } else { ?>

			<div class="tier">
				<div class="color-picker">
					<div class="handle"></div>
					<canvas></canvas>
				</div>
				<a class="ca-button ca-trans next"><span>Send Your Message</span></a>
			</div>

		<?php } ?>
	</div>
	<?php if (CL_MOBILE) { ?>
		<div class="step send-message-geo">
			<div class="map">
				<!-- placeholder for map container -->
			</div>

			<div class="tip">
				<div class="inner">
					<p>You can specify where on Hadrian's Wall you would like your message to start. It will then travel as pulses of light along the wall, to one of the coasts.</p>
				</div>
			</div>

			<div class="control-bar">
				<div class="inner">
					<a class="small-button prev"><span>Back</span></a>
					<a class="small-button next"><span>Send</span></a>
				</div>
			</div>
		</div>
	<?php } ?>
	<div class="step dispatch">
		<div class="spinner">
			<img src="<?php bloginfo("template_url"); ?>/img/spinner.gif" alt="Loading">
		</div>
	</div>
	<div class="step thank-you">
		<h2>Thank you!</h2>
		<?php if (! CL_MOBILE ) { ?>
		<p>You may now close this window.</p>
		<?php } ?>
	</div>
</div>

<?php if (! CL_MOBILE ) { ?>
<div class="actions">
	<a href="#" id="send-message-trigger">
		<img src="<?php bloginfo("template_url"); ?>/img/biglink_1.png" alt="Send a Message" />
		<div>
			<small>send a</small> message
		</div>
	</a>

	<?php
		$visit_page = get_page_by_title("Visit");
		$visit_url;
		if ($visit_page) {
			$visit_url = get_permalink($visit_page->ID);
		} else {
			$visit_url = "#";
		}
	?>
	<a href="<?php echo $visit_url; ?>">
		<img src="<?php bloginfo("template_url"); ?>/img/biglink_2.png" alt="Purchase Tickets" />
		<div>
			<small>help</small> volunteer
		</div>
	</a>
	<a href="<?php echo $visit_url; ?>">
		<img src="<?php bloginfo("template_url"); ?>/img/biglink_3.png" alt="Find Locations" />
		<div>
			<small>find</small> locations
		</div>
	</a>
</div>
<?php } ?>