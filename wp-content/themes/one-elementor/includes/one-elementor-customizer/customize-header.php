<?php 
// One Elementor Header Option
$wp_customize->add_section( 'one_elementor_theme_settings', array(
	'capability'            => 'edit_theme_options',
	'priority'              => 1,
	'title'                 => __( 'Theme Default', 'one-elementor' ),
	'description'           => __( 'Theme default Settings', 'one-elementor' ),
	'panel'                 => 'one_elementor_front_option'
) );


$wp_customize->add_setting( 'one_elementor_search_enable',
  array(
    'default'           => false,
    'sanitize_callback'     => 'one_elementor_sanitize_checkbox'
  )
);

$wp_customize->add_control( 'one_elementor_search_enable',
  array(
    'label'         => esc_html__( 'Enable Search Widget', 'one-elementor' ),
    'section'       => 'one_elementor_theme_settings',
    'type'          => 'checkbox',
  )
);


$wp_customize->add_setting( 'one_elementor_post_excerpt', array(
    'capability'            => 'edit_theme_options',
    'default'               => 22,
    'sanitize_callback'     => 'absint'
) );

$wp_customize->add_control( 'one_elementor_post_excerpt', array(
    'label'                 =>  __( 'Post Excerpt Limit', 'one-elementor' ),
	'description'            => __( 'Customize post excerpt limit, global limit is : 22', 'one-elementor' ),
    'section'               => 'one_elementor_theme_settings',
    'settings'              => 'one_elementor_post_excerpt',
    'type'                  => 'text',
) );
