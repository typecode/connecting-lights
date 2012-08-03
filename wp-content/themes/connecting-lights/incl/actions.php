<script>
	page.features.push(function(app) {
		app.runtime.sendMessage = new page.classes.SendMessage({
			app: app,
			$trigger: $("#send-message-trigger")
		});
	});
</script>
<div class="actions">
	<a href="/backendLive/question/question2.php" id="send-message-trigger"><img src="<?php bloginfo("template_url"); ?>/img/biglink_sendamsg.png" alt="Send a Message" /></a>
	<a href="/visit"><img src="<?php bloginfo("template_url"); ?>/img/biglink_purchasetix.png" alt="Purchase Tickets" /></a>
	<a href="/visit"><img src="<?php bloginfo("template_url"); ?>/img/biglink_findlocs.png" alt="Find Locations" /></a>
</div>