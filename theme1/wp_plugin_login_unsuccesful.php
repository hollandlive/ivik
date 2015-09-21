<?php
/**
 * Plugin Name: wp_login_was_unsuccessful
 * Plugin URI: http://blogsfeeds.com/wp-content/plugins
 * Description: This plugin for security sake shows a picture if the login name was unsuccessful
 * (It doesnt show the user name itself)
 * Version: 1.0.0
 * Author: Art Aksenovs
 * Author URI: http://arthem.info
 * License: GPL2
 */
add_filter('login_errors', 'wp_login_was_unsuccessful');
function wp_login_was_unsuccessful(){
	$abc = "https://tpc.googlesyndication.com/daca_images/simgad/1265219045391557751";
	return "<img src='$abc'>" . "<br>" . "You are not Logged In man!!!";
	//return "Login unsucess";
}
?>
