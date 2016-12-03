<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );


/*
 *
 * Adds relational connection between posts and pages
 *
 */
function red_starter_connection_types() {
    p2p_register_connection_type( array(
        'name' => 'portfolio-company_to_story',
        'from' => 'portfolio-company',
        'to' => 'story',
		'admin_dropdown' => 'any'
    ) );

    p2p_register_connection_type( array(
        'name' => 'portfolio-company_to_questionnaire',
        'from' => 'portfolio-company',
        'to' => 'questionnaire',
		'admin_dropdown' => 'any'
    ) );

    p2p_register_connection_type( array(
        'name' => 'post_to_user',
        'from' => 'post',
        'to' => 'user',
        //'to_query_vars' => array( 'role' => 'administrator' ),
        'admin_dropdown' => 'any'
    ) );
}
add_action( 'p2p_init', 'red_starter_connection_types' );


/*function blockusers_init() {
if ( is_admin() && !current_user_can( 'administrator' ) &&! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
    wp_redirect( home_url() );
    exit;
    }
}
add_action( 'init', 'blockusers_init' );*/

function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'remove_admin_bar');