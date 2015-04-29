<?php
/**
 * Thinker Theme Customizer
 *
 * @package Thinker
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function thinker_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
/**
 * Adds the individual sections for custom logo
 */
   $wp_customize->add_section( 'thinker_logo_section' , array(
    'title'       => __( 'Logo', 'thinker' ),
    'priority'    => 30,
    'description' => __( 'Upload a logo to replace the default site name and description in the header', 'thinker' )
) );
$wp_customize->add_setting( 'thinker_logo', array(
	'sanitize_callback' => 'esc_url_raw',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'thinker_logo', array(
    'label'    => __( 'Logo', 'thinker' ),
    'section'  => 'thinker_logo_section',
    'settings' => 'thinker_logo',
) ) );
}
add_action( 'customize_register', 'thinker_customize_register' );
/**
 * Sanitization
 */
//Checkboxes
function thinker_sanitize_checkbox( $input ) {
	if ( $input == 1 ) {
		return 1;
	} else {
		return '';
	}
}
//Integers
function thinker_sanitize_int( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}
//Text
function thinker_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}
//No sanitize - empty function for options that do not require sanitization -> to bypass the Theme Check plugin
function thinker_no_sanitize( $input ) {
}
/**
 * Sanitize the dropdown pages.
 *
 * @param interger $input.
 * @return interger.
 */
function thinker_sanitize_dropdown_pages( $input ) {
	if ( is_numeric( $input ) ) {
		return intval( $input );
	}
}