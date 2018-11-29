=== Slide Anything - Responsive Content / HTML Slider and Carousel ===
Contributors: simonpedge
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=RP7JLGK6VT252
Tags: slider, carousel, content slider, responsive slider, html slider, owl carousel
Requires at least: 4.0
Tested up to: 4.9.8
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Create responsive carousels or sliders where the content for each slide can be anything you want - images, text, HTML, and even shortcodes.

== Description ==

Slide Anything allows you to create a carousel/slider where the content for each slide can be anything you want - images, text, HTML, and even shortcodes. This plugin uses the Owl Carousel 2 jQuery plugin, and lets you create beautiful, touch enabled, responsive carousels and sliders.

= Slide Anything Version 2 =

Slide Anything has now been rebuilt using Owl Carousel 2, and this now provides many improvements and new features:

* Infinite Looping - a much requested Owl Carousel 2 feature, which means that the first slide is now seamlessly displayed after the last slide without any carousel rewind.
* New Transition Effects - New Owl Carousel transitions include Slide, Fade, Zoom In, Zoom Out, Flip Out X/Y, Rotate Left/Right, Bounce Out, Roll Out and Slide Down.
* Slide Link Feature - A new feature which allows you to create a hover-over link button for any slide within your carousels.
*  Modern Browsers - Owl Carousel 2 Uses hardware acceleration with CSS3 Translate3D transitions. Its fast and works like a charm! Slide Anything has CSS2 fallback built-in to support older browsers.

= Slide Anything PRO =

[SLIDE ANYTHING PRO](https://edgewebpages.com/) adds POPUPS into the mix!!

With [SLIDE ANYTHING PRO](https://edgewebpages.com/) each slide can now open a MODAL POPUP, which can be an IMAGE popup, a VIDEO EMBED popup (YouTube/Vimeo), a popup containing HTML CODE or a popup displaying a WordPress SHORTCODE. This can be a very useful addition to Slide Anything, if you are wanting to create Image or Video galleries for your websites.

For more information about Slide Anything PRO, [CLICK HERE](https://edgewebpages.com/).

= Owl Carousel =

[Owl Carousel](https://owlcarousel2.github.io/OwlCarousel2/) is an extremely powerful and flexible carousel/slider JQuery plugin, and it is also free to use! Unfortunately, it's not easy to integrate Owl Carousel into a WordPress site if you are a non-developer, and requires JQuery and PHP coding skills. That is why I developed this plugin.

I use Owl Carousel a in various WordPress sites I develop, specifically where I need the additional flexibility to develop a carousel with a more complex layout, or use a layout not catered for by any existing carousel plugin product.

Owl Carousel has been tested in following browsers/devices: Chrome, Firefox, Opera, IE7/8/10/11, Microsoft Edge, iPhone/iPad/Mac Safari and Android Chrome.

Please view the [FAQ Page](https://wordpress.org/plugins/slide-anything/faq/) for information on how to use `Slide Anything`.

== Installation ==

1. Upload the entire `slide-anything` folder to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu within the WordPress Dashboard.

You will now see the `Sliders` menu in your WordPress admin panel.

== Frequently Asked Questions ==

= How do I insert `Slide Anything` sliders into my WordPress pages or posts? =

There are two ways to do this. If you are using the visual editor to edit a page or post, you will see a `Slide Anything Sliders` button/icon in the toolbar of the editor. Click this button and a popup will be displayed containing a list of sliders that you have created. Select the title of a slider within this list and click `OK` to insert the shortcode for the selected slider into your page or post content.

The other method: When you are editing your slider within the WordPress Dashboard, you will see a box with the heading `Shortcode / Preview` on the right-hand side. Click the `Copy to Clipboard` button within this box to copy the slider shortcode to your clipboard. Paste this copied shortcode into the page or post where you would like your slider to appear. This is also the method to use if you want to insert your slider into a text widget or another custom content type, such as a portfolio post.

= The difference between a Slider and a Carousel, and how to create either =

By definition a `slider` has a single slide displayed on-page at a time, whilst a `carousel` has multiple slides displayed 'on-page' at a time. The `Items Displayed` box, on the right-hand side of the slider edit page in the WordPress dashboard controls how many slides are displayed on-page at a time.

To define a slider, all the settings within this box must be set to `1`. When these are set to values greater than `1`, a carousel will be displayed, for example you may want to display a carousel with 4 slides visible on desktop devices, 3 slides visible on tablets and only 2 slides visible on mobile phones.

= How do I define slide background images? =

The `Slide Background` box for each slide in your slider allows you to define a background image or a background color for each slide. Note that the content you add to each slide within the slide editor box for each slide is foreground content and sits on `top` of the slide background - this content can be other images and textual content.

To set a slide background image, click the `Set Image` button. The `Background Size` setting determines if, and how the background image is stretched/shrunk to cover the slide content area and the `Background Repeat` setting determines if the backgroung image should be repeated, like tiles. The `Background Color` setting allows you set a color for the slide background - note that you can have both a slide background color AND a slide background image. The small background preview window to the left of these settings give you an indication on how the settings you choose will look.

The `Min Height` setting (within the `Slider Style` box), is often used in conjunction with defining slide backgrounds, as this setting controls how much of the slide background is visible if the slide contains no (foreground) content.

= How do I use the `Slider Style` settings? =

At the top of this box, which appears on the right-hand side when editing a slider, you can set and copy the CSS `ID` for the slider. This is useful for developers who are familiar with CSS coding, and this CSS `ID` can be used to create custom styles for your slider within your theme or child-theme's style/CSS file.

The `Padding (pixels)` settings are used to define the amount of padding space around the entire slider - top, right, bottom and left. The `Background/Border` settings define the background colour for the entire slider (`Note:` each slide's background image/color will appear on top of this slider background), and also if a border should appear around the entire slider - the width, color and border radius of this border.

The `SLIDE STYLE` settings are the style settings for each individual slide with the slider/carousel. Here you can define the minimum height each slide and also the padding space around each slide.

== Screenshots ==

1. The Create/Edit slider page within the WordPress Dashboard - this is where you define the settings and create the slides for your `Slide Anything` slider or carousel.
2. How a carousel created using `Slide Anything` appears within the slider preview popup.

== Changelog ==

= 1.0 =
* Initial release of this plugin.

= 1.1 =
* Added a slider preview feature to the slider edit page - pressing the 'Preview' button displays the slider within a popup window.

= 1.2 =
* Added a button to the visual editor on pages and posts which displays a list of all sliders you have created, allow you to select a slider and the corresponding shortcode is automatically inserted into your page or post.
* Added the 'Random Order' checkbox to the edit slider page, and when checked slides will be randomly re-ordered whenever the slider is displayed
* Fixed issue with the 'delete plugin' function, which was crashing

= 1.3 =
* Added setting to add a margin left and right of each slide

= 1.4 =
* Bug Fix: Added `Allow Shortcodes` setting. Running shortcodes within `Slide Anything` may cause issues with some Wordpress Page Builders, and disable this setting will resolve this issue if it occurs.
* Added a new `Items Displayed` setting to set the number of slides to be displayed on screen resolutions over 1400 pixels
* Added a new `Autohide Arrows` setting to enable/displayed the autohide feature for slider navigation arrows

= 1.5 =
* Bug Fix: Fixed issue with some HTML elements/attributes being stripped out when certain shortcodes are used within slide content - found an alternative to KSES sanitization for slide content.
* Added a new dropdown option 'Background Position' for the slide background of each slide

= 1.6 =
* Added `Slide Transition` setting to set the transition of 1-Items Sliders to a 'fade', 'backSlide', 'goDown' or 'fadeUp' transition effect
* Added checkboxes to enable/disable `mouseDrag` and `touchDrag` carousel settings
* Some small bug fixes

= 1.6.1 =
* Bug Fix: Fixed minor issue when editing slide content within the WordPress Dashboard using the Text Editor. If HTML tags are not properly closed, then this was causing an issue - added the WordPress 'balanceTags()' function to correct this issue.

= 1.6.2 =
* Bug Fix: Fixed minor issue with IE 10 and IE 11 - the 'fade' and 'fade up' transition effects were not working.

= 2.0 =
* Rebuilt Slide Anything using Owl Carousel version 2.

= 2.0.1 =
* Some required CSS files were missing from the WordPress repository and therefore ZIP download. Quick patch to rectify this.

= 2.0.2 =
* Some small 'post version 2' bug fixes.

= 2.0.3 =
* Removed array dereferencing from PHP code, which causes a fatal error on web hosts using a PHP version prior to version 5.4.

= 2.0.4 =
* Fixed CSS bug with slide images (IMG tags) being resized to 100% of slide width.

= 2.0.5 =
* Fixed bug with slide 'min-height' percentage calculation.
* Changed Slide Anything Javascript loading to now load using '$(document).ready' instead of '$(window).load'.

= 2.0.6 =
* Increase number of slides allowed from 50 to 99.
* Added Owl Carousel 2.0 URL Hash Navigation feature
* Minor bug fixes

= 2.0.7 =
* Removed Owl Carousel 2.0 URL Hash Navigation feature

= 2.0.8 =
* Minor bug fix

= 2.0.9 =
* Added new 'Reverse Order' Checkbox to backend editor, which reverses the order of the slides created
* Added a 'Preview Slider' button to the backend editor - when clicked a popup modal is displayed containing a preview of the Slide Anything Slider

= 2.0.10 =
* Minor Bug Fix

= 2.0.11 =
* Bug Fix - Before generating Slide Anything JavaScript code, check if jQuery has been loaded loaded. If not, then 'Enqueue' jQuery script

= 2.0.12 =
* Bug Fix - Changed the location where the jQuery script is enqueued

= 2.0.13 =
* Bug Fix - Fixed a clash with the 'Envira Gallery' plugin

= 2.0.14 =
* Fix for using shortcodes inside of anything that already hooks into 'the_content'

= 2.0.15 =
* Modified plugin so that WordPress users with an 'Editor' role can save/update sliders

= 2.0.16 =
* Bug Fix: Modified WP Dashboard PHP code so that only a Slider 'CSS ID' containing letters (upper/lowercase) or Underscore '_' characters will be accepted. Using Dashes '-' within the CSS ID would cause a Javascript error.

= 2.0.17 =
* Added a new 'Slide By' setting to set the number of slides to slide per transition

= 2.0.18 =
* Minor Bug Fix

= 2.1.0 =
* Replaced 'Owl Carousel 2.2.1' with 'Owl Carousel 2.3 BETA'.
* Upgrading Owl Carousel fixes an issue with Slide Anything that has been reported to me on numerous occasions - namely if you switch TABS within your browser, switch to another application, or minimise your browser window, then the Slider/Carousel stops (i.e. no more transitions), and the page needs to be reloaded to 'restart' the slider.
* Although a BETA, version 2.3 seems pretty stable, and OC has been sitting at version 2.1.1 for over a year now.

= 2.1.1 =
* Bug Fix - Owl Carousel changed the CSS Style used for slide images in version 2.3. Changed the CSS style for images back to what was used in version 2.2.1 of Owl Carousel, so that sliders already created on sites continue to look the same.

= 2.1.2 =
* Added a new feature to allow you to set slider minimum height in pixels
* Added a new feature so that each slide within a slider has its own unique CSS ID

= 2.1.3 =
* Minor bug fix with Slide Anything PRO Software Licensing integration

= 2.1.4 =
* Upgraded Owl Carousel from version 2.3 BETA to version 2.3.3 (production release)

= 2.1.5 =
* Bug Fix - Issue with using shortcodes within slides. Certain shortcodes can only be displayed on the front-end (i.e. required resources are only loaded on the front-end), so the 'Preview Slider' feature on the Edit Slider page was causing issues for these shortcodes. So I have displayed this 'Preview Slider' feature for sliders where the 'Allow Shortcodes' checkbox is checked.

= 2.1.6 =
* Added a new 'Auto Height' feature, which automatically resizes the height of the slider according to the current slide's height.

= 2.1.7 =
* Minor bug fix with new 'Auto Height' feature

= 2.1.8 =
* Added the Slide By 'page' option, which is set by setting the 'Slide By' slider input to 0.
* For Slide Anything PRO YouTube video popups, added the 'rel=0' paramerter so that related videos are not displayed at the end of a video playback. This has been requested quite a bit, and I have modified the 'Magnific Popup' code so that this parameter is added to the iframe code generated.

= 2.1.9 =
* Added a new 'Use window.onload event' checkbox setting. By default, Slide Anything loads it JavaSctipt/jQuery code during the 'document.ready' event. If this new option is checked, then the JavaSctipt/jQuery code is loaded during the 'window.onload' event, and this event is only executed after all the assets for the page have been loaded - all images, CSS etc. Using this option solves an issue that sometimes occurs when inserting a Slide Anything slider into a Visual Composer full-width section, and these full-width containers are created/calculated dynamically by adding negative left/right margins to the container after the SA JavaScript/jQuery code is executed.

= 2.1.10 =
* Minor bug fix for the new 'Use window.onload event' checkbox setting.

= 2.1.11 =
* Fixed a bug that occurred when migrating a WP site to another domain location (e.g. transferring a staging/test WP site to a Live WP site). The SA slider would not work on the new domain unless it was re-saved in the back-end. This has now been fixed with this release.

= 2.1.12 =
* Added the new feature (checkbox) 'Remove JavaScript Content'. When checked, JavaScript content (<script> tags) are removed from slide content.

= 2.1.13 =
* Bug fix - An array initialisation was causing a crash on hosts using a PHP version prior to 5.4. Changed this array initialisation to now be backwards compatible.

= 2.1.14 =
* Bug fix - Fixed a small bug with the "Remove JavaScript Content" feature.

= 2.1.15 =
* Upgraded to the latest version of Owl Carousel (version 2.3.4). Set the 'Mouse Drag' option to disabled by default. Mouse dragging when enabled affects vertical touch-drag scrolling on mobile devices.

= 2.1.16 =
* Small bug fix that relates to Slide Anything PRO only: Sliders with 'autoplay' enabled were re-starting autoplay when popups were closed.

== Upgrade Notice ==

= 1.0 =
* Initial release of this plugin.

= 1.1 =
* Preview sliders created within the WordPress Dashboard.

= 1.2 =
* Added button to visual editor in pages/popsts to automatically insert slider shortcode
* Added 'Random Order' option to randomly display slides for sliders

= 1.3 =
* Added setting to add a margin left and right of each slide

= 1.4 =
* Bug Fix: Added `Allow Shortcodes` setting. Running shortcodes within `Slide Anything` may cause issues with some Wordpress Page Builders, and disable this setting will resolve this issue if it occurs.
* Added a new `Items Displayed` setting to set the number of slides to be displayed on screen resolutions over 1400 pixels
* Added a new `Autohide Arrows` setting to enable/displayed the autohide feature for slider navigation arrows

= 1.5 =
* Bug Fix: Fixed issue with some HTML elements/attributes being stripped out when certain shortcodes are used within slide content - found an alternative to KSES sanitization for slide content.
* Added a new dropdown option 'Background Position' for the slide background of each slide

= 1.6 =
* Added `Slide Transition` setting to set the transition of 1-Items Sliders to a 'fade', 'backSlide', 'goDown' or 'fadeUp' transition effect
* Added checkboxes to enable/disable `mouseDrag` and `touchDrag` carousel settings
* Some small bug fixes

= 1.6.1 =
* Bug Fix: Fixed minor issue when editing slide content within the WordPress Dashboard using the Text Editor. If HTML tags are not properly closed, then this was causing an issue - added the WordPress 'balanceTags()' function to correct this issue.

= 1.6.2 =
* Bug Fix: Fixed minor issue with IE 10 and IE 11 - the 'fade' and 'fade up' transition effects were not working.

= 2.0 =
* Rebuilt Slide Anything using Owl Carousel version 2.

= 2.0.1 =
* Some required CSS files were missing from the WordPress repository and therefore ZIP download. Quick patch to rectify this.

= 2.0.2 =
* Some small 'post version 2' bug fixes.

= 2.0.3 =
* Removed array dereferencing from PHP code, which causes a fatal error on web hosts using a PHP version prior to version 5.4.

= 2.0.4 =
* Fixed CSS bug with slide images (IMG tags) being resized to 100% of slide width.

= 2.0.5 =
* Fixed bug with slide 'min-height' percentage calculation.
* Changed Slide Anything Javascript loading to now load using '$(document).ready' instead of '$(window).load'.

= 2.0.6 =
* Increase number of slides allowed from 50 to 99.
* Added Owl Carousel 2.0 URL Hash Navigation feature
* Minor bug fixes

= 2.0.7 =
* Removed Owl Carousel 2.0 URL Hash Navigation feature

= 2.0.8 =
* Minor bug fix

= 2.0.9 =
* Added new 'Reverse Order' Checkbox to backend editor, which reverses the order of the slides created
* Added a 'Preview Slider' button to the backend editor - when clicked a popup modal is displayed containing a preview of the Slide Anything Slider

= 2.0.10 =
* Minor Bug Fix

= 2.0.11 =
* Bug Fix - Before generating Slide Anything JavaScript code, check if jQuery has been loaded loaded. If not, then 'Enqueue' jQuery script

= 2.0.12 =
* Bug Fix - Changed the location where the jQuery script is enqueued

= 2.0.13 =
* Bug Fix - Fixed a clash with the 'Envira Gallery' plugin

= 2.0.14 =
* Fix for using shortcodes inside of anything that already hooks into 'the_content'

= 2.0.15 =
* Modified plugin so that WordPress users with an 'Editor' role can save/update sliders

= 2.0.16 =
* Bug Fix: Modified WP Dashboard PHP code so that only a Slider 'CSS ID' containing letters (upper/lowercase) or Underscore '_' characters will be accepted. Using Dashes '-' within the CSS ID would cause a Javascript error.

= 2.0.17 =
* Added a new 'Slide By' setting to set the number of slides to slide per transition

= 2.0.18 =
* Minor Bug Fix

= 2.1.0 =
* Replaced 'Owl Carousel 2.2.1' with 'Owl Carousel 2.3 BETA'.
* Upgrading Owl Carousel fixes an issue with Slide Anything that has been reported to me on numerous occasions - namely if you switch TABS within your browser, switch to another application, or minimise your browser window, then the Slider/Carousel stops (i.e. no more transitions), and the page needs to be reloaded to 'restart' the slider.
* Although a BETA, version 2.3 seems pretty stable, and OC has been sitting at version 2.1.1 for over a year now.

= 2.1.1 =
* Bug Fix - Owl Carousel changed the CSS Style used for slide images in version 2.3. Changed the CSS style for images back to what was used in version 2.2.1 of Owl Carousel, so that sliders already created on sites continue to look the same.

= 2.1.2 =
* Added a new feature to allow you to set slider minimum height in pixels
* Added a new feature so that each slide within a slider has its own unique CSS ID

= 2.1.3 =
* Minor bug fix with Slide Anything PRO Software Licensing integration

= 2.1.4 =
* Upgraded Owl Carousel from version 2.3 BETA to version 2.3.3 (production release)

= 2.1.5 =
* Bug Fix - Issue with using shortcodes within slides. Certain shortcodes can only be displayed on the front-end (i.e. required resources are only loaded on the front-end), so the 'Preview Slider' feature on the Edit Slider page was causing issues for these shortcodes. So I have displayed this 'Preview Slider' feature for sliders where the 'Allow Shortcodes' checkbox is checked.

= 2.1.6 =
* Added a new 'Auto Height' feature, which automatically resizes the height of the slider according to the current slide's height.

= 2.1.7 =
* Minor bug fix with new 'Auto Height' feature

= 2.1.8 =
* Added the Slide By 'page' option, which is set by setting the 'Slide By' slider input to 0.
* For Slide Anything PRO YouTube video popups, added the 'rel=0' paramerter so that related videos are not displayed at the end of a video playback. This has been requested quite a bit, and I have modified the 'Magnific Popup' code so that this parameter is added to the iframe code generated.

= 2.1.9 =
* Added a new 'Use window.onload event' checkbox setting. By default, Slide Anything loads it JavaSctipt/jQuery code during the 'document.ready' event. If this new option is checked, then the JavaSctipt/jQuery code is loaded during the 'window.onload' event, and this event is only executed after all the assets for the page have been loaded - all images, CSS etc. Using this option solves an issue that sometimes occurs when inserting a Slide Anything slider into a Visual Composer full-width section, and these full-width containers are created/calculated dynamically by adding negative left/right margins to the container after the SA JavaScript/jQuery code is executed.

= 2.1.10 =
* Minor bug fix for the new 'Use window.onload event' checkbox setting.

= 2.1.11 =
* Fixed a bug that occurred when migrating a WP site to another domain location (e.g. transferring a staging/test WP site to a Live WP site). The SA slider would not work on the new domain unless it was re-saved in the back-end. This has now been fixed with this release. 

= 2.1.12 =
* Added the new feature (checkbox) 'Remove JavaScript Content'. When checked, JavaScript content (<script> tags) are removed from slide content.

= 2.1.13 =
* Bug fix - An array initialisation was causing a crash on hosts using a PHP version prior to 5.4. Changed this array initialisation to now be backwards compatible.

= 2.1.14 =
* Bug fix - Fixed a small bug with the "Remove JavaScript Content" feature.

= 2.1.15 =
* Upgraded to the latest version of Owl Carousel (version 2.3.4). Set the 'Mouse Drag' option to disabled by default. Mouse dragging when enabled affects vertical touch-drag scrolling on mobile devices.

= 2.1.16 =
* Small bug fix that relates to Slide Anything PRO only: Sliders with 'autoplay' enabled were re-starting autoplay when popups were closed.