<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Thinker
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function thinker_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
	add_theme_support( 'jetpack-responsive-videos' );
}
add_action( 'after_setup_theme', 'thinker_jetpack_setup' );
/**
 * Do we have footer widgets? Or is it viewed from iPad or mobile?
 * If so let's switch to the "click to load" type IS
 *
 * @return bool
 */
function thinker_has_footer_widgets( $has_widgets ) {
	if ( Jetpack_User_Agent_Info::is_ipad() || ( function_exists( 'jetpack_is_mobile' ) && jetpack_is_mobile() ) || is_active_sidebar( 'sidebar-2' ) )
		return true;
	return $has_widgets;
}
add_filter( 'infinite_scroll_has_footer_widgets', 'thinker_has_footer_widgets' );