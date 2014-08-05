<?php
/**
 * Cartridge Lit functions and definitions
 *
 * @package Cartridge Lit
 */

add_theme_support( 'post-thumbnails' );

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
  $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
  return $html;
}

function cartridge_loop( $num, $categories ) {
  echo $num;
  echo $categories;

  $theposts = get_posts( $args );

  foreach( $theposts as $post) :
    setup_postdata($post);

  endforeach;
  wp_reset_postdata();
}

function add_body_class( $classes )
{
  global $post;
    if ( isset( $post ) ) {
      $classes[] = $post->post_type . '-' . $post->post_name;
    }
  return $classes;
}
add_filter( 'body_class', 'add_body_class' );

function add_post_class( $classes )
{
  global $post;
    if ( isset( $post ) ) {
      $classes[] = $post->post_type . '-' . $post->post_name;
    }
  return $classes;
}
add_filter( 'post_class', 'add_post_class' );

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'cartridge_lit_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cartridge_lit_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Cartridge Lit, use a find and replace
	 * to change 'cartridge-lit' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'cartridge-lit', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'cartridge-lit' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'cartridge_lit_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );
}
endif; // cartridge_lit_setup
add_action( 'after_setup_theme', 'cartridge_lit_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function cartridge_lit_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'cartridge-lit' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'cartridge_lit_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cartridge_lit_scripts() {
	wp_enqueue_style( 'cartridge-lit-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'cartridge_lit_scripts' );
