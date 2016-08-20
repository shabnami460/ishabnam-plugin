<?php
	
	class ishabnam_portfolio_post extends WP_Widget{
		function __construct{
			parent::__construct(false, $name = __('Portfolio Posts'));
		}
		function form(){
		
		}
		function update(){
		
		
		}
		function widget($args, $instace){
		
		
		}
	
	}

add_action( 'widgets_init' , function(){
			register_widget('portfolio_posts');
		});
	


?>
