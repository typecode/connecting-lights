<?php
/*

Template Name: Mobile Site

*/

get_header();

?>
		
		<div class="splash">
			<img src="<?php bloginfo("template_url") ?>/img/mobile-splash.png" alt="Connecting Light" />
		</div>

		<div class="xFull mobile-content">
			<div class="inner">
			
				<div class="overview" id="overview">
				
					<div>
		
						<p><strong>Connecting Light</strong> is a digital art installation along Hadrian’s Wall World Heritage Site. The installation consists of hundreds of large-scale, light-filled balloons transmitting colors from one-to-another, creating a communication network spanning over seventy miles.</p>
						<p>The installation is open to the public from Friday, August 31st to Saturday, September 1st.</p>
					
					</div>
				
				</div>

				<?php require_once(TEMPLATEPATH . "/incl/actions.php"); ?>
		
			</div>
		</div>

<?php

get_footer();

?>