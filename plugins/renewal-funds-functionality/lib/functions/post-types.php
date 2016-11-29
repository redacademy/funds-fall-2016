<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Portfolio Company Custom Post Type
function portfolio_company_post_type() {

	$labels = array(
		'name'                  => 'Portfolio Companies',
		'singular_name'         => 'Portfolio Company',
		'menu_name'             => 'Portfolio Companies',
		'name_admin_bar'        => 'Portfolio Company',
		'archives'              => 'Portfolio Companies',
		'parent_item_colon'     => 'Parent Portfolio Company:',
		'all_items'             => 'All Portfolio Companies',
		'add_new_item'          => 'Add New Portfolio Company',
		'add_new'               => 'Add New',
		'new_item'              => 'New Portfolio Company',
		'edit_item'             => 'Edit Portfolio Company',
		'update_item'           => 'Update Portfolio Company',
		'view_item'             => 'View Portfolio Company',
		'search_items'          => 'Search Portfolio Company',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into portfolio company',
		'uploaded_to_this_item' => 'Uploaded to this portfolio company',
		'items_list'            => 'Portfolio companies list',
		'items_list_navigation' => 'Portfolio companies list navigation',
		'filter_items_list'     => 'Filter portfolio companies list',
	);
	$args = array(
		'label'                 => 'Portfolio Company',
		'description'           => 'Portfolio Companies for Renewal Funds',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-analytics',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'portfolio-company',		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'portfolio_company', $args );

}
add_action( 'init', 'portfolio_company_post_type', 0 );