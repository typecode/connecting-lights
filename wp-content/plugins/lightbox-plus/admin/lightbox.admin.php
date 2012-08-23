<?php
	/**
	* Lightbox Plus 2.4.6 - 2011.12.30
	*/
	if ( !empty( $this->lightboxOptions )) { $lightboxPlusOptions = $this->getAdminOptions( $this->lightboxOptionsName ); }
?>
<div id="poststuff" class="lbp">
	<div class="postbox">
		<h3>
			<?php _e( 'About Lightbox Plus for WordPress','lightboxplus' ); ?>: </h3>
		<div class="inside">
			<div style="float:right;margin-left:10px;text-align: center;">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="BKVLWU2KWRNAG">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"><img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
				<h4>&mdash; or try a 23Systems affiliate program &mdash;</h4>
				<a href="http://6e772-ccdd75pi48yf3kdqfke0.hop.clickbank.net/?tid=DIGWP" target="_top"  name="Digging into WordPress - Really Learn It"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/aflt-100x26-digwp.jpg'?>" alt="Digging into WordPress - Really Learn It" border="0" /></a>
				<a href="https://www.e-junkie.com/ecom/gb.php?cl=54585&c=ib&aff=107849" target="ejejcsingle" name=""><img src="<?php echo $g_lightbox_plus_url.'/admin/images/aflt-100x26-grvfrm.jpg'?>" alt="Gravity Forms - WordPress Form Management" border="0" /></a><br />
				<a href="https://fundry.com/project/9-lightbox-plus"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/aflt-100x26-fundry.jpg'?>" alt="Fundry - Crowdfunding Software" border="0" /></a>
				<a href="https://www.e-junkie.com/ecom/gb.php?ii=195647&c=ib&aff=107849&cl=12635" target="ejejcsingle" name="How to be a Rockstar WordPress Designer"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/aflt-100x26-rckstr.jpg'?>" alt="How to be a Rockstar WordPress Designer" border="0" /></a>
			</div>

			<h5>
				<?php _e( 'Thank you for downloading and installing Lightbox Plus for WordPress<br /><br /><a href="http://www.23systems.net/plugins/lightbox-plus/">Visit plugin site</a> | <a href="http://www.23systems.net/plugins/lightbox-plus/frequently-asked-questions/">FAQ</a> | <a href="http://www.23systems.net/services/support/">Support</a> | <a href="http://twitter.com/23systems">Follow on Twitter</a> | <a href="http://www.facebook.com/23Systems">Add Facebook Page</a>','lightboxplus' ); ?>
			</h5>
			<p style="text-align: justify">
				<?php _e( 'Lightbox Plus implements ColorBox as a lightbox image overlay tool for WordPress.  ColorBox was created by Jack Moore of <a href="http://colorpowered.com/colorbox/">Color Powered</a> and is licensed under the MIT License. Lightbox Plus allows you to easily integrate and customize a powerful and light-weight lightbox plugin for jQuery into your WordPress site.  You can easily create additional styles by adding a new folder to the css directory under <code>wp-content/plugins/lighbox-plus/css/</code> by duplicating and modifying any of the existing themes or using them as examples to create your own.  See the <a href="http://www.23systems.net/plugins/lightbox-plus/">changelog</a> for important details on this upgrade.','lightboxplus' ); ?>
			</p>
			<p style="text-align: justify">
				<?php _e( 'I spend a much of my spare time as possible working on <strong>Lightbox Plus</strong> and any donation is appreciated. Donations play a crucial role in supporting Free and Open Source Software projects. So why are donations important? As a developer the more donations I receive the more time I can invest in working on <strong>Lightbox Plus</strong>. Donations help cover the cost of hardware for development and to pay hosting bills. This is critical to the development of free software. I know a lot of other developers do the same and I try to donate to them whenever I can. As a developer I greatly appreciate any donation you can make to help support further development of quality plugins and themes for WordPress. <em>You have my sincere thanks and appreciation for using <strong>Lightbox Plus</strong></em>.','lightboxplus' ); ?>
			</p>
			<div class="clear"></div>
		</div>
	</div>
</div>

<form name="lightboxplus_settings" method="post" action="<?php echo $location?>&amp;updated=settings">
	<input type="hidden" name="action" value="action" />
	<input type="hidden" name="sub" value="settings" />
	<div id="poststuff" class="lbp">
		<div class="postbox"><h3 class="hndle" title="Click to toggle"><?php _e( 'Lightbox Plus - General Settings','lightboxplus' ); ?>:</h3>
			<div class="inside">
				<table class="form-table">
					<tr valign="top">
						<th scope="row">
							<?php _e( 'Lightbox Plus Style', 'lightboxplus' )?>: </th>
						<td>
							<select name="lightboxplus_style">
								<?php
									foreach ( $styles as $key => $value) {
										if ( $lightboxPlusOptions['lightboxplus_style'] == urlencode( $key)) {
											echo("<option value=\"".urlencode( $key)."\" selected=\"selected\">".$this->setProperName( $key)."</option>\n");
										} else {
											echo("<option value=\"".urlencode( $key)."\">".$this->setProperName( $key)."</option>\n");
										}
									}
								?>
							</select>
							<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
							<div class="lbp-bigtip" id="lbp_lightboxplus_style_tip">
								<?php _e('Select Lightbox Plus theme/style here. <strong><em>Default: Shadowed</em></strong>',"FLIR"); ?>
							</div>
						</td>
					</tr>
					<tr>
						<th scope="row">
							<?php _e( 'Use Custom Styles', 'lightboxplus' )?>: </th>
						<td>
							<input type="checkbox" name="use_custom_style" id="use_custom_style" value="1"<?php if ( $lightboxPlusOptions['use_custom_style'] ) echo ' checked="checked"';?> />
							<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
							<div class="lbp-bigtip" id="lbp_use_custom_style_tip">
								<?php _e( 'If checked, the built in stylsheets for Lightbox Plus will be located at <code>wp-content/lbp-css</code>.  Lightbox Plus will attempt to create this directory and copy default styles to it.  This will allow you to create custom styles in that directory with fear of the styles being deleted when you upgrade he plugin. <strong><em>Default: Unchecked</em></strong>', 'lightboxplus' )?>
							</div>
						</td>
					</tr>
										<tr>
						<th scope="row">
							<?php _e( 'Disable Lightbox CSS', 'lightboxplus' )?>: </th>
						<td>
							<input type="checkbox" name="disable_css" id="disable_css" value="1"<?php if ( $lightboxPlusOptions['disable_css'] ) echo ' checked="checked"';?> />
							<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
							<div class="lbp-bigtip" id="lbp_disable_css_tip">
								<?php _e( 'If checked, the built in stylsheets for Lightbox Plus will be disabled.  This will allow you to include customized Lightbox Plus styles in your theme stylesheets which can reduce files loaded, and making editing easier. Note, that if you do not have the Lightbox styles set in your stylesheet your Lightboxed images will appear at the top of your page. <strong><em>Default: Unchecked</em></strong>', 'lightboxplus' )?>
							</div>
						</td>
					</tr>
				</table>
				<p class="submit">
					<input type="submit" style="padding:5px 30px 5px 30px;" name="Submit" title="<?php _e( 'Save all Lightbox Plus settings', 'lightboxplus' )?>" value="<?php _e( 'Save settings', 'lightboxplus' )?> &raquo;" />
				</p>
			</div>
		</div>
	</div>

	<div id="poststuff" class="lbp">
		<div class="postbox">
			<h3>
				<?php _e( 'Lightbox Plus - Primary Lightbox Settings','lightboxplus' ); ?>: </h3>
			<div class="inside">
				<div id="poststuff" class="lbp">
					<div class="postbox close-me">
						<h3>
							<?php _e( 'Primary Lightbox - Base Settings','lightboxplus' ); ?>: </h3>
						<div class="inside toggle">
							<table class="form-table">
								<tr>
									<th scope="row">
										<?php _e( 'Transition Type', 'lightboxplus' )?>: </th>
									<td>
										<select name="transition" id="transition">
											<option value="elastic"<?php if ( $lightboxPlusOptions['transition']=='elastic' ) echo ' selected="selected"'?>>Elastic</option>
											<option value="fade"<?php if ( $lightboxPlusOptions['transition']=='fade' ) echo ' selected="selected"'?>>Fade</option>
											<option value="none"<?php if ( $lightboxPlusOptions['transition']=='none' ) echo ' selected="selected"'?>>None</option>
										</select>
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_transition_tip">
											<?php _e( 'Specifies the transition type. Can be set to "elastic", "fade", or "none". <strong><em>Default: Elastic</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<?php _e( 'Resize Speed', 'lightboxplus' )?>: </th>
									<td>
										<select name="speed" id="speed">
											<option value="0"<?php if ( $lightboxPlusOptions['speed']=='0' ) echo ' selected="selected"'?>>0</option>
											<option value="50"<?php if ( $lightboxPlusOptions['speed']=='50' ) echo ' selected="selected"'?>>50</option>
											<option value="100"<?php if ( $lightboxPlusOptions['speed']=='100' ) echo ' selected="selected"'?>>100</option>
											<option value="150"<?php if ( $lightboxPlusOptions['speed']=='150' ) echo ' selected="selected"'?>>150</option>
											<option value="200"<?php if ( $lightboxPlusOptions['speed']=='200' ) echo ' selected="selected"'?>>200</option>
											<option value="250"<?php if ( $lightboxPlusOptions['speed']=='250' ) echo ' selected="selected"'?>>250</option>
											<option value="300"<?php if ( $lightboxPlusOptions['speed']=='300' ) echo ' selected="selected"'?>>300</option>
											<option value="350"<?php if ( $lightboxPlusOptions['speed']=='350' ) echo ' selected="selected"'?>>350</option>
											<option value="400"<?php if ( $lightboxPlusOptions['speed']=='400' ) echo ' selected="selected"'?>>400</option>
											<option value="450"<?php if ( $lightboxPlusOptions['speed']=='450' ) echo ' selected="selected"'?>>450</option>
											<option value="500"<?php if ( $lightboxPlusOptions['speed']=='500' ) echo ' selected="selected"'?>>500</option>
											<option value="550"<?php if ( $lightboxPlusOptions['speed']=='550' ) echo ' selected="selected"'?>>550</option>
											<option value="600"<?php if ( $lightboxPlusOptions['speed']=='600' ) echo ' selected="selected"'?>>600</option>
											<option value="650"<?php if ( $lightboxPlusOptions['speed']=='650' ) echo ' selected="selected"'?>>650</option>
											<option value="700"<?php if ( $lightboxPlusOptions['speed']=='700' ) echo ' selected="selected"'?>>700</option>
											<option value="750"<?php if ( $lightboxPlusOptions['speed']=='750' ) echo ' selected="selected"'?>>750</option>
											<option value="800"<?php if ( $lightboxPlusOptions['speed']=='800' ) echo ' selected="selected"'?>>800</option>
											<option value="850"<?php if ( $lightboxPlusOptions['speed']=='850' ) echo ' selected="selected"'?>>850</option>
											<option value="900"<?php if ( $lightboxPlusOptions['speed']=='900' ) echo ' selected="selected"'?>>900</option>
											<option value="950"<?php if ( $lightboxPlusOptions['speed']=='950' ) echo ' selected="selected"'?>>950</option>
											<option value="1000"<?php if ( $lightboxPlusOptions['speed']=='1000' ) echo ' selected="selected"'?>>1000</option>
											<option value="1050"<?php if ( $lightboxPlusOptions['speed']=='1050' ) echo ' selected="selected"'?>>1050</option>
											<option value="1250"<?php if ( $lightboxPlusOptions['speed']=='1250' ) echo ' selected="selected"'?>>1250</option>
											<option value="1500"<?php if ( $lightboxPlusOptions['speed']=='1500' ) echo ' selected="selected"'?>>1500</option>
											<option value="1750"<?php if ( $lightboxPlusOptions['speed']=='1750' ) echo ' selected="selected"'?>>1750</option>
											<option value="2000"<?php if ( $lightboxPlusOptions['speed']=='2000' ) echo ' selected="selected"'?>>2000</option>
											<option value="2500"<?php if ( $lightboxPlusOptions['speed']=='2500' ) echo ' selected="selected"'?>>2500</option>
											<option value="3000"<?php if ( $lightboxPlusOptions['speed']=='3000' ) echo ' selected="selected"'?>>3000</option>
											<option value="3500"<?php if ( $lightboxPlusOptions['speed']=='3500' ) echo ' selected="selected"'?>>3500</option>
											<option value="4000"<?php if ( $lightboxPlusOptions['speed']=='4000' ) echo ' selected="selected"'?>>4000</option>
											<option value="5000"<?php if ( $lightboxPlusOptions['speed']=='5000' ) echo ' selected="selected"'?>>5000</option>
										</select>
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_speed_tip">
											<?php _e( 'Controls the speed of the fade and elastic transitions, in milliseconds. <strong><em>Default: 350</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<?php _e( 'Width', 'lightboxplus' )?>: </th>
									<td>
										<input type="text" size="15" name="width" id="width" value="<?php if ( !empty( $lightboxPlusOptions['width'] )) { echo $lightboxPlusOptions['width'];} else { echo ''; } ?>" />
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_width_tip">
											<?php _e( 'Set a fixed total width. This includes borders and buttons. Example: "100%", "500px", or 500, or false for no defined width.  <strong><em>Default: false</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<?php _e( 'Height', 'lightboxplus' )?>: </th>
									<td>
										<input type="text" size="15" name="height" id="height" value="<?php if ( !empty( $lightboxPlusOptions['height'] )) { echo $lightboxPlusOptions['height'];} else { echo ''; } ?>" />
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_height_tip">
											<?php _e( 'Set a fixed total height. This includes borders and buttons. Example: "100%", "500px", or 500, or false for no defined height. <strong><em>Default: false</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<?php _e( 'Inner Width', 'lightboxplus' )?>: </th>
									<td>
										<input type="text" size="15" name="inner_width" id="inner_width" value="<?php if ( !empty( $lightboxPlusOptions['inner_width'] )) { echo $lightboxPlusOptions['inner_width'];} else { echo ''; } ?>" />
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_inner_width_tip">
											<?php _e( 'This is an alternative to "width" used to set a fixed inner width. This excludes borders and buttons. Example: "50%", "500px", or 500, or false for no inner width.  <strong><em>Default: false</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<?php _e( 'Inner Height', 'lightboxplus' )?>: </th>
									<td>
										<input type="text" size="15" name="inner_height" id="inner_height" value="<?php if ( !empty( $lightboxPlusOptions['inner_height'] )) { echo $lightboxPlusOptions['inner_height'];} else { echo ''; } ?>" />
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_inner_height_tip">
											<?php _e( 'This is an alternative to "height" used to set a fixed inner height. This excludes borders and buttons. Example: "50%", "500px", or 500 or false for no inner height. <strong><em>Default: false</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<?php _e( 'Initial Width', 'lightboxplus' )?>: </th>
									<td>
										<input type="text" size="15" name="initial_width" id="initial_width" value="<?php if ( !empty( $lightboxPlusOptions['initial_width'] )) { echo $lightboxPlusOptions['initial_width'];} else { echo ''; } ?>" />
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_initial_width_tip">
											<?php _e( 'Set the initial width, prior to any content being loaded.  <strong><em>Default: 300</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<?php _e( 'Initial Height', 'lightboxplus' )?>: </th>
									<td>
										<input type="text" size="15" name="initial_height" id="initial_height" value="<?php if ( !empty( $lightboxPlusOptions['initial_height'] )) { echo $lightboxPlusOptions['initial_height'];} else { echo ''; } ?>" />
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_initial_height_tip">
											<?php _e( 'Set the initial height, prior to any content being loaded. <strong><em>Default: 100</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<?php _e( 'Maximum Width', 'lightboxplus' )?>: </th>
									<td>
										<input type="text" size="15" name="max_width" id="max_width" value="<?php if ( !empty( $lightboxPlusOptions['max_width'] )) { echo $lightboxPlusOptions['max_width'];} else { echo ''; } ?>" />
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_max_width_tip">
											<?php _e( 'Set a maximum width for loaded content.  Example: "75%", "500px", 500, or false for no maximum width.  <strong><em>Default: false</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<?php _e( 'Maximum Height', 'lightboxplus' )?>: </th>
									<td>
										<input type="text" size="15" name="max_height" id="max_height" value="<?php if ( !empty( $lightboxPlusOptions['max_height'] )) { echo $lightboxPlusOptions['max_height'];} else { echo ''; } ?>" />
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_max_height_tip">
											<?php _e( 'Set a maximum height for loaded content.  Example: "75%", "500px", 500, or false for no maximum height. <strong><em>Default: false</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<?php _e( 'Resize', 'lightboxplus' )?>: </th>
									<td>
										<input type="checkbox" name="resize" id="resize" value="1"<?php if ( $lightboxPlusOptions['resize'] ) echo ' checked="checked"';?> />
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_resize_tip">
											<?php _e( 'If checked and if Maximum Width or Maximum Height have been defined, Lightbx Plus will resize photos to fit within the those values. <strong><em>Default: Checked</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<?php _e( 'Overlay Opacity', 'lightboxplus' )?>: </th>
									<td>
										<select name="opacity">
											<option value="0"<?php if ( $lightboxPlusOptions['opacity']=='0' ) echo ' selected="selected"'?>>0%</option>
											<option value="0.05"<?php if ( $lightboxPlusOptions['opacity']=='0.05' ) echo ' selected="selected"'?>>5%</option>
											<option value="0.1"<?php if ( $lightboxPlusOptions['opacity']=='0.1' ) echo ' selected="selected"'?>>10%</option>
											<option value="0.15"<?php if ( $lightboxPlusOptions['opacity']=='0.15' ) echo ' selected="selected"'?>>15%</option>
											<option value="0.2"<?php if ( $lightboxPlusOptions['opacity']=='0.2' ) echo ' selected="selected"'?>>20%</option>
											<option value="0.25"<?php if ( $lightboxPlusOptions['opacity']=='0.25' ) echo ' selected="selected"'?>>25%</option>
											<option value="0.3"<?php if ( $lightboxPlusOptions['opacity']=='0.3' ) echo ' selected="selected"'?>>30%</option>
											<option value="0.35"<?php if ( $lightboxPlusOptions['opacity']=='0.35' ) echo ' selected="selected"'?>>35%</option>
											<option value="0.4"<?php if ( $lightboxPlusOptions['opacity']=='0.4' ) echo ' selected="selected"'?>>40%</option>
											<option value="0.45"<?php if ( $lightboxPlusOptions['opacity']=='0.45' ) echo ' selected="selected"'?>>45%</option>
											<option value="0.5"<?php if ( $lightboxPlusOptions['opacity']=='0.5' ) echo ' selected="selected"'?>>50%</option>
											<option value="0.55"<?php if ( $lightboxPlusOptions['opacity']=='0.55' ) echo ' selected="selected"'?>>55%</option>
											<option value="0.6"<?php if ( $lightboxPlusOptions['opacity']=='0.6' ) echo ' selected="selected"'?>>60%</option>
											<option value="0.65"<?php if ( $lightboxPlusOptions['opacity']=='0.65' ) echo ' selected="selected"'?>>65%</option>
											<option value="0.7"<?php if ( $lightboxPlusOptions['opacity']=='0.7' ) echo ' selected="selected"'?>>70%</option>
											<option value="0.75"<?php if ( $lightboxPlusOptions['opacity']=='0.75' ) echo ' selected="selected"'?>>75%</option>
											<option value="0.8"<?php if ( $lightboxPlusOptions['opacity']=='0.8' ) echo ' selected="selected"'?>>80%</option>
											<option value="0.85"<?php if ( $lightboxPlusOptions['opacity']=='0.85' ) echo ' selected="selected"'?>>85%</option>
											<option value="0.9"<?php if ( $lightboxPlusOptions['opacity']=='0.9' ) echo ' selected="selected"'?>>90%</option>
											<option value="0.95"<?php if ( $lightboxPlusOptions['opacity']=='0.95' ) echo ' selected="selected"'?>>95%</option>
											<option value="1.0"<?php if ( $lightboxPlusOptions['opacity']=='1.0' ) echo ' selected="selected"'?>>100%</option>
										</select>
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_opacity_tip">
											<?php _e( 'Controls transparency of shadow overlay. Lower numbers are more transparent. <strong><em>Default: 80%</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<?php _e( 'Pre-load images', 'lightboxplus' )?>: </th>
									<td>
										<input type="checkbox" name="preloading" value="1"<?php if ( $lightboxPlusOptions['preloading'] ) echo ' checked="checked"';?> />
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_preloading_tip">
											<?php _e( 'Allows for preloading of "Next" and "Previous" content in a shared relation group (same values for the "rel" attribute), after the current content has finished loading. Uncheck to disable. <strong><em>Default: Checked</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<?php _e( 'Grouping Labels', 'lightboxplus' )?>: </th>
									<td>
										<input type="text" size="15" name="label_image" id="label_image" value="<?php if (empty( $lightboxPlusOptions['label_image'] )) { echo 'Image'; } else {echo $lightboxPlusOptions['label_image'];}?>" />
										#
										<input type="text" size="15" name="label_of" id="label_of" value="<?php if (empty( $lightboxPlusOptions['label_of'] )) { echo 'of'; } else {echo $lightboxPlusOptions['label_of'];}?>" />
										# <a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_label_image_tip">
											<?php _e( 'Text format for the content group / gallery count. {current} and {total} are detected and replaced with actual numbers while ColorBox runs.<strong><em>Default: Image {current} of {total}</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<?php _e( 'Previous image text', 'lightboxplus' )?>: </th>
									<td>
										<input type="text" size="15" name="previous" id="previous" value="<?php if ( !empty( $lightboxPlusOptions['previous'] )) { echo $lightboxPlusOptions['previous'];} else { echo 'previous'; } ?>" />
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_previous_tip">
											<?php _e( 'Text for the previous button in a shared relation group (same values for "rel" attribute). <strong><em>Default: previous</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<?php _e( 'Next image text', 'lightboxplus' )?>: </th>
									<td>
										<input type="text" size="15" name="next" id="next" value="<?php if ( !empty( $lightboxPlusOptions['next'] )) { echo $lightboxPlusOptions['next'];} else { echo 'next'; } ?>" />
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_next_tip">
											<?php _e( 'Text for the next button in a shared relation group (same values for "rel" attribute).  <strong><em>Default: next</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<?php _e( 'Close image text', 'lightboxplus' )?>: </th>
									<td>
										<input type="text" size="15" name="close" id="close" value="<?php if ( !empty( $lightboxPlusOptions['close'] )) { echo $lightboxPlusOptions['close'];} else { echo 'close'; } ?>" />
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_close_tip">
											<?php _e( 'Text for the close button. The "Esc" key will also close Lightbox Plus. <strong><em>Default: close</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<?php _e( 'Overlay Close', 'lightboxplus' )?>: </th>
									<td>
										<input type="checkbox" name="overlay_close" id="overlay_close" value="1"<?php if ( $lightboxPlusOptions['overlay_close'] ) echo ' checked="checked"';?> />
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_overlay_close_tip">
											<?php _e( 'If checked, enables closing Lightbox Plus by clicking on the background overlay. <strong><em>Default: Checked</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div id="poststuff" class="lbp">
					<div class="postbox close-me">
						<h3>
							<?php _e( 'Primary Lightbox - Slideshow Settings:', 'lightboxplus' )?>
						</h3>
						<div class="inside toggle">
							<table class="form-table">
								<tr>
									<th scope="row">
										<?php _e( 'Slideshow', 'lightboxplus' )?>: </th>
									<td>
										<input type="checkbox" name="slideshow" id="slideshow" value="1"<?php if ( $lightboxPlusOptions['slideshow'] ) echo ' checked="checked"';?> />
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_slideshow_tip">
											<?php _e( 'If checked, adds slideshow capablity to a content group / gallery. <strong><em>Default: Unchecked</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<?php _e( 'Auto-Start Slideshow', 'lightboxplus' )?>: </th>
									<td>
										<input type="checkbox" name="slideshow_auto" id="slideshow_auto" value="1"<?php if ( $lightboxPlusOptions['slideshow_auto'] ) echo ' checked="checked"';?> />
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_slideshow_auto_tip">
											<?php _e( 'If checked, the slideshows will automatically start to play when content grou opened. <strong><em>Default: Checked</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<?php _e( 'Slideshow Speed', 'lightboxplus' )?>: </th>
									<td>
										<select name="slideshow_speed" id="slideshow_speed">
											<option value="500"<?php if ( $lightboxPlusOptions['slideshow_speed']=='500' ) echo ' selected="selected"'?>>500</option>
											<option value="1000"<?php if ( $lightboxPlusOptions['slideshow_speed']=='1000' ) echo ' selected="selected"'?>>1000</option>
											<option value="1500"<?php if ( $lightboxPlusOptions['slideshow_speed']=='1500' ) echo ' selected="selected"'?>>1500</option>
											<option value="2000"<?php if ( $lightboxPlusOptions['slideshow_speed']=='2000' ) echo ' selected="selected"'?>>2000</option>
											<option value="2500"<?php if ( $lightboxPlusOptions['slideshow_speed']=='2500' ) echo ' selected="selected"'?>>2500</option>
											<option value="3000"<?php if ( $lightboxPlusOptions['slideshow_speed']=='3000' ) echo ' selected="selected"'?>>3000</option>
											<option value="3500"<?php if ( $lightboxPlusOptions['slideshow_speed']=='3500' ) echo ' selected="selected"'?>>3500</option>
											<option value="4000"<?php if ( $lightboxPlusOptions['slideshow_speed']=='4000' ) echo ' selected="selected"'?>>4000</option>
											<option value="4500"<?php if ( $lightboxPlusOptions['slideshow_speed']=='4500' ) echo ' selected="selected"'?>>4500</option>
											<option value="5000"<?php if ( $lightboxPlusOptions['slideshow_speed']=='5000' ) echo ' selected="selected"'?>>5000</option>
											<option value="5500"<?php if ( $lightboxPlusOptions['slideshow_speed']=='5500' ) echo ' selected="selected"'?>>5500</option>
											<option value="6000"<?php if ( $lightboxPlusOptions['slideshow_speed']=='6000' ) echo ' selected="selected"'?>>6000</option>
											<option value="6500"<?php if ( $lightboxPlusOptions['slideshow_speed']=='6500' ) echo ' selected="selected"'?>>6500</option>
											<option value="7000"<?php if ( $lightboxPlusOptions['slideshow_speed']=='7000' ) echo ' selected="selected"'?>>7000</option>
											<option value="7500"<?php if ( $lightboxPlusOptions['slideshow_speed']=='7500' ) echo ' selected="selected"'?>>7500</option>
											<option value="8000"<?php if ( $lightboxPlusOptions['slideshow_speed']=='8000' ) echo ' selected="selected"'?>>8000</option>
											<option value="8500"<?php if ( $lightboxPlusOptions['slideshow_speed']=='8500' ) echo ' selected="selected"'?>>8500</option>
											<option value="9000"<?php if ( $lightboxPlusOptions['slideshow_speed']=='9000' ) echo ' selected="selected"'?>>9000</option>
											<option value="9500"<?php if ( $lightboxPlusOptions['slideshow_speed']=='9500' ) echo ' selected="selected"'?>>9500</option>
											<option value="10000"<?php if ( $lightboxPlusOptions['slideshow_speed']=='10000' ) echo ' selected="selected"'?>>10000</option>
											<option value="11000"<?php if ( $lightboxPlusOptions['slideshow_speed']=='11000' ) echo ' selected="selected"'?>>11000</option>
											<option value="12000"<?php if ( $lightboxPlusOptions['slideshow_speed']=='12000' ) echo ' selected="selected"'?>>12000</option>
											<option value="13000"<?php if ( $lightboxPlusOptions['slideshow_speed']=='13000' ) echo ' selected="selected"'?>>13000</option>
											<option value="14000"<?php if ( $lightboxPlusOptions['slideshow_speed']=='14000' ) echo ' selected="selected"'?>>14000</option>
											<option value="15000"<?php if ( $lightboxPlusOptions['slideshow_speed']=='15000' ) echo ' selected="selected"'?>>15000</option>
											<option value="20000"<?php if ( $lightboxPlusOptions['slideshow_speed']=='20000' ) echo ' selected="selected"'?>>20000</option>
										</select>
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_slideshow_speed_tip">
											<?php _e( 'Controls the speed of the slideshow, in milliseconds. <strong><em>Default: 2500</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<?php _e( 'Slideshow start text', 'lightboxplus' )?>: </th>
									<td>
										<input type="text" size="15" name="slideshow_start" id="slideshow_start" value="<?php if ( !empty( $lightboxPlusOptions['slideshow_start'] )) { echo $lightboxPlusOptions['slideshow_start'];} else { echo 'start'; } ?>" />
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_slideshow_start_tip">
											<?php _e( 'Text for the slideshow start button. <strong><em>Default: start</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<?php _e( 'Slideshow stop text', 'lightboxplus' )?>: </th>
									<td>
										<input type="text" size="15" name="slideshow_stop" id="slideshow_stop" value="<?php if ( !empty( $lightboxPlusOptions['slideshow_stop'] )) { echo $lightboxPlusOptions['slideshow_stop'];} else { echo 'stop'; } ?>" />
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_slideshow_stop_tip">
											<?php _e( 'Text for the slideshow stop button.  <strong><em>Default: stop</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div id="poststuff" class="lbp">
					<div class="postbox close-me">
						<h3>
							<?php _e( 'Primary Lightbox - Other Settings:', 'lightboxplus' )?>
						</h3>
						<div class="inside toggle">
							<table class="form-table">
								<tr>
									<th scope="row">
										<?php _e( 'Use WP Caption for LBP Caption', 'lightboxplus' )?>: </th>
									<td>
										<input type="checkbox" name="use_caption_title" id="use_caption_title" value="1"<?php if ( $lightboxPlusOptions['use_caption_title'] ) echo ' checked="checked"';?> />
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_use_caption_title_tip">
											<?php _e( 'If checked, Lightbox Plus will attempt to use the displayed caption for the image on the page as the caption for the image in the Lightbox Plus overlay. <strong><em>Default: Unchecked</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<?php _e( 'Use For WP Gallery', 'lightboxplus' )?>: </th>
									<td>
										<input type="checkbox" name="gallery_lightboxplus" id="gallery_lightboxplus" value="1"<?php if ( $lightboxPlusOptions['gallery_lightboxplus'] ) echo ' checked="checked"';?> />
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_gallery_lightboxplus_tip">
											<?php _e( 'If checked, Lightbox Plus will add the Lightboxing feature to the WordPress built in gallery feature.  In order for this to work correcly you must set <strong>Link thumbnails to: Image File</strong> or use <code>[gallery link="file"</code> for the gallery options. <strong><em>Default: Unchecked</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
								<tr>
								<tr>
									<th scope="row">
										<?php _e( 'Seperate Galleries in Post?', 'lightboxplus' )?>: </th>
									<td>
										<input type="checkbox" name="multiple_galleries" id="multiple_galleries" value="1"<?php if ( $lightboxPlusOptions['multiple_galleries'] ) echo ' checked="checked"';?> /><a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_multiple_galleries_tip">
											<?php _e( 'If the option to separate multiple gallries in a single post is check Lightbox Plus will create separate sets of lightbox display for each gallery in the post. <strong><em>Default: Unchecked</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<?php _e( 'Use Class Method', 'lightboxplus' )?>: </th>
									<td>
										<input type="checkbox" name="use_class_method" id="use_class_method" value="1"<?php if ( $lightboxPlusOptions['use_class_method'] ) echo ' checked="checked"';?> />
										Class name:
										<input type="text" size="15" name="class_name" id="class_name" value="<?php if (empty( $lightboxPlusOptions['class_name'] )) { echo 'cboxModal'; } else {echo $lightboxPlusOptions['class_name'];}?>" />
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"> <img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_use_class_method_tip">
											<?php _e( 'If checked, Lightbox Plus will only lightbox images using a class instead of the <code>rel=lightbox[]</code> attribute.  Using this method you can manually control which images are affected by Lightbox Plus by adding the class to the Advanced Link Settings in the WordPress Edit Image tool or by adding it to the image link URL and checking the <strong>Do Not Auto-Lightbox Images</strong> option. You can also specify the name of the class instead of using the default. <strong><em>Default: Unchecked / Default cboxModal</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>

								<tr>
									<th scope="row">
										<?php _e( 'Auto-Lightbox Text Links', 'lightboxplus' )?>: </th>
									<td>
										<input type="checkbox" name="text_links" id="text_links" value="1"<?php if ( $lightboxPlusOptions['text_links'] ) echo ' checked="checked"';?> />
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_text_links_tip">
											<?php _e( 'If checked, Lightbox Plus will lightbox images that are linked to images via text as well as those link by images.  Use with care as there is a small possibility that you will get double or triple images in the lightbox display if you have invalidly nested html. <strong><em>Default: Unchecked</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<?php _e( '<strong>Do Not</strong> Auto-Lightbox Images', 'lightboxplus' )?>: </th>
									<td>
										<input type="checkbox" name="no_auto_lightbox" id="no_auto_lightbox" value="1"<?php if ( $lightboxPlusOptions['no_auto_lightbox'] ) echo ' checked="checked"';?> />
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_no_auto_lightbox_tip">
											<?php _e( 'If checked, Lightbox Plus <em>will not</em> automatically add appropriate attibutes (either <code>rel="lightbox[postID]"</code> or <code>class: cboxModal</code>) to Image URL.  You will need to manually add the appropriate attribute for Lightbox Plus to work. <strong><em>Default: Unchecked</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<?php _e( '<strong>Do Not</strong> Display Image Title', 'lightboxplus' )?>: </th>
									<td>
										<input type="checkbox" name="no_display_title" id="no_display_title" value="1"<?php if ( $lightboxPlusOptions['no_display_title'] ) echo ' checked="checked"';?> />
										<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
										<div class="lbp-bigtip" id="lbp_no_display_title_tip">
											<?php _e( 'If checked, Lightbox Plus <em>will not</em> display image titles automatically.  This has no effect if the <strong>Do Not Auto-Lightbox Images</strong> option is checked. <strong><em>Default: Unchecked</em></strong>', 'lightboxplus' )?>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</div>
					<!-- begin testin - wrap in postbox -->
					<div class="postbox close-me"><h3 class="hndle" title="Click to toggle"><?php _e( 'Primary Lightbox - Demo','lightboxplus' ); ?>:</h3>
						<div class="inside toggle">
							<table class="form-table">
								<tr valign="top">
									<td>
										<?php _e('Here you can test your settings for Lightbox Plus using image and text links.  If they do not work please check your settings and ensure that you have transition type and resize speed set ',"lightboxplus"); ?>
									</td>
								</tr>
								<tr>
									<td>
										<p class="primary_test_item"><a href="<?php echo $g_lightbox_plus_url ?>/screenshot-1.jpg" <?php if ( $lightboxPlusOptions['use_class_method'] ) { echo 'class="'.$lightboxPlusOptions['class_name'].'"'; } else { echo 'rel="lightbox[test demo]"'; } ?> title="Screenshot 1"><img title="Screenshot 1" src="<?php echo $g_lightbox_plus_url ?>/screenshot-1.jpg" alt="Screenshot 1" width="120" height="90" /></a><br />
											<a href="<?php echo $g_lightbox_plus_url ?>/screenshot-2.jpg" <?php if ( $lightboxPlusOptions['use_class_method'] ) { echo 'class="'.$lightboxPlusOptions['class_name'].'"'; } else { echo 'rel="lightbox[test demo]"'; } ?> title="Screenshot 2">Screenshot 2 Text Link</a></p>
									</td>
								</tr>
							</table>
						</div>
					</div>
					<script type="text/javascript">
						<!--
						jQuery("textarea.primary_test").change(function () {
							var test_str = jQuery("textarea.primary_test").val();
							jQuery("p.primary_test_item").html(test_str);
						});
						//-->
					</script>
					<!-- end testing -->
				</div>
				<p class="submit">
					<input type="submit" style="padding:5px 30px 5px 30px;" name="Submit" title="<?php _e( 'Save all Lightbox Plus settings', 'lightboxplus' )?>" value="<?php _e( 'Save settings', 'lightboxplus' )?> &raquo;" />
				</p>
			</div>
		</div>
	</div>
	<div id="poststuff" class="lbp">
		<div class="postbox close-me"><h3 class="hndle" title="Click to toggle"><?php _e( 'Lightbox Plus - Enable Optional/Advanced Settings','lightboxplus' ); ?>:</h3>
			<div class="inside toggle">
				<table class="form-table">
					<tr>
						<th scope="row">
							<?php _e( 'Use Secondary Lightbox', 'lightboxplus' )?>: </th>
						<td>
							<input type="checkbox" name="lightboxplus_multi" id="lightboxplus_multi" value="1"<?php if ( $lightboxPlusOptions['lightboxplus_multi'] ) echo ' checked="checked"';?> />
							<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
							<div class="lbp-bigtip" id="lbp_lightboxplus_multi_tip">
								<?php _e( 'If checked, Lightbox Plus will create a secondary lightbox with an additional set of controls.  This secondary lightbox can be used to create inline or iFramed content using a class to specify the content. <strong><em>Default: Unchecked</em></strong>', 'lightboxplus' )?>
							</div>
						</td>
					</tr>
					<tr>
						<th scope="row">
							<?php _e( 'Add Inline Lightboxes', 'lightboxplus' )?>: </th>
						<td>
							<input type="checkbox" name="use_inline" id="inline" value="1"<?php if ( $lightboxPlusOptions['use_inline'] ) echo ' checked="checked"';?> />
							Number of Inline Lightboxes:
							<select name="inline_num" id="inline_num">
								<?php for ($i = 1; $i <= 100; $i++) {
									?>
									<option value="<?php echo $i; ?>"<?php if ( $lightboxPlusOptions['inline_num']==$i ) echo ' selected="selected"'?>><?php echo $i; ?></option>
									<?php  
									}
								?>
							</select>
							<a class="lbp-info" title="<?php _e('Click for Help!', 'lightboxplus')?>"> <img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a>
							<div class="lbp-bigtip" id="lbp_use_class_method_tip">
								<?php _e( 'If checked, Lightbox Plus will add the selected number of addtional lightboxes that you can use to manuall add inline lightboxed content to.  Additional controls will be available at the bottom of the Lightbox Plus admin page. <strong><em>Default: Unchecked / Default cboxModal</em></strong>', 'lightboxplus' )?>
							</div>
						</td>
					</tr>
				</table>
				<p class="submit">
					<input type="submit" style="padding:5px 30px 5px 30px;" name="Submit" title="<?php _e( 'Save all Lightbox Plus settings', 'lightboxplus' )?>" value="<?php _e( 'Save settings', 'lightboxplus' )?> &raquo;" />
				</p>
			</div>
		</div>
	</div>
	<?php
		if ($lightboxPlusOptions['lightboxplus_multi']) {
			require('lightbox.secondary.php');
		}
		if ($lightboxPlusOptions['use_inline']) {
			require('lightbox.inline.php');
		}
	?>
</form>
<div class="alert">
	<h4>
		<?php _e( 'Reset/Re-initialize Lightbox Plus','lightboxplus' ); ?>: <a class="lbp-reinit" title="<?php _e('Click for Help!', 'lightboxplus')?>"><img src="<?php echo $g_lightbox_plus_url.'/admin/images/information.png'?>" alt="<?php _e('Click for Help!', 'lightboxplus'); ?>" /></a></h4>
	<form action="<?php echo $location?>&amp;updated=reset" method="post" id="lightboxplus_reset" name="lightboxplus_reset">
		<table>
			<tr>
				<td valign="top">
					<div class="lbp-bigtip" id="lbp_reinit_tip">
						<?php _e( 'This will immediately remove all existing settings and any files for versions of Lightbox Plus prior to version 1.5 and will also re-initialize the plugin with the new default options. Be absolutely certain you want to do this. <br /><strong><em>If you are upgrading from a version prior to 1.4 it is <strong><em>highly</em></strong> recommended that you reinitialize Lightbox Plus</em></strong>','lightboxplus' ); ?>
					</div>
				</td>
			</tr>
			<tr>
				<td valign="top">
					<p class="submit">
						<input type="hidden" name="reinit_lightboxplus" value="1" />
						<input type="submit" class="btn" name="save" style="padding:5px 30px 5px 30px;" title="<?php _e( 'Resets and re-initializes all Lightbox Plus settings', 'lightboxplus' )?>" value="<?php _e( 'Reset/Re-initialize Lightbox Plus','lightboxplus' ); ?>" />
					</p>
					<input type="hidden" name="action" value="action" />
					<input type="hidden" name="sub" value="reset" />
				</td>
			</tr>
		</table>
	</form>
</div>


<div style="display:none">
	<div id="<?php echo $inline_hrefs[0]; ?>" style="padding: 10px;background: #fff">
		<h3><?php _e( 'About Lightbox Plus for WordPress','lightboxplus' ); ?>: </h3>
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="BKVLWU2KWRNAG">
			<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"><img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>
		<h5>
			<?php _e( 'Thank you for downloading and installing Lightbox Plus for WordPress<br /><br /><a href="http://www.23systems.net/plugins/lightbox-plus/">Visit plugin site</a> | <a href="http://www.23systems.net/plugins/lightbox-plus/frequently-asked-questions/">FAQ</a> | <a href="http://www.23systems.net/bbpress/forum/lightbox-plus">Support</a> | <a href="http://twitter.com/23systems">Follow on Twitter</a> | <a href="http://www.facebook.com/pages/Austin-TX/23Systems-Web-Devsign/94195762502">Add Facebook Page</a>','lightboxplus' ); ?>
		</h5>
		<p>
			<?php _e( 'Lightbox Plus implements ColorBox as a lightbox image overlay tool for WordPress.  ColorBox was created by Jack Moore of <a href="http://colorpowered.com/colorbox/">Color Powered</a> and is licensed under the MIT License. Lightbox Plus allows you to easily integrate and customize a powerful and light-weight lightbox plugin for jQuery into your WordPress site.  You can easily create additional styles by adding a new folder to the css directory under <code>wp-content/plugins/lighbox-plus/css/</code> by duplicating and modifying any of the existing themes or using them as examples to create your own.  See the <a href="http://www.23systems.net/plugins/lightbox-plus/">changelog</a> for important details on this upgrade.','lightboxplus' ); ?>
		</p>
		<p>
			<?php _e( 'I spend a much of my spare time as possible working on <strong>Lightbox Plus</strong> and any donation is appreciated. Donations play a crucial role in supporting Free and Open Source Software projects. So why are donations important? As a developer the more donations I receive the more time I can invest in working on <strong>Lightbox Plus</strong>. Donations help cover the cost of hardware for development and to pay hosting bills. This is critical to the development of free software. I know a lot of other developers do the same and I try to donate to them whenever I can. As a developer I greatly appreciate any donation you can make to help support further development of quality plugins and themes for WordPress. <em>You have my sincere thanks and appreciation for using <strong>Lightbox Plus</strong></em>.','lightboxplus' ); ?>
		</p>
	</div>
</div>
