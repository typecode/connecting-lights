	
	</div><!-- end .page -->

	<?php wp_footer(); ?>
	<script>
		/*jQuery(function() {
			new NI.App();
		});*/
		$(function() {
			$('a[href$="#"]').bind('click',function(e){
				e.preventDefault();
			});
		});
	</script>

</body>
</html>