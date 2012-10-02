<?php
	// Register the menus
	add_action('init', 'register_menus');

	function register_menus() {
		register_nav_menus(
			array(
				'primary' => __('Primary Menu'),
			)
		);
	}

	// Sidebar
	if (function_exists('register_sidebar')) {
		register_sidebar(array(
			'before_widget' => '<article>',
			'after_widget' => '</article>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));
	}
?>