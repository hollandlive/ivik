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
	$abc = "http://arthem.info/blog/wp-content/uploads/2015/10/w013.jpg";
	return "<img src='$abc'>" . "<br>" . "You are not Logged In man!!!";
	//return "Login unsucess";
}
?>
