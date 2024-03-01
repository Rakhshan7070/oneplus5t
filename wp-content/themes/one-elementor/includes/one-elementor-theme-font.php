<?php

function one_elementor_enqueue_assets() {
	// Include the file.
	require_once get_theme_file_path( '/includes/wptt-webfont-loader.php' );
	
	// Load the webfont.
	wp_enqueue_style(
		'Inter',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap' ),array(),'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'one_elementor_enqueue_assets' );