<?php
	/*
	Plugin Name: Lightbox Plus
	Plugin URI: http://www.23systems.net/plugins/lightbox-plus/
	Description: Lightbox Plus implements ColorBox as a lightbox image overlay tool for WordPress.  <a href="http://colorpowered.com/colorbox/">ColorBox</a> was created by Jack Moore of Color Powered and is licensed under the <a href="http://www.opensource.org/licenses/mit-license.php">MIT License</a>.
	Author: Dan Zappone
	Author URI: http://www.23systems.net/
	Version: 2.4.6
	*/
	/*---- 2011.12.30  ----*/
	/**
	* WordPress Globals
	*
	* @var mixed
	*/
	global $post;
	global $content;
	global $page;
	/**
	* Lightbox Plus Globals
	*
	* @var mixed
	*/
	global $g_lightbox_plus_url;
	global $g_lightbox_plus_dir;
	global $g_lbp_messages;
	global $g_lbp_plugin_page;
	global $g_lbp_local_style_path;
	global $g_lbp_global_style_path;
	global $g_lbp_local_style_url;
	global $g_lbp_global_style_url;

	/**
	* Instantiate Lightbox Plus Globals
	* TODO: Verify all these are needed
	*
	* @var mixed
	*/
	$g_lbp_plugin_page = '';
	$g_lbp_messages = '';
	$g_lightbox_plus_url = WP_PLUGIN_URL.'/lightbox-plus';
	$g_lightbox_plus_dir = WP_PLUGIN_DIR.'/lightbox-plus';
	$g_lbp_local_style_path = $g_lightbox_plus_dir.'/css';
	$g_lbp_global_style_path = WP_CONTENT_DIR . '/lbp-css';
	$g_lbp_local_style_url = $g_lightbox_plus_url.'/css';
	$g_lbp_global_style_url = WP_CONTENT_URL . '/lbp-css';

	/**
	* Require extended Lightbox Plus classes
	*/
	require_once('classes/utility.class.php');
	require_once('classes/shortcode.class.php');
	require_once('classes/filters.class.php');
	require_once('classes/actions.class.php');
	require_once('classes/init.class.php');

	/**
	* Require HTML Parser
	*/
	$lbputility = new lbp_utilities();
	if ($lbputility->phpMinV('4.*')) {
		require_once('classes/shd.class.php');
	}
	unset($lbputility);

	/**
	* On Plugin Activation initialize settings
	*/
	if (!function_exists('ActivateLBP')) {
		function ActivateLBP() {
			$lbp_activate = new lbp_init();
			$lbp_activate->lightboxPlusInit();
			unset($lbp_activate);
		}
	}

	/**
	* On plugin deactivation remove settings
	*/
	if (!function_exists('DeactivateLBP')) {
		function DeactivateLBP() {
			delete_option('lightboxplus_options');
			delete_option('lightboxplus_init');
		}
	}

	/**
	* Register activation/deactivation hooks and text domain
	*/
	register_activation_hook( __FILE__, 'ActivateLBP' );
	register_deactivation_hook( __FILE__, 'DeactivateLBP' );
	load_plugin_textdomain('lightboxplus', false, $path = $g_lightbox_plus_url);

	/**
	* Ensure class doesn't already exist
	*/
	if (!class_exists('wp_lightboxplus')) {

		class wp_lightboxplus extends lbp_init {

			/**
			* The name the options are saved under in the database
			*
			* @var mixed
			*/
			var $lightboxOptionsName   = 'lightboxplus_options';
			var $lightboxInitName      = 'lightboxplus_init';
			var $lightboxStylePathName = 'lightboxplus_style_path';

			/**
			* The PHP 5 Constructor - initializes the plugin and sets up panels
			*/
			function __construct( ) {
				$this->lightboxOptions = $this->getAdminOptions( $this->lightboxOptionsName );
				//if ( !get_option( $this->lightboxInitName ) ) {
				//    $this->lightboxPlusInit( );
				//}
				add_filter( 'plugin_row_meta',array( &$this, 'RegisterLBPLinks'),10,2);
				add_action( "init", array( &$this, "lightboxPlusInitScripts" ) );
				add_action( 'wp_print_styles', array( &$this, 'lightboxPlusAddHeader' ) );
				/**
				* Get lightbox options to check for auto-lightbox and gallery
				*/
				if ( !empty( $this->lightboxOptions ) ) {
					$lightboxPlusOptions = $this->getAdminOptions( $this->lightboxOptionsName );
					/**
					* Check to see if users wants images auto-lightboxed
					*/
					if ( $lightboxPlusOptions['no_auto_lightbox'] != 1 ) {
						/**
						* Check to see if user wants to have gallery images lightboxed
						*/
						if ($lightboxPlusOptions['gallery_lightboxplus'] != 1) {
							add_filter( 'the_content', array( &$this, 'filterLightboxPlusReplace' ), 6 );
						}
						else {
							remove_shortcode( 'gallery' );
							add_shortcode( 'gallery', array( &$this, 'lightboxPlusGallery' ), 6);
							add_filter( 'the_content', array( &$this, 'filterLightboxPlusReplace' ), 6 );
						}
					}
				}
				add_action( 'wp_footer', array( &$this, 'lightboxPlusColorbox' ) );
				if (is_admin()) {
					add_action( 'admin_menu', array( &$this, 'lightboxPlusAddPanel' ) );
				}
			}

			/**
			* Retrieves the options from the database.
			*
			* @param mixed $optionsName
			*/
			function getAdminOptions( $optionsName ) {
				$savedOptions = get_option( $optionsName );
				if ( !empty( $savedOptions ) ) {
					foreach ( $savedOptions as $key => $option ) {
						$theOptions[$key] = $option;
					}
				}
				update_option( $optionsName, $theOptions );
				return $theOptions;
			}

			/**
			* Saves the admin options to the database.
			*
			* @param mixed $optionsName
			* @param mixed $options
			*/
			function saveAdminOptions( $optionsName, $options ) {
				update_option( $optionsName, $options );
			}

			/**
			* Adds links to the plugin row on the plugins page.
			* This add_filter function must be in this file or it does not work correctly, requires plugin_basename and file match
			*
			* @param mixed $links
			* @param mixed $file
			*/
			function RegisterLBPLinks($links, $file) {
				$base = plugin_basename(__FILE__);
				if ($file == $base) {
					$links[] = '<a href="themes.php?page=lightboxplus">' . __('Settings') . '</a>';
					$links[] = '<a href="http://www.23systems.net/plugins/lightbox-plus/frequently-asked-questions/">' . __('FAQ') . '</a>';
					$links[] = '<a href="http://www.23systems.net/bbpress/forum/lightbox-plus">' . __('Support') . '</a>';
					$links[] = '<a href="http://www.23systems.net/donate/">' . __('Donate') . '</a>';
					$links[] = '<a href="http://twitter.com/23systems">' . __('Follow on Twitter') . '</a>';
					$links[] = '<a href="http://www.facebook.com/pages/Austin-TX/23Systems-Web-Devsign/94195762502">' . __('Facebook Page') . '</a>';
				}
				return $links;
			}

			/**
			* The admin panel funtion
			* handles creating admin panel and processing of form submission
			*/
			function lightboxPlusAdminPanel( ) {
				global $g_lightbox_plus_url, $g_lbp_messages;
				global $g_lbp_local_style_path, $g_lbp_global_style_path;
				load_plugin_textdomain( 'lightboxplus',false, $path = $g_lightbox_plus_url );
				$location = admin_url('/admin.php?page=lightboxplus');
				/**
				* Check form submission and update setting
				*/
				if ( isset($_POST['action']) ) {
					switch ( $_POST['sub'] ) {
						case 'settings':
							$lightboxPlusOptions = array(
							"lightboxplus_style"    => $_POST['lightboxplus_style'],
							"use_custom_style"      => $_POST['use_custom_style'],
							"disable_css"           => $_POST['disable_css'],
							"use_php_four"          => $_POST['use_php_four'],
							"lightboxplus_multi"    => $_POST['lightboxplus_multi'],
							"use_inline"            => $_POST['use_inline'],
							"inline_num"            => $_POST['inline_num'],
							"transition"            => $_POST['transition'],
							"speed"                 => $_POST['speed'],
							"width"                 => $_POST['width'],
							"height"                => $_POST['height'],
							"inner_width"           => $_POST['inner_width'],
							"inner_height"          => $_POST['inner_height'],
							"initial_width"         => $_POST['initial_width'],
							"initial_height"        => $_POST['initial_height'],
							"max_width"             => $_POST['max_width'],
							"max_height"            => $_POST['max_height'],
							"resize"                => $_POST['resize'],
							"opacity"               => $_POST['opacity'],
							"preloading"            => $_POST['preloading'],
							"label_image"           => $_POST['label_image'],
							"label_of"              => $_POST['label_of'],
							"previous"              => $_POST['previous'],
							"next"                  => $_POST['next'],
							"close"                 => $_POST['close'],
							"overlay_close"         => $_POST['overlay_close'],
							"slideshow"             => $_POST['slideshow'],
							"slideshow_auto"        => $_POST['slideshow_auto'],
							"slideshow_speed"       => $_POST['slideshow_speed'],
							"slideshow_start"       => $_POST['slideshow_start'],
							"slideshow_stop"        => $_POST['slideshow_stop'],
							"use_caption_title"     => $_POST['use_caption_title'],
							"gallery_lightboxplus"  => $_POST['gallery_lightboxplus'],
							"multiple_galleries"    => $_POST['multiple_galleries'],
							"use_class_method"      => $_POST['use_class_method'],
							"class_name"            => $_POST['class_name'],
							"no_auto_lightbox"      => $_POST['no_auto_lightbox'],
							"text_links"            => $_POST['text_links'],
							"no_display_title"      => $_POST['no_display_title']
							);

							$g_lbp_messages .= __('Primary lightbox settings updated.','lightboxplus').'<br /><br />';

							if ( $_POST['lightboxplus_multi'] ) {
								$lightboxPlusSecondaryOptions = array(
								"transition_sec"        => $_POST['transition_sec'],
								"speed_sec"             => $_POST['speed_sec'],
								"width_sec"             => $_POST['width_sec'],
								"height_sec"            => $_POST['height_sec'],
								"inner_width_sec"       => $_POST['inner_width_sec'],
								"inner_height_sec"      => $_POST['inner_height_sec'],
								"initial_width_sec"     => $_POST['initial_width_sec'],
								"initial_height_sec"    => $_POST['initial_height_sec'],
								"max_width_sec"         => $_POST['max_width_sec'],
								"max_height_sec"        => $_POST['max_height_sec'],
								"resize_sec"            => $_POST['resize_sec'],
								"opacity_sec"           => $_POST['opacity_sec'],
								"preloading_sec"        => $_POST['preloading_sec'],
								"label_image_sec"       => $_POST['label_image_sec'],
								"label_of_sec"          => $_POST['label_of_sec'],
								"previous_sec"          => $_POST['previous_sec'],
								"next_sec"              => $_POST['next_sec'],
								"close_sec"             => $_POST['close_sec'],
								"overlay_close_sec"     => $_POST['overlay_close_sec'],
								"slideshow_sec"         => $_POST['slideshow_sec'],
								"slideshow_auto_sec"    => $_POST['slideshow_auto_sec'],
								"slideshow_speed_sec"   => $_POST['slideshow_speed_sec'],
								"slideshow_start_sec"   => $_POST['slideshow_start_sec'],
								"slideshow_stop_sec"    => $_POST['slideshow_stop_sec'],
								"iframe_sec"            => $_POST['iframe_sec'],
								"use_class_method_sec"  => $_POST['use_class_method_sec'],
								"class_name_sec"        => $_POST['class_name_sec'],
								"no_display_title_sec"  => $_POST['no_display_title_sec'],
								);
								$lightboxPlusOptions = array_merge($lightboxPlusOptions, $lightboxPlusSecondaryOptions);
								unset($lightboxPlusSecondaryOptions);
								$g_lbp_messages .= __('Secondary lightbox settings updated.','lightboxplus').'<br /><br />';
							}

							if ( $_POST['use_inline'] ) {
								if (!empty($this->lightboxOptions)) {
									$lightboxPlusInlineOptions   = $this->getAdminOptions($this->lightboxOptionsName);
								}

								if ($lightboxPlusInlineOptions['use_inline'] && $lightboxPlusInlineOptions['inline_num'] != '') {
									$inline_links = array();
									$inline_hrefs = array();
									$inline_widths = array();
									$inline_heights = array();
									for ($i = 1; $i <= $lightboxPlusInlineOptions['inline_num']; $i++) {
										$inline_links[] = $_POST["inline_link_$i"];
										$inline_hrefs[] = $_POST["inline_href_$i"];
										$inline_widths[] = $_POST["inline_width_$i"];
										$inline_heights[] = $_POST["inline_height_$i"];
									}
								}

								$lightboxPlusInlineOptions = array(
								"inline_links"          => $inline_links,
								"inline_hrefs"          => $inline_hrefs,
								"inline_widths"         => $inline_widths,
								"inline_heights"        => $inline_heights
								);

								$lightboxPlusOptions = array_merge($lightboxPlusOptions, $lightboxPlusInlineOptions);
								unset($lightboxPlusInlineOptions);
								$g_lbp_messages .= __('Inline lightbox settings updated.','lightboxplus').'<br /><br />';
							}

							$this->saveAdminOptions($this->lightboxOptionsName, $lightboxPlusOptions);

							/**
							* Load options info array if not yet loaded
							*/
							if ( !empty( $this->lightboxOptions )) { $lightboxPlusOptions = $this->getAdminOptions( $this->lightboxOptionsName ); }

							/**
							* Initialize Custom lightbox Plus Path
							*/
							if ( $_POST['use_custom_style'] && !is_dir($g_lbp_global_style_path) ) {
								$dir_create_result = $this->lightboxPlusGlobalStylesinit();
								if ($dir_create_result) {
									$g_lbp_messages .= __('Lightbox custom styles initialized.','lightboxplus').'<br /><br />';
								}
								else {
									$g_lbp_messages .= __('<strong style="color:#900;">Lightbox custom styles initialization failed.</strong><br />Please create a directory called <code>lbp-css</code> in your <code>wp-content</code> directory and copy the styles located in <code>wp-content/plugins/lightbox-plus/css/</code> to <code>wp-content/lbp-css</code>','lightboxplus').'<br /><br />';
								}
							}

							/**
							* Initialize Secondary Lightbox if enabled
							*/
							if ( $_POST['lightboxplus_multi'] && !$_POST['class_name_sec'] ) {
								$this->lightboxPlusSecondaryInit();
								$g_lbp_messages .= __('Secondary lightbox settings initialized.','lightboxplus').'<br /><br />';
							}
							/**
							*  Initialize Inline Lightboxes if enabled
							*/
							if ( $_POST['use_inline'] && !$_POST['inline_link_1'] ) {
								$this->lightboxPlusInlineInit($_POST['inline_num']);
								$g_lbp_messages .= __('Inline lightbox settings initialized.','lightboxplus').'<br /><br />';
							}

							unset($lightboxPlusOptions);

							break;
						case 'reset':
							if ( !empty( $_POST[reinit_lightboxplus] )) {
								delete_option( $this->lightboxOptionsName );
								delete_option( $this->lightboxInitName );
								delete_option( $this->lightboxStylePathName );
								$g_lbp_messages .= '<strong>'.__('Lightbox Plus has been reset to default settings.','lightboxplus').'</strong><br /><br />';

								/**
								* Used to remove old setting from previous versions of LBP
								*
								* @var string
								*/
								$pluginPath = ( dirname( __FILE__ ));
								if ( file_exists( $pluginPath."/images" )) {
									$g_lbp_messages .= __('Deleting: ').$pluginPath.'/images . . . '.__('Removed old Lightbox Plus style images.','lightboxplus').'<br /><br />';
									$this->delete_directory( $pluginPath."/images/" );
								} else {
									$g_lbp_messages .= __('No images deleted . . . ','lightboxplus').$pluginPath.'/images '.__('already removed','lightboxplus').'<br /><br />';
								}
								if ( file_exists( $pluginPath."/js/"."lightbox.js" )) {
									$g_lbp_messages .= __('Deleting: ','lightboxplus').$pluginPath.'/js/lightbox.js . . . '.__('Removed old Lightbox Plus JavaScript.','lightboxplus').'<br /><br />';
									$this->delete_file( $pluginPath."/js", "lightbox.js" );
								} else {
									$g_lbp_messages .= __('No JavaScript deleted . . . ','lightboxplus').$pluginPath.'/js/lightbox.js '.__('already removed','lightboxplus').'<br /><br />';
								}
								$oldStyles = $this->dirList( $pluginPath."/css/" );
								if ( !empty( $oldStyles )) {
									foreach ( $oldStyles as $value ) {
										if ( file_exists( $pluginPath."/css/".$value )) {
											$g_lbp_messages .= __('Deleting: '.$pluginPath.'/css/'.$value).' . . . <br /><br />';
											$this->delete_file( $pluginPath."/css", $value );
										}
									}
									$g_lbp_messages .= __('Removed old Lightbox Plus styles.','lightboxplus').'<br /><br />';
								}
								else {
									$g_lbp_messages .= __('No styles deleted . . . Old styles already removed','lightboxplus').'<br /><br />';
								}
							}

							/**
							* Will reinitilize on reload where option lightboxplus_init is null
							*
							* @var wp_lightboxplus
							*/
							$this->lightboxPlusInit();
							$g_lbp_messages .= '<strong>'.__('Please check and update your settings before continuing!','lightboxplus').'</strong>';
							break;
						default:
							break;
					}
				}

				/**
				* Get options to load in form
				*/
				if ( !empty( $this->lightboxOptions )) { $lightboxPlusOptions = $this->getAdminOptions( $this->lightboxOptionsName ); }

				/**
				* Check if there are styles
				*
				* @var mixed
				*/
				if ($lightboxPlusOptions['use_custom_style']) {
					$stylePath = $g_lbp_global_style_path;
				}
				else {
					$stylePath = $g_lbp_local_style_path;
				}
				if ( $handle = opendir( $stylePath )) {
					while ( false !== ( $file = readdir( $handle ))) {
						if ( $file != "." && $file != ".." && $file != ".DS_Store"  && $file != ".svn" && $file != "index.html") {
							$styles[$file] = $stylePath."/".$file."/";
						}
					}
					closedir( $handle );
				}
			?>
			<div class="wrap" id="lightbox">
				<h2><?php _e( 'Lightbox Plus Options v2.4 ', 'lightboxplus' )?></h2>
				<h2><?php _e( '(ColorBox v1.3.17.2, PHP Simple HTML DOM Parser v1.5)', 'lightboxplus' )?></h2>

				<br style="clear: both;" />
				<?php
					if ($g_lbp_messages) {
						echo '<div id="lbp_message" title="'.__('Settings Saved', 'lightboxplus').'" style="display:none">'.$g_lbp_messages.'</div>';
						echo '<script type="text/javascript">';
						echo 'jQuery(function() {';
						echo '  jQuery("#lbp_message").dialog({ buttons: { "Ok": function() { jQuery(this).dialog("close"); } },open: function() { jQuery(".ui-dialog").fadeOut(9000); },resizable:false,width: 480 });';
						echo '});';
						echo '</script>';
					}
					require('admin/lightbox.admin.php');
			?></div>
			<script type="text/javascript">
				<!--
				jQuery('.postbox .close-me').each(function() {jQuery(this).addClass("closed");});
				jQuery('#lbp_message').each(function() {jQuery(this).fadeOut(5000);});
				jQuery('.postbox h3').click( function() {jQuery(this).next('.toggle').slideToggle('fast');});
				jQuery('.lbp-info').click( function() {jQuery(this).next('.lbp-bigtip').slideToggle(100);});

				//-->
			</script>
			<?php
		}
		/**
		* END CLASS
		*/
	}
	/**
	* END CLASS CHECK
	*/
}
/**
* Instantiate the class
*/
if (class_exists('wp_lightboxplus')) { $wp_lightboxplus = new wp_lightboxplus(); }