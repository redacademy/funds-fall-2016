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
    // portfolio-company to story
    p2p_register_connection_type( array(
        'name' => 'portfolio_company_to_story',
        'from' => 'portfolio-company',
        'to' => 'story',
		'admin_dropdown' => 'any'
    ) );

    // portfolio-company to questionnaire
    p2p_register_connection_type( array(
        'name' => 'portfolio_company_to_questionnaire',
        'from' => 'portfolio-company',
        'to' => 'questionnaire',
		'admin_dropdown' => 'any'
    ) );

    // portfolio-company to pc_user
    p2p_register_connection_type( array(
        'name' => 'portfolio_to_user', //
        'from' => 'portfolio-company',
        'to' => 'user',
        'to_query_vars' => array( 'role' => 'pc_user' ),
        'admin_dropdown' => 'any'
    ) );

    // story to pc_user
    p2p_register_connection_type( array(
        'name' => 'story_to_user',
        'from' => 'story',
        'to' => 'user',
        'to_query_vars' => array( 'role' => 'pc_user' ),
        'admin_dropdown' => 'any'
    ) );

    // questionnaire to pc_user
    p2p_register_connection_type( array(
        'name' => 'questionnaire_to_user',
        'from' => 'questionnaire',
        'to' => 'user',
        'to_query_vars' => array( 'role' => 'pc_user' ),
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


/*
 *
 * Removes front end admin bar
 *
 */
function red_starter_remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'red_starter_remove_admin_bar');

/*
*
* Adds logout functionality to header
*
*/
function add_login_logout_link($items, $args) {         
    ob_start();         
    wp_loginout('index.php');         
    $loginoutlink = ob_get_contents();         
    ob_end_clean();         
    $items .= '<li>'. $loginoutlink .'</li>';     
    return $items; 
}
add_filter('wp_nav_menu_items', 'add_login_logout_link', 10, 2);




