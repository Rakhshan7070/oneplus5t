<?php
/**
 * Theme Customizer
 *
 * @package One Elementor
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function one_elementor_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'one_elementor_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'one_elementor_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'one_elementor_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function one_elementor_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function one_elementor_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function one_elementor_customize_preview_js() {
	wp_enqueue_script( 'one-elementor-customizer', get_template_directory_uri() . '/resource/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'one_elementor_customize_preview_js' );


// Load customizer required panels

// Sanitize
require trailingslashit( get_template_directory() ) . '/includes/sanitize.php'; 

add_action( 'customize_register', 'one_elementor_register_customizer_front' );
function one_elementor_register_customizer_front( $wp_customize ) {


$wp_customize->add_panel( 'one_elementor_front_option', array(
	'priority'               => 1,
	'capability'             => 'edit_theme_options',
	'title'                  => __( 'One Elementor: Theme Settings', 'one-elementor' ),
	'description'            => __( 'One Elementor theme options', 'one-elementor' ),
) );  

// Load Options
require trailingslashit( get_template_directory() ) . '/includes/one-elementor-customizer/customize-header.php';
require trailingslashit( get_template_directory() ) . '/includes/one-elementor-customizer/customize-breadcrumb.php';


}