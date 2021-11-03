
=== Javascript CSS Accordion ===
Contributors: shortdark
Donate link: http://www.shortdark.net/
Tags: html, accordion
Requires at least: 2.5
Tested up to: 5.8.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds an accordion using plain javascript and CSS, not jQuery.
Tested on PHP 5 through PHP 8.

== Description ==

Adds an accordion using plaing javascript and CSS, not jQuery.

Please let me know if you like this plugin by leaving a review or [contacting me](http://www.shortdark.net/contact-me/).

Go to the [Shortdark Wordpress plugin page](http://www.shortdark.net/wordpress-plugin/) for more information.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the plugin folder to the `/wp-content/plugins/` directory, or install the plugin through the WordPress
plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.

To add an accordion element you insert the shortcode below into your post in the place you'd like the accordion to be.

= Method 1 =

[sdjca id="" title=""]The content to be revealed goes here!![/sdjca]

* The id should be a number (an integer). If you have more than one accordion on a page, each accordion must have a unique id.
* The title is the text you'd see when the accordion is closed, without any HTML.
* The content is what you see when you open the accordion, this can include HTML tags. Do not use "p" tags, use "br" instead.

= Method 2 =

You can also use unenclosed shortcodes like this...

[sdjca id="" title="" content="" /]

* The id should be a number (an integer). If you have more than one accordion on a page, each accordion must have a unique id.
* The title is the text you'd see when the accordion is closed, without any HTML.
* The content is what you see when you open the accordion, without any HTML.
* The shortcode should have the trailing / at the end, especially if you are using more than one accordion in your post/page.

== Changelog ==

= 0.0.06 =

* Bugfix: tweak to the javascript.

= 0.0.05 =

* Bugfix: version number.

= 0.0.04 =

* Bugfix: only show enclosed content if the content attribute does not exist.
* Update: update to the installation instructions.

= 0.0.03 =

* Bugfix to allow the first version of the plugin to continue working.

= 0.0.02 =

* Allowed content to be added using enclosed shortcodes.

= 0.0.01 =

* New plugin.


