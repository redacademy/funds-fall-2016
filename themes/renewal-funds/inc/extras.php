<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function rf_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'rf_body_classes' );


/*
 *
 * Removes front end admin bar
 *
 */
function rf_remove_admin_bar() {
    if ( (!current_user_can('administrator') && !is_admin()) || (!current_user_can('rf_user') && !is_admin()) ) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'rf_remove_admin_bar');


/*
*
* Adds logout functionality to header
*
*/
function rf_add_login_logout_link($items, $args) {         
    ob_start(); 
    wp_loginout('index.php');         
    $loginoutlink = ob_get_contents(); 
    ob_end_clean();
    $items .= '<li class="logout"><img src="' . get_template_directory_uri() . '/assets/icons/svg/logout_icon.svg" />' . $loginoutlink . '</li>';
    return $items;
}
add_filter('wp_nav_menu_items', 'rf_add_login_logout_link', 10, 2);


/*
*
* Add post-to-post user to a posted story
*
*/
function rf_add_user_id_to_story_post( $entry  ) {
    $post = get_post( $entry['post_id'] );
    $user = wp_get_current_user(); 

    p2p_type( 'story_to_user' )->connect( $post->ID, $user->ID, array('date' => current_time('mysql')) );
}
add_action( 'gform_after_submission_3', 'rf_add_user_id_to_story_post', 10, 2 );


/*
*
* Fixes redirect error for acf form submit
*
*/
function rf_form_head(){
     acf_form_head();
}
add_action( 'init', 'rf_form_head' );


/*
*
* Function to remove “Category:”, “Tag:”, “Author:”, “Archives:” and “Other taxonomy name:” in the archive title
*
*/
function rf_theme_archive_title( $title ) {
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
add_filter( 'get_the_archive_title', 'rf_theme_archive_title' );


/*
*
* Styling the login page
*
*/
function rf_custom_login() { ?>
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
add_action('login_enqueue_scripts','rf_custom_login');


/*
*
*
*
*/
function rf_login_logo() { ?>

    <?php
	    wp_enqueue_style( 'login_styles', get_template_directory_uri() . '/assets/css/login-page.css' );
    ?>

<?php }
add_action( 'login_enqueue_scripts', 'rf_login_logo' );

/*
*
*
*
*/
function rf_login_function() {
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
add_action( 'login_head', 'rf_login_function' );



// Replaces a custom URL placeholder with the URL to the latest post
function replace_placeholder_nav_menu_item_with_latest_post( $items, $menu, $args ) {
 
    // Loop through the menu items looking for placeholder(s)
    foreach ( $items as $item ) {
 
        // Is this the placeholder we're looking for?
        if ( '#latestquestionnaire' != $item->url )
            continue;
 
        // Get the latest post
        //$latestpost = get_posts( array(
            //'numberposts' => 1,
        //) );

        $user = wp_get_current_user(); 
        $latest_questionnaire = new WP_Query( array(
                                        'connected_type' => 'questionnaire_to_user',
                                        'connected_items' => $user->ID,
                                        'suppress_filters' => false,
                                        'nopaging' => true,
                                        'posts_per_page' => 1,
                                        ) );
 
        if ( empty( $latest_questionnaire ) )
            continue;
 
        // Replace the placeholder with the real URL
        $item->url = get_permalink( $latest_questionnaire->post->ID );
    }
 
    // Return the modified (or maybe unmodified) menu items array
    return $items;
}
add_filter( 'wp_get_nav_menu_items', 'replace_placeholder_nav_menu_item_with_latest_post', 10, 3 );