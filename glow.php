<?php
/*
Plugin Name: Glow Javascript 
Plugin URI: http://www.ramoonus.nl/wordpress/glow/
Description: This plugin adds BBCs Glow Javascript library to your set-up.
Version: 1.7.7
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
License: GPL2
*/

// Update glow
function rw_glow() {
		// Core
		wp_deregister_script('glow-core'); // deregister
		wp_enqueue_script('glow-core', plugins_url('/js/1.7.7/core/core.js', __FILE__), false, '1.7.7');
		// Widgets
		wp_deregister_script('glow-core'); // deregister
		wp_enqueue_script('glow-core', plugins_url('/js/1.7.7/widgets/widgets.js', __FILE__), false, '1.7.7');
}
// load
add_action('init', 'rw_glow');
?>