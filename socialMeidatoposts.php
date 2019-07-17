<?php
/*
Plugin Name: social media to posts
Description: pluigin make you add social media to posts to can share it
Author: assem Elshukfy
Version: 1.0
Author URI: http://assem.hostkda.com/?i=1#
*/


if(!defined('ABSPATH')){
	exit;
}

// global settings ----
$socialmedia_options = get_option('socialmedia_settings');


require_once(plugin_dir_path(__FILE__).'/includes/socialScripts.php');

require_once(plugin_dir_path(__FILE__).'/includes/socialMdia-to-content.php');

if(is_admin()){
	require_once(plugin_dir_path(__FILE__).'/includes/ft-options.php');
}

