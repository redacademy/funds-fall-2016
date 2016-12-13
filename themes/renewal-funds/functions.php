<?php
/**
 * RF Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

if ( ! function_exists( 'rf_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function rf_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // rf_setup
add_action( 'after_setup_theme', 'rf_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function rf_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rf_content_width', 640 );
}
add_action( 'after_setup_theme', 'rf_content_width', 0 );


/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function rf_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'rf_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function rf_scripts() {
	// css
	wp_enqueue_style( 'font-awesomxe-style', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'renewal-funds-style', get_stylesheet_uri() );
	// wp_enqueue_style('flickity', '//unpkg.com/flickity@2/dist/flickity.min.css');

	// js
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'renewal-funds-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );
	wp_enqueue_script( 'renewal-funds-js', get_template_directory_uri() . '/build/js/renewal-funds.min.js', array(), '20130115', true );
 	// wp_enqueue_script('flickity', '//unpkg.com/flickity@2/dist/flickity.pkgd.min.js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rf_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/hide-default-posts.php';