<?php
/*
 * Disallow direct access
 */
if (!defined('ABSPATH')) {
    die('Forbidden.');
}
function worklancer_scripts()
{
    // enqueue parent style
    wp_enqueue_style('worklancer-parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'worklancer_scripts');

/**
 * Registers pattern categories.
 *
 * @since worklancer 1.0.0
 *
 * @return void
 */
function worklancer_register_pattern_category()
{

    $patterns = array();

    $block_pattern_categories = array(
        'worklancer-patterns' => array('label' => __('Worklancer Patterns', 'worklancer'))
    );

    $block_pattern_categories = apply_filters('worklancer_block_pattern_categories', $block_pattern_categories);

    foreach ($block_pattern_categories as $name => $properties) {
        if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
            register_block_pattern_category($name, $properties);
        }
    }
}
add_action('init', 'worklancer_register_pattern_category', 9);
