<?php

function social_mediaadd() {
	wp_enqueue_style('s-f-styles',plugins_url().'/social media to posts/fonts/style-font.css');
	wp_enqueue_style('s-m-styles',plugins_url().'/social media to posts/css/smstyle.css');
	wp_enqueue_script( 's-m-mainjs', plugins_url() . '/social media to posts/js/smain.js', array(), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'social_mediaadd' );