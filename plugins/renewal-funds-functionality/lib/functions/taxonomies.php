<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Register Portfolio Company Taxonomy
function register_portfolio_company_year_taxonomy() {

	$labels = array(
		'name'                       => 'Portfolio Company Years',
		'singular_name'              => 'Portfolio Company Year',
		'menu_name'                  => 'Portfolio Company Years',
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
	register_taxonomy( 'portfolio_company_year', array( 'portfolio_company' ), $args );

}
add_action( 'init', 'register_portfolio_company_year_taxonomy', 0 );
