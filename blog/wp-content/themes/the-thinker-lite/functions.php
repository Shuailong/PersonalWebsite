<?php
/**
 * thinker functions and definitions
 *
 * @package Thinker
 */
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 938; /* pixels */
/**
 * Adjusts content_width value for full-width page and grid page.
 */
function thinker_content_width() {
	global $content_width;
	if ( is_page_template( 'page-templates/full-width-page.php' )
	|| is_page_template( 'page-templates/front-page.php' )
	|| is_page_template( 'page-templates/portfolio-page.php' )
	|| ( is_singular() && 'jetpack-portfolio' == get_post_type() )
	|| is_page_template( 'page-templates/grid-page.php' ))
		$content_width = 1470;
}
add_action( 'template_redirect', 'thinker_content_width' );

if ( ! function_exists( 'thinker_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function thinker_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on test, use a find and replace
	 * to change 'test' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'thinker', get_template_directory() . '/languages' );
	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	/**
	 * Enable support for Post Thumbnails on posts and pages
	 */
	add_theme_support( 'post-thumbnails' );
	// This theme allows users to set a custom background
	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'test_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'thinker' ),
		'social' => __( 'Social', 'thinker' ),
	) );
	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'gallery' ) );
}
endif; // thinker_setup
add_action( 'after_setup_theme', 'thinker_setup' );
/**
 * Register widgetized area and update sidebar with default widgets
 */
function thinker_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'thinker' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area', 'thinker' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'thinker_widgets_init' );
/**
 * Count the number of widgets and create a class name.
 */
function thinker_widget_counter( $sidebar_id ) {
	$the_sidebars = wp_get_sidebars_widgets();
	if ( ! isset( $the_sidebars[$sidebar_id] ) )
		$count = 0;
	else
		$count = count( $the_sidebars[$sidebar_id] );
	switch ( $count ) {
		case '1':
			$class = 'one-widget';
			break;
		case '2':
			$class = 'two-widgets';
			break;
		case '3':
			$class = 'three-widgets';
			break;
		default :
			$class = 'more-than-three-widgets';
	}
	echo $class;
}
/**
 * Register Libre Baskerville font for thinker.
 *
 * @return string
 */
function thinker_libre_display_font_url() {
	$libre_display_font_url = '';
	/* translators: If there are characters in your language that are not supported
	 * by Libre Baskerville, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Libre Baskerville font: on or off', 'thinker' ) ) {
		$subsets = 'latin,latin-ext';
		/* translators: To add an additional Libre Baskerville character subset specific to your language, translate this to 'cyrillic'. Do not translate into your own language. */
		$subset = _x( 'no-subset', 'Libre Baskerville font: add new subset (cyrillic)', 'thinker' );
		if ( 'cyrillic' == $subset ) {
			$subsets .= ',cyrillic-ext,cyrillic';
		}
		$query_args = array(
			'family' => urlencode( 'Libre Baskerville:400,700,400italic,700italic' ),
			'subset' => urlencode( $subsets ),
		);
		$libre_display_font_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
	}
	return $libre_display_font_url;
}
/**
 * Enqueue scripts and styles
 */
function thinker_scripts() {
	wp_enqueue_style( 'thinker-style', get_stylesheet_uri() );
	wp_enqueue_script( 'thinker-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'thinker-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	if ( is_singular() && wp_attachment_is_image() )
		wp_enqueue_script( 'thinker-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
}
add_action( 'wp_enqueue_scripts', 'thinker_scripts' );
/**
 * Enqueue Google fonts style to admin screen for custom header display.
 *
 * @return void
 */
function thinker_admin_fonts() {
	wp_enqueue_style( 'thinker-libre-display', thinker_libre_display_font_url(), array(), null );
}
add_action( 'admin_print_scripts-appearance_page_custom-header', 'thinker_admin_fonts' );
/**
 * Appends post title to Aside and Quote posts
 *
 * @param string $content
 * @return string
 */
function thinker_conditional_title( $content ) {
	if ( has_post_format( 'aside' ) || has_post_format( 'quote' ) ) {
		if ( ! is_singular() )
			$content .= the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>', false );
		else
			$content .= the_title( '<h1 class="entry-title">', '</h1>', false );
	}
	return $content;
}
add_filter( 'the_content', 'thinker_conditional_title', 0 );
/**
 * Returns a "Read More" link for excerpts
 *
 */
function thinker_read_more_link() {
	return ' <a href="'. esc_url( get_permalink() ) . '" class="excerpt-link">' . __( 'Read More', 'thinker' ) . '</a>';
}
/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and thinker_read_more_link().
 */
function thinker_auto_excerpt_more( $more ) {
	return ' &hellip;' . thinker_read_more_link();
}
add_filter( 'excerpt_more', 'thinker_auto_excerpt_more' );
/**
 * Implement the Custom Header feature
 */
require( get_template_directory() . '/inc/custom-header.php' );
/**
 * Custom template tags for this theme.
 */
require( get_template_directory() . '/inc/template-tags.php' );
/**
 * Custom functions that act independently of the theme templates
 */
require( get_template_directory() . '/inc/extras.php' );
/**
 * Customizer additions
 */
require( get_template_directory() . '/inc/customizer.php' );
/**
 * Load Jetpack compatibility file.
 */
require( get_template_directory() . '/inc/jetpack.php' );