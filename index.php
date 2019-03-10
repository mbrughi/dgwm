<?php

/**
 * Plugin Name: Disable NUX
 * Plugin URI:  https://github.com/aduth/wp-disable-nux/
 * Description: Disables "New User Experience" guides.
 * Version:     1.0.0
 * Author:      Andrew Duthie
 * Author URI:  https://andrewduthie.com
 * License:     GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

function dn_enqueue_scripts() {
	wp_add_inline_script( 'wp-nux', 'wp.data.dispatch( "core/nux" ).disableTips();' );
}
add_action( 'admin_enqueue_scripts', 'dn_enqueue_scripts' );
