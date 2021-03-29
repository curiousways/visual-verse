<?php
/**
 * Juxprose Visual Verse functions and definitions
 *
 * @package Juxprose Visual Verse
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'jxp_visual_verse_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function jxp_visual_verse_setup() {

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in three locations.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'jxp_visual_verse' ),
		'secondary' => __( 'Secondary Menu', 'jxp_visual_verse' ),
		'social' => __( 'Social Menu', 'jxp_visual_verse' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

}
endif; // jxp_visual_verse_setup
add_action( 'after_setup_theme', 'jxp_visual_verse_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function jxp_visual_verse_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'jxp_visual_verse' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}

// Footer 1
register_sidebar( array(
	'name'          => __( 'Footer Primary', 'positive_wp' ),
	'id'            => 'footer-1',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
) );

add_action( 'widgets_init', 'jxp_visual_verse_widgets_init' );

// enqueue bootstrap

function register_bootstrap_style() {
    wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' );
}
add_action( 'wp_enqueue_scripts', 'register_bootstrap_style' );


/**
 * Enqueue scripts and styles
 */
function jxp_visual_verse_scripts() {

	// Primary styles
  wp_register_style( 'jxp_visual_verse-style', get_template_directory_uri() . '/assets/css/global.css', array(),'20120208','all' );
  wp_enqueue_style( 'jxp_visual_verse-style' );

	// Global javascript
  wp_enqueue_script( 'jxp_visual_verse-global-js', get_template_directory_uri() . '/assets/js/global-ck.js', array('jquery'), '20120200', true );

	// Modernizer
	wp_enqueue_script( 'jxp_visual_verse-moderizer', get_template_directory_uri() . '/assets/js/modernizr.js', array(), '20120200', true );

	// Typekit
	//wp_enqueue_script( 'jxp_visual_verse-typekit', '//use.typekit.net/pny8zkw.js', array(), '20120201', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'jxp_visual_verse_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Subpage function
 */

function is_subpage() {
  global $post;                              // load details about this page

  if ( is_page() && $post->post_parent ) {   // test to see if the page has a parent
      return $post->post_parent;             // return the ID of the parent post

  } else {                                   // there is no parent so ...
      return false;                          // ... the answer to the question is false
  }
}




/* Gravity Forms Word Count Script 
http://www.position-relative.com/2013/web-design-and-development/adding-maximum-word-count-in-gravity-forms/ 
*/
function els_load_scripts() {
	wp_enqueue_script('gravity-forms-word-count', get_stylesheet_directory_uri() . '/js/jquery.gravity_word_count.js', array('jquery'), '0.1', true);
}    
add_action('wp_enqueue_scripts', 'els_load_scripts');


// functions run on activation –> important flush to clear rewrites
if ( is_admin() && isset($_GET['activated'] ) && $pagenow == ‘themes.php’ ) {
$wp_rewrite->flush_rules();
}



// Excerpt length

function mytheme_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );