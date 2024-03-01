<?php

function ezelianEnqueueStylesheets() {
    $stylesheet_url = get_template_directory_uri() . '/style.css';
    wp_enqueue_style(
        'ezelian-custom-styles',
        $stylesheet_url, 
        array(), 
        filemtime(get_template_directory() . '/style.css')
    );
}

add_action('wp_enqueue_scripts', 'ezelianEnqueueStylesheets');

function ezelianEnqueueEditorStyles() {
    add_editor_style('style.css');
    remove_theme_support( 'core-block-patterns' );
    
}

add_action('after_setup_theme', 'ezelianEnqueueEditorStyles');

function ezelianAddPatternCategories() {

	$block_pattern_categories = array(
		'ezelian/hero'           => array(
			'label' => __( 'Hero', 'ezelian' ),
        ),
		'ezelian/about'           => array(
			'label' => __( 'About', 'ezelian' ),
        ),
		'ezelian/pricing'           => array(
			'label' => __( 'Pricing', 'ezelian' ),
        ),
		'ezelian/testimonials'           => array(
			'label' => __( 'Testimonials', 'ezelian' ),
        ),
		'ezelian/blog'           => array(
			'label' => __( 'Blog', 'ezelian' ),
        ),
		'ezelian/services'           => array(
			'label' => __( 'Services', 'ezelian' ),
		),
		'ezelian/cta'           => array(
			'label' => __( 'Call to Action', 'ezelian' ),
		)
	);

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', 'ezelianAddPatternCategories', 9 );
