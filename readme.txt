=== Plugin Name ===
Contributors: Ramoonus
Donate link: http://www.ramoonus.nl/donate/
Tags: html5, html, javascript, ie, internet explorer, css 3, css3, modernizr
Requires at least: 3.0.0
Tested up to: 3.3.1
Stable tag: 2.5.2

This plugin adds the Modernizr Javascript library to your WordPress installation.
== Description ==
This plugin adds the Modernizr Javascript library to your WordPress installation.

Modernizr adds classes to the <html> element which allow you to target specific browser functionality in your stylesheet. You don't actually need to write any Javascript to use it.

Modernizr is a small and simple JavaScript library that helps you take advantage of emerging web technologies (CSS3, HTML 5) while still maintaining a fine level of control over older browsers that may not yet support these new technologies.

Modernizr uses feature detection to test the current browser against upcoming features like rgba(), border-radius, CSS Transitions and many more. These are currently being implemented across browsers and with Modernizr you can start using them right now, with an easy way to control the fallbacks for browsers that don't yet support them.

Additionally, Modernizr creates a self-titled global JavaScript object which contains properties for each feature; if a browser supports it, the property will evaluate true and if not, it will be false.

Lastly, Modernizr also adds support for styling and printing HTML5 elements. This allows you to use more semantic, forward-looking elements such as <section>, <header> and <dialog> without having to worry about them not working in Internet Explorer.


For documentation visit http://www.modernizr.com/docs/
 
== Installation ==
1. Upload `modernizer.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions == 
None at this moment.

== Upgrade Notice == 
= 2.5.2 = 
* Updates Modernizr to 2.5.2

== Screenshots ==
Not relevant.

== Changelog ==
= 2.5.2 = 
* Updates Modernizr to 2.5.2

= 2.5.0 =
* Updates Modernizr to 2.5.0

= 2.0.6 =
* Updated the script to version 2.0.6

= 2.0 =
* Replaces Modernizr 1.7 with 2.0 (custom built using the default settings 

= 1.0.1 =
* Fixes a PHP error (thanks Anthony)

= 1.0.0 =
* First version, based on Modernizr 1.7