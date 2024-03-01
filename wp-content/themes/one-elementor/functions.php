<?php
/**
 * One Elementor functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package One Elementor
 */

if (!defined('one_elementor_VERSION')) {
	$one_elementor_theme = wp_get_theme();
	define('one_elementor_VERSION', $one_elementor_theme->get('Version'));
}

if ( ! function_exists( 'one_elementor_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function one_elementor_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on one-elementor, use a find and replace
		 * to change 'one-elementor' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'one-elementor', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		
		// Image Size
		add_image_size('one-elementor-blog-thumb', 500, 338, true);
		add_image_size('one-elementor-blog-single-thumb', 770, 380, true);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'one-elementor' ),
			)
		);

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
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'one_elementor_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
		
		/*
		* Enable support for wide alignment class for Gutenberg blocks.
		*/
		add_theme_support( 'align-wide' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );
		
		
	}
endif;
add_action( 'after_setup_theme', 'one_elementor_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function one_elementor_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Default Sidebar', 'one-elementor' ),
			'id'            => 'sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'one-elementor' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 1', 'one-elementor' ),
		'id'            => 'one_elementor_footer_1',
		'description'   => esc_html__( 'Add footer widget here.', 'one-elementor' ),
		'before_widget' => '<div id="%1$s" class="one-elementor-footer__widget widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 2', 'one-elementor' ),
		'id'            => 'one_elementor_footer_2',
		'description'   => esc_html__( 'Add footer widget here.', 'one-elementor' ),
		'before_widget' => '<div id="%1$s" class="one-elementor-footer__widget widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 3', 'one-elementor' ),
		'id'            => 'one_elementor_footer_3',
		'description'   => esc_html__( 'Add footer widget here.', 'one-elementor' ),
		'before_widget' => '<div id="%1$s" class="one-elementor-footer__widget widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'one_elementor_widgets_init' );


function one_elementor_wpdocs_custom_excerpt_length( $length ) {
    $excerptlength = absint(get_theme_mod('one_elementor_post_excerpt',28));
    return $excerptlength;
}
add_filter( 'excerpt_length', 'one_elementor_wpdocs_custom_excerpt_length', 999 );


/**
 * Enqueue scripts and styles.
 */
function one_elementor_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/resource/css/bootstrap.css', array(), '5.1.3' );
	wp_enqueue_style( 'font-awesome-all', get_template_directory_uri() . '/resource/css/font-awesome-all.css', array(), '6.1.1' );
	wp_enqueue_style( 'theme-default', get_template_directory_uri() . '/resource/css/theme-default.css', array(), '1.0.0' );
	wp_enqueue_style( 'one-elementor-style', get_stylesheet_uri(), array(), one_elementor_VERSION );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/resource/js/bootstrap.js', array('jquery'), '5.1.3', true );
	wp_enqueue_script( 'one-elementor-navigation', get_template_directory_uri() . '/resource/js/navigation.js', array(), one_elementor_VERSION, true );
    wp_enqueue_script( 'jquery-masonry' );
	wp_enqueue_script( 'keyboard-nav', get_template_directory_uri() . '/resource/js/keyboard-nav.js', array('jquery'), one_elementor_VERSION, true );
	wp_enqueue_script( 'skip-link-js', get_template_directory_uri() . '/resource/js/skip-link-focus-fix.js', array('jquery'), one_elementor_VERSION, true );
	wp_enqueue_script( 'active', get_template_directory_uri() . '/resource/js/active.js', array('jquery'), one_elementor_VERSION, true );	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'one_elementor_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';

/**
 * Theme Font Load.
 */
require get_template_directory() . '/includes/one-elementor-theme-font.php';


/**
 * Load TGM plugins for required plugins.
 */
require get_template_directory() . '/includes/tgm/required-plugins.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';