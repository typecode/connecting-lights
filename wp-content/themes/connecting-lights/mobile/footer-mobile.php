
	<?php wp_footer(); ?>

	<!-- typecode-js -->
	<script src="<?php bloginfo("template_url"); ?>/js/lib/lib/tc.seed.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/js/lib/lib/tc.app.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/js/lib/lib/tc.validation.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/js/lib/lib/tc.field.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/js/lib/lib/field/tc.field.std.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/js/lib/lib/field/tc.field.validator.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/js/lib/lib/field/tc.field.hint.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/js/lib/lib/field/tc.field.counter.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/js/lib/lib/tc.merlin.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/js/lib/lib/merlin/tc.merlin.data.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/js/lib/lib/tc.carousel.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/js/lib/lib/tc.overlay.js"></script>

	<!-- app-specific -->
	<script src="<?php bloginfo("template_url"); ?>/js/Signup.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/js/colorutil.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/js/ColorPicker.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/js/prompts.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/js/SendMessage.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/js/cl-carousel.js"></script>
	<!--<script src="<?php bloginfo("template_url"); ?>/js/jquery.easing.1.3.js"></script>-->

	<!-- initialization -->
	<script>
		jQuery(function() {
			new NI.App({
				page: page
			});
		});
	</script>
	
	<!-- symbolset -->
	<script src="<?php bloginfo("template_url"); ?>/css/webfonts/ss-social.js"></script>

</body>
</html>