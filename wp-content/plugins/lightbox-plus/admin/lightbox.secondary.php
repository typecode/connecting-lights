<!-- Begin Secondary Lightbox -->
<?php
	/**
	* Lightbox Plus 2.4.6 - 2011.12.30 
	*/ 
?>
<div id="poststuff" class="lbp">
	<div class="postbox">
		<h3>
			<?php _e( 'Lightbox Plus - Secondary Lightbox Settings','lightboxplus' ); ?>: </h3>
		<div class="inside">
			<!-- Base Settings -->
			<div id="poststuff" class="lbp">
				<table class="form-table">
					<tr>
						<td>
						<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>">Using Secondary Lightbox for Video Content <img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
						<div class="lbp-bigtip" id="lbp_for_video_tip">
							<?php _e( 'In order to display video using Lightbox Plus and Colorbox you must at a minimum have the following items set: Inner Width, Inner Height, and Use Iframe must be checked.<br /><br />
								<code>&lt;a title="Projection Animation Test" class="lbpModal" href="http://www.youtube.com/v/pUPrCCP73Ws">YouTube Flash / Video (Iframe/Direct Link To YouTube)&lt;/a></code><br />
								<code>&lt;a title="Projection Animation Test" class="lbpModal" href="http://vimeo.com/moogaloop.swf?clip_id=9730308&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1">Vimeo Flash / Video (Iframe/Direct Link To Vimeo)&lt;/a></code>', 'lightboxplus' )?>
						</div>
					</tr>
					<tr>
						<td>
							<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>">Using Secondary Lightbox for External Content <img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
							<div class="lbp-bigtip" id="lbp_for_external_tip">
								<?php _e( 'In order to display external content using Lightbox Plus and Colorbox you must at a minimum has the following items set: Inner Width, Inner Height, and Use Iframe must be checked.<br /><br />
									<code>&lt;a class="lbpModal" href="http://wordpress.org/extend/plugins/lightbox-plus/">External Content (Iframe/Direct Link To WordPress plugins)&lt;/a></code>', 'lightboxplus' )?>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>">Using Secondary Lightbox for Other Content<img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
							<div class="lbp-bigtip" id="lbp_for_other_tip">
								<?php _e( 'In order to display other content, such as interactive flash, using Lightbox Plus and Colorbox you must at a minimum has the following items set: Inner Width, Inner Height, and Use Iframe must be checked.<br /><br />
									<code>&lt;a href="'.$g_lightbox_plus_url.'/trivia.swf" class="lbpModal" title="Interactive Flash Demo">Interactive Flash (Iframe/Local Flash File)&lt;/a></code>', 'lightboxplus' )?>
							</div>
						</td>
					</tr>
				</table>
				<div class="postbox close-me">
					<h3>
						<?php _e( 'Secondary Lightbox - Base Settings','lightboxplus' ); ?>: </h3>
					<div class="inside toggle">

						<table class="form-table">
							<tr>
								<th scope="row">
									<?php _e( 'Transition Type', 'lightboxplus' )?>: </th>
								<td>
									<select name="transition_sec" id="transition_sec">
										<option value="elastic"<?php if ( $lightboxPlusOptions['transition_sec']=='elastic' ) echo ' selected="selected"'?>>Elastic</option>
										<option value="fade"<?php if ( $lightboxPlusOptions['transition_sec']=='fade' ) echo ' selected="selected"'?>>Fade</option>
										<option value="none"<?php if ( $lightboxPlusOptions['transition_sec']=='none' ) echo ' selected="selected"'?>>None</option>
									</select>
									<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
									<div class="lbp-bigtip" id="lbp_transition_sec_tip">
										<?php _e( 'Specifies the transition type. Can be set to "elastic", "fade", or "none". <strong><em>Default: Elastic</em></strong>', 'lightboxplus' )?>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">
									<?php _e( 'Resize Speed', 'lightboxplus' )?>: </th>
								<td>
									<select name="speed_sec" id="speed_sec">
										<option value="0"<?php if ( $lightboxPlusOptions['speed_sec']=='0' ) echo ' selected="selected"'?>>0</option>
										<option value="50"<?php if ( $lightboxPlusOptions['speed_sec']=='50' ) echo ' selected="selected"'?>>50</option>
										<option value="100"<?php if ( $lightboxPlusOptions['speed_sec']=='100' ) echo ' selected="selected"'?>>100</option>
										<option value="150"<?php if ( $lightboxPlusOptions['speed_sec']=='150' ) echo ' selected="selected"'?>>150</option>
										<option value="200"<?php if ( $lightboxPlusOptions['speed_sec']=='200' ) echo ' selected="selected"'?>>200</option>
										<option value="250"<?php if ( $lightboxPlusOptions['speed_sec']=='250' ) echo ' selected="selected"'?>>250</option>
										<option value="300"<?php if ( $lightboxPlusOptions['speed_sec']=='300' ) echo ' selected="selected"'?>>300</option>
										<option value="350"<?php if ( $lightboxPlusOptions['speed_sec']=='350' ) echo ' selected="selected"'?>>350</option>
										<option value="400"<?php if ( $lightboxPlusOptions['speed_sec']=='400' ) echo ' selected="selected"'?>>400</option>
										<option value="450"<?php if ( $lightboxPlusOptions['speed_sec']=='450' ) echo ' selected="selected"'?>>450</option>
										<option value="500"<?php if ( $lightboxPlusOptions['speed_sec']=='500' ) echo ' selected="selected"'?>>500</option>
										<option value="550"<?php if ( $lightboxPlusOptions['speed_sec']=='550' ) echo ' selected="selected"'?>>550</option>
										<option value="600"<?php if ( $lightboxPlusOptions['speed_sec']=='600' ) echo ' selected="selected"'?>>600</option>
										<option value="650"<?php if ( $lightboxPlusOptions['speed_sec']=='650' ) echo ' selected="selected"'?>>650</option>
										<option value="700"<?php if ( $lightboxPlusOptions['speed_sec']=='700' ) echo ' selected="selected"'?>>700</option>
										<option value="750"<?php if ( $lightboxPlusOptions['speed_sec']=='750' ) echo ' selected="selected"'?>>750</option>
										<option value="800"<?php if ( $lightboxPlusOptions['speed_sec']=='800' ) echo ' selected="selected"'?>>800</option>
										<option value="850"<?php if ( $lightboxPlusOptions['speed_sec']=='850' ) echo ' selected="selected"'?>>850</option>
										<option value="900"<?php if ( $lightboxPlusOptions['speed_sec']=='900' ) echo ' selected="selected"'?>>900</option>
										<option value="950"<?php if ( $lightboxPlusOptions['speed_sec']=='950' ) echo ' selected="selected"'?>>950</option>
										<option value="1000"<?php if ( $lightboxPlusOptions['speed_sec']=='1000' ) echo ' selected="selected"'?>>1000</option>
										<option value="1050"<?php if ( $lightboxPlusOptions['speed_sec']=='1050' ) echo ' selected="selected"'?>>1050</option>
										<option value="1250"<?php if ( $lightboxPlusOptions['speed_sec']=='1250' ) echo ' selected="selected"'?>>1250</option>
										<option value="1500"<?php if ( $lightboxPlusOptions['speed_sec']=='1500' ) echo ' selected="selected"'?>>1500</option>
										<option value="1750"<?php if ( $lightboxPlusOptions['speed_sec']=='1750' ) echo ' selected="selected"'?>>1750</option>
										<option value="2000"<?php if ( $lightboxPlusOptions['speed_sec']=='2000' ) echo ' selected="selected"'?>>2000</option>
										<option value="2500"<?php if ( $lightboxPlusOptions['speed_sec']=='2500' ) echo ' selected="selected"'?>>2500</option>
										<option value="3000"<?php if ( $lightboxPlusOptions['speed_sec']=='3000' ) echo ' selected="selected"'?>>3000</option>
										<option value="3500"<?php if ( $lightboxPlusOptions['speed_sec']=='3500' ) echo ' selected="selected"'?>>3500</option>
										<option value="4000"<?php if ( $lightboxPlusOptions['speed_sec']=='4000' ) echo ' selected="selected"'?>>4000</option>
										<option value="5000"<?php if ( $lightboxPlusOptions['speed_sec']=='5000' ) echo ' selected="selected"'?>>5000</option>
									</select>
									<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
									<div class="lbp-bigtip" id="lbp_speed_sec_tip">
										<?php _e( 'Controls the speed of the fade and elastic transitions, in milliseconds. <strong><em>Default: 350</em></strong>', 'lightboxplus' )?>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">
									<?php _e( 'Width', 'lightboxplus' )?>: </th>
								<td>
									<input type="text" size="15" name="width_sec" id="width_sec" value="<?php if ( !empty( $lightboxPlusOptions['width_sec'] )) { echo $lightboxPlusOptions['width_sec'];} else { echo ''; } ?>" />
									<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
									<div class="lbp-bigtip" id="lbp_width_sec_tip">
										<?php _e( 'Set a fixed total width. This includes borders and buttons. Example: "100%", "500px", or 500, or false for no defined width.  <strong><em>Default: false</em></strong>', 'lightboxplus' )?>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">
									<?php _e( 'Height', 'lightboxplus' )?>: </th>
								<td>
									<input type="text" size="15" name="height_sec" id="height_sec" value="<?php if ( !empty( $lightboxPlusOptions['height_sec'] )) { echo $lightboxPlusOptions['height_sec'];} else { echo ''; } ?>" />
									<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
									<div class="lbp-bigtip" id="lbp_height_sec_tip">
										<?php _e( 'Set a fixed total height. This includes borders and buttons. Example: "100%", "500px", or 500, or false for no defined height. <strong><em>Default: false</em></strong>', 'lightboxplus' )?>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">
									<?php _e( 'Inner Width', 'lightboxplus' )?>: </th>
								<td>
									<input type="text" size="15" name="inner_width_sec" id="inner_width_sec" value="<?php if ( !empty( $lightboxPlusOptions['inner_width_sec'] )) { echo $lightboxPlusOptions['inner_width_sec'];} else { echo ''; } ?>" />
									<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
									<div class="lbp-bigtip" id="lbp_inner_width_sec_tip">
										<?php _e( 'This is an alternative to "width" used to set a fixed inner width. This excludes borders and buttons. Example: "50%", "500px", or 500, or false for no inner width.  <strong><em>Default: false</em></strong>', 'lightboxplus' )?>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">
									<?php _e( 'Inner Height', 'lightboxplus' )?>: </th>
								<td>
									<input type="text" size="15" name="inner_height_sec" id="inner_height_sec" value="<?php if ( !empty( $lightboxPlusOptions['inner_height_sec'] )) { echo $lightboxPlusOptions['inner_height_sec'];} else { echo ''; } ?>" />
									<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
									<div class="lbp-bigtip" id="lbp_inner_height_sec_tip">
										<?php _e( 'This is an alternative to "height" used to set a fixed inner height. This excludes borders and buttons. Example: "50%", "500px", or 500 or false for no inner height. <strong><em>Default: false</em></strong>', 'lightboxplus' )?>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">
									<?php _e( 'Initial Width', 'lightboxplus' )?>: </th>
								<td>
									<input type="text" size="15" name="initial_width_sec" id="initial_width_sec" value="<?php if ( !empty( $lightboxPlusOptions['initial_width_sec'] )) { echo $lightboxPlusOptions['initial_width_sec'];} else { echo ''; } ?>" />
									<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
									<div class="lbp-bigtip" id="lbp_initial_width_sec_tip">
										<?php _e( 'Set the initial width, prior to any content being loaded.  <strong><em>Default: 300</em></strong>', 'lightboxplus' )?>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">
									<?php _e( 'Initial Height', 'lightboxplus' )?>: </th>
								<td>
									<input type="text" size="15" name="initial_height_sec" id="initial_height_sec" value="<?php if ( !empty( $lightboxPlusOptions['initial_height_sec'] )) { echo $lightboxPlusOptions['initial_height_sec'];} else { echo ''; } ?>" />
									<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
									<div class="lbp-bigtip" id="lbp_initial_height_sec_tip">
										<?php _e( 'Set the initial height, prior to any content being loaded. <strong><em>Default: 100</em></strong>', 'lightboxplus' )?>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">
									<?php _e( 'Maximum Width', 'lightboxplus' )?>: </th>
								<td>
									<input type="text" size="15" name="max_width_sec" id="max_width_sec" value="<?php if ( !empty( $lightboxPlusOptions['max_width_sec'] )) { echo $lightboxPlusOptions['max_width_sec'];} else { echo ''; } ?>" />
									<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
									<div class="lbp-bigtip" id="lbp_max_width_sec_tip">
										<?php _e( 'Set a maximum width for loaded content.  Example: "75%", "500px", 500, or false for no maximum width.  <strong><em>Default: false</em></strong>', 'lightboxplus' )?>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">
									<?php _e( 'Maximum Height', 'lightboxplus' )?>: </th>
								<td>
									<input type="text" size="15" name="max_height_sec" id="max_height_sec" value="<?php if ( !empty( $lightboxPlusOptions['max_height_sec'] )) { echo $lightboxPlusOptions['max_height_sec'];} else { echo ''; } ?>" />
									<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
									<div class="lbp-bigtip" id="lbp_max_height_sec_tip">
										<?php _e( 'Set a maximum height for loaded content.  Example: "75%", "500px", 500, or false for no maximum height. <strong><em>Default: false</em></strong>', 'lightboxplus' )?>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">
									<?php _e( 'Resize', 'lightboxplus' )?>: </th>
								<td>
									<input type="checkbox" name="resize_sec" id="resize_sec" value="1"<?php if ( $lightboxPlusOptions['resize_sec'] ) echo ' checked="checked"';?> />
									<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
									<div class="lbp-bigtip" id="lbp_resize_sec_tip">
										<?php _e( 'If checked and if Maximum Width or Maximum Height have been defined, Lightbx Plus will resize photos to fit within the those values. <strong><em>Default: Checked</em></strong>', 'lightboxplus' )?>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">
									<?php _e( 'Overlay Opacity', 'lightboxplus' )?>: </th>
								<td>
									<select name="opacity_sec">
										<option value="0"<?php if ( $lightboxPlusOptions['opacity_sec']=='0' ) echo ' selected="selected"'?>>0%</option>
										<option value="0.05"<?php if ( $lightboxPlusOptions['opacity_sec']=='0.05' ) echo ' selected="selected"'?>>5%</option>
										<option value="0.1"<?php if ( $lightboxPlusOptions['opacity_sec']=='0.1' ) echo ' selected="selected"'?>>10%</option>
										<option value="0.15"<?php if ( $lightboxPlusOptions['opacity_sec']=='0.15' ) echo ' selected="selected"'?>>15%</option>
										<option value="0.2"<?php if ( $lightboxPlusOptions['opacity_sec']=='0.2' ) echo ' selected="selected"'?>>20%</option>
										<option value="0.25"<?php if ( $lightboxPlusOptions['opacity_sec']=='0.25' ) echo ' selected="selected"'?>>25%</option>
										<option value="0.3"<?php if ( $lightboxPlusOptions['opacity_sec']=='0.3' ) echo ' selected="selected"'?>>30%</option>
										<option value="0.35"<?php if ( $lightboxPlusOptions['opacity_sec']=='0.35' ) echo ' selected="selected"'?>>35%</option>
										<option value="0.4"<?php if ( $lightboxPlusOptions['opacity_sec']=='0.4' ) echo ' selected="selected"'?>>40%</option>
										<option value="0.45"<?php if ( $lightboxPlusOptions['opacity_sec']=='0.45' ) echo ' selected="selected"'?>>45%</option>
										<option value="0.5"<?php if ( $lightboxPlusOptions['opacity_sec']=='0.5' ) echo ' selected="selected"'?>>50%</option>
										<option value="0.55"<?php if ( $lightboxPlusOptions['opacity_sec']=='0.55' ) echo ' selected="selected"'?>>55%</option>
										<option value="0.6"<?php if ( $lightboxPlusOptions['opacity_sec']=='0.6' ) echo ' selected="selected"'?>>60%</option>
										<option value="0.65"<?php if ( $lightboxPlusOptions['opacity_sec']=='0.65' ) echo ' selected="selected"'?>>65%</option>
										<option value="0.7"<?php if ( $lightboxPlusOptions['opacity_sec']=='0.7' ) echo ' selected="selected"'?>>70%</option>
										<option value="0.75"<?php if ( $lightboxPlusOptions['opacity_sec']=='0.75' ) echo ' selected="selected"'?>>75%</option>
										<option value="0.8"<?php if ( $lightboxPlusOptions['opacity_sec']=='0.8' ) echo ' selected="selected"'?>>80%</option>
										<option value="0.85"<?php if ( $lightboxPlusOptions['opacity_sec']=='0.85' ) echo ' selected="selected"'?>>85%</option>
										<option value="0.9"<?php if ( $lightboxPlusOptions['opacity_sec']=='0.9' ) echo ' selected="selected"'?>>90%</option>
										<option value="0.95"<?php if ( $lightboxPlusOptions['opacity_sec']=='0.95' ) echo ' selected="selected"'?>>95%</option>
										<option value="1.0"<?php if ( $lightboxPlusOptions['opacity_sec']=='1.0' ) echo ' selected="selected"'?>>100%</option>
									</select>
									<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
									<div class="lbp-bigtip" id="lbp_opacity_sec_tip">
										<?php _e( 'Controls transparency of shadow overlay. Lower numbers are more transparent. <strong><em>Default: 80%</em></strong>', 'lightboxplus' )?>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">
									<?php _e( 'Pre-load images', 'lightboxplus' )?>: </th>
								<td>
									<input type="checkbox" name="preloading_sec" value="1"<?php if ( $lightboxPlusOptions['preloading_sec'] ) echo ' checked="checked"';?> />
									<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
									<div class="lbp-bigtip" id="lbp_preloading_sec_tip">
										<?php _e( 'Allows for preloading of "Next" and "Previous" content in a shared relation group (same values for the "rel" attribute), after the current content has finished loading. Uncheck to disable. <strong><em>Default: Checked</em></strong>', 'lightboxplus' )?>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">
									<?php _e( 'Grouping Labels', 'lightboxplus' )?>: </th>
								<td>
									<input type="text" size="15" name="label_image_sec" id="label_imag_sece" value="<?php if (empty( $lightboxPlusOptions['label_image_sec'] )) { echo 'Image'; } else {echo $lightboxPlusOptions['label_image_sec'];}?>" />
									#
									<input type="text" size="15" name="label_of_sec" id="label_of_sec" value="<?php if (empty( $lightboxPlusOptions['label_of_sec'] )) { echo 'of'; } else {echo $lightboxPlusOptions['label_of_sec'];}?>" />
									# <a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
									<div class="lbp-bigtip" id="lbp_label_image_sec_tip">
										<?php _e( 'Text format for the content group / gallery count. {current} and {total} are detected and replaced with actual numbers while ColorBox runs.<strong><em>Default: Image {current} of {total}</em></strong>', 'lightboxplus' )?>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">
									<?php _e( 'Previous image text', 'lightboxplus' )?>: </th>
								<td>
									<input type="text" size="15" name="previous_sec" id="previous_sec" value="<?php if ( !empty( $lightboxPlusOptions['previous_sec'] )) { echo $lightboxPlusOptions['previous_sec'];} else { echo 'previous'; } ?>" />
									<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
									<div class="lbp-bigtip" id="lbp_previous_sec_tip">
										<?php _e( 'Text for the previous button in a shared relation group (same values for "rel" attribute). <strong><em>Default: previous</em></strong>', 'lightboxplus' )?>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">
									<?php _e( 'Next image text', 'lightboxplus' )?>: </th>
								<td>
									<input type="text" size="15" name="next_sec" id="next_sec" value="<?php if ( !empty( $lightboxPlusOptions['next_sec'] )) { echo $lightboxPlusOptions['next_sec'];} else { echo 'next'; } ?>" />
									<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
									<div class="lbp-bigtip" id="lbp_next_sec_tip">
										<?php _e( 'Text for the next button in a shared relation group (same values for "rel" attribute).  <strong><em>Default: next</em></strong>', 'lightboxplus' )?>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">
									<?php _e( 'Close image text', 'lightboxplus' )?>: </th>
								<td>
									<input type="text" size="15" name="close_sec" id="close_sec" value="<?php if ( !empty( $lightboxPlusOptions['close_sec'] )) { echo $lightboxPlusOptions['close_sec'];} else { echo 'close'; } ?>" />
									<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
									<div class="lbp-bigtip" id="lbp_close_sec_tip">
										<?php _e( 'Text for the close button. The "Esc" key will also close Lightbox Plus. <strong><em>Default: close</em></strong>', 'lightboxplus' )?>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">
									<?php _e( 'Overlay Close', 'lightboxplus' )?>: </th>
								<td>
									<input type="checkbox" name="overlay_close_sec" id="overlay_close_sec" value="1"<?php if ( $lightboxPlusOptions['overlay_close_sec'] ) echo ' checked="checked"';?> />
									<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
									<div class="lbp-bigtip" id="lbp_overlay_close_sec_tip">
										<?php _e( 'If checked, enables closing Lightbox Plus by clicking on the background overlay. <strong><em>Default: Checked</em></strong>', 'lightboxplus' )?>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<!-- Slideshow Settings -->
			<div id="poststuff" class="lbp">
				<div class="postbox close-me">
					<h3>
						<?php _e( 'Secondary Lightbox - Slideshow Settings:', 'lightboxplus' )?>
					</h3>
					<div class="inside toggle">
						<table class="form-table">
							<tr>
								<th scope="row">
									<?php _e( 'Slideshow', 'lightboxplus' )?>: </th>
								<td>
									<input type="checkbox" name="slideshow_sec" id="slideshow_sec" value="1"<?php if ( $lightboxPlusOptions['slideshow_sec'] ) echo ' checked="checked"';?> />
									<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
									<div class="lbp-bigtip" id="lbp_slideshow_sec_tip">
										<?php _e( 'If checked, adds slideshow capablity to a content group / gallery. <strong><em>Default: Unchecked</em></strong>', 'lightboxplus' )?>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">
									<?php _e( 'Auto-Start Slideshow', 'lightboxplus' )?>: </th>
								<td>
									<input type="checkbox" name="slideshow_auto_sec" id="slideshow_auto_sec" value="1"<?php if ( $lightboxPlusOptions['slideshow_auto'] ) echo ' checked="checked"';?> />
									<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
									<div class="lbp-bigtip" id="lbp_slideshow_auto_sec_tip">
										<?php _e( 'If checked, the slideshows will automatically start to play when content grou opened. <strong><em>Default: Checked</em></strong>', 'lightboxplus' )?>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">
									<?php _e( 'Slideshow Speed', 'lightboxplus' )?>: </th>
								<td>
									<select name="slideshow_speed_sec" id="slideshow_speed_sec">
										<option value="500"<?php if ( $lightboxPlusOptions['slideshow_speed_sec']=='500' ) echo ' selected="selected"'?>>500</option>
										<option value="1000"<?php if ( $lightboxPlusOptions['slideshow_speed_sec']=='1000' ) echo ' selected="selected"'?>>1000</option>
										<option value="1500"<?php if ( $lightboxPlusOptions['slideshow_speed_sec']=='1500' ) echo ' selected="selected"'?>>1500</option>
										<option value="2000"<?php if ( $lightboxPlusOptions['slideshow_speed_sec']=='2000' ) echo ' selected="selected"'?>>2000</option>
										<option value="2500"<?php if ( $lightboxPlusOptions['slideshow_speed_sec']=='2500' ) echo ' selected="selected"'?>>2500</option>
										<option value="3000"<?php if ( $lightboxPlusOptions['slideshow_speed_sec']=='3000' ) echo ' selected="selected"'?>>3000</option>
										<option value="3500"<?php if ( $lightboxPlusOptions['slideshow_speed_sec']=='3500' ) echo ' selected="selected"'?>>3500</option>
										<option value="4000"<?php if ( $lightboxPlusOptions['slideshow_speed_sec']=='4000' ) echo ' selected="selected"'?>>4000</option>
										<option value="4500"<?php if ( $lightboxPlusOptions['slideshow_speed_sec']=='4500' ) echo ' selected="selected"'?>>4500</option>
										<option value="5000"<?php if ( $lightboxPlusOptions['slideshow_speed_sec']=='5000' ) echo ' selected="selected"'?>>5000</option>
										<option value="5500"<?php if ( $lightboxPlusOptions['slideshow_speed_sec']=='5500' ) echo ' selected="selected"'?>>5500</option>
										<option value="6000"<?php if ( $lightboxPlusOptions['slideshow_speed_sec']=='6000' ) echo ' selected="selected"'?>>6000</option>
										<option value="6500"<?php if ( $lightboxPlusOptions['slideshow_speed_sec']=='6500' ) echo ' selected="selected"'?>>6500</option>
										<option value="7000"<?php if ( $lightboxPlusOptions['slideshow_speed_sec']=='7000' ) echo ' selected="selected"'?>>7000</option>
										<option value="7500"<?php if ( $lightboxPlusOptions['slideshow_speed_sec']=='7500' ) echo ' selected="selected"'?>>7500</option>
										<option value="8000"<?php if ( $lightboxPlusOptions['slideshow_speed_sec']=='8000' ) echo ' selected="selected"'?>>8000</option>
										<option value="8500"<?php if ( $lightboxPlusOptions['slideshow_speed_sec']=='8500' ) echo ' selected="selected"'?>>8500</option>
										<option value="9000"<?php if ( $lightboxPlusOptions['slideshow_speed_sec']=='9000' ) echo ' selected="selected"'?>>9000</option>
										<option value="9500"<?php if ( $lightboxPlusOptions['slideshow_speed_sec']=='9500' ) echo ' selected="selected"'?>>9500</option>
										<option value="10000"<?php if ( $lightboxPlusOptions['slideshow_speed_sec']=='10000' ) echo ' selected="selected"'?>>10000</option>
										<option value="11000"<?php if ( $lightboxPlusOptions['slideshow_speed_sec']=='11000' ) echo ' selected="selected"'?>>11000</option>
										<option value="12000"<?php if ( $lightboxPlusOptions['slideshow_speed_sec']=='12000' ) echo ' selected="selected"'?>>12000</option>
										<option value="13000"<?php if ( $lightboxPlusOptions['slideshow_speed_sec']=='13000' ) echo ' selected="selected"'?>>13000</option>
										<option value="14000"<?php if ( $lightboxPlusOptions['slideshow_speed_sec']=='14000' ) echo ' selected="selected"'?>>14000</option>
										<option value="15000"<?php if ( $lightboxPlusOptions['slideshow_speed_sec']=='15000' ) echo ' selected="selected"'?>>15000</option>
										<option value="20000"<?php if ( $lightboxPlusOptions['slideshow_speed_sec']=='20000' ) echo ' selected="selected"'?>>20000</option>
									</select>
									<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
									<div class="lbp-bigtip" id="lbp_slideshow_speed_sec_tip">
										<?php _e( 'Controls the speed of the slideshow, in milliseconds. <strong><em>Default: 2500</em></strong>', 'lightboxplus' )?>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">
									<?php _e( 'Slideshow start text', 'lightboxplus' )?>: </th>
								<td>
									<input type="text" size="15" name="slideshow_start_sec" id="slideshow_start_sec" value="<?php if ( !empty( $lightboxPlusOptions['slideshow_start_sec'] )) { echo $lightboxPlusOptions['slideshow_start_sec'];} else { echo 'start'; } ?>" />
									<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
									<div class="lbp-bigtip" id="lbp_slideshow_start_sec_tip">
										<?php _e( 'Text for the slideshow start button. <strong><em>Default: start</em></strong>', 'lightboxplus' )?>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">
									<?php _e( 'Slideshow stop text', 'lightboxplus' )?>: </th>
								<td>
									<input type="text" size="15" name="slideshow_stop_sec" id="slideshow_stop_sec" value="<?php if ( !empty( $lightboxPlusOptions['slideshow_stop_sec'] )) { echo $lightboxPlusOptions['slideshow_stop_sec'];} else { echo 'stop'; } ?>" />
									<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
									<div class="lbp-bigtip" id="lbp_slideshow_stop_sec_tip">
										<?php _e( 'Text for the slideshow stop button.  <strong><em>Default: stop</em></strong>', 'lightboxplus' )?>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<!-- Other Settings -->
			<div id="poststuff" class="lbp">
				<div class="postbox close-me">
					<h3>
						<?php _e( 'Secondary Lightbox - Other Settings:', 'lightboxplus' )?>
					</h3>
					<div class="inside toggle">
						<table class="form-table">
							<tr>
								<th scope="row">
									<?php _e( 'Use iFrame', 'lightboxplus' )?>: </th>
								<td>
									<input type="checkbox" name="iframe_sec" id="iframe_sec" value="1"<?php if ( $lightboxPlusOptions['iframe_sec'] ) echo ' checked="checked"';?> />
									<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
									<div class="lbp-bigtip" id="lbp_iframe_sec_tip">
										<?php _e( 'If checked, specifies that content should be displayed in an iFrame. Must be used when using Lightbox Plus to display content from another site.  Can be used to display external web pages, video and more. <strong><em>Default: Unchecked</em></strong>', 'lightboxplus' )?>
									</div>
								</td>
							</tr>

							<tr>
								<th scope="row">
									<?php _e( 'Use Class Method', 'lightboxplus' )?>: </th>
								<td>
									<input type="checkbox" name="use_class_method_sec" id="use_class_method_sec" value="1"<?php if ( $lightboxPlusOptions['use_class_method_sec'] ) echo ' checked="checked"';?> />
									Class name:
									<input type="text" size="15" name="class_name_sec" id="class_name_sec" value="<?php if (empty( $lightboxPlusOptions['class_name_sec'] )) { echo 'lbpModal'; } else {echo $lightboxPlusOptions['class_name_sec'];}?>" />
									<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"> <img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
									<div class="lbp-bigtip" id="lbp_use_class_method_sec_tip">
										<?php _e( 'If checked, Lightbox Plus will only lightbox images using a class instead of the <code>rel=lightbox[]</code> attribute.  Using this method you can manually control which images are affected by Lightbox Plus by adding the class to the Advanced Link Settings in the WordPress Edit Image tool or by adding it to the image link URL and checking the <strong>Do Not Auto-Lightbox Images</strong> option. You can also specify the name of the class instead of using the default. <strong><em>Default: Unchecked / Default cboxModal</em></strong>', 'lightboxplus' )?>
									</div>
								</td>
							</tr>

							<tr>
								<th scope="row">
									<?php _e( '<strong>Do Not</strong> Display Image Title', 'lightboxplus' )?>: </th>
								<td>
									<input type="checkbox" name="no_display_title_sec" id="no_display_title_sec" value="1"<?php if ( $lightboxPlusOptions['no_display_title_sec'] ) echo ' checked="checked"';?> />
									<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
									<div class="lbp-bigtip" id="lbp_no_display_title_sec_tip">
										<?php _e( 'If checked, Lightbox Plus <em>will not</em> display image titles automatically.  This has no effect if the <strong>Do Not Auto-Lightbox Images</strong> option is checked. <strong><em>Default: Unchecked</em></strong>', 'lightboxplus' )?>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<!-- begin testin - wrap in postbox -->
				<div class="postbox close-me"><h3 class="hndle" title="Click to toggle"><?php _e( 'Secondary Lightbox - Demo','lightboxplus' ); ?>:</h3>
					<div class="inside toggle">
						<table class="form-table">
							<tr valign="top">
								<td>
									<?php _e('Here you can test you settings with various different implementations of Lightbox Plus for Video, External Pages and Interactive Flash.  If they do not work please check that you have the following items set: Inner Width, Inner Height, and Use Iframe must be checked.  You will not be able to display any of these without the minimum options set.',"lightboxplus"); ?>
								</td>
							</tr>
							<tr>
								<td>
									<p class="secondary_test_item">
										<a href="<?php echo $g_lightbox_plus_url ?>/screenshot-2.jpg" <?php if ( $lightboxPlusOptions['class_name_sec'] ) { echo 'class="'.$lightboxPlusOptions['class_name_sec'].'"'; } ?> title="Secondary Lightbox - Screenshot 2">Secondary Lightbox - Screenshot 2 - Text Link</a><br /><code>&lt;a href="<?php echo $g_lightbox_plus_url ?>/screenshot-2.jpg" <?php if ( $lightboxPlusOptions['class_name_sec'] ) { echo 'class="'.$lightboxPlusOptions['class_name_sec'].'"'; } ?> title="Secondary Lightbox - Screenshot 2">Secondary Lightbox - Screenshot 2 - Text Link&lt;/a></code><br /><br />
										<a title="Projection Animation Test" href="http://www.youtube.com/v/pUPrCCP73Ws" <?php if ( $lightboxPlusOptions['class_name_sec'] ) { echo 'class="'.$lightboxPlusOptions['class_name_sec'].'"'; } ?>>Secondary Lightbox - Video Test</a><br /><code>&lt;a title="Projection Animation Test" href="http://www.youtube.com/v/pUPrCCP73Ws" <?php if ( $lightboxPlusOptions['class_name_sec'] ) { echo 'class="'.$lightboxPlusOptions['class_name_sec'].'"'; } ?>>Secondary Lightbox - Video Test&lt;/a></code><br /><br />
										<a title="Facelift Image Replacement @ WordPress.Org" href="http://wordpress.org/extend/plugins/facelift-image-replacement/" <?php if ( $lightboxPlusOptions['class_name_sec'] ) { echo 'class="'.$lightboxPlusOptions['class_name_sec'].'"'; } ?>>Secondary Lightbox - External Page Test</a><br /><code>&lt;a title="Facelift Image Replacement @ WordPress.Org" href="http://wordpress.org/extend/plugins/facelift-image-replacement/" <?php if ( $lightboxPlusOptions['class_name_sec'] ) { echo 'class="'.$lightboxPlusOptions['class_name_sec'].'"'; } ?>>Secondary Lightbox - External Page Test&lt;/a></code><br /><br />
										<a href="<?php echo $g_lightbox_plus_url ?>/trivia.swf" <?php if ( $lightboxPlusOptions['class_name_sec'] ) { echo 'class="'.$lightboxPlusOptions['class_name_sec'].'"'; } ?> title="Secondary Lightbox - Interactive Flash">Secondary Lightbox - Interactive Flash</a><br /><code>&lt;a href="<?php echo $g_lightbox_plus_url ?>/trivia.swf" <?php if ( $lightboxPlusOptions['class_name_sec'] ) { echo 'class="'.$lightboxPlusOptions['class_name_sec'].'"'; } ?> title="Secondary Lightbox - Interactive Flash">Secondary Lightbox - Interactive Flash&lt;/a></code></p>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<!-- end testing -->
			</div>
			<p class="submit">
				<input type="submit" style="padding:5px 30px 5px 30px;" name="Submit" title="<?php _e( 'Save all Lightbox Plus settings', 'lightboxplus' )?>" value="<?php _e( 'Save settings', 'lightboxplus' )?> &raquo;" />
			</p>
		</div>
	</div>
	</div>
	<!-- Begin Secondary Lightbox -->
