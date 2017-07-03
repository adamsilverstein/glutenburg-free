<?php
namespace glutenburg_free;

/**
 * Plugin Name: Glutenberg Free
 * Plugin URI: http://wordpress.org/plugins/glutenburg-free/
 * Description: Restore the legacy WordPress post editing experience as the default, instead of the new Gutenberg editor.
 * Author: adamsilverstein.
 * Version: 1.0.1
 * Author URI: http://wordpress.org/
 */



/**
* Restore the legacy WordPress post editing experience.
*/
function restore_legacy_editing() {
	add_menu_page(
		__( 'New Legacy Post', 'glutenburg-free' ),
		__( 'New Legacy Post', 'glutenburg-free' ),
		'edit_posts',
		'post-new.php',
		'',
		'dashicons-admin-post',
		6
	);

}

add_filter( 'admin_menu', '\glutenburg_free\restore_legacy_editing', 10, 3 );
