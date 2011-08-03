<?php
/*
Plugin Name: Modernizr
Plugin URI: http://www.ramoonus.nl/wordpress/modernizr/
Description: Modernizr is a small and simple JavaScript library that helps you take advantage of emerging web technologies (CSS3, HTML 5) while still maintaining a fine level of control over older browsers that may not yet support these new technologies.
Version: 2.0.6
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
*/

// Install
function rw_modernizr() {
		wp_deregister_script('modernizr'); // deregister
		// wp_register_script( $handle, $src, $deps, $ver, $in_footer );
		wp_register_script('modernizr', plugins_url('/js/modernizr-2.0.6.js', __FILE__), false, '2.0.6', false);
		wp_enqueue_script('modernizr'); // load
}
add_action('init', 'rw_modernizr'); // init

function rw_modernizr_nojs($classes) {
	// add 'my-class' to the $classes array
	$classes[] = 'no-js';
	// return the $classes array
	return $classes;
}
// add class no-js to body element since HTML element is not possible
// no-js is required for modernizr to work
add_filter('body_class','rw_modernizr_nojs');
?>