<?php
/**
 * Plugin Name: send_email_once_the_post_published
 * Plugin URI: http://blogsfeeds.com/wp-content/plugins/ my_facebook_tags* Description: This plugin adds some Facebook Open Graph tags to our single posts.
 * Version: 1.0.0
 * Author: Art Aksenovs
 * Author URI: http://arthem.info
 * License: GPL2
 */
add_action('wp_insert_post', 'send_email_once_the_post_published', 10, 3);
function send_email_once_the_post_published($post_id, $post, $update)
	{
		$email = "hollandlive@gmail.com";
		$subject = "New Post Published";
		$message = "A new post was published, use this link to view it" . get_permalink($post->ID);
		wp_mail($email, $subject, $message);
		}
?>
