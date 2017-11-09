<?php
/**
 * Plugin Name:     Hello World
 * Plugin URI:      https://WPCouple.com
 * Description:     A basic WordPress Plugin.
 * Version:         1.0.0
 * Author:          WPCouple
 * Author URI:      https://WPCouple.com
 * Contributors:    WPCouple
 * License:         GPL-2.0+
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:     hello-world
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Display Hello World in WP Admin.
 *
 * @since 1.0.0
 */
function hello_world() {
	echo '<p>Hello World</p>';
}
add_action( 'admin_notices', 'hello_world' );
