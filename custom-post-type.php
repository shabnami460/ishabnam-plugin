<?php

	/*
		Plugin name: ishabnam Plugin
		Plugin URI: https://phoenix.sheridanc.on.ca/~ccit3689/
		Description: Plugin to add shortcodes, a widget and a custom post type to profile
		Author: Israt Shabnam
		Author URI: https://phoenix.sheridanc.on.ca/~ccit3689/
		Version: 1.0
	*/
	
//enqueue style.css file for plugin
	
	function my_plugin_styles(){
		wp_enqueue_style('plugin-style', plugins_url('/style.css', __FILE__));
	}
	add_action( 'wp_enqueue_scripts', 'my_plugin_styles' );
	
	
	function ishabnam_register_post_type(){	
		
		$singular = 'Portfolio';
		
		$labels = array(
			'name'			=> 'Portfolio',
			'add_name'		=> 'Add New',
			'add_new_item'	=> 'Add new experience to your ' . $singular,
			'edit'			=> 'Edit',
			'edit_item'		=> 'Edit ' . $singular,
			'new_item'		=> 'New ' . $singular,
			'view'			=> 'View ' . $singular,
			'view_item'		=> 'View ' . $singular,
			'search_term'	=> 'Search ' . $singular,
			'parent'		=> 'Parent ' . $singular,
			'not-found'		=> 'No Matching Experience Found'
	
		);
	
		$args = array(
			'labels'				=> $labels,
			'public'				=> true,
			'publicly_queryable'	=> true,
			'exclude_from_search' 	=> false,
			'show_in_nav_menus'		=> true,
			'show_ui'				=> true,
			'show_in_menu'			=> true,
			'show_in_admin_bar'		=> true,
			'menu_position'			=> 6,
			'can_export'			=> true,
			'capability_type'		=> 'post',
			'has_archive'			=> true,
			'hierarchical'			=> false,
			'supports' => array(
				'title',
				'editor',
				'author',
				'category',
				'thumbnail',
			)
		); 	

		register_post_type( 'portfolio', $args);
	}
	add_action( 'init', 'ishabnam_register_post_type' );


?>