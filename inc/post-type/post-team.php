<?php

/**
 * Ieverly Theme team Post type
 *
 * @package ieverly
 */

if (!function_exists('ieverly_team')) {
	function ieverly_team()
	{
		$labels = array(
			'name' => __('Team', 'ieverly'),
			'menu_name' => __('Team', 'ieverly')
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
			'publicly_queryable' => true,
			'supports' => array('title', 'editor', 'thumbnail', 'page-attributes', 'post-formats'),
			'taxonomies' => array('team_category')
		);

		register_taxonomy(
			'team_category',
			'category',
			array(
				'hierarchical' => true,
				'show_ui' => true,
				'update_count_callback' => '_update_post_term_count',
				'query_var' => true,
				'show_in_rest' => true,
				'show_in_nav_menus'   => false,
				'publicly_queryable' => false,
				'rewrite' => array('slug' => 'teams')
			)
		);

		register_post_type('team', $args);
	}
}
add_action('init', 'ieverly_team');
