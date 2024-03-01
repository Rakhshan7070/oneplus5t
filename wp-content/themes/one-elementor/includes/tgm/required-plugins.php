<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme one elementor for publication on WordPress.org
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

require get_template_directory() . '/includes/tgm/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'one_elementor_register_required_plugins' );

function one_elementor_register_required_plugins() {

	$plugins = array(

		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => __( 'Breadcrumb NavXT', 'one-elementor' ),
			'slug'      => 'breadcrumb-navxt',
			'required'  => false,
			'version'   => '7.3.0', 
		),

		array(
			'name'               => 'Elementor Website Builder',
			'slug'               => 'elementor',
			'required'           => false,
			'version'            => '3.19.0', 
		),

		array(
			'name'               => 'Loco Translate',
			'slug'               => 'loco-translate',
			'required'           => false,
			'version'            => '2.6.6', 
		),
		
		array(
			'name'               => 'MC4WP: Mailchimp for WordPress',
			'slug'               => 'mailchimp-for-wp',
			'required'           => false,
			'version'            => '4.9.11', 
		),
		
		array(
			'name'               => 'Elementor Header & Footer Builder',
			'slug'               => 'header-footer-elementor',
			'required'           => false,
			'version'            => '1.6.25', 
		),
		
		array(
			'name'               => 'Contact Form 7',
			'slug'               => 'contact-form-7',
			'required'           => false,
			'version'            => '5.8.7', 
		),
		
		array(
			'name'               => 'One Click Demo Import',
			'slug'               => 'one-click-demo-import',
			'required'           => false,
			'version'            => '3.2.0', 
		),
		
		
		
	);
	// Config Options
	$config = array(
		'id'           => 'one-elementor',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );
}
