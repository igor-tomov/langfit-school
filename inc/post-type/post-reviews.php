<?php
/**
 * Ieverly reviews post-type
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ieverly
 */

function reviews() {
	$labels = array(
		'name'               => esc_html__( 'Reviews', 'ieverly' ),
		'singular_name'      => esc_html__( 'Reviews', 'ieverly' ),
		'add_new'            => esc_html__( 'Add New', 'ieverly' ),
		'add_new_item'       => esc_html__( 'Add New case', 'ieverly' ),
		'edit_item'          => esc_html__( 'Edit case', 'ieverly' ),
		'new_item'           => esc_html__( 'New case', 'ieverly' ),
		'view_item'          => esc_html__( 'View case', 'ieverly' ),
		'search_items'       => esc_html__( 'Search case', 'ieverly' ),
		'not_found'          => esc_html__( 'No case found', 'ieverly' ),
		'not_found_in_trash' => esc_html__( 'No case found in Trash', 'ieverly' ),
		'parent_item_colon'  => '',
	);
	
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'query_var'          => true,
		'show_in_menu'       => true,
		'has_archive'        => true,
		'show_in_nav_menus'  => false,
		'capability_type'    => 'post',
		'hierarchical'       => true,
		'menu_icon'          => 'dashicons-admin-comments',
		'menu_position'      => 20,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' ),
		'taxonomies'         => array( 'reviews-tag' ),
	);
	
	register_post_type( 'reviews', $args );
}
add_action( 'init', 'reviews' );