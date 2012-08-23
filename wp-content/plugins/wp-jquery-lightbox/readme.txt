=== WP jQuery Lightbox ===
Contributors: ulfben
Donate link: http://amzn.com/w/2QB6SQ5XX2U0N
Tags: lightbox, jquery, nodal, image, display, ulfben
Requires at least: 3.3
Tested up to: 3.3.1
Stable tag: 1.3.4.2

A drop-in replacement for Lightbox 2 and similar plugins, shedding the bulk of Prototype and Scriptaculous. Improved for mobile devices.

== Description ==

This plugin lets you keep [the awesome Lightbox 2](http://www.huddletogether.com/projects/lightbox2/)-functionality, but sheds the bulk of the Prototype Framework **and** Scriptaculous Effects Library.

Warren Krewenki [ported Lightbox to jQuery](http://warren.mesozen.com/jquery-lightbox/) and this plugin is mostly a wrapper to his work: providing localization support, an admin panel for configuration, (optional) auto-boxing of your image links and support for [WordPress galleries](http://codex.wordpress.org/Gallery_Shortcode), *including* [media library](http://codex.wordpress.org/Media_Library_SubPanel) titles and captions. 

This version is also [adjusted for mobile devices](http://wordpress.org/extend/plugins/wp-jquery-lightbox/screenshots/);

* Improved scaling *maximizes* use of screen space
* Live adjustment to the browser window and orientation of your phone
* Optional download link to display images in native app.

See the plugin in action here: [http://game.hgo.se/blog/motion-capture/](http://game.hgo.se/blog/motion-capture/)

You can browse images with your keyboard: Arrows, P(revious)/N(ext) and X/C/ESC for close.

If you value [my plugins](http://profiles.wordpress.org/users/ulfben/), please help me out by [Flattr-ing them](http://flattr.com/thing/367557/Support-my-WordPress-plugins)! Or perhaps [send me a book](http://www.amazon.com/gp/registry/wishlist/2QB6SQ5XX2U0N/105-3209188-5640446?reveal=unpurchased&filter=all&sort=priority&layout=standard&x=11&y=10)? Used ones are fine! :)

*[//Ulf Benjaminsson](http://profiles.wordpress.org/users/ulfben/)*

= 1.3.4.2 (2011-02-01) =
* Fallbacks for people using older jQuery

= 1.3.4.1 (2011-01-31) =
* Updated deprecated jQuery calls (thanks; David Naber)

= 1.3.4 (2011-12-29) =
* Maybe fix for [mixed HTTP/HTTPS sites](http://wordpress.org/support/topic/mixed-http-and-https-installation-problems)
* [Support for query params in image links](http://wordpress.org/support/topic/automatic-lightbox-functionarity-failes-to-work-with-image-links?replies=2#post-2302997)
* [Fixed button messup in Firefox](http://wordpress.org/support/topic/plugin-wp-jquery-lightbox-broken-in-firefox?replies=9)
* Fixed depth fight with the default twentyeleven theme header
* [Fixed admin bar covering the lightbox](http://wordpress.org/support/topic/plugin-wp-jquery-lightbox-show-download-link-not-working?replies=4#post-2400784)
* Added info on how to disable lightbox for specific links (bogus rel-attribute)
* Added translations: [Romanian](http://wordpress.org/support/topic/wp-jquery-lightbox-romanian-translation?replies=1), [French](http://wordpress.org/support/topic/plugin-wp-jquery-lightbox-french-translation?replies=2#post-2187626) and [Hebrew](www.sagive.co.il)
* Updated: Russian language icons (thanks; Ilya Gorenburg), [Japanese translation](http://wordpress.org/support/topic/plugin-wp-jquery-lightbox-japanese-translation-for-133?replies=1)

= 1.3.3 (2011-06-12) =
* Fixes [for Internet Explorer](http://wordpress.org/support/topic/plugin-wp-jquery-lightbox-jquery-version-and-ie-issues) (A million thanks to [David Grayston](http://www.grayston.net/2011/internet-explorer-v8-and-opacity-issues/#more-342)!).
* Fix for [mixed HTTP/HTTPS installations](http://wordpress.org/support/topic/mixed-http-and-https-installation-problems).
* Added setting to have margins to screen edge.
* Added setting to put info & navigation on top.
* Added setting for help text.
* Added Japanese translation ([Thanks redcocker](http://wordpress.org/support/topic/plugin-wp-jquery-lightbox-japanese-translation)).

= 1.3.2 (2011-05-16) =
* Added support for auto-lightboxing comments too.
* Added Russian and Czech translations (incl. images). Thanks again Denis!
* Added Polish translation ([Thanks Fisiu](http://wordpress.org/support/topic/plugin-wp-jquery-lightbox-polish-localization?replies=1)).
* Fixed fallbacks to avoid [breakage over JavaScript optimizers](http://wordpress.org/support/topic/122-worked-13-does-not-work-for-me?replies=19#post-2091734).
* Known issues: [1.3.x is garbage on IE7 and IE8](http://wordpress.org/support/topic/plugin-wp-jquery-lightbox-jquery-version-and-ie-issues?replies=3). I've got no clue and no time - **help appreciated!**

= 1.3 (2011-05-01) =
* Improved scaling to *maximize* display area.
* Supports orientation / resize changes - Lightbox reflows with site. 
* Added translation support (Thanks; [Martin S](http://sukimashita.com/) & Denis N. Voituk).
* Added option to display download link.
* Added support for disabling all animations (set duration to 0).
* Fixed "duration" not having an effect.
* [For Developers: public method to apply Lightbox to any string.](http://wordpress.org/extend/plugins/wp-jquery-lightbox/installation/)

[Older changelogs moved here.](http://wordpress.org/extend/plugins/wp-jquery-lightbox/changelog/)

== Installation ==

1. Upload the `wp-jquery-lightbox`-folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Check out the jQuery Lightbox-panel in your admin interface for usage details and configuration.

= How to Use: =
1. With [WordPress built-in gallery](http://codex.wordpress.org/Gallery_Shortcode): [`[gallery link="file"]`](http://codex.wordpress.org/Gallery_Shortcode)	
1. By adding a `rel="lightbox"` attribute to any link:

	`<a href="image-1.jpg" rel="lightbox" title="my caption">image #1</a>`

	Note the use of title-attribute to set a caption
		
1. To group sets of related images, follow step 2 but additionally include a group name in the rel attribute:
	
	`<a href="image-1.jpg" rel="lightbox[roadtrip]">image #1</a>`
	
	`<a href="image-2.jpg" rel="lightbox[roadtrip]">image #2</a>`
	
	`<a href="image-3.jpg" rel="lightbox[roadtrip]">image #3</a>`

1. To *disable* lightboxing of an image link, just set any other rel-attribute: `rel="nobox"`
	
1. Keyboard support: Arrows, P(revious)/N(ext) and X/C/ESC for close.

= For developers: =
1. Always have `wp_footer();` just before the closing `</body>` tag of your theme, or you will break many plugins, which generally use this hook to reference JavaScript files. 
1. Apply lightbox to any content by running `jqlb_apply_lightbox($your_content, "any ID");` It returns a string with all image links lightboxed, grouped by `"any id"`.
1. Many JavaScript optimizers, combiners, minifiers, etc. conflict with [`wp_localize_script`](http://codex.wordpress.org/Function_Reference/wp_localize_script2), used to configure this plugin and many others.

* If you have problems with jQuery Lightbox; first disable all JavaScript-optimizing plugins. (Optimize Scripts, W3 Total Cache, WP Minify etc)
* If you develop JavaScript optimizers for WordPress, please play nice with the default API...
* [More info about this issue](http://wordpress.org/support/topic/122-worked-13-does-not-work-for-me?replies=19)

== Changelog ==
= 1.3.4.2 (2011-02-01) =
* Fallbacks for people using older jQuery

= 1.3.4.1 (2011-01-31) =
* Updated deprecated jQuery calls (thanks; David Naber)

= 1.3.4 (2011-12-29) =
* Maybe fix for [mixed HTTP/HTTPS sites](http://wordpress.org/support/topic/mixed-http-and-https-installation-problems)
* [Support for query params in image links](http://wordpress.org/support/topic/automatic-lightbox-functionarity-failes-to-work-with-image-links?replies=2#post-2302997)
* [Fixed button messup in Firefox](http://wordpress.org/support/topic/plugin-wp-jquery-lightbox-broken-in-firefox?replies=9)
* Fixed depth fight with the default twentyeleven theme header
* [Fixed admin bar covering the lightbox](http://wordpress.org/support/topic/plugin-wp-jquery-lightbox-show-download-link-not-working?replies=4#post-2400784)
* Added info on how to disable lightbox for specific links (bogus rel-attribute)
* Added translations: [Romanian](http://wordpress.org/support/topic/wp-jquery-lightbox-romanian-translation?replies=1), [French](http://wordpress.org/support/topic/plugin-wp-jquery-lightbox-french-translation?replies=2#post-2187626) and [Hebrew](www.sagive.co.il)
* Updated: Russian language icons (thanks; Ilya Gorenburg), [Japanese translation](http://wordpress.org/support/topic/plugin-wp-jquery-lightbox-japanese-translation-for-133?replies=1)

= 1.3.3 (2011-06-12) =
* Fixes [for Internet Explorer](http://wordpress.org/support/topic/plugin-wp-jquery-lightbox-jquery-version-and-ie-issues) (A million thanks to [David Grayston](http://www.grayston.net/2011/internet-explorer-v8-and-opacity-issues/#more-342)!).
* Fix for [mixed HTTP/HTTPS installations](http://wordpress.org/support/topic/mixed-http-and-https-installation-problems).
* Added setting to have margins to screen edge.
* Added setting to put info & navigation on top.
* Added setting for help text.
* Added Japanese translation ([Thanks redcocker](http://wordpress.org/support/topic/plugin-wp-jquery-lightbox-japanese-translation)).

= 1.3.2 (2011-05-16) =
* Added support for auto-lightboxing comments too
* Added Russian and Czech translations (incl. images). Thanks again Denis!
* Added Polish translation ([thanks Fisiu](http://wordpress.org/support/topic/plugin-wp-jquery-lightbox-polish-localization?replies=1))
* Fixed fallbacks to avoid [breakage over JavaScript optimizers](http://wordpress.org/support/topic/122-worked-13-does-not-work-for-me?replies=19#post-2091734).
* Known issues: [1.3.x is garbage on IE7 and IE8](http://wordpress.org/support/topic/plugin-wp-jquery-lightbox-jquery-version-and-ie-issues?replies=3). I've got no clue and no time - **help appreciated!**

= 1.3.1 (2011-05-02) =
* Forgot to include languages files! :)

= 1.3 (2011-05-01) =
* Improved scaling to make maximum use of display area.
* Supports orientation / resize changes - Lightbox reflows with site. 
* Added translation support (Thanks; [Martin S](http://sukimashita.com/) & Denis N. Voituk).
* Added option to display download link.
* Added support for disabling all animations (set duration to 0).
* Fixed "duration" not having an effect.
* [For Developers: public method to apply Lightbox to any string.](http://wordpress.org/extend/plugins/wp-jquery-lightbox/installation/)

= 1.2.2 (2011-04-14) =
* Use WordPress bundled jQuery instead of forcing the Google CDN
* Fixed the settings link on the Plugins page

= 1.2.1 (2010-10-24) =
* [Use only caption if title is identical](http://wordpress.org/support/topic/plugin-wp-jquery-lightbox-title-captions-bug-found-solved-and-fix-proposed?replies=8#post-1748874)
* Removed a forgotten debug call

= 1.2 (2010-10-12) = 
* Added support for Media Library titles and captions.
* Minified the javascript (8.6KB vs 17.8KB)
* Minified the CSS (2.0KB vs 2.7KB)

= 1.1 (2010-10-09) = 
* Honors empty captions. 
* Fixed typos on admin page.
* [thanks, josephknight!](http://tinyurl.com/3677p6r)

= 1.0 (2010-04-11) = 
* Release.

== Upgrade Notice ==
= 1.3.4.2 (2011-02-01) =
* Fallbacks for people using older jQuery

= 1.3.4.1 (2011-01-31) =
Updated deprecated jQuery calls (thanks; David Naber)

= 1.3.4 =
Lots of fixes, translations and support for the Admin Bar and Twentyeleven theme.

= 1.3.3 =
Fixes for Internet Explorer. Added Japanese translation.

= 1.3.2 =
Support for auto-lightboxing comments. Added Polish, Russian and Czech languages.

= 1.3.1 =
Added missing files from previous release... Also: mobile support, larger display area. 

= 1.3 =
Enables larger viewing area, improved mobile experience and translations.

= 1.2.2 =
Use WordPress bundled jQuery instead of forcing the Google CDN

= 1.2.1 =
Removed forgotten debug call. Important upgrade!

= 1.2 =
Support caption and titles from the Media Library

= 1.1 =
Honors empty captions and fixes some typos.

= 1.0 =
First release.

== Screenshots ==

1. A post gallery on Android.
2. Lightbox displayed in landscape mode. Image info and 'close' is always visible, download link is optional. Click left/right side of image to navigate the set.
3. Lightbox, with device rotated. Image remains centered and as wide as possible.

== Frequently Asked Questions ==

= I can see elements of my site through the overlay = 

It's a problem of [z-index](http://www.w3schools.com/Css/pr_pos_z-index.asp). Check [the z-index property](http://www.w3schools.com/Css/pr_pos_z-index.asp) for the problematic elements, and force them to be less than 100. (Thanks [dway](http://wordpress.org/support/topic/plugin-wp-jquery-lightbox-title-captions-bug-found-solved-and-fix-proposed?replies=20#post-2052340)!)

= How do I add images to a post? =

[Inserting Images into Posts and Pages](http://codex.wordpress.org/Inserting_Images_into_Posts_and_Pages)

= How do I create a thumbnail gallery? =

Upload images to a post (see previous question) and use [WordPress' built-in gallery shortcode](http://codex.wordpress.org/Gallery_Shortcode): `[gallery link="file"]`

Note the `link="file"` - this is crucial! By default the gallery will link your humbnails to a page displaying your image. With `link="file"` the thumbnails links 
directly to the image files - allowing Lightbox to function.

= Must fade-in and animation of all *box-scripts be so slow? =

WP-jQuery Lightbox lets you configure the animation duration and disable image resizing from the admin panel. Set duration to 0 to disable animations entirely.

= Can I help you in any way? =

Indeed you can! 

Translations and help with implementing them would be nice. A read through and comments on my WordPress API usage would also be most welcome, as I'm not really able to keep on top of the frequent WordPress releases anymore.

And of course; [a book or two](http://www.amazon.com/gp/registry/wishlist/2QB6SQ5XX2U0N/105-3209188-5640446?reveal=unpurchased&filter=all&sort=priority&layout=standard&x) always brightens my day! (used ones are fine!) 
