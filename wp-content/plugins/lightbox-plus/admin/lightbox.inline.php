<!-- Begin Inline Lightbox -->
<?php
	/**
	* Lightbox Plus 2.4.6 - 2011.12.30 
	*/ 
?>
<div id="poststuff" class="lbp">
<div class="postbox">
	<h3>
		<?php _e( 'Lightbox Plus - Inline Lightbox Settings','lightboxplus' ); ?>: </h3>
	<div class="inside">
		<!-- Base Settings -->
		<div id="poststuff" class="lbp">
			<table class="form-table"><!-- Instructions -->
				<tr>
					<td>
						<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>">Using Inline Lightboxes <img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
						<div class="lbp-bigtip" id="lbp_for_inline_tip">
							<?php _e( 'In order to display inline content using Lightbox Plus and Colorbox you must at a minimum has the following items set: Inner Width, Inner Height, and Use Iframe must be checked.<br /><br />
								<code>
								&lt;a class="lbp-inline-link-1" href="#">Inline HTML Content&lt;/a><br />
								&lt;div style="display:none"><br />
								&nbsp;&nbsp;&nbsp;&nbsp;&lt;div id="lbp-inline-link-1" style="padding: 10px;background: #fff"><br />
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inline Content Goes Here<br />
								&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div><br />
								&lt;/div></code>', 'lightboxplus' )?>
							<br />
						</div>
					</td>
				</tr>
			</table>

			<div class="postbox">
				<h3>
					<?php _e( 'Inline Lightbox - Individual Settings','lightboxplus' ); ?>: </h3>
				<div class="inside toggle">


					<table class="form-table widefat">
						<thead>
							<tr>
								<th>&nbsp;</th>
								<th><b>Link Class</b></th>
								<th><b>Content ID</b></th>
								<th><b>Width</b></th>
								<th><b>Height</b></th>
							</tr>
						</thead>
						<tbody>
							<?php
								for ($i = 1; $i <= $lightboxPlusOptions['inline_num']; $i++) {
									$inline_links   = array();
									$inline_hrefs   = array();
									$inline_widths  = array();
									$inline_heights = array();
									$inline_links   = $lightboxPlusOptions['inline_links'];
									$inline_hrefs   = $lightboxPlusOptions['inline_hrefs'];
									$inline_widths  = $lightboxPlusOptions['inline_widths'];
									$inline_heights = $lightboxPlusOptions['inline_heights'];
								?>
								<tr <?php if ($i % 2 == 0) {echo 'class="alternate"';} ?>>
									<td><?php _e( 'Inline Lightbox #'.$i, 'lightboxplus' )?>:</td>
									<td>
										<input type="text" size="25" name="inline_link_<?php echo $i; ?>" id="inline_link_<?php echo $i; ?>" value="<?php if (empty( $inline_links[$i - 1] )) { echo 'lbp-inline-link-'.$i; } else {echo $inline_links[$i - 1];}?>" />
									</td>
									<td>
										<input type="text" size="25" name="inline_href_<?php echo $i; ?>" id="inline_href_<?php echo $i; ?>" value="<?php if (empty( $inline_hrefs[$i - 1] )) { echo 'lbp-inline-href-'.$i; } else {echo $inline_hrefs[$i - 1];}?>" />
									</td>
									<td>
										<input type="text" size="10" name="inline_width_<?php echo $i; ?>" id="inline_width_<?php echo $i; ?>" value="<?php if (empty( $inline_widths[$i - 1] )) { echo '50%'; } else {echo $inline_widths[$i - 1];}?>" />
									</td>
									<td>
										<input type="text" size="10" name="inline_height_<?php echo $i; ?>" id="inline_height_<?php echo $i; ?>" value="<?php if (empty( $inline_heights[$i - 1] )) { echo '50%'; } else  {echo $inline_heights[$i - 1];}?>" />
									</td>
								</tr>
								<?php
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
			<!-- begin testin - wrap in postbox -->

			<div class="postbox close-me"><h3 class="hndle" title="Click to toggle"><?php _e( 'Inline Lightbox - Demo','lightboxplus' ); ?>:</h3>
				<div class="inside toggle">
					<table class="form-table">
						<tr valign="top">
							<td>
								<?php _e('Here you can test you settings with various different implementation of Lightbox Plus using inline content.  If they do not work please check that you have the following items set: Inner Width, Inner Height, and Use Iframe must be checked.  You will not be able to display any of these without the minimum options set.',"lightboxplus"); ?>
							</td>
						</tr>
						<tr>
							<td>
								<p class="inline_link_test_item">
									<a class="<?php echo $inline_links[0]; ?>" href="#">Inline Content Test including form</a>
								</p>
							</td>
						</tr>
					</table>
					<!-- end testing -->
				</div>
			</div>
			<p class="submit">
				<input type="submit" style="padding:5px 30px 5px 30px;" name="Submit" title="<?php _e( 'Save all Lightbox Plus settings', 'lightboxplus' )?>" value="<?php _e( 'Save settings', 'lightboxplus' )?> &raquo;" />
			</p>
		</div>
	</div>
	</div>
	<!-- End Inline Lightbox -->