<?php

/**
 * Ieverly Theme news Post type
 *
 * @package ieverly
 */

if (!function_exists('ieverly_news')) {
	function ieverly_news()
	{
		$labels = array(
			'name' => __('News', 'ieverly'),
			'menu_name' => __('News', 'ieverly')
		);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'show_ui' => true,
			'has_archive' => false,
			'menu_icon'   => 'dashicons-portfolio',
			'show_in_nav_menus'   => true,
			'hierarchical' => true,
			'show_in_rest' => true,
			'menu_position' => 20,
			'publicly_queryable' => false,
			'supports' => array('title', 'editor', 'thumbnail', 'page-attributes', 'post-formats'),
		);

		register_post_type('news', $args);
	}
}
add_action('init', 'ieverly_news');
