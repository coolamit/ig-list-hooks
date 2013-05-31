<?php
/*
Plugin Name: iG:List Hooks
Description: This plugin lists all the hooks fired (after this plugin is loaded)
Version: 1.0
Author: Amit Gupta
Author URI: http://blog.igeek.info/
License: GPL v2
*/

if( ! isset( $GLOBALS['igeek-list-hooks'] ) || ! is_array( $GLOBALS['igeek-list-hooks'] ) ) {
	$GLOBALS['igeek-list-hooks'] = array();
}

add_action( 'all', function(){
	$GLOBALS['igeek-list-hooks'][] = current_filter();
}, 1 );

function ig_list_hooks() {
	echo '<!--' . "\n";
	echo 'iGeek List Hooks:' . "\n\n";
	for( $i = 0; $i < count( $GLOBALS['igeek-list-hooks'] ); $i++ ) {
		echo $GLOBALS['igeek-list-hooks'][ $i ] . "\n";
	}
	echo '-->' . "\n";
}

add_action( 'admin_footer', 'ig_list_hooks', 9999 );
add_action( 'wp_footer', 'ig_list_hooks', 9999 );

//EOF
