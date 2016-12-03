<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Portfolio Company Custom Post Type
function register_portfolio_company_post_type() {
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
		'supports'              => array( 'title', 'thumbnail', ), //, 'editor'
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 4,
		'menu_icon'             => 'dashicons-analytics',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'portfolio-company',		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',

	);

	register_post_type( 'portfolio-company', $args );
}
add_action( 'init', 'register_portfolio_company_post_type', 0 );


// Register Story Custom Post Type
function register_story_post_type() {
	$labels = array(
		'name'                  => 'Stories',
		'singular_name'         => 'Story',
		'menu_name'             => 'Stories',
		'name_admin_bar'        => 'Story',
		'archives'              => 'Stories',
		'parent_item_colon'     => 'Parent Story:',
		'all_items'             => 'All Stories',
		'add_new_item'          => 'Add New Story',
		'add_new'               => 'Add New',
		'new_item'              => 'New Story',
		'edit_item'             => 'Edit Story',
		'update_item'           => 'Update Story',
		'view_item'             => 'View Story',
		'search_items'          => 'Search Story',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into story',
		'uploaded_to_this_item' => 'Uploaded to this story',
		'items_list'            => 'Stories list',
		'items_list_navigation' => 'Stories list navigation',
		'filter_items_list'     => 'Filter story list',
	);
	$args = array(
		'label'                 => 'Story',
		'description'           => 'Stories for Renewal Funds',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 4,
		'menu_icon'             => 'dashicons-book',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'story',		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);

	register_post_type( 'story', $args );
}
add_action( 'init', 'register_story_post_type', 0 );


// Register Questionnaire Post Type
function register_questionnaire_post_type() {
	$labels = array(
		'name'                  => 'Questionnaires',
		'singular_name'         => 'Questionnaire',
		'menu_name'             => 'Questionnaires',
		'name_admin_bar'        => 'Questionnaire',
		'archives'              => 'Questionnaires',
		'parent_item_colon'     => 'Parent Questionnaire:',
		'all_items'             => 'All Questionnaires',
		'add_new_item'          => 'Add New Questionnaire',
		'add_new'               => 'Add New',
		'new_item'              => 'New Questionnaire',
		'edit_item'             => 'Edit Questionnaire',
		'update_item'           => 'Update Questionnaire',
		'view_item'             => 'View Questionnaire',
		'search_items'          => 'Search Questionnaire',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into questionnaire',
		'uploaded_to_this_item' => 'Uploaded to this questionnaire',
		'items_list'            => 'Questionnaires list',
		'items_list_navigation' => 'Questionnaires list navigation',
		'filter_items_list'     => 'Filter questionnaires list',
	);
	$args = array(
		'label'                 => 'Questionnaire',
		'description'           => 'Questionnaires that portfolio companies use',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-write-blog',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => false,
		'has_archive'           => 'questionnaire',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);

	register_post_type( 'questionnaire', $args );
}
add_action( 'init', 'register_questionnaire_post_type', 0 );