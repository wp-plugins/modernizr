<?php
/*
Plugin Name: WordPress Modernizr
Plugin URI: http://www.ramoonus.nl
Description: Modernizr is a small and simple JavaScript library that helps you take advantage of emerging web technologies (CSS3, HTML 5) while still maintaining a fine level of control over older browsers that may not yet support these new technologies.
Version: 1.0.0
Author: Ramoonus
Author URI: http://www.ramoonus.nl/wordpress/modernizr/
*/

// Install
function rw_modernizr() {
		wp_deregister_script('modernizr'); // deregister
		// wp_register_script( $handle, $src, $deps, $ver, $in_footer );
		wp_register_script('modernizr', plugins_url('/js/modernizr-1.7.min.js', __FILE__), false, '1.7.0', false); // re register // false for not in footer
		wp_enqueue_script('modernizr'); // load
}
add_action('init', 'rw_modernizr'); // init

// add class no-js to body element since HTML element is not possible
// no-js is required for modernizr to work
add_filter('body_class','rw_modernizr_nojs');
function rw_modernizr_nojs($classes, $class) {
	// add 'my-class' to the $classes array
	$classes[] = 'no-js';
	// return the $classes array
	return $classes;
}
// bye bye
?>