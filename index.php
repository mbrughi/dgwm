<?php

/**
 * Plugin Name: DGWM
 * Plugin URI:  https://github.com/mbrughi/dgwm/
 * Description: Disables Gutenberg welcome modal.
 * Version:     1.2.0
 * Author:      Marco Brughi
 * Author URI:  https://marcobrughi.com
 * Fork of plugin: https://github.com/aduth/wp-disable-nux/       
 * Andrew Duthie
 * Author URI:  https://andrewduthie.com
 * License:     GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

function mb_enqueue_admin_script() {
	if ( is_admin() ) {
		wp_add_inline_script(
			'wp-edit-post',
			'wp.data.select( "core/edit-post" ).isFeatureActive( "welcomeGuide" ) && wp.data.dispatch( "core/edit-post" ).toggleFeature( "welcomeGuide" );'
		);
	}
}
add_action( 'admin_enqueue_scripts', 'mb_enqueue_admin_script' );
