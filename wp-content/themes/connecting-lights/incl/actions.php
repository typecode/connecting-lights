<script>
	page.features.push(function(app) {
		app.runtime.sendMessage = new page.classes.SendMessage({
			app: app,
			$e: ($("#send-message").detach().show()),
			$trigger: $("#send-message-trigger")
		});
	});
</script>

<div id="send-message" style="display: none;">
	<p>Connecting Light will send your messages across Hadrian's Wall in the form of pulses of light. Prior to the event, we're collecting messages which will pre-populate the messaging system and the some of the first ones to be seen by the public.</p>

	<p>We've come up with some sentences about connection we'd love for you to fill out, or feel free to make the message your own.</p>

	<p>You can send any message you want, but we ask that you please think about making a message that you'd like to send across the country and for everyone of all ages to read and enjoy.</p>
</div>

<div class="actions">
	<a href="/backendLive/question/question2.php" id="send-message-trigger"><img src="<?php bloginfo("template_url"); ?>/img/biglink_sendamsg.png" alt="Send a Message" /></a>
	<a href="/visit"><img src="<?php bloginfo("template_url"); ?>/img/biglink_purchasetix.png" alt="Purchase Tickets" /></a>
	<a href="/visit"><img src="<?php bloginfo("template_url"); ?>/img/biglink_findlocs.png" alt="Find Locations" /></a>
</div>