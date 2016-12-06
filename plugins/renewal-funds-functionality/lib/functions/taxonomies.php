<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Register Portfolio Company Taxonomy
function register_portfolio_company_year_taxonomy() {

	$labels = array(
		'name'                       => 'Portfolio Company Year',
		'singular_name'              => 'Portfolio Company Year',
		'menu_name'                  => 'Portfolio Company Year',
		'all_items'                  => 'All Portfolio Company Years',
		'parent_item'                => 'Parent Portfolio Company Year',
		'parent_item_colon'          => 'Parent Portfolio Company Year:',
		'new_item_name'              => 'New Portfolio Company Year',
		'add_new_item'               => 'Add Portfolio Company Year',
		'edit_item'                  => 'Edit Portfolio Company Year',
		'update_item'                => 'Update Portfolio Company Year',
		'view_item'                  => 'View Portfolio Company Year',
		'separate_items_with_commas' => 'Separate product types with commas',
		'add_or_remove_items'        => 'Add or remove portfolio company years',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Portfolio Company Years',
		'search_items'               => 'Search Portfolio Company Years',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Portfolio Company Years',
		'items_list'                 => 'Portfolio company year list',
		'items_list_navigation'      => 'Portfolio company years list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'portfolio-company-year', array( 'portfolio-company', 'story', 'questionnaire' ), $args );

}
add_action( 'init', 'register_portfolio_company_year_taxonomy', 0 );


// Register Story Year Taxonomy
/*function register_story_year_taxonomy() {

	$labels = array(
		'name'                       => 'Story Year',
		'singular_name'              => 'Story Year',
		'menu_name'                  => 'Story Years',
		'all_items'                  => 'All Story Years',
		'parent_item'                => 'Parent Story Year',
		'parent_item_colon'          => 'Parent Story Year:',
		'new_item_name'              => 'New Story Year',
		'add_new_item'               => 'Add Story Year',
		'edit_item'                  => 'Edit Story Year',
		'update_item'                => 'Update Story Year',
		'view_item'                  => 'View Story Year',
		'separate_items_with_commas' => 'Separate story years with commas',
		'add_or_remove_items'        => 'Add or remove story years',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Story Years',
		'search_items'               => 'Search Story Years',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Story Years',
		'items_list'                 => 'Story year list',
		'items_list_navigation'      => 'Story year list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'story-year', array( 'story' ), $args );

}
add_action( 'init', 'register_story_year_taxonomy', 0 );


// Register Questionnaire Taxonomy
function register_questionnaire_year_taxonomy() {

	$labels = array(
		'name'                       => 'Questionnaire Year',
		'singular_name'              => 'Questionnaire Year',
		'menu_name'                  => 'Questionnaire Year',
		'all_items'                  => 'All Questionnaire Years',
		'parent_item'                => 'Parent Questionnaire Year',
		'parent_item_colon'          => 'Parent Questionnaire Year:',
		'new_item_name'              => 'New Questionnaire Year',
		'add_new_item'               => 'Add Questionnaire Year',
		'edit_item'                  => 'Edit Questionnaire Year',
		'update_item'                => 'Update Questionnaire Year',
		'view_item'                  => 'View Questionnaire Year',
		'separate_items_with_commas' => 'Separate questionnaires with commas',
		'add_or_remove_items'        => 'Add or remove questionnaire years',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Questionnaire Years',
		'search_items'               => 'Search Questionnaire Years',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Questionnaire Years',
		'items_list'                 => 'Questionnaire year list',
		'items_list_navigation'      => 'Questionnaire years list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'questionnaire-year', array( 'questionnaire' ), $args );

}
add_action( 'init', 'register_questionnaire_year_taxonomy', 0 );*/