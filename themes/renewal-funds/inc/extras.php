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
    /*p2p_register_connection_type( array(
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
    ) );*/

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
function red_starter_add_login_logout_link($items, $args) {         
    ob_start();         
    wp_loginout('index.php');         
    $loginoutlink = ob_get_contents();     
    ob_end_clean();         
    $items .= '<li><img src="<?php echo get_template_directory_uri() ?>/assets/icons/svg/logout_icon.svg" />'. $loginoutlink .'</li>';     
    return $items; 
}
add_filter('wp_nav_menu_items', 'red_starter_add_login_logout_link', 10, 2);


/*
*
* Add post-to-post user to a posted story
*
*/
function red_starter_add_user_id_to_story_post( $entry  ) {
    $post = get_post( $entry['post_id'] );
    $user = wp_get_current_user(); 

    p2p_type( 'story_to_user' )->connect( $post->ID, $user->ID, array('date' => current_time('mysql')) );
}
add_action( 'gform_after_submission_3', 'red_starter_add_user_id_to_story_post', 10, 2 );


/*
*
* Fixes redirect error for acf form submit
*
*/

// function red_starter_form_head(){
//     acf_form_head();
// }
// add_action( 'init', 'red_starter_form_head' );


/*
*
* Function to remove “Category:”, “Tag:”, “Author:”, “Archives:” and “Other taxonomy name:” in the archive title
*
*/
function red_starter_theme_archive_title( $title ) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	} elseif ( is_tax() ) {
		$title = single_term_title( '', false );
	}

	return $title;
}
add_filter( 'get_the_archive_title', 'red_starter_theme_archive_title' );

// Styling the Login page

function custom_login() { ?>
    <section class="login-page-wrapper">
        <div class="login-image-wrapper">

            <div class="login-image">
                <div class="login-title">
                    <p>Investing For Change</p>
                </div>
            </div>

        </div>
    </section>
<?php }
add_action('login_enqueue_scripts','custom_login');

function my_login_logo() { ?>

   <?php
	wp_enqueue_style( 'login_styles', get_template_directory_uri(). '../login/login-page.css' );
    ?>

<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


function login_function() {
    add_filter( 'gettext', 'username_change', 20, 3 );
    function username_change( $translated_text, $text, $domain ) 
    {
        if ($text === 'Username or Email Address') 
        {
            $translated_text = 'Email Address';
        }
        return $translated_text;
    }
}
add_action( 'login_head', 'login_function' );
