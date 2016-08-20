<?php

	/*
		Plugin name: ishabnam Plugin
		Plugin URI: https://phoenix.sheridanc.on.ca/~ccit3689/
		Description: Plugin to add shortcodes to profile
		Author: Israt Shabnam
		Author URI: https://phoenix.sheridanc.on.ca/~ccit3689/
		Version: 1.0
	*/
	
//enqueue style.css file for plugin
	
	function my_plugin_styles(){
		wp_enqueue_style('plugin-style', plugins_url('/style.css', __FILE__));
	}
	add_action( 'wp_enqueue_scripts', 'my_plugin_styles' );
	


?>