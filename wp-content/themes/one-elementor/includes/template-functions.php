<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
* @package One Elementor
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function one_elementor_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) && ! is_active_sidebar( 'sidebar-2' )  ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'one_elementor_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function one_elementor_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'one_elementor_pingback_header' );


// Define the function to check Elementor activation and usage
function one_elementor_active() {
    // Check if Elementor is active
    if (defined('ELEMENTOR_PATH')) {
        // Check if the current page is built with Elementor
        $post_id = get_queried_object_id();
        if (\Elementor\Plugin::$instance->db->is_built_with_elementor($post_id)) {
            return 'container-elementor';
        }
    }
}
// Hook the function to an appropriate action (e.g., init)
add_action('init', 'one_elementor_active');


// Dashboard Notice
function one_elementor_display_dashboard_notice() {
    ?>
    <div class="notice notice-info is-dismissible">
        <h3 style="margin:0; padding:10px"><?php _e( 'Thanks for the active (One Elementor) theme. Please watch video & documenation to setup full theme.', 'one-elementor' ); ?></h3>
        <p style="margin: 0; padding: 10px;"><a href="https://codeglim.com/docs/one-elementor" class="button button-primary" target="_blank"><?php _e( 'Video & Documenation', 'one-elementor' ); ?></a></p>
    </div>
    <?php
}
add_action( 'admin_notices', 'one_elementor_display_dashboard_notice' );


// Demo Import Notice
function one_elementor_display_demo_import_notice() {
    if ( is_admin() && isset( $_GET['page'] ) && $_GET['page'] === 'one-click-demo-import' ) {
        ?>
        <div class="notice notice-info is-dismissible">
            <h3 style="margin:0; padding:10px"><?php _e( 'Please Download Demo Data before importing.', 'one-elementor' ); ?></h3>
            <p style="margin: 0; padding: 10px;"><a href="https://codeglim.com/docs/one-elementor/#step-4" class="button button-primary" target="_blank"><?php _e( 'Download Demo Data', 'one-elementor' ); ?></a></p>
        </div>
        <?php
    }
}
add_action( 'admin_notices', 'one_elementor_display_demo_import_notice' );




