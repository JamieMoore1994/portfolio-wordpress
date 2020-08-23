<?php
if ( ! function_exists( 'portfolio_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function portfolio_setup() {

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */

	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	// register_nav_menus( array(
	// 	'primary' => esc_html__( 'Primary', 'sequence' ),
	// 	'primary-services' => esc_html__( 'Primary Services', 'sequence' ),
	// 	'primary-other-links' => esc_html__( 'Primary Other Links', 'sequence' ),
	// 	'footer-minor'=>esc_html__( 'Footer Menu Minor', 'kairos' )
	// ) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
}
endif;
add_action( 'after_setup_theme', 'portfolio_setup' );

// Load in required styles and socialchain_scripts
function portfolio_scripts() {

	wp_enqueue_style('portfolio-style', get_template_directory_uri() . '/dest/main.css' );

	wp_enqueue_script('portfolio-scripts', get_template_directory_uri() . '/dest/all.js', array(), false, true );

}
add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );

// Post types
include 'inc/post-types/blogs.php';
include 'inc/post-types/portfolio.php';

// Post fields

// Shortcodes
include 'inc/shortcodes/blog-intro.php';
include 'inc/shortcodes/blog-container.php';
include 'inc/shortcodes/blog-single-figure.php';
include 'inc/shortcodes/blog-text-blocks.php';
include 'inc/shortcodes/blog-text-block-with-title.php';
include 'inc/shortcodes/blog-text-block-with-figure.php';

