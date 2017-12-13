<?php

require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

	// theme support
	function theme_setup(){
			add_theme_support('post-thumbnails');

			register_nav_menus( array(
		    'primary' => __('Primary Menu')
			) );
	}

	add_action('after_setup_theme','theme_setup');

	// excerpt function 

	function set_excerpt_length(){
		return 40;
	}

	add_filter('excerpt_length','set_excerpt_length');
?>