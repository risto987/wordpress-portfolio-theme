<?php
/**
 * risto-theme functions and definitions
 *
 * @package risto-theme
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'risto_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function risto_theme_setup() {


	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

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
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'services', 200, 118, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'risto-theme' ),
		'secondary' => __('Secondary Menu', 'risto-theme')
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

}
endif; // risto_theme_setup
add_action( 'after_setup_theme', 'risto_theme_setup' );



/**
 * Enqueue scripts and styles.
 */
function risto_theme_scripts() {
	wp_enqueue_style( 'risto-theme-style', get_stylesheet_uri() );
	wp_enqueue_style( 'risto-theme-font', get_template_directory_uri() . '/css/font-awesome.min.css');
	
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'risto-theme-social', get_template_directory_uri() . '/js/output.min.js');
	wp_enqueue_script( 'risto-theme-smuth-scroll', get_template_directory_uri() . '/js/custom.js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'risto_theme_scripts' );
