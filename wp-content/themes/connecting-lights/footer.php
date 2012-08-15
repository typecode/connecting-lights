
		</div>
	</div>

	<footer>	
		<?php if (! CL_MOBILE ) { ?>
		<div>

			<script>
				page.features.push(function(app) {
					app.runtime.signup = new page.classes.Signup({
						selector: "#signup",
						service_url: "<?php bloginfo("template_url"); ?>/api/signup.php"
					});
				});
			</script>

			<div id="signup" class="signup clear">
				<div class="step form">
					<div class="tc-field signup-email">
						<input type="text">
					</div>
					<div>
						<a href="#" class="ca-button next"><span>Sign Up!</span></a>
					</div>
				</div>
				<div class="step dispatch">
					<div class="spinner">
						<img src="<?php bloginfo("template_url"); ?>/img/spinner-bgEBEBEB.gif" alt="Loading">
					</div>
				</div>
				<div class="step thank-you">
					Thank you for signing up!
				</div>
			</div>
		
			<nav class="links">
				<ul>
					<li><a href=""><img src="<?php bloginfo("template_url"); ?>/img/sponsors/sponsor1.png" /></a></li>
					<li><a href=""><img src="<?php bloginfo("template_url"); ?>/img/sponsors/sponsor2.png" /></a></li>
					<li><a href=""><img src="<?php bloginfo("template_url"); ?>/img/sponsors/sponsor3.png" /></a></li>
	
					<li class="terms"><a href="<?php
						$terms_page = get_page_by_title("Terms and Conditions");
						if ($terms_page) {
							echo get_permalink($terms_page->ID);
						} else {
							echo "#";
						}
					?>"><img src="<?php bloginfo("template_url"); ?>/img/terms.png" /></a></li>
				</ul>
			</nav>

		<p>Connecting Light is created by YesYesNo and commissioned by the London 2012 Festival and Hadrian's Wall Trust with support from Arts Council England. The Hadrian's Wall Trust is the delivery partner for the installation. For more information contact <a href="mailto:zach@yesyesno.com">zach@yesyesno.com</a>.</p>
		
		</div>
		
		<a href="http://festival.london2012.com/" class="banner"></a>		
		<?php } else { ?>
		
		<a href="#" id="send-message-trigger" class="ca-button alt">
			<span>Send a Message</span>
		</a>
		
		<?php } ?>		
	</footer>

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
	<!--
	<script src="<?php bloginfo("template_url"); ?>/js/colorutil.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/js/ColorPicker.js"></script>
	-->
	<script src="<?php bloginfo("template_url"); ?>/js/prompts.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/js/SendMessage.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/js/Carousel.js"></script>
	<!--<script src="<?php bloginfo("template_url"); ?>/js/jquery.easing.1.3.js"></script>-->

	<!-- initialization -->
	<script>
		this.console = NI.app.getConsole();
		
		jQuery(function() {
			var app = new NI.App({
				page: page
			});
		});
	</script>
	
	<!-- symbolset -->
	<script src="<?php bloginfo("template_url"); ?>/css/webfonts/ss-social.js"></script>

</body>
</html>
