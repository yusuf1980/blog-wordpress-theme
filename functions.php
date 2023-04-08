<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SoftDewindo
 * @since Soft Devindo 1.0
 */
function softdevindo_support() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	// Custom background color.
	// add_theme_support(
	// 	'custom-background',
	// 	array(
	// 		'default-color' => 'f5efe0',
	// 	)
	// );

	// Set content-width.
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 580;
	}

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	// add_theme_support( 'post-thumbnails' );

	// Set post thumbnail size.
	// set_post_thumbnail_size( 1200, 9999 );

	// Add custom image size used in Cover Template.
	// add_image_size( 'twentytwenty-fullscreen', 1980, 9999 );

	// Custom logo.
	$logo_width  = 190;
	$logo_height = 63;

	// If the retina setting is active, double the recommended width and height.
	// if ( get_theme_mod( 'retina_logo', false ) ) {
	// 	$logo_width  = floor( $logo_width * 2 );
	// 	$logo_height = floor( $logo_height * 2 );
	// }

	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			// 'flex-height' => true,
			// 'flex-width'  => true,
		)
	);

	add_image_size('soft-archieve', 115, 115, true );

	register_nav_menus( array(
			'main-menu' => esc_html__( 'Menu Utama', 'softdevindo' ),
			'category-menu' => esc_html__( 'Menu Kategori', 'softdevindo' ),
			'menu-footer' => esc_html__( 'Menu Footer', 'softdevindo' ),
			'javascript-menu' => esc_html__( 'Menu Javascript', 'softdevindo' ),
		) );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// add_theme_support( 'post-thumbnails' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
			'navigation-widgets',
		)
	);

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Twenty Twenty, use a find and replace
	 * to change 'twentytwenty' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'softdevindo' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	/*
	 * Adds starter content to highlight the theme on fresh sites.
	 * This is done conditionally to avoid loading the starter content on every
	 * page load, as it is a one-off operation only needed once in the customizer.
	 */
	// if ( is_customize_preview() ) {
	// 	require get_template_directory() . '/inc/starter-content.php';
	// 	add_theme_support( 'starter-content', twentytwenty_get_starter_content() );
	// }

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * Adds `async` and `defer` support for scripts registered or enqueued
	 * by the theme.
	 */
	// $loader = new TwentyTwenty_Script_Loader();
	// add_filter( 'script_loader_tag', array( $loader, 'filter_script_loader_tag' ), 10, 2 );

}

add_action( 'after_setup_theme', 'softdevindo_support' );

function softdevindo_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'devindo-style', get_stylesheet_uri(), array(), $theme_version );
	wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/assets/custom.css'); 
}

add_action( 'wp_enqueue_scripts', 'softdevindo_register_styles' );

function softdevindo_register_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

	if ( ( ! is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	wp_enqueue_script( 'softdevindo-js', get_template_directory_uri() . '/assets/custom.js', array(), $theme_version, true );
	wp_script_add_data( 'softdevindo-js', 'async', true );

}

add_action( 'wp_enqueue_scripts', 'softdevindo_register_scripts' );

function add_image_insert_override($sizes){
    // unset( $sizes['thumbnail']);
    unset( $sizes['medium']);
    unset( $sizes['large']);
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'add_image_insert_override' );

function softdevindo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Area Sidebar Kanan', 'softdevindo' ),
		'id'            => 'right-sidebar-1',
		'description'   => esc_html__( 'Tambah widget di sini.', 'softdevindo' ),
		'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</span></h2>',
	) );
}

add_action( 'widgets_init', 'softdevindo_widgets_init' );

require get_template_directory() . '/softdevindothemes/functions.php';
// require get_template_directory() . '/softdevindothemes/template-tags.php';
// 
add_filter( 'get_the_archive_title', function ( $title ) {
  if( is_category() ) {
     $title = single_cat_title( '', false );
  }
  if( is_tag() ) {
     $title = single_tag_title( '', false );
  }
  return $title;
});