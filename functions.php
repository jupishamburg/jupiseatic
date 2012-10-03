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
			'id' => 'sidebar-0',
			'name' => 'Sidebar',
			'before_widget' => '<article>',
			'after_widget' => '</article>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		));
		register_sidebar(array(
			'id' => 'footer-0',
			'name' => 'Footer',
			'before_widget' => '<aside>',
			'after_widget' => '</aside>',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		));
	}
?>