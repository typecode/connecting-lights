<?php
/*
Plugin Name: jQuery Lightbox
Plugin URI: http://www.pedrolamas.com/projectos/jquery-lightbox/
Description: Used to overlay images on the current page. Original jQuery Lightbox by <a href="http://plugins.jquery.com/project/jquerylightbox_bal" title="jQuery Lightbox">Balupton</a>.
Version: 0.22
Author: Pedro Lamas
Author URI: http://www.pedrolamas.com/
*/

if (!class_exists("jQueryLightbox")) {
  class jQueryLightbox {
    static $settings = array(
      'show_helper_text' => array(
        'title' => 'Show Helper Text',
        'description' => 'Should we show the helper text / hint ("Click to close, Hover to interact")?',
        'options' => array(
          "" => "Yes (default)", 
          "false" => "No"
        )
      ),
      'show_info' => array(
        'title' => 'Show Info',
        'description' => 'Should we force the show of the image information?',
        'options' => array(
          "" => "It should be handled automatically on rollover (default)", 
          "true" => "It should be forced to show"
        )
      ),
      'show_extended_info' => array(
        'title' => 'Show Extended Info',
        'description' => 'Should we force the show of the extended image information?',
        'options' => array(
          "" => "It should be handled automatically on rollover (default)", 
          "true" => "It should be forced to show"
        )
      ),
      'download_link' => array(
        'title' => 'Download Link',
        'description' => 'Should we show the image download link?',
        'options' => array(
          "" => "Yes (default)", 
          "false" => "No"
        )
      ),
      'auto_resize' => array(
        'title' => 'Auto Resize',
        'description' => 'Should we auto resize the image if it is too big?',
        'options' => array(
          "" => "Yes (default)", 
          "false" => "No"
        )
      ),
      'colorBlend' => array(
        'title' => 'Color Blend',
        'description' => 'Should we support colorBlend?',
        'options' => array(
          "" => "Enabled only if colorBlend is already detected (default)", 
          "true" => "Include colorBlend and enable",
          "false" => "Don't support colorBlend"
        )
      ),
      'auto_scroll' => array(
        'title' => 'Auto Scroll',
        'description' => 'How should scrolling be handled?',
        'options' => array(
          "" => "Scroll with the user (default)", 
          "disabled" => "Don't allow scrolling", 
          "ignore" => "Don't care for scrolling (leave lightbox at original position)"
        )
      ),
      'speed' => array(
        'title' => 'Speed',
        'description' => 'What time (in milliseconds) should we take to perform transitions between images?',
        'options' => null
      ),
      'opacity' => array(
        'title' => 'Opacity',
        'description' => 'What opacity (default is 0.9) should we apply to the overlay?',
        'options' => null
      ),
      'padding' => array(
        'title' => 'Padding',
        'description' => 'What padding should we apply around the image (if you are using a custom padding you want to adjust this)?',
        'options' => null
      ),
      'rel' => array(
        'title' => 'Rel',
        'description' => 'What should we look for in the rel tag (default is "lightbox") of links and images to detect if it should have a lightbox?',
        'options' => null
      ),
      'auto_relify' => array(
        'title' => 'Auto Relify',
        'description' => 'Should we do an initial rel scan to automatically detect lightboxes?',
        'options' => array(
          "" => "Yes we should (default)", 
          "false" => "No we shouldn't"
        )
      )
    );
    
    static function configure_plugin()
    {
      add_action('admin_menu', array('jQueryLightbox', 'admin_menu'));
      add_action('plugins_loaded', array('jQueryLightbox', 'plugins_loaded'));
      add_action('wp_head', array('jQueryLightbox', 'wp_head'));
    }
    
    static function wp_head()
    {
      ?>      
<script type="text/javascript">jQuery(function($) {
  $.Lightbox.construct({
    "show_linkback": false
<?php
      foreach (jQueryLightbox::$settings as $setting_id => $setting_entry)
      {
        $setting_value = get_option($setting_id);
        
        if ($setting_value != "")
        {
          if ($setting_value != "true" && $setting_value != "false")
            $setting_value = "\"$setting_value\"";
          
          echo ", \"$setting_id\": $setting_value";
        }
      }?>
  });
});</script>
      <?php
    }
    
    static function admin_menu()
    {
      add_options_page('jQuery Lightbox', 'jQuery Lightbox', 'manage_options', basename(__FILE__), array('jQueryLightbox', 'settingsPage'));
      add_action('admin_init', array('jQueryLightbox', 'registerSettings'));
    }
    
    static function plugins_loaded()
    {
      if (is_admin() || !function_exists('plugins_url')) return;
      
      global $wp_version;
      
      $path = plugins_url('/jquery-lightbox-balupton-edition/scripts/');
      
      if (version_compare($wp_version, '3.2', '<')) {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', $path.'jquery-1.7.1.min.js', false, '1.7.1');
      }
      wp_enqueue_script('jquery-lightbox', $path.'jquery.lightbox.min.js', array('jquery'), '1.4.9');
      wp_enqueue_script('jquery-lightbox-plugin', $path.'jquery.lightbox.plugin.min.js', array('jquery', 'jquery-lightbox'), '1.0');
      
      add_filter('attachment_link', array('jQueryLightbox', 'fixLink'), 10, 2);
    }
    
    static function fixLink()
    {
      $post = get_post($id);
      
      if (substr($post->post_mime_type, 0, 6) == 'image/')
        return wp_get_attachment_url($id);
      else
        return $link;
    }
    
    static function registerSettings()
    {
      $settings_group = basename(__FILE__);
      
      foreach (jQueryLightbox::$settings as $setting_id => $setting_entry)
      {
        register_setting($settings_group, $setting_id);
      }
    }
    
    static function settingsPage()
    {
?>
<div class="wrap">
<h2>jQuery Lightbox</h2>

<form method="post" action="options.php">
    <?php settings_fields(basename(__FILE__)); ?>
    <table class="form-table">
    <?php
    foreach (jQueryLightbox::$settings as $setting_id => $setting_entry)
    {
      ?><tr valign="top">
        <th scope="row"><?php echo $setting_entry['title']?></th>
        <td>
        <?php jQueryLightbox::createInput($setting_id, $setting_entry['options']) ?>
        <span class="description"><?php echo $setting_entry['description']?></span></td>
        </tr>
<?php
    }?>
    </table>
    
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>
    
</form>

<p>A lot of time and effort goes into the design, development, documentation, maintenance and support of my various open source contributions!</p>

<p>If you find any of them useful, please consider making a donation to keep the coffee brewing.</p>

<p>Thank you, <a href="http://www.pedrolamas.com" target="_blank">Pedro Lamas</a></p>

<p><div><form action="https://www.paypal.com/cgi-bin/webscr" method="post"> <input name="cmd" type="hidden" value="_s-xclick" /> <input name="hosted_button_id" type="hidden" value="GUT6UK4TTA3J8" /> <input alt="PayPal - The safer, easier way to pay online!" name="submit" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" type="image" /> <img src="https://www.paypal.com/en_US/i/scr/pixel.gif" border="0" alt="" width="1" height="1" /></form></div></p>

</div>
<?php
    }
    
    static function createInput($setting_id, $options)
    {
      $setting_value = get_option($setting_id);
      
      if ($options == null)
      {
        ?><input name="<?php echo $setting_id; ?>" value="<?php echo $setting_value; ?>">
<?php
      }
      else
      {
      ?><select name="<?php echo $setting_id; ?>">
<?php
        foreach ($options as $option_value => $option_description)
        {
        ?><option value="<?php echo $option_value; ?>"<?php if ($option_value == $setting_value) { ?> selected="selected"<?php } ?>><?php echo $option_description; ?></option>
<?php
        }
      ?></select>
<?php
      }
    }
  }
}

if (class_exists("jQueryLightbox")) {
  jQueryLightbox::configure_plugin();
}
?>