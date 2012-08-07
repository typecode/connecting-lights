<script>
	page.features.push(function(app) {
		app.runtime.sendMessage = new page.classes.SendMessage({
			app: app,
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
			<a class="ca-button next">Send a Message</a>
		</div>
	</div>
	<div class="step send-message-submit">

		<div class="tier">
			<div class="tc-field">
				<textarea name="m"></textarea>
				<div class="load-prompt"><a href="#">load a different prompt</a></div>
				<span class="count"></span>
			</div>
		</div>

		<div class="tier">
			<div class="color-picker">
				<div class="handle"></div>
				<canvas></canvas>
			</div>
			<a class="ca-button ca-trans next">Send Your Message</a>
		</div>
	</div>
	<div class="step dispatch">
		<div class="spinner">
			<img src="<?php bloginfo("template_url"); ?>/img/spinner.gif" alt="Loading">
		</div>
	</div>
	<div class="step thank-you">
		Thank you!
	</div>
</div>

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